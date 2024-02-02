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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/AboutUs.css">
    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>About Us</title>
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
                <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] && $_SESSION['role'] === 'admin'): ?>
                    <div class="dashboard-link">
                    <li><a href="server/dashboard.php">Dashboard</a></li>
                    </div>
                <?php endif; ?>
                </ul>
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
        <div class="main-text">
            <h1>Every Little Bit <i>Counts</i>.</h1>
            <p>Ending plastic waste, one healthy smile at a time.</p>
        </div>
    </main>

    <div class="vegan">
        <p>Our freshly-pressed tablets are 100% gluten-free, vegan, and cruelty-free — without any harsh chemicals.
            Here's what we put inside to give you a healthier, brighter smile.</p>
    </div>

    <section id="ingredients">
        <div class="first-ing">
            <div class="list">
                <div class="x-text">
                    <h4>Xylitol</h4>
                    <p>Repels cavity-causing bacteria and is naturally sweet.</p>
                </div>
                <div class="x-pic">
                    <img src="assets/images/xylitol.jpg" alt="image">
                </div>
            </div>

            <div class="list">
                <div class="e-text">
                    <h4>Erythritol</h4>
                    <p>Prevents cavity-causing bacteria from making a home in your teeth.</p>
                </div>
                <div class="e-pic">
                    <img src="assets/images/erythritol.jpg" alt="image">
                </div>
            </div>

            <div class="list">
                <div class="b-text">
                    <h4>Natural Berry Flavor</h4>
                    <p>Mildly sweet hints of berries, cherries, and Mandarin orange.</p>
                </div>
                <div class="b-pic">
                    <img src="assets/images/mint.jpg" alt="image">
                </div>
            </div>
        </div>

        <div class="second-ing">
            <div class="list">
                <div class="c-text">
                    <h4>Calcium Carbonate</h4>
                    <p>Acts as a mild abrasive that helps clean and polish your teeth.</p>
                </div>
                <div class="c-pic">
                    <img src="assets/images/dicalcium.jpg" alt="image">
                </div>
            </div>

            <div class="list">
                <div class="s-text">
                    <h4>Sodium Cocoyl Glutamate</h4>
                    <p>This helps your bites foam up and clean your teeth.</p>
                </div>
                <div class="s-pic">
                    <img src="assets/images/odium.jpg" alt="image">
                </div>
            </div>

            <div class="list">
                <div class="sb-text">
                    <h4>Sodium Bicarbonate</h4>
                    <p>This helps your bites foam up and clean your teeth.</p>
                </div>
                <div class="sb-pic">
                    <img src="assets/images/sodium.jpg" alt="image">
                </div>
            </div>
        </div>

        <div class="third-ing">
            <div class="list">
                <div class="gg-text">
                    <h4>Guar Gum</h4>
                    <p>Made from legumes, this<br> helps keep our Bits together.</p>
                </div>
                <div class="gg-pic">
                    <img src="assets/images/kaolin.jpg" alt="image" id="img-gg">
                </div>
            </div>

            <div class="list">
                <div class="nh-text">
                    <h4>Nano-Hydroxyapatite</h4>
                    <p>Helps fight sensitivity and remineralizes your tooth's enamel.</p>
                </div>
                <div class="nh-pic">
                    <img src="assets/images/nhap.jpg" alt="image" id="img-nh">
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="defense">
            <h1>In defense of our bodies and our planet.</h1>
        </div>
        <div class="earth">
            <div class="earth-txt">
                <h1>Because it’s the earth.</h1>
                <p>We believe the earth is not ours to keep, but to protect for future generations. We believe that
                    animals are not ours to test on or to use as ingredients. By using only recyclable, biodegradable or
                    compostable materials, we’re able not to add to our already overflowing landfills and polluted
                    oceans — and we’re able to replace products that would otherwise end up there.</p>
            </div>
            <div class="earth-pic">
                <img src="assets/images/bite.jpg" alt="image">
            </div>
        </div>

        <div class="smiles">
            <div class="smiles-pic">
                <img src="assets/images/lab.jpg" alt="image">
            </div>
            <div class="smiles-txt">
                <h1>Cleaner smiles.</h1>
                <p>When’s the last time you read the label on your toothpaste? Cheap fillers, harsh chemicals, and
                    artificial dyes and flavors have no place in our daily routines. So we took out the bad and left
                    only the good, and then pressed it all into our small but mighty Bits! Because something you do
                    twice a day, every day, should be made with ingredients that are good for you.</p>
            </div>
        </div>
    </div>
    <div class="location" id="location">
        <div class="location-txt">
            <p>Find us here!</p>
        </div>
        <div class="iframe">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46940.21003858838!2d21.12370783938247!3d42.666374766726896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ee605110927%3A0x9365bfdf385eb95a!2sPristina!5e0!3m2!1sen!2s!4v1671658164274!5m2!1sen!2s"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <br><br><br><br>

    <footer>
        <hr id="hr1">
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