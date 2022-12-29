<?php
session_start();
require_once '../../db.php';


$error = [];

if (isset($_POST['submit'])) {
    $title = trim(htmlentities($_POST['title']));
    $description = trim(htmlentities($_POST['description']));
    $photo = $_FILES['photo'];

    if (empty($error)) {
        $imageEx=explode('.', $photo['name']);
        $imageName=uniqid().'.'.end($imageEx);
    $photoUpload=move_uploaded_file($photo['tmp_name'], "../../uploads/features/". $imageName);

        if($photoUpload){
            $query = "INSERT INTO features (title, description,photo) VALUES ('$title','$description','$imageName')";
        
            $result = mysqli_query($conn, $query);
    
            if ($result) {
                $_SESSION['success']="Feature Insert Succesfull!";
                header("location: featureindex.php");
            }
    
        }
    }
}







