<?php
session_start();

if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Home</title>
</head>

<body>
    <header>
        <div class="navbar">
            <nav id="home">
                <svg class="close" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 2C10.0222 2 8.08879 2.58649 6.4443 3.6853C4.79981 4.78412 3.51809 6.3459 2.76121 8.17317C2.00433 10.0004 1.8063 12.0111 2.19215 13.9509C2.578 15.8907 3.53041 17.6725 4.92894 19.0711C6.32746 20.4696 8.10929 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 10.6868 21.7413 9.38642 21.2388 8.17317C20.7363 6.95991 19.9997 5.85752 19.0711 4.92893C18.1425 4.00035 17.0401 3.26375 15.8268 2.7612C14.6136 2.25866 13.3132 2 12 2V2ZM14.71 13.29C14.8037 13.383 14.8781 13.4936 14.9289 13.6154C14.9797 13.7373 15.0058 13.868 15.0058 14C15.0058 14.132 14.9797 14.2627 14.9289 14.3846C14.8781 14.5064 14.8037 14.617 14.71 14.71C14.617 14.8037 14.5064 14.8781 14.3846 14.9289C14.2627 14.9797 14.132 15.0058 14 15.0058C13.868 15.0058 13.7373 14.9797 13.6154 14.9289C13.4936 14.8781 13.383 14.8037 13.29 14.71L12 13.41L10.71 14.71C10.617 14.8037 10.5064 14.8781 10.3846 14.9289C10.2627 14.9797 10.132 15.0058 10 15.0058C9.86799 15.0058 9.73729 14.9797 9.61543 14.9289C9.49357 14.8781 9.38297 14.8037 9.29 14.71C9.19628 14.617 9.12188 14.5064 9.07111 14.3846C9.02034 14.2627 8.99421 14.132 8.99421 14C8.99421 13.868 9.02034 13.7373 9.07111 13.6154C9.12188 13.4936 9.19628 13.383 9.29 13.29L10.59 12L9.29 10.71C9.1017 10.5217 8.99591 10.2663 8.99591 10C8.99591 9.7337 9.1017 9.4783 9.29 9.29C9.47831 9.1017 9.7337 8.99591 10 8.99591C10.2663 8.99591 10.5217 9.1017 10.71 9.29L12 10.59L13.29 9.29C13.4783 9.1017 13.7337 8.99591 14 8.99591C14.2663 8.99591 14.5217 9.1017 14.71 9.29C14.8983 9.4783 15.0041 9.7337 15.0041 10C15.0041 10.2663 14.8983 10.5217 14.71 10.71L13.41 12L14.71 13.29Z"
                        fill="black"></path>
                </svg>
                <ul>
                    <li><a href="HomePage.php">Home</a></li>
                    <li><a href="Shop.php">Shop</a></li>
                    <li><a href="AboutUs.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
                <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] && $_SESSION['role'] === 'admin'): ?>
                    <div class="dashboard-link">
                        <a href="server/dashboard.php">Dashboard</a>
                    </div>
                <?php endif; ?>
            </nav>
        </div>
        <div class="logobite">
            <a href="homepage.php" id="bite">
                <h2>Bite</h2>
            </a>
        </div>
        <div class="burger">
            <a id="log" href="<?php echo isset($_SESSION['logged_in']) && $_SESSION['logged_in'] ? 'server/logout.php' : 'login.php'; ?>">
            <?php
            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
                echo 'Logout (' . $_SESSION['name'] . ')';
            } else {
                echo 'LogIn/Register';
            }
            ?>
            </a>
            <svg class="menu" viewBox="0 0 100 80" width="40" height="40">
                <rect width="100" height="20"></rect>
                <rect y="30" width="100" height="20"></rect>
                <rect y="60" width="100" height="20"></rect>
            </svg>
        </div>
    </header>
    <main>
        <div class="titlebutton">
            <div class="packages">
                <p>The best things come in zero-waste packages.</p>
            </div>
            <a href="Shop.php#gift-sets-name"><button id="gift">Shop Gift Sets</button></a>
        </div>
    </main>

    <div class="container">
        <div class="products">
            <div class="bar">
                <img src="assets/images/tooth.jpg" alt="img" id="img1">
                <h5>Toothpaste Bits</h5>
                <p>FROM $8 / MONTH</p>
                <a href="Shop.php#toothpaste"><button class="shop">Shop Now</button></a>
            </div>
            <div class="bar">
                <img src="assets/images/balm.jpg" alt="img" id="img2">
                <h5>Body balm</h5>
                <p>FROM $7 / MONTH</p>
                <a href="Shop.php#balm"><button class="shop">Shop Now</button></a>
            </div>
            <div class="bar">
                <img src="assets/images/bar.jpg" alt="img" id="img3">
                <h5>Cleansing Bar</h5>
                <p>FROM $3 / MONTH</p>
                <a href="Shop.php#balm"><button class="shop">Shop Now</button></a>
            </div>
            <div class="bar">
                <img src="assets/images/deo.jpg" alt="img" id="img4">
                <h5>Deodorant</h5>
                <p>FROM $8 / MONTH</p>
                <a href="Shop.php#balm"><button class="shop">Shop Now</button></a>
            </div>
            <div class="bar">
                <img src="assets/images/gel.jpg" alt="img" id="img5">
                <h5>Whitening Gel</h5>
                <p>FROM $5 / MONTH</p>
                <a href="Shop.php#toothpaste"><button class="shop">Shop Now</button></a>
            </div>
        </div>
    </div>

    <div class="second-container">
        <div class="slider">
            <div class="slides" id="bestsellers">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">

                <div class="slide first">
                    <img src="assets/images/sl1.jpg" alt="image" id="img6">
                </div>
                <div class="slide">
                    <img src="assets/images/sl2.jpg" alt="image" id="img7">
                </div>
                <div class="slide">
                    <img src="assets/images/sl3.jpg" alt="image" id="img8">
                </div>
                <div class="slide">
                    <img src="assets/images/sl4.jpg" alt="image" id="img9">
                </div>

                <div class="nav-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
            </div>
            <div class="nav-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
        </div>

        <div class="heart">
            <h1>At the heart of Bite,</h1>
            <p>we want to do better. That means asking ourselves <br>every day, ‟How we can improve?” Whether it’s <br>
                mindlessly tossing out an empty toothpaste tube or<br> glossing over the ingredients list, small daily
                actions<br> can shape the future of our planet. When we are<br> better to ourselves and the earth, we
                are one step <br>closer to a healthier and plastic-free world.</p>
        </div>
    </div>
    <div class="tablets">
        <h1>About our tablets</h1>
    </div>
    <div class="section">
        <div class="whitening">
            <h4>Naturally whitening</h4>
            <p>We use natural ingredients that are known to sparkle your smile</p>
        </div>
        <div class="whitening-pic">
            <img src="assets/images/brushing.jpg" alt="image" id="img10">
        </div>
    </div>
    <div class="section two">
        <div class="whitening-pic">
            <img src="assets/images/brush.jpg" alt="image">
        </div>
        <div class="whitening">
            <h4>Clean minty taste</h4>
            <p>Our mint flavoring is custom made for us with clean, natural ingredients</p>
        </div>
    </div>
    <div class="section three">
        <div class="whitening">
            <h4>Magically foamy</h4>
            <p>Our Bits foam perfectly whether you're using an electric toothbrush or manual</p>
        </div>
        <div class="whitening-pic">
            <img src="assets/images/foam.jpg" alt="image">
        </div>
    </div>

    <footer>
        <div class="footer-container">
            <div class="row">
                <div class="footer-col">
                    <h3>Shop</h3>
                    <ul>
                        <li><a href="Shop.php#oral-care-name">Oral Care</a></li><br><br>
                        <li><a href="Shop.php#personal-care-name">Personal Care</a></li><br><br>
                        <li><a href="Shop.php#bundles-name">Bundles</a></li><br><br>
                        <li><a href="Shop.php#gift-sets-name">Gift Sets</a></li><br><br>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>About</h3>
                    <ul>
                        <li><a href="HomePage.php#bestsellers">Bestsellers</a></li><br><br>
                        <li><a href="AboutUs.php#ingredients">Ingredients</a></li><br><br>
                        <li><a href="AboutUs.php#location">Location</a></li><br><br>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Follow Us</h3>
                    <div class="socials">
                        <a href="https://www.facebook.com/" target="_blank"><i
                                class="fa-brands fa-square-facebook"></i></a>
                        <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://twitter.com/?lang=en" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                    <br><br>
                    <div class="footer-col">
                        <div class="fo-pic">
                            <img src="https://cdn.shopify.com/s/files/1/1864/2187/files/CrueltyFree_131313.svg?v=1665790419"
                                alt="image">
                            <img src="https://cdn.shopify.com/s/files/1/1864/2187/files/CF_Partner_2022_2C.svg?v=1665790420"
                                alt="image">
                            <img src="https://cdn.shopify.com/s/files/1/1864/2187/files/BCorpCertified.svg?v=1665618672"
                                alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="privacy">
            <div class="rights">
                <p>© 2023 Bite. All Rights Reserved.</p>
            </div>
            <div class="email">
                <p>hello@bitetoothpastebits.com</p>
            </div>
        </div>
    </footer>

    <script src="assets/script/home.js" type="text/javascript"></script>
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