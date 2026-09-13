<?php
session_start();
// Yahan tumhara login/register ka backend process aayega
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account - Velvet Bite</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=1200&q=80') no-repeat center center fixed;
            background-size: cover;
        }
        /* Box ki width/height wohi hai, bas transparency wapas laadi hai taake peeche se image dikhe */
        .auth-container {
            width: 100%;
            max-width: 400px;
            background: rgba(0, 0, 0, 0.75); /* Yahan opacity kam kar di hai taake peeche se salad/image nazar aaye */
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.4);
            text-align: center;
            box-sizing: border-box;
        }
        .auth-container h2 {
            color: #fff;
            margin-bottom: 8px;
            font-size: 24px;
        }
        .auth-container p {
            color: #ddd;
            margin-bottom: 25px;
            font-size: 14px;
        }
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        .form-group label {
            color: #fff;
            font-weight: 600;
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
        }
        .form-group input {
            width: 100%;
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid #ddd;
            background: rgba(255, 255, 255, 0.9);
            font-size: 16px;
            box-sizing: border-box;
            color: #333;
        }
        .form-group input:focus {
            outline: none;
            border-color: #ff7b00;
        }
        .auth-btn {
            width: 100%;
            background-color: #ff7b00;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 30px;
            font-weight: bold;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .auth-btn:hover {
            background-color: #e66e00;
        }
        .auth-switch {
            text-align: center;
            margin-top: 20px;
            color: #ddd;
            font-size: 14px;
        }
        .auth-switch a {
            color: #ff7b00;
            text-decoration: none;
            font-weight: bold;
            margin-left: 5px;
        }
        .auth-switch a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="auth-container">
        <h2>Welcome to Velvet Bite</h2>
        <p>Please login to continue</p>
        
        <form action="auth_process.php" method="POST">
            <div class="form-group">
                <label>Email Address:</label>
                <input type="email" name="email" placeholder="example@email.com" required>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" placeholder="Enter your password" required>
            </div>
            
            <button type="submit" class="auth-btn">Create Account</button>
        </form>

        <div class="auth-switch">
            Already have an account?<a href="login.php">Login</a>
        </div>
    </div>

</body>
</html>