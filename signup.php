<?php
    
    require('./config.php');
    $msg = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $gender = $_POST["gender"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];

        $userid = md5(substr($username,0,3).substr($phone,0,3).random_int(10000,99999));
        //echo $userid;
        //File upload
        $target = './db-images/users/';
        $filename = $_FILES["image"]["name"];
        $filetype = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        $target_file = $target.basename(md5("userid".$filename).".".$filetype);
        $file = md5("userid".$filename).".".$filetype;

        do{
            if(empty($username) || empty($email) || empty($phone) || empty($gender) || empty($password) || empty($file) || empty($cpassword)){
                $msg = "All Files are Required";
            }
            elseif($password != $cpassword){
                $msg = "password should match";
            }
            else{
                if($filetype == "jpg" || $filetype == "jpeg" || $filetype == "png"){
                    if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_file)){
                        $sql = mysqli_query($db, "INSERT INTO `users`(`name`, `phone`, `email`, `gender`, `password`, `image`, `user id`) VALUES ('$username','$phone','$email','$gender','$password','$file','$userid')");
                        if($sql){
                            $mgs = "Success";
                            header("Location: login.php");
                            exit;
                        }
                        else{
                            $msg = "Something went wrong" . mysqli_error($db);
                        }
                    }
                    else{
                        $msg = "Image not Moved";
                    }
                }
                else{
                    $msg = "Image Not Accepted";
                }
            }
        }while(false);
        
    }

?>

<!-- if(empty($username) || empty($email) || empty($phone) || empty($gender) || empty($password) || empty($cpassword)){
            $msg = "All fields are required";
        }
        elseif($password != $cpassword){
            $msg = "Password should match";
        }
        else{
           $sql = mysqli_query($db, "INSERT INTO `users`(`name`, `phone`, `email`, `gender`, `password`, `image`, `user id`) VALUES ('$username','$phone','$email','$gender','$password','image','$userid')");
             -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Sign Up</title>
    <link rel="stylesheet" href="./css/forms.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <h1>Sign Up</h1>
      <!--  <div class="message">
            <h4><strong>Error Message</strong></h4>
        </div>-->
        <?php

            if(!empty($msg)){
                echo "
                    <div class='message'>
                        <h4><strong>$msg</strong></h4>
                    </div>
                ";
            }

        ?>
        <form action="#" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="Username" name="username">
            <input type="email" placeholder="Email" name="email">
            <input type="text" placeholder="Phone" name="phone">
            <div class="gender">
                <div>
                    <input type="radio" name="gender" value="Male">Male
                </div>
                <div>
                    <input type="radio" name="gender" value="Female">Female
                </div>
            </div>
            Upload your image<input type="file" name="image">
            <input type="password" placeholder="password" name="password">
            <input type="password" placeholder="Re-Enter Password" name="cpassword">
            <button type="submit">Sign Up</button>
        </form>
        
        <div class="member">
            Already a member? <a href="./login.php">
                Login Now
            </a>
            <div class="member">
                <a href="./index.php">
                    Back to Home
                </a>
            </div>
        </div>
    </div>
</body>
</html>