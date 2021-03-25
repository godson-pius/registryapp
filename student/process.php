<?php
require_once("config.php");



    $email = $_POST['email'];
    $pass = $_POST['password'];
    $check = $_POST['check'];


    $query ="SELECT * FROM students WHERE Email_address = '$email' && Password = '$pass'";
    $result = mysqli_query($link,$query);
    if($result){
        
        header("location:dashboard.php"); 
    } 
    
    else{

        header("Location: index.php");    
    }



?>