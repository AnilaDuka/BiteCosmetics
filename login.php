<?php
session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
    header("Location: HomePage.php");
    exit();
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="assets/css/Register-Login.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
    <header>
        <div class="logobite">
            <a href="homepage.php" id="bite">
                <h2>Bite</h2>
            </a>
        </div>
    </header>

    <div class="content-box">

        <div class="data">
            <p class="reg-txt">Log in</p>
            <form action="server/loginController.php" method="post">
            <input type="email" class="cred-input" id="email" placeholder="Email" name="email"> <br><br>
            <input type="password" class="cred-input" id="password" placeholder="Password" name="password"> <br><br>
            <br><br>
            <input type="submit" value="Log in" class="cred-input" id="submit">
            </form>
            <p>Don't have an account? <a href="register.php">Click here</a> to register.</p>
        </div>
    </div>

    <script src="assets/script/login.js"></script>
</body>
</html>