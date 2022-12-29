<?php
session_start();
require_once '../../db.php';



$error = [];

if (isset($_POST['submit'])) {
    $video_link = trim(htmlentities($_POST['video_link']));
    $title_1 = trim(htmlentities($_POST['title_1']));
    $description_1 = trim(htmlentities($_POST['description_1']));
    $icon_1 = trim(htmlentities($_POST['icon_1']));
    $title_2 = trim(htmlentities($_POST['title_2']));
    $description_2 = trim(htmlentities($_POST['description_2']));
    $icon_2 = trim(htmlentities($_POST['icon_2']));
    $photo = $_FILES['photo'];

    if (empty($error)) {
        $imageEx=explode('.', $photo['name']);
        $imageName="whyus".'.'.end($imageEx);
        $photoUpload=move_uploaded_file($photo['tmp_name'], "../../uploads/whyus/". $imageName);

        if($photoUpload){
            $query = "UPDATE why_us SET photo='$imageName',video_link='$video_link',title_1='$title_1',description_1='$description_1',icon_1='$icon_1',title_2='$title_2',description_2='$description_2',icon_2='$icon_2' WHERE id=1";
        
            $result = mysqli_query($conn, $query);
    
            if ($result) {
                $_SESSION['success']="Whyus Update Succesfull!";
                header("location: whyusindex.php");
            }
    
        }
    }
}







