
<?php
ob_start();
include 'include/header.php';
include 'include/sidebar.php';
if(!isset($_SESSION['role']) || $_SESSION['role']!=0){
    header('Location:login.php');
}
 $houseerr=$villageerr=$blockerr=$districterr=$pinerr=$cityerr=$stateerr=$countryerr='';
if($_SERVER['REQUEST_METHOD']=='POST'){
  if(empty($_POST['house'])){
    $houseerr="House field is required";
  }elseif(empty($_POST['village'])){
    $villageerr="village field is required";
  }elseif(empty($_POST['block'])){
    $blockerr="block field is required";
  }elseif(empty($_POST['district'])){
    $districterr="district field is required";
  }elseif(empty($_POST['pin'])){
    $pinerr="Pin field is required";
  }elseif(empty($_POST['city'])){
    $cityerr="City field is required";
  }elseif(empty($_POST['state'])){
    $stateerr="state field is required";
  }elseif(empty($_POST['city'])){
    $cityerr="City field is required";
  }elseif(empty($_POST['country'])){
    $countryerr="country field is required";
  }
else{
  $house=$_POST['house'];
  $village=$_POST['village'];
  $block=$_POST['block'];
  $district=$_POST['district'];
  $pin=$_POST['pin'];
  $city=$_POST['city'];
  $state=$_POST['state'];
  $country=$_POST['country'];
  $id=$_SESSION['id'];
  $query="Insert into add_address(user_id,house_no,village,block,district,pincode,city,state,country)values('$id','$house','$village','$block','$district','$pin','$city','$state','$country')";
  if(mysqli_query($con,$query)){
    echo "<script>
         alert('Address added successfully');
         window.location.href='my-address.php';
       </script>";
  }
}
}
?>
<div class="col-lg-9 col-md-8 col-sm-6">
        <div class="row">
           <div class="col-lg-2"></div>
             <div class="col-lg-8 address-outer">
                <form class="address-form" method="post" action="<?= $_SERVER['PHP_SELF']?>">
                   <fieldset>
                      <legend>My Address</legend>
                         <div class="outer">
                           <div class="right">
                              <label for="house">House No</label><br>
                                  <input type="text" id="house" name="house" class="form-control">
                                     <small class="text-danger"><?=$houseerr?></small> 
                            </div>
                           </div>
                            <div class="outer">
                                <div class="right">
                                    <label for="village">Village</label>
                                       <input type="text" id="village" name="village" class="form-control">
                                        <small class="text-danger"><?=$villageerr?></small>
                                </div>
                              </div> 
                              <div class="outer">
                                <div class="right">
                                    <label for="block">Block</label>
                                       <input type="text" id="block" name="block" class="form-control">
                                        <small class="text-danger"><?=$blockerr?></small>
                                </div>
                              </div>
                              <div class="outer">
                                <div class="right">
                                    <label for="district">District</label>
                                       <input type="text" id="district" name="district" class="form-control">
                                        <small class="text-danger"><?=$districterr?></small>
                                </div>
                              </div>
                               <div class="outer">
                                <div class="right">
                                    <label for="pin">Pin Code</label>
                                       <input type="text" id="pin" name="pin" class="form-control">
                                        <small class="text-danger"><?=$pinerr?></small>
                                </div>
                               </div>
                                 <div class="outer">
                                <div class="right">
                                    <label for="city">City</label>
                                       <input type="text" id="city" name="city" class="form-control">
                                        <small class="text-danger"><?=$cityerr?></small>
                                </div>
                              </div>
                              <div class="outer">
                                <div class="right">
                                    <label for="state">State</label>
                                       <input type="text" id="state" name="state" class="form-control">
                                        <small class="text-danger"><?=$stateerr?></small>
                                </div>
                              </div>
                              <div class="outer">
                                <div class="right">
                                    <label for="country">Country</label>
                                       <input type="text" id="country" name="country" class="form-control">
                                        <small class="text-danger"><?=$countryerr?></small>
                                </div>
                              </div>
                              <div class="outer">
                                <input type="submit">
                              </div>
                     </fieldset>
                </form>
              </div>
                <div class="col-lg-2"></div>

            </div>
        </div>
    </section>
<?php
include 'include/footer.php';
?>