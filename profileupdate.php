<?php
include('include/header.php');
ob_start();
$id=$_SESSION['id'];
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    if($_FILES['profile']['name']){
        $profilename=$phone.$_FILES['profile']['name'];
        $ptmpname=$_FILES['profile']['tmp_name'];
        move_uploaded_file($ptmpname,'profile/'.$profilename);
    }else{
        $profilename=$_POST['oldprofile'];
    }
    $sql="Update user set name='$name',email='$email',phone='$phone',dob='$dob',gender='$gender',state='$state',city='$city',profile_image='$profilename' where id=$id";
    if(mysqli_query($con,$sql)){
        echo "<script>
           alert('Profile Update successfully');
           window.location.href='account.php';
        </script>";
    }
}
?>