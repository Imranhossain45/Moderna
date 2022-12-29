<?php
session_start();
require_once '../../db.php';



$error = [];

if (isset($_POST['submit'])) {
    $title = trim(htmlentities($_POST['title']));
    $description = trim(htmlentities($_POST['description']));
    $btn_text = trim(htmlentities($_POST['btn_text']));
    $btn_url = trim(htmlentities($_POST['btn_url']));

    if (empty($title)) {
        $error["titleErr"] = "*Requird";
    }
    if(empty($error)){
        $query = "INSERT INTO banners (title, description, btn_text,btn_url) VALUES ('$title','$description','$btn_text','$btn_url')";
    
        $result = mysqli_query($conn, $query);

        if ($result) {
            $_SESSION['success']="Banner Creation Succesfull!";
            header("location: bannerindex.php");
        }

    }
}