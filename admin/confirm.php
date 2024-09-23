<?php
ob_start();
include 'layout/header.php';
if($_GET['id']){
    $id=$_GET['id'];
    $sql="update book_us set status='confirm' where id=$id";
    if(mysqli_query($con,$sql)){
        echo "<script>
        alert('Booking Confirm Sucessfully');
        window.location.href='order.php';
        </script>";
    }
}
else{
    header('Location:order.php');
}