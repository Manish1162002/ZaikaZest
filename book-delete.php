<?php
ob_start();
include("include\header.php");
if($_GET['id']){
    $id=$_GET['id'];
    $sql="delete from book_us where id=$id";
    if(mysqli_query($con,$sql)){
        echo "<script>
        alert('Your Booking Inormation Deleted Sucessfully');
        window.location.href='my-booking.php';
        </script>";
    }
}
else{
    header("Location:my-booking.php");
}
?>