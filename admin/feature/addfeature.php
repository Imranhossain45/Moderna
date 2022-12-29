<?php
require_once "../inc/header.php";
?>
<div class="container-fluid page__heading-container">
    <div class="page__heading d-flex align-items-end">
        <div class="flex">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Feature</li>
                </ol>
            </nav>
            <h1 class="m-0">Add Feature</h1>
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