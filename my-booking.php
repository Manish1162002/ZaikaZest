<?php
ob_start();
include 'include/header.php';
include 'include/sidebar.php';
if(!isset($_SESSION['role']) || $_SESSION['role']!=0){
    header('Location:login.php');
}
?>

<div class="col-lg-9 col-md-6 col-sm-12 ">
    <div class="row">
        <div class="col-lg-12 table-content">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      Id
                    </th>
                    <th id="col">Select-Country</th>
                    <th id="col">Select-city</th>
                    <th id="col">Select-Palace</th>
                    <th id="col">Smalle-Event</th>
                    <th id="col">NO-Of_Palace</th>
                    <th id="col">Vegetarian</th>
                    <th id="col">Contact-No</th>
                    <th id="col">Email</th>
                    <th id="col">Date</th>
                    <th id="col" data-type="date" data-format="YYYY/DD/MM">Created At</th>
                    <th id="col">Action</th>
                    <th id="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                    $sql = "Select * from book_us";
                    $data = mysqli_query($con,$sql);
                    if(mysqli_num_rows($data) > 0){
                        while($row = mysqli_fetch_assoc($data)){
                    
                ?>
                  <tr>
                    <td id="col"><?= $row['id']?></td>
                    <td id="col"><?= $row['select_country']?></td>
                    <td id="col"><?= $row['select_city']?></td>
                    <td id="col"><?= $row['select_palace']?></td>
                    <td id="col"><?= $row['small_event']?></td>
                    <td id="col"><?= $row['no_palace']?></td>
                    <td id="col"><?= $row['vegetarian']?></td>
                    <td id="col"><?= $row['contact_no']?></td>
                    <td id="col"><?= $row['email']?></td>
                    <td id="col"><?= $row['date']?></td>
                    <td id="col"><?= date('d-m-Y',strtotime($row['create_at']))?></td>
                    <td id="col"><a href="book-status.php?id=<?= $row['id']?>"><span class="fa fa-times-circle text-denger fs-5 ps-2"></span></a><a href="book-delete.php?id=<?= $row['id']?>"><span class="fa fa-trash text-denger ps-2 fs-5"></span></a></td>
                    <td><span class="<?=$row['status']=='pending'?'bg-warrning' : 'bg-danger'?>"p-1 rounded text-white"><?= ucfirst($row['status'])?></span></td>
                    <td>
                        <?= $row['status']=='cancelled'?'':'<a href="my-booking.php?statusid='.$row['id']. 'class="pe-2"><i class="fa fa-times-circle text-danger fs-5"></i></a>'?>
                        <a class="mx-2" href="book-delete.php?deletedid=<?= $row['id']?>"><span class="bi bi-trash"></span>
                    </td>
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
<?php
  include 'include/footer.php';
?>