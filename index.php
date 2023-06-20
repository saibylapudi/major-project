<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar">
        <div class="logo">
            <h1>Logo</h1> 
        </div>
        <div class="menu_open">
            <i class='bx bx-menu'></i>
        </div> 
        <ul class="links">
            <div class="menu_close">
                <i class='bx bx-x'></i>
            </div>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Blogs</a></li>

            <?php if(isset($_SESSION["id"])): ?>
                <li><a href="./admin-panel/blogs/index.php">Create a Blog</a></li>
                <li><a href="./logout.php">LOGOUT</a></li>
                <?php else: ?>
                    <li><a href="./login.php">Login</a></li>
                <?php endif; ?>

        </ul>
    </nav>

    <!-- BANNER -->
    <div class="slide-container">
        <div class="slide">
            <img src="./images/italy.jpg" alt="">
            <div class="caption">Italy</div>
        </div>
        <div class="slide">
            <img src="./images/banner2.jpg" alt="">
            <div class="caption">France</div>
        </div>
        <div class="slide">
            <img src="./images/banner3.jpg" alt="">
            <div class="caption">Germany</div>
        </div>
        <div class="slide">
            <img src="./images/banner4.jpg" alt="">
            <div class="caption">Las Vegas</div>
        </div> 
        <span class="arrow prev" onclick="controller(-1)">&#10094;</span>
        <span class="arrow next" onclick="controller(1)">&#10095;</span>
    </div>

    <div class="Blogs-section">
        <div class="container">
            <div class="Blogs">
                <div class="heading">
                    <h1>Blogs</h1>
                    <h4>Places and about them</h4>
                </div>
                <div class="cards">
                    <div class="card">
                        <img src="./images/italy.jpg" alt="">
                        <p class="tagline">Italy<span></span></p>
                        <h4 class="title">Lorem ipsum dolor sit</h4>
                        <p class="content">Italy is a country in Southern and Western Europe. Located in the middle of the Mediterranean Sea, it consists of a peninsula delimited by the Alps and surrounded by several islands</p>
                        <a href="./blog.html">Read more</a>
                    </div>
                    <div class="card">
                        <img src="./images/banner2.jpg" alt="">
                        <p class="tagline">Germany<span></span></p>
                        <h4 class="title">Lorem ipsum dolor sit</h4>
                        <p class="content">Germany is a country in Central Europe. It is the second-most populous country in Europe after Russia, and the most populous member state of the European Union. </p>
                        <a href="./blog.html">Read more</a>
                    </div>
                    <div class="card">
                        <img src="./images/banner3.jpg" alt="">
                        <p class="tagline">France<span></span></p>
                        <h4 class="title">Lorem ipsum dolor sit</h4>
                        <p class="content">France  is a country located primarily in Western Europe. It also includes overseas regions and territories in the Americas and the Atlantic, Pacific and Indian Oceans</p>
                        <a href="./blog.html">Read more</a>
                    </div>
                    <div class="card">
                        <img src="./images/japan.jpg" alt="">
                        <p class="tagline">Japan<span></span></p>
                        <h4 class="title">Lorem ipsum dolor sit</h4>
                        <p class="content">Japan is an island country in East Asia. It is situated in the northwest Pacific Ocean and is bordered on the west by the Sea of Japan.Japan is a part of the Ring of Fire</p>
                        <a href="./blog.html">Read more</a>
                    </div>
                    <div class="card">
                        <img src="./images/russia.jpg" alt="">
                        <p class="tagline">Russai<span></span></p>
                        <h4 class="title">Lorem ipsum dolor sit</h4>
                        <p class="content">Russia is a transcontinental country spanning Eastern Europe and Northern Asia. It is the largest country in the world. The country's capital and largest city is Moscow.</p>
                        <a href="./blog.html">Read more</a>
                    </div>
                    <div class="card">
                        <img src="./images/dubai.jpg" alt="">
                        <p class="tagline">Dubai<span></span></p>
                        <h4 class="title">Lorem ipsum dolor sit</h4>
                        <p class="content">Dubai  is the most populous city in the United Arab Emirates (UAE) and the capital of the Emirate of Dubai, the most populated of the 7 emirates of the United Arab Emirates.</p>
                        <a href="./blog.html">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href='#'>about us</a></li>
                        <li><a href='#'>our services</a></li>
                        <li><a href='#'>privacy policy</a></li>
                        <li><a href='#'>affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>About</h4>
                    <ul>
                        <li><a href='#'>Our story</a></li>
                        <li><a href='#'>Benefits</a></li>
                        <li><a href='#'>Team</a></li>
                        <li><a href='#'>careers</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href='#'>Terms & Conditions</a></li>
                        <li><a href='#'>Privacy policy</a></li>
                        <li><a href='#'>Terms of use</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href='#'><i class="fab fa-facebook-f"></i></a>
                        <a href='#'><i class="fab fa-twitter"></i></a>
                        <a href='#'><i class="fab fa-instagram"></i></a>
                        <a href='#'><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="./js/script.js"></script>
</body>
</html>