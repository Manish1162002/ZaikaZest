<?php 
ob_start();
include 'layout/header.php';
?>
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Book_us</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item active">Book_us</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="add-data text-end">
        <button><a href="add-booking.php">Add Data</a></button>
    </div>
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
                    <th>
                      Id
                    </th>
                    <th>Select-Country</th>
                    <th>Select-city</th>
                    <th>Select-Palace</th>
                    <th>Smalle-Event</th>
                    <th>NO-Of_-Palace</th>
                    <th>Vegetarian</th>
                    <th>Contact-No</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th data-type="date" data-format="YYYY/DD/MM">Created At</th>
                    <th>Action</th>
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
                    <td><?= $row['id']?></td>
                    <td><?= $row['select_country']?></td>
                    <td><?= $row['select_city']?></td>
                    <td><?= $row['select_palace']?></td>
                    <td><?= $row['small_event']?></td>
                    <td><?= $row['no_palace']?></td>
                    <td><?= $row['vegetarian']?></td>
                    <td><?= $row['contact_no']?></td>
                    <td><?= $row['email']?></td>
                    <td><?= $row['date']?></td>
                    <td><?= date('d-m-Y',strtotime($row['create_at']))?></td>
                    <td><a href="book-delete.php?id=<?= $row['id']?>"><span class="bi bi-trash"></span></a></td>
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