<?php
    // ('hostname','username','password','database')
    $db = mysqli_connect('localhost',"root","","my blog");
    if($db){
        // echo "success";
    
    }
    else{
        die("Failed".mysqli_connect_error());
    }
?>