<?php
session_start();
require_once '../db.php';
$error = [];

if (isset($_POST['submit'])) {
    $email = trim(htmlentities($_POST['email']));
    $password = trim(htmlentities($_POST['password']));
    $encpass=md5($password);

   
    if (empty($email)) {
        $error["emailErr"] = "*Requird";
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    if (empty($password)) {
        $error["passwordErr"] = "*Requird";
    }


    $query = "SELECT name,email,password FROM users WHERE email = '$email' AND password='$encpass'";
    $result = mysqli_query($conn,$query);

  
    if(mysqli_num_rows($result) > 0 ){
     header("location:../admin/index.php");
    $user = mysqli_fetch_assoc($result);
    unset($user['password']);
    $_SESSION['login-user']=$user;

    }else{
        $_SESSION['error']=$error;
        header("location: login.php");
    }
}
