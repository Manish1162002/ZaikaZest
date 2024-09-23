<?php 

ob_start();
include 'layout/header.php';
$nameerr = $emailerr = $phoneerr = $roleerr='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
        $nameerr = "Name field is required";
    }elseif(empty($_POST['email'])){
        $emailerr = "Email field is required";
    }elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        $emailerr = "Invalid email";
    }elseif(empty($_POST['phone'])){
        $phoneerr = "Phone number field is required";
    }elseif(empty($_POST['role'])){
        $roleerr = "Role field is required";
    }else{
        $uid = $_POST['uid'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $role = $_POST['role'];
        $query = "Update user set name='$name', email='$email', phone='$phone', role=$role where id=$uid";
        if(mysqli_query($con,$query)){
            // header('Location:users.php?success=User data updated successfully');
            echo "<script>
            alert('User data updated successfully');
            window.location.href='users.php';
            </script>";
        }
    }
}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "Select * from user where id=$id";
    $data = mysqli_query($con,$sql);
    if(mysqli_num_rows($data) > 0){
        $single = mysqli_fetch_assoc($data);
        
    }

?>
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Edit User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="users.php">Users</a></li>
          <li class="breadcrumb-item active">Users Edit</li>
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
                        <h5 class="card-title text-center pb-0 fs-4">Edit User</h5>
                        <p class="text-center small">Change users data</p>
                        </div>
                        <form class="row g-3 needs-validation" method="post" action="<?= $_SERVER['PHP_SELF']?>">
                            <input type="hidden" value="<?= $single['id']?>" name="uid"/>
                            <div class="col-12">
                                <label for="yourName" class="form-label">Your Name</label>
                                <input type="text" name="name" value="<?= $single['name'];?>" class="form-control" id="yourName">
                                <small class="text-danger"><?= $nameerr?></small>
                            </div>
                            <div class="col-12">
                                <label for="yourUsername" class="form-label">Username/Email</label>
                                <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                <input type="text" name="email" value="<?= $single['email'];?>" class="form-control" id="yourUsername">
                                <small class="text-danger"><?= $emailerr?></small>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="yourEmail" class="form-label">Your Phone Number</label>
                                <input type="text" name="phone" value="<?= $single['phone'];?>" class="form-control" id="yourEmail">
                                <small class="text-danger"><?= $phoneerr?></small>

                            </div>
                            <div class="col-12">
                                <label for="yourEmail" class="form-label">Role</label>
                                <input type="number" name="role" value="<?= $single['role'];?>" class="form-control" id="yourEmail">
                                <small class="text-danger"><?= $roleerr?></small>

                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Edit User</button>
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