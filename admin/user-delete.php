<?php
   ob_start();
   include 'layout/header.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "Delete from user where id=$id";
        if(mysqli_query($con,$sql)){
            echo "<script>
                alert('Data deleted successfully');
                window.location.href='users.php';
            </script>";
        }
    }else{
        header('Location:users.php');
    }
?>