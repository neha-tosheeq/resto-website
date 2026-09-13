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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $conn->real_escape_string($_POST['customer_name']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $address = $conn->real_escape_string($_POST['address']);
    
    $item_names = $_POST['item_name'];
    $quantities = $_POST['quantity'];

    for ($i = 0; $i < count($item_names); $i++) {
        $item = $conn->real_escape_string($item_names[$i]);
        $qty = intval($quantities[$i]);

        if (!empty($item) && $qty > 0) {
            $sql = "INSERT INTO orders (item_name, quantity, customer_name, phone, address) 
                    VALUES ('$item', '$qty', '$customer_name', '$phone', '$address')";
            $conn->query($sql);
        }
    }

    echo "<script>alert('Order successfully place ho gaya hai!'); window.location.href='index.php';</script>";
}

$conn->close();
?>