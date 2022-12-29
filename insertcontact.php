<?php
session_start();
require_once "db.php";

$error = [];

if (isset($_POST['submit'])) {
    $name = trim(htmlentities($_POST['name']));
    $email = trim(htmlentities($_POST['email']));
    $subject = trim(htmlentities($_POST['subject']));
    $message = trim(htmlentities($_POST['message']));

    if (empty($error)) {
            $query = "INSERT INTO contact (name, email, subject, message) VALUES ('$name','$email','$subject','$message')";
        
            $result = mysqli_query($conn, $query);
    
            if ($result) {
                $_SESSION['success']="Your message Delivered Successfully. Thank You";
                header("location: contact.php");
            }
    
        }
    }
    

    






