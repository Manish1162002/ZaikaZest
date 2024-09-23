<?php
ob_start();
include 'layout/header.php';

$imageerr=$nameerr= $descerr='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
        $typeerr = "Name field is required";
    }elseif(empty($_FILES['image']['name'])){
        $imageerr = "Image field is required";
    }elseif(empty($_POST['desc'])){
        $descerr = "Description field is required";
    }else{
        $tmp_name = $_FILES['image']['tmp_name'];
        $orgname = $_FILES['image']['name'];
        move_uploaded_file($tmp_name,'services/'.$orgname);
        $name = $_POST['name'];
        $desc = $_POST['desc'];
        $query = "Insert into services(service_image,Service_name,Service_desc)
        values('$orgname','$name','$desc')";
        if(mysqli_query($con,$query)){
            echo "<script>
            alert('Services added successfully');
            window.location.href='services.php';
            </script>";
        }
    }
}

?>
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Add Services</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="services.php">Services</a></li>
          <li class="breadcrumb-item active">Add Services</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-8 col-md-6 d-flex flex-column align-items-center justify-content-center">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Add Services</h5>
                        </div>
                        <form class="row g-3 needs-validation" method="post" action="<?= $_SERVER['PHP_SELF']?>" enctype="multipart/form-data">
                            <div class="col-12">
                                <label for="yourUsername" class="form-label">Services Name</label>
                                <div class="input-group has-validation">
                                <input type="text" name="name" class="form-control" id="yourUsername">
                                <small class="text-danger"><?= $nameerr?></small>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="yourEmail" class="form-label">Services Image</label>
                                <input type="file" name="image" class="form-control" id="yourEmail">
                                <small class="text-danger"><?= $imageerr?></small>

                            </div>
                            <div class="col-12">
                                <label for="yourEmail" class="form-label">Services Description</label>
                                <textarea name="desc" class="form-control"></textarea>
                                <small class="text-danger"><?= $descerr?></small>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Add Services</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>

    </section>
</main>
<?php include 'layout/footer.php';?>