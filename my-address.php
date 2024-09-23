<?php
ob_start();
include 'include/header.php';
include 'include/sidebar.php';
if(!isset($_SESSION['role']) || $_SESSION['role']!=0){
    header('Location:login.php');
}
$usrid=$_SESSION['id'];
$select="Select * from add_address where user_id= $usrid";
?>

<div class="col-lg-9 col-md-6 col-sm-12 ">
    <div class="row">
        <div class="col-lg-12 updateprofile-outer ">
            <a href="add-my-address.php" class="btn btn-primary" id="b1">add new address</a>
            <table class="table table-bordered">
            <thead>
                 <tr>
                 <th scope="col" >#id</th>
                <th scope="col" id="col">House No</th>
                <th scope="col" id="col">Village</th>
                <th scope="col" id="col">Block</th>
                 <th scope="col">District</th>
                 <th scope="col" id="col">Pin Code</th>
                 <th scope="col" id="col">City</th>
                 <th scope="col" id="col">State</th>
                 <th scope="col" id="col">Country</th>
                  <th scope="col" id="col"  data-type="date" date-format="YYYY/DD/MM">create_At</th>
                 <th scope="col" id="col">Action</th>
                 <?php
                $selresult=mysqli_query($con,$select);
                if(mysqli_num_rows($selresult)>0);{
                while($selectrow =mysqli_fetch_assoc($selresult)){
            ?>
               </tr>
            </thead>
           <tbody>
                <tr>
                     <td scope="row"><?= $selectrow['id']?></td>
                        <td id="col"><?= $selectrow['house_no']?></td>
                        <td id="col"><?= $selectrow['village']?></td>
                        <td id="col"><?= $selectrow['block']?></td>
                        <td id="col"><?= $selectrow['district']?></td>
                        <td id="col"><?= $selectrow['pincode']?></td>
                        <td id="col"><?= $selectrow['city']?></td>
                        <td id="col"><?= $selectrow['state']?></td>
                        <td id="col"><?= $selectrow['country']?></td>
                        <td id="col"><?= date('d-m-Y',strtotime($selectrow['created_at']))?></td>
                         <td id="col"><a href="my-address.php?id=<?= $selectrow['id']?>"><span class="bi bi-pencil-square"></span></a><a href="delete-address.php?id=<?= $selectrow['id']?>"><span class="fa fa-trash"></span></a></td>
                    </tr>
                    <?php
                }
              }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</section>
<?php
  include 'include/footer.php';
?>