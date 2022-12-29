<?php
session_start();
require_once "db.php";

$error = [];

if (isset($_POST['submit'])) {
    $email = trim(htmlentities($_POST['email']));
    /* 

    $selectQuery = "SELECT email FROM subscribe WHERE email = '$email' ";
    $selectResult = mysqli_query($conn,$selectQuery);

  
    if(mysqli_num_rows($selectResult) > 0 ){
        $error["emailErr"] = "Email Already Existed! Enter Another Email";
       
        $_SESSION['error'] = $error;
        header("location: index.php");
        exit(); */
        
    if (empty($error)) {
            $query = "INSERT INTO subscribe (email) VALUES ('$email')";
        
            $result = mysqli_query($conn, $query);
    
            if ($result) {
                $_SESSION['success']="Your Subscribetion Done!";
                header("location: index.php");
            }
    
        }
    }
