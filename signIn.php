<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fdf2e9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 400px;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        .form-group input {
            width: calc(100% - 20px); /* Adjusted to account for padding */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            color: #333;
        }

        .form-group button {
            width: 100%;
            padding: 12px;
            background-color: #4285f4; /* Google blue */
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-group button:hover {
            background-color: orange; /* Darker shade on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sign In</h1>
        <form id="payment-form" action="./signvalidate.php" method="POST">
        <div class="form-group">
                <label for="i1">User Name</label>
                <?php
                    if($_SESSION['name_err']){
                        echo "<p style='color:red;margin-top:0px;margin-bottom:2px'>UserName already in use</p>";
                        $_SESSION['name_err']=false;
                    }
                ?>
                <input id="i1" type="text" name='name'placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="i1">Email Id</label>
                <?php
                    if($_SESSION['mail_same']){
                        echo "<p style='color:red;margin-top:0px;margin-bottom:2px'>E-MAIL already in use</p>";
                        $_SESSION['mail_same']=false;
                    }
                    if($_SESSION['mail_err']){
                        echo "<p style='color:red;margin-top:0px;margin-bottom:2px'>Invalid E-MAIL</p>";
                        $_SESSION['mail_err']=false;
                    }
                ?>
                <input id="i1" type="email" name='mail'placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="i2">Password</label>
                <input id="i2" type="password" name='pwd'placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <button type="submit">Sign In</button>
            </div>
        </form>
    </div>
</body>
</html>
