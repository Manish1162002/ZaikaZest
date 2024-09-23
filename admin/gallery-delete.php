<?php
ob_start();
include 'layout/header.php';
if(isset($_GET['id'])){
   $id = $_GET['id'];
   $query = "Delete from gallery where id=$id";
   if(mysqli_query($con,$query)){
    echo "<script>
        alert('Data deleted successfully');
        window.location.href='gallery.php';      
    </script>";
   } 
}else{
    header('Location:gallery.php');
}
?>