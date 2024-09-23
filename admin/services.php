<?php
ob_start();
include 'layout/header.php';
?>
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Menu Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item active">Services</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="add-data text-end">
        <button><a href="add-services.php">Add Services Data</a></button>
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
                    <th>Services Image</th>
                    <th>Services Name</th>
                    <th>Services Description</th>
                    <th data-type="date" data-format="YYYY/DD/MM">Created At</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                    $sql = "Select * from services";
                    $data = mysqli_query($con,$sql);
                    if(mysqli_num_rows($data) > 0){
                        while($row = mysqli_fetch_assoc($data)){
                    
                ?>
                  <tr>
                    <td><?= $row['id']?></td>
                    
                    <td><img src="services/<?= $row['service_image']?>" height="50" width="50"/></td>
                    <td><?= $row['service_name']?></td>
                    <td><?= $row['service_desc']?></td>
                    <td><?= date('d-m-Y',strtotime($row['created_at']))?></td>
                    <td><a href="edit-services.php?id=<?= $row['id']?>"><span class="bi bi-pencil-square"></span></a><a href="services-delete.php?id=<?= $row['id']?>"><span class="bi bi-trash"></span></a></td>
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