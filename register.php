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

    <footer>
        <hr id="hr1">
        <div class="footer-container">
            <div class="row">
                <div class="footer-col">
                    <h3>Shop</h3>
                    <ul>
                        <li><a href="shop.php#oral-care-name">Oral Care</a></li><br><br>
                        <li><a href="shop.php#personal-care-name">Personal Care</a></li><br><br>
                        <li><a href="shop.php#bundles-name">Bundles</a></li><br><br>
                        <li><a href="shop.php#gift-sets-name">Gift Sets</a></li><br><br>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>About</h3>
                    <ul>
                        <li><a href="homepage.php#bestsellers">Bestsellers</a></li><br><br>
                        <li><a href="aboutus.php#ingredients">Ingredients</a></li><br><br>
                        <li><a href="aboutus.php#location">Location</a></li><br><br>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Follow Us</h3>
                    <div class="socials">
                        <a href="https://www.facebook.com/"><i class="fa-brands fa-square-facebook"></i></a>
                        <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://twitter.com/?lang=en"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                    <br><br>
                    <div class="footer-col">
                            <div class="fo-pic">
                            <img src="https://cdn.shopify.com/s/files/1/1864/2187/files/CrueltyFree_131313.svg?v=1665790419" alt="image">
                            <img src="https://cdn.shopify.com/s/files/1/1864/2187/files/CF_Partner_2022_2C.svg?v=1665790420" alt="image">
                            <img src="https://cdn.shopify.com/s/files/1/1864/2187/files/BCorpCertified.svg?v=1665618672" alt="image">
                        </div>
                    </div>
                </div>
            </div>               
        </div>
        <hr>
        <div class="privacy">
            <div class="rights">
                <p>© 2022 Bite. All Rights Reserved.</p>
            </div>
            <div class="email">
                    <p>hello@bitetoothpastebits.com</p>
            </div>
        </div>
    </footer>

    <script src="assets/javascript/register.js"></script>

    <script>
        const menu = document.querySelector('.menu')
        const close = document.querySelector('.close')
        const nav = document.querySelector('#home')

        menu.addEventListener('click', () => {
            nav.classList.add('open-nav');
            menu.style.display = 'none';
        })

        close.addEventListener('click', () => {
            nav.classList.remove('open-nav');
            menu.style.display = 'block';
        })
    </script>
</body>
</html>