<?php include 'include/header.php';?>
     <div class="container">
     <div class="login row ">
        <div class="login-image col-lg-6 col-md-1">
            <img src="images/blog-2.jpg" alt="">
        </div>
        <div class="login-form col-md-6 col-md-1">
            <h2 class="login-text">Sign Up Form</h2>
            <span class="text-success"><?= isset($_GET['success']) ? $_GET['success']:''?></span>
            <span class="text-danger"><?= isset($_GET['failer']) ? $_GET['failer']:''?></span>
            <form action="postsignup.php" method="post" enctype="multipart/form-data" class="form">
                <input type="text" placeholder="Name" name="name">
                <small class="errmsg text-danger"><?= isset($_GET['nameerr']) ? $_GET['nameerr'] :'';?></small>
                <input type="text" placeholder="Email" name="email">
                <small class="errmsg text-danger"><?= isset($_GET['emailerr']) ?$_GET['emailerr'] :'';?></small>
                <input type="text" placeholder="Phone" name="phone">
                <small class="errmsg text-danger"><?= isset($_GET['phoneerr']) ? $_GET['phoneerr']:'';?></small>
                <input type="password" placeholder="Password" name="password">
                <small class="errmsg text-danger"><?= isset($_GET['passerr']) ? $_GET['passerr']:'';?></small>
                <input type="password" placeholder="Confirm password" name="c_password">
                <small class="errmsg text-danger"><?= isset($_GET['cpasserr'])?$_GET['cpasserr']:'';?></small>
                <input type="submit" value="Sing Up" name="signup">
                <span class="sigin-text ps-3">Already Have an account?<a href="login.php ">  login</a></span>
            </form>
        </div>
     </div>
    </div>
<?php include 'include/footer.php';?>