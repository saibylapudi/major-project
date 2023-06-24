<?php

     session_start();

     if(isset($_GET["id"])){
        $id = $_GET["id"];
     }

     require_once('./config.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs - June</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Box Icons Link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <!----------- Navbar --------------->
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
            <li><a href="./index.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="./index.php#blogs">Blogs</a></li>

            <?php if(isset($_SESSION["id"])): ?>
                <li><a href="./admin-panel/blogs/index.php">Create a Blog</a></li>
                <li><a href="./logout.php" class="logout" onclick='return checklogout()'>LOGOUT</a></li>
            <?php else: ?>
                <li><a href="./login.php">Login</a></li> 
            <?php endif; ?>

        </ul>
    </nav>


    <!------------------ SINGLE BLOG  ---------------->
    <div class="single-blog">
        <div class="container">

            <?php
                 $blog = mysqli_query($db, "SELECT * FROM `blogs` WHERE id=$id");

                 if(!$blog){
                    die("Query Failed...".mysqli_error($db));
                 }
                 else{
                    $row = mysqli_fetch_assoc($blog);
                    // Original date string
                    $originl_date = $row['create date'];

                    // convert the original data string to a DateTime object
                    $originl_date = new DateTime($originl_date);
                    
                    // format the DateTime object into the desired string format
                    $new_date = $originl_date->format("d-m-y");


                    echo "<h1>$row[title]</h1>
                    <img src='./db-images/blogs/$row[image]' alt=''>
                    <div class='description'> $row[description]</div>
                    <div class='author'>
                        <h2>Blog by : $row[author]</h2>
                        <h3>Posted on : 21-06-2023</h3>
                    </div>
                ";
                 }

            ?>

        </div>
    </div>



    <!---------- Footer -------------->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href='#'>about us</a></li>
                        <li><a href='#'>our services</a></li>
                        <li><a href='#'>privacy policy</a></li>
                        <li><a href='#'>affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href='#'>FAQ</a></li>
                        <li><a href='#'>shipping</a></li>
                        <li><a href='#'>returns</a></li>
                        <li><a href='#'>order status</a></li>
                        <li><a href='#'>payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>online shop</h4>
                    <ul>
                        <li><a href='#'>watch</a></li>
                        <li><a href='#'>bag</a></li>
                        <li><a href='#'>shoes</a></li>
                        <li><a href='#'>dress</a></li>
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

    <!-- Custom JS -->
    <script src="./js/script.js"></script>

</body>

</html>
