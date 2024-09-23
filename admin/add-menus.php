<?php include 'layout/header.php';
$typeerr=$nameerr = $priceerr = $imageerr = $descerr='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['type'])){
        $typeerr = "Type field is required";
    }elseif(empty($_POST['name'])){
        $nameerr = "Name field is required";
    }elseif(empty($_POST['price'])){
        $priceerr = "Price field is required";
    }elseif(empty($_FILES['image']['name'])){
        $imageerr = "Image field is required";
    }elseif(empty($_POST['description'])){
        $descerr = "Description field is required";
    }else{
        $type = $_POST['type'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $orgname = $_FILES['image']['name'];
        move_uploaded_file($tmp_name,'menus/'.$orgname);
        $desc = $_POST['description'];
        $query = "Insert into menus(product_type,product_name,product_price,product_image,description)
        values('$type','$name','$price','$orgname','$desc')";
        if(mysqli_query($con,$query)){
            echo "<script>
            alert('Menu added successfully');
            window.location.href='menus.php';
            </script>";
        }
    }
}

?>
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Add Menu</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="menus.php">Menus</a></li>
          <li class="breadcrumb-item active">Add Menu</li>
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
                        <h5 class="card-title text-center pb-0 fs-4">Add Menus</h5>
                        </div>
                        <form class="row g-3 needs-validation" method="post" action="<?= $_SERVER['PHP_SELF']?>" enctype="multipart/form-data">
                            <div class="col-12">
                                <label for="yourName" class="form-label">Product Type</label>
                                <select  class="form-control" name="type">
                                    <option value="">--Select Product Type--</option>
                                    <option value="starter">Starter</option>
                                    <option value="main_course">Main Course</option>
                                    <option value="drinks">Drinks</option>
                                    <option value="offers">Offers</option>
                                    <option value="our_special">Our Special</option>
                                </select>
                                <small class="text-danger"><?= $typeerr?></small>
                            </div>
                            <div class="col-12">
                                <label for="yourUsername" class="form-label">Product Name</label>
                                <div class="input-group has-validation">
                                <input type="text" name="name" class="form-control" id="yourUsername">
                                <small class="text-danger"><?= $nameerr?></small>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="yourEmail" class="form-label">Product Price</label>
                                <input type="text" name="price" class="form-control" id="yourEmail">
                                <small class="text-danger"><?= $priceerr?></small>

                            </div>
                            <div class="col-12">
                                <label for="yourEmail" class="form-label">Product Image</label>
                                <input type="file" name="image" class="form-control" id="yourEmail">
                                <small class="text-danger"><?= $imageerr?></small>

                            </div>
                            <div class="col-12">
                                <label for="yourEmail" class="form-label">Product Description</label>
                                <textarea name="description" class="form-control"></textarea>
                                <small class="text-danger"><?= $descerr?></small>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Add Menu</button>
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