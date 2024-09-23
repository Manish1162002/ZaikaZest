<?php
    include 'include/header.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "delete from add_address where id=$id";
        if(mysqli_query($con,$query)){
            echo "<script>
                alert('Your Data deleted successfully');
                window.location.href='my-address.php';
                </script>";
        }
    }else{
        header('Location:my-address.php');
    }

?>