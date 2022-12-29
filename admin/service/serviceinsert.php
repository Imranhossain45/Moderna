<?php
session_start();
require_once '../../db.php';



$error = [];

if (isset($_POST['submit'])) {
    $title = trim(htmlentities($_POST['title']));
    $description = trim(htmlentities($_POST['description']));
    $icon = trim(htmlentities($_POST['icon']));
    $url = trim(htmlentities($_POST['url']));
    $icon_box = trim(htmlentities($_POST['icon_box']));

    if (empty($title)) {
        $error["titleErr"] = "*Requird";
    }
    if(empty($error)){
        $query = "INSERT INTO services (title, description, icon,url, icon_box) VALUES ('$title','$description','$icon','$url','$icon_box')";
    
        $result = mysqli_query($conn, $query);

        if ($result) {
            $_SESSION['success']="Service Creation Succesfull!";
            header("location: serviceindex.php");
        }

    }
}