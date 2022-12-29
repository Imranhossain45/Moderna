<?php
session_start();
require_once '../db.php';



$error = [];

if (isset($_POST['submit'])) {
    $name = trim(htmlentities($_POST['name']));
    $email = trim(htmlentities($_POST['email']));
    $password = trim(htmlentities($_POST['password']));
    $md5 = md5($password);
    
    if (empty($name)) {
        $error["nameErr"] = "*Requird";
    }
    
    if (empty($email)) {
        $error["emailErr"] = "*Requird";
    }
    if (empty($password)) {
        $error["passwordErr"] = "*Requird";
    }


    $selectQuery = "SELECT email FROM users WHERE email = '$email' ";
    $selectResult = mysqli_query($conn,$selectQuery);

  
    if(mysqli_num_rows($selectResult) > 0 ){
        $error["emailErr"] = "Email Already Existed! Enter Another Email";
       
        $_SESSION['error'] = $error;
        header("location: signup.php");
        exit();

    }elseif(empty($error)){
         
      
            $query = "INSERT INTO users (name, email, password) VALUES ('$name','$email','$md5')";
    
            $result = mysqli_query($conn, $query);
    
            if ($result) {
                $_SESSION['success']="Insert Succesfully!";
                header("location: login.php");
            }
    
        
    }else{
        $_SESSION['error'] = $error;
        header("location: signup.php");
    }
  
    

    
}

