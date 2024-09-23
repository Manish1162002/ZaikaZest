<?php
ob_start();
include 'layout/header.php';
$nameerr=$imageerr=$descerr='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
        $nameerr = "Name field is required";
    }elseif(empty($_POST['desc'])){
        $descerr = " Description field is required";
    }else{
        $id = $_POST['id'];
        $name = $_POST['name'];
        if($_FILES['newimage']['name']){
            $tmp_name=$_FILES['newimage']['tmp_name'];
            $orgname=$_FILES['newimage']['name'];
            move_uploaded_file($tmp_name,'services/'.$orgname);
        }else{
            $orgname=$_POST['oldimage'];
        }
        $desc = $_POST['desc'];
        $query = "update services set service_name='$name', service_image='$orgname', service_desc='$desc' where id=$id";
        if(mysqli_query($con,$query)){
            // header('Location:menus.php?success=Services data updated successfully');
            echo "<script>
            alert('Services data updated successfully');
            window.location.href='services.php';
            </script>";
        }
    }
}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "Select * from services where id=$id";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) > 0){
        $single = mysqli_fetch_assoc($result);
        
    }
?>
<main id="main" class="main">
    <div class="pagetitle">
      <h1>edit Services</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="menus.php">Services</a></li>
          <li class="breadcrumb-item active">edit services</li>
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
                        <h5 class="card-title text-center pb-0 fs-4">edit Services</h5>
                        </div>
                        <form class="row g-3 needs-validation" method="post" action="<?= $_SERVER['PHP_SELF']?>" enctype="multipart/form-data">
                            <div class="col-12">
                            <input type="hidden" value="<?= $single['id']?>" name="id"/>
                                <label for="yourUsername" class="form-label">Services Name</label>
                                <div class="input-group has-validation">
                                <input type="text" name="name" class="form-control" id="yourUsername" value="<?=$single['service_name'];?>">
                                <small class="text-danger"><?=$nameerr?></small>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <label for="yourEmail" class="form-label">Services Image</label>
                                <input type="file" name="newimage" class="form-control" id="yourEmail" >
                                <input type="hidden" name="oldimage" value="<?=$single['service_image'];?>" class="form-control">
                                <img src="services/<?=$single['service_image'];?>" alt="" height="50px" width="50px">
                                <small class="text-danger"><?=$imageerr?></small>

                            </div>
                            <div class="col-12">
                                <label for="yourEmail" class="form-label">Services Description</label>
                                <textarea name="desc" class="form-control" ><?=$single['service_desc'];?></textarea>
                                <small class="text-danger"><?=$descerr?></small>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">edit Services</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>

    </section>
</main>
<?php 
}
?>
<?php include 'layout/footer.php';?>