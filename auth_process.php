<?php
session_start();

$host = "localhost";
$username = "root";
$password = "";
$database = "restaurant_db";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Automatically 'users' table create karne ki query agar pehle se na ho
$create_table_sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$conn->query($create_table_sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $password_input = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password_input, $row['password'])) {
            $_SESSION['user_email'] = $email;
            header("Location: index.php");
            exit();
        } else {
            echo "<script>alert('Ghalat password! Dobara koshish karein.'); window.location.href='login.php';</script>";
        }
    } else {
        $hashed_password = password_hash($password_input, PASSWORD_DEFAULT);
        $insert_sql = "INSERT INTO users (email, password) VALUES ('$email', '$hashed_password')";
        
        if ($conn->query($insert_sql) === TRUE) {
            $_SESSION['user_email'] = $email;
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
$conn->close();
?>