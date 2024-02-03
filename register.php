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
    <title>Register</title>
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
            <p class="reg-txt">Register</p>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <input type="text" class="cred-input" id="first-name" placeholder="Name" name="name"> <br><br>
                <input type="email" class="cred-input" id="email" placeholder="Email" name="email"> <br><br>
                <input type="password" class="cred-input" id="password" placeholder="Password" name="password"> <br><br>
                <input type="submit" value="Register" class="cred-input" id="submit" name="registerBtn">
            </form>
            <?php include_once('server/registerController.php') ?>
        </div>
        <a href="shop.php"><p class="return">Return to Store</p></a>
        <p>Already have an account? <a href="login.php">Click here</a> to log in.</p>
    </div>

    <script src="assets/javascript/register.js"></script>
</body>
</html>