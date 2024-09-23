<?php 
ob_start();
include 'layout/header.php';
?>
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Gallery Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item active">Gallery</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="add-data text-end">
        <button><a href="add-gallery.php">Add Data</a></button>
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
                    <th>Type</th>
                    <th>Image</th>
                    <th data-type="date" data-format="YYYY/DD/MM">Created At</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                    $sql = "Select * from gallery";
                    $data = mysqli_query($con,$sql);
                    if(mysqli_num_rows($data) > 0){
                        while($row = mysqli_fetch_assoc($data)){
                    
                ?>
                  <tr>
                    <td><?= $row['id']?></td>
                    <td><?= $row['type']?></td>
                    <td><img src="gallery/<?= $row['image']?>" height="50" width="50"/></td>
                    <td><?= date('d-m-Y',strtotime($row['created_at']))?></td>
                    <td><a href="gallery-delete.php?id=<?= $row['id']?>"><span class="bi bi-trash"></span></a></td>
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