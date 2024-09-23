<?php
ob_start(); 
include 'include/header.php';
if(isset($_SESSION['id'])){
    if($_SESSION['role']==1){
        header('Location:admin/index.php');
    }else{
        header('Location:account.php');
    }
}

$usererr = $passerr = $final='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['username'])){
        $usererr = "Please enter your username";
    }elseif(!filter_var($_POST['username'],FILTER_VALIDATE_EMAIL)){
        $usererr = "Invalid username";
    }elseif(empty($_POST['pwd'])){
        $passerr = "Please enter your password";
    }else{
       $user = $_POST['username'];
       $pass = $_POST['pwd'];
       $sql = "Select * from user where email = '$user' && password='$pass'";
       $result = mysqli_query($con,$sql);
       if(mysqli_num_rows($result) > 0){
        $data = mysqli_fetch_assoc($result);
        $_SESSION['id']=$data['id'];
        $_SESSION['email']=$data['email'];
        $_SESSION['name']=$data['name'];
        $_SESSION['role']=$data['role'];
        if($data['role']==1){
            header('Location:admin/index.php');
        }else{
            header('Location:account.php');
        }
       }else{
        $final = "Username or password incorrect";
       }
    }
}
?>
     <div class="container">
     <div class="login row ">
        <div class="login-image col-lg-6 col-md-1">
            <img src="images/blog-3.jpg" alt="">
        </div>
        <div class="login-form col-md-6 col-md-1">
            <h2 class="login-text">Login Form</h2>
            <span class="text-danger"><?= $final?></span>
            <form action="<?= $_SERVER['PHP_SELF']?>" method="post" class="form">
                <input type="text" placeholder="username" name="username">
                <small class="text-danger"><?= $usererr?></small>
                <input type="password" placeholder="password" name="pwd">
                <small class="text-danger"><?= $passerr?></small>
                <input type="submit" value="Login">
                <span class="login-par">  <a href="signup.php" class="ps-3">Have a create account</a></span>
            </form>
        </div>
     </div>
    </div>
<?php include 'include/footer.php';?>