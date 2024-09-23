<?php
include 'config/dbconnect.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['signup'])){
        if(empty($_POST['name'])){
            header('Location:signup.php?nameerr=*Please Enter Your Name');
        }elseif(empty($_POST['email'])){
            header('Location:signup.php?emailerr=*Please Enter Your Email');
        }elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            header('Location:signup.php?emailerr=*Invalid Email');
        }elseif(empty($_POST['phone'])){
            header('Location:signup.php?phoneerr=*Please Enter Your Phone Number');
        }elseif(empty($_POST['password'])){
            header('Location:signup.php?passerr=*Please Enter Your Password');
        }elseif(empty($_POST['c_password'])){
            header('Location:signup.php?cpasserr=*Please Enter Your Confirm Password');
        }elseif($_POST['c_password']!=$_POST['password']){
            header('Location:signup.php?cpasserr=*Your given not matched with actual password');
        }else{
            $name = sanitize($_POST['name']);
            $email = sanitize($_POST['email']);
            $phone = sanitize($_POST['phone']);
            $password = sanitize($_POST['password']);
            $sql = "Insert into user(name,email,phone,password,role) values('$name','$email','$phone','$password',0)";
            if(mysqli_query($con,$sql)){
                header('Location:signup.php?success=User Created Successfully');
            }
        }
    }
}else{
    header('Location:signup.php?failer=Invalid Request');
}
function sanitize($inputData){
    $data = trim($inputData);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>