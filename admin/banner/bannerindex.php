<?php
require_once "../inc/header.php";
require_once '../../db.php';
$query = "SELECT * FROM banners";
    
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result)){
            $datas=mysqli_fetch_all($result,true);
        }
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
            <h1 class="m-0">All Banner</h1>
        </div>

    </div>
</div>

<div class="container-fluid page__container">
    <div class="row">
        <div class="col-12">
            <table class="table myTable">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Button Text</th>
                    <th>Button URL</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($datas as $data){
                ?>
                <tr>
                    <td><?= $data['id']?></td>
                    <td><?= $data['title']?></td>
                    <td><?= substr($data['description'],0,50) ?></td>
                    <td><?= $data['btn_text']?></td>
                    <td><?= $data['btn_url']?></td>
                    <td><?= $data['status']?></td>
                    <td>
                        <a href="#">View</a>
                    </td>
                </tr>
                <?php
                  }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
require_once "../inc/footer.php";
?>