
<?php
$sid=$_SESSION['id'];
$sql="Select * from user where id=$sid";
$date=mysqli_query($con,$sql);
$result='';
if(mysqli_num_rows($date)>0){
  $result=mysqli_fetch_assoc($date);
}?>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 sidebar-outer">
               <div class="myprofile-box">
                  <div class="profile-img">
                  <img src="profile/<?= $result['profile_image']?>" alt="" id="image">
                  </div>
                  <div class="profile-name">
                      <h2 id="profile-name"><?= $result['name']?></h2>
                    </div>
                 </div>
                 <div class="navigation">
                   <ul>
                   <li class=" navigation-list">
                       <a href="account.php">
                          <span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                          <span class="title">My profile</span>
                        </a>
                    </li>    
                    <li class="navigation-list">
                        <a href="changepass.php">
                           <span class="icon"><i class="fa fa-laptop" aria-hidden="true"></i></span>
                           <span class="title">Change Password</span>
                        </a>
                    </li>
                    <li class="navigation-list">
                        <a href="my-address.php">
                           <span class="icon"><i class="fa fa-laptop" aria-hidden="true"></i></span>
                           <span class="title">My Address</span>
                        </a>
                    </li>
                
                    <li class="navigation-list">
                        <a href="#">
                           <span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                           <span class="title">My Payments</span>
                        </a>
                    </li>
                    <li class="navigation-list">
                        <a href="my-booking.php">
                           <span class="icon"><i class="fa fa-booking" aria-hidden="true"></i></span>
                           <span class="title">Booking Order</span>
                        </a>
                    </li>
                    
                    <li class="navigation-list">
                        <a href="logout.php">
                           <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                           <span class="title">Logout</span>
                        </a>
                    </li>
                 </ul>
            </div>
        </div>

    


