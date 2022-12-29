<?php
require_once "../inc/header.php";
?>
<div class="container-fluid page__heading-container">
    <div class="page__heading d-flex align-items-end">
        <div class="flex">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Banner</li>
                </ol>
            </nav>
            <h1 class="m-0">Add Banner</h1>
        </div>

    </div>
</div>

<div class="container-fluid page__container">
    <div class="card card-form">
        <div class="row no-gutters">
            <div class="col-lg-4 card-body">
                <p><strong class="headings-color">Default Forms</strong></p>
                <p class="text-muted">FlowDash supports all of Bootstrap's default form styling in addition to a handful of new input types and features. Please <a href="https://getbootstrap.com/docs/4.1/components/forms/" target="_blank">read the official documentation</a> for a full list of options from Bootstrap's core library.</p>
            </div>
            <div class="col-lg-8 card-form__body card-body">
                <form action="bannerinsert.php" method="POST">
                    <div class="form-group">
                        <label>Banner Title:</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <label>Banner Description:</label>
                        <textarea name="description" class="form-control" rows="10" placeholder="Enter Banner Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Button Text:</label>
                        <input type="text" name="btn_text" class="form-control" placeholder="Enter Button Text">
                    </div>
                    <div class="form-group">
                        <label>Button URL:</label>
                        <input type="text" name="btn_url" class="form-control" placeholder="Enter Button Url">
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