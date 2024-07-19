<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Payment Completed</title>
<style>
    body {
        font-family: 'Roboto', sans-serif; /* Google's Roboto font */
        background-color: #fdf2e9; /* Light peach background */
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .container {
        text-align: center;
        background-color: #ffffff; /* White background */
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); /* Soft shadow */
        max-width: 500px;
        width: 100%;
    }
    h1 {
        color: #4285f4; /* Google's blue color */
        margin-bottom: 20px;
    }
    img {
        max-width: 100%;
        height: auto;
        margin-top: 20px;
        border-radius: 8px; /* Rounded corners for the image */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    }
    .footer {
        margin-top: 20px;
        font-size: 14px;
        color: #666666;
    }
    .button {
        display: inline-block;
        padding: 10px 20px;
        margin-top: 20px;
        background-color: #4285f4; /* Google's blue color */
        color: #ffffff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }
    .button:hover {
        background-color: #0057b5; /* Darker shade on hover */
    }
</style>
</head>
<body>
    <div class="container">
        <h1>Payment Completed</h1>
        <img src="img/12.gif.gif" alt="Payment Completed GIF">
        <p class="footer">Thank you for using our payment service.</p>
        <a href="home.php" class="button">Done</a>
    </div>
</body>
</html>


