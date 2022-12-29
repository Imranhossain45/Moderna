<?php
require_once "../inc/header.php";
?>
<div class="container-fluid page__heading-container">
    <div class="page__heading d-flex align-items-end">
        <div class="flex">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Service</li>
                </ol>
            </nav>
            <h1 class="m-0">Add Service</h1>
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
                <form action="serviceinsert.php" method="POST">
                    <div class="form-group">
                        <b>TITLE:</b>
                        <input type="text" name="title" class="form-control" placeholder="Enter Title">
                        <p class=" text-danger">*Max 200 words</p>
                    </div>
                    <div class="form-group">
                        <b>DESCRIPTION:</b>
                        <textarea name="description" class="form-control" rows="10" placeholder="Enter Description"></textarea>
                        <p class=" text-danger">*Max 2000 words</p>
                    </div>
                    <div class="form-group">
                        <b>LINK:</b>
                        <input name="url" class="form-control" placeholder="Link">
                    </div>
                    <div class="form-group">
                        <b>BOX STYLE:</b>
                        <select name="icon_box" class="form-control">
                            <option disabled_selected>Select Box Style</option>
                            <option value="icon-box-pink">Box Pink</option>
                            <option value="icon-box-cyan">Box Cyan</option>
                            <option value="icon-box-green">Box Green</option>
                            <option value="icon-box-blue">Box Blue</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <b>ICON:</b>
                        <input name="icon" class="form-control" placeholder="Select Icon">
                        <p>Enter <a href="https://boxicons.com/">Box Icon </a>Class Name</p>
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