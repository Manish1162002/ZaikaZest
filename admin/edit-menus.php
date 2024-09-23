<?php 
ob_start();
include 'layout/header.php';

$typeerr = $nameerr = $priceerr = $imageerr=$descerr='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['type'])){
        $typeerr = "Type field is required";
    }elseif(empty($_POST['name'])){
        $nameerr = "Name field is required";
    }elseif(empty($_POST['price'])){
        $priceerr = "Price number field is required";
    }elseif(empty($_POST['description'])){
        $descerr = " Description field is required";
    }else{
        $id = $_POST['id'];
        $type = $_POST['type'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        if($_FILES['newimage']['name']){
            $tmp_name=$_FILES['newimage']['tmp_name'];
            $orgname=$_FILES['newimage']['name'];
            move_uploaded_file($tmp_name,'menus/'.$orgname);
        }else{
            $orgname=$_POST['oldimage'];
        }
        $desc = $_POST['description'];
        $query = "Update menus set product_type='$type', product_name='$name', product_price='$price', 
        product_image='$orgname', description='$desc' where id=$id";
        if(mysqli_query($con,$query)){
            // header('Location:menus.php?success=Menus data updated successfully');
            echo "<script>
            alert('Menus data updated successfully');
            window.location.href='menus.php';
            </script>";
        }
    }
}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "Select * from menus where id=$id";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) > 0){
        $single = mysqli_fetch_assoc($result);
        
    }

?>
<main id="main" class="main">
    <div class="pagetitle">
      <h1>edit Menus</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="menus.php">Menus</a></li>
          <li class="breadcrumb-item active">edit Menu</li>
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
                        <h5 class="card-title text-center pb-0 fs-4">edit Menus</h5>
                        </div>
                        <form class="row g-3 needs-validation" method="post" action="<?= $_SERVER['PHP_SELF']?>" enctype="multipart/form-data">
                            <div class="col-12">
                                <input type="hidden" value="<?= $single['id']?>" name="id"/>
                                <label for="yourName" class="form-label">Product Type</label>
                                <select  class="form-control" name="type" >
                                    <option value="">--Select Product Type--</option>
                                    <option value="starter"<?=$single['product_type']=='starter' ? 'selected': '';?>>Starter</option>
                                    <option <?=$single['product_type']=='main_course' ? 'selected': '';?> value="main_course">Main Course</option>
                                    <option <?=$single['product_type']=='drinks' ? 'selected': '';?>value="drinks">Drinks</option>
                                    <option <?=$single['product_type']=='offers' ? 'selected': '';?>value="offers">Offers</option>
                                    <option <?=$single['product_type']=='our_special' ? 'selected': '';?>value="our_special">Our Special</option>
                                </select>
                                <small class="text-danger"><?= $typeerr?></small>
                            </div>
                            <div class="col-12">
                                <label for="yourUsername" class="form-label">Product Name</label>
                                <div class="input-group has-validation">
                                <input type="text" name="name" class="form-control" id="yourUsername" value="<?=$single['product_name'];?>">
                                <small class="text-danger"><?= $nameerr?></small>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="yourEmail" class="form-label">Product Price</label>
                                <input type="text" name="price" class="form-control" id="yourEmail" value="<?=$single['product_price'];?>">
                                <small class="text-danger"><?= $priceerr?></small>

                            </div>
                            <div class="col-12">
                                <label for="yourEmail" class="form-label">Product Image</label>
                                <input type="file" name="newimage" class="form-control" id="yourEmail" >
                                <input type="hidden" name="oldimage" value="<?=$single['product_image'];?>" class="form-control">
                                <img src="menus/<?=$single['product_image'];?>" alt="" height="50" width="50">
                                <small class="text-danger"><?= $imageerr?></small>

                            </div>
                            <div class="col-12">
                                <label for="yourEmail" class="form-label">Product Description</label>
                                <textarea name="description" class="form-control" ><?=$single['description'];?></textarea>
                                <small class="text-danger"><?= $descerr?></small>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">edit Menu</button>
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
}?>
<?php include 'layout/footer.php';?>