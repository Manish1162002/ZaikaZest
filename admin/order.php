<?php 
ob_start();
include 'layout/header.php';
if(isset($_SESSION['id'])){
    if($_SESSION['role']==1){
        header('Location:admin/index.php');
    }else{
        header('Location:account.php');
    }
}
?>
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Booking Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item active">Booking</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <!-- <div class="add-data text-end">
        <button><a href="add-menus.php">Add Menu Data</a></button>
    </div> -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Tables</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#Id</th>
                    <th scope="col">Country</th>
                    <th scope="col">City</th>
                    <th scope="col">Palace</th>
                    <th scope="col">Event</th>
                    <th scope="col">Palace No.</th>
                    <th scope="col">Food Type</th>
                    <th scope="col">Contact No.</th>
                    <th scope="col">Date</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
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
                  <th scope="row"><?= $row['id']?></th>
                    <td><?= $row['select_country']?></td>
                    <td><?= $row['select_city']?></td>
                    <td><?= $row['select_palace']?></td>
                    <td><?= $row['small_event']?></td>
                    <td><?= $row['no_palace']?></td>
                    <td><?= $row['vegetarian']?></td>
                    <td><?= $row['contact_no']?></td>
                    <td><?= $row['date']?></td>
                    <td><?= $row['email']?></td>
                    <td><?=$row['status']?></td>
                    <td><?= $row['create_at']?></td>
                    <td>
                    <td>
                        <a href="confirm.php?id=<?=$row['id']?>">Confirm</a><a href="cancel.php?id=<?=$row['id']?>">Cancel</a><a href="delete-status.php?id=<?=$row['id']?>">Delete</a>
                    </td>
                  </tr>
                  <?php
                          
                        }
                    }
                  ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
</main><!-- End #main -->
<?php include 'layout/footer.php';?>