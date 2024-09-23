<?php
ob_start();
include("include/header.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
        header('Location:contact.php?nameerr= * Please enter your name');
    }elseif (empty($_POST['email'])) {
        header('Location:contact.php?emailerr= * Please enter your email');
    }elseif (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
        header('Location:contact.php?emailerr= * Invalid email');
    }elseif (empty($_POST['msg'])) {
        header('Location:contact.php?msgerr= * Please enter your message');
    }else{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];
        $query = "Insert into contact(name,email,message) values('$name','$email','$msg')";
        if(mysqli_query($con,$query)){
            echo "<script>
            alert('Your message send successfully');
            window.location.href='contact.php';
            </script>";
        }
    }
}else{
    header('Location:contact.php');
}