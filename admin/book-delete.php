<?php
//include('../config/dbconnect.php');
include 'layout/header.php';
if(isset($_GET['id'])){
   $id = $_GET['id'];
   $query = "Delete from book_us where id=$id";
   if(mysqli_query($con,$query)){
    echo "<script>
        alert('Data deleted successfully');
        window.location.href='booking.php';      
    </script>";
   } 
}else{
    header('Location:booking.php');
}
?>