<?php
session_start();
require_once '../../db.php';

$id = $_GET['id'];

//select users

if((int)$id && !empty($id)){
    

    $query = "SELECT id,title,description,photo FROM features WHERE id = $id";
    $result = mysqli_query($conn,$query);


    if(mysqli_num_rows($result) > 0 ){
    $user = mysqli_fetch_assoc($result);

    }
}


//update user

$error = [];

if (isset($_POST['submit'])) {
    $fname = trim(htmlentities($_POST['fname']));
    $lname = trim(htmlentities($_POST['lname']));
    $email = trim(htmlentities($_POST['email']));
    
    $photo = $_FILES['photo']; //change

    //image processing code

    // $imageType = ['jpeg', 'png', 'jpg', 'gif'];

    // $imageExt = explode('.', $image['name']);
    //print_r(end($imageExt));
    // $typeCheck = in_array(strtolower(end($imageExt)), $imageType);
    //image processing code


    if (empty($fname)) {
        $error["fnameErr"] = "*Requird";
    }
    if (empty($lname)) {
        $error["lnameErr"] = "*Requird";
    }
    if (empty($email)) {
        $error["emailErr"] = "*Requird";
    }

    //insert image and remove old image

    if($photo['name']){
        $photoExt = explode('.', $photo['name']);
        $photoName = $fname.'-'. uniqid().'.'.end($photoExt);

        $photoPath = "uploads/features/". $user['photo'];
        if(file_exists($photoPath)){
            unlink($photoPath);
        }

        $uploadPhoto = move_uploaded_file($photo['tmp_name'],'uploads/features/'.$photoName);

        $updatePhotoQuery = "UPDATE features SET photo = '$photoName' WHERE id = $id";

        $updatePhotoResult = mysqli_query($conn, $updatePhotoQuery);

        
    }

    //insert all data
    if(empty($error)){

        $updateQuery = "UPDATE features SET title ='$title', description ='$description' WHERE id= $id";

        $updateResult = mysqli_query($conn, $updateQuery);

        if($updateResult){

            header('location: featureindex.php');
        
        }


    }

};
require_once '../inc/header.php';

?>

<div class="container-fluid page__heading-container">
    <div class="page__heading d-flex align-items-end">
        <div class="flex">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Feature</li>
                </ol>
            </nav>
            <h1 class="m-0">Edit Feature</h1>
        </div>

    </div>
</div>

<div class="container-fluid page__container">
    <div class="card card-form">
        <div class="row no-gutters">
            <div class="col-lg-4 card-body">
                <p><strong class="headings-color">Default Forms</strong></p>
            </div>
            <div class="col-lg-8 card-form__body card-body">
                <form action="featureinsert.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <b>TITLE:</b>
                        <input type="text" name="title" class="form-control" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <b>DESCRIPTION:</b>
                        <textarea name="description" class="form-control" rows="10" placeholder="Enter Description"></textarea>
                    </div>
                    <div class="form-group">
                        <b>PHOTO:</b>
                        <input type="file" name="photo" class="form-control" placeholder="Enter Photo">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>



</div>

<?php
require_once "../inc/footer.php";
?>