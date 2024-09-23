<?php
ob_start();
include 'include/header.php';
include 'include/sidebar.php';
if(!isset($_SESSION['role']) || $_SESSION['role']!=0){
header('Location:login.php');
}
$id = $result['id'];
$olderr = $newerr = $conerr='';
if($_SERVER['REQUEST_METHOD']=='POST'){
if(empty($_POST['old'])){
    $olderr= "Please Enter your Old Password";
}elseif (empty($_POST['pass'])){ 
    $newerr ="Please Enter your New Password";
}elseif (empty($_POST['confirmpass'])){
     $conerr ="Please Enter your Confirm Password";
}elseif ($_POST['confirmpass'] !=$_POST['pass']){
       $conerr = "Please Enter your Confirm Password same as";

}elseif ($_POST['old'] !=$result['password']){
   $olderr="Plese Enter your Correct old password";
}elseif($_POST['old']==$_POST['pass']){
    $olderr="You new password matching old password use differenc";
}else{
    $new=$_POST['pass'];
    $sql="Update user set password='$new' where id=$id";
    if(mysqli_query($con,$sql)){
        echo "<script>
        alert('Password Change');
        window.location.href='account.php';
        </script>";
    }
}
}
?>
      <div class="col-lg-9 col-md-8 col-sm-6">
        <div class="row">
           <div class="col-lg-2"></div>
             <div class="col-lg-8 changepass-outer">
                <form class="changepass-form" method="post" action="<?= $_SERVER['PHP_SELF']?>">
                   <fieldset>
                      <legend>Change Password</legend>
                         <div class="outer">
                           <div class="right">
                              <label for="old">Old Password</label><br>
                                  <input type="password" id="old" name="old" class="form-control">
                                     <small class="text-danger"><?= $olderr?></small>
                            </div>
                           </div>
                            <div class="outer">
                                <div class="right">
                                    <label for="pass">New Password</label>
                                       <input type="password" id="pass" name="pass" class="form-control">
                                        <small class="text-danger"><?= $newerr?></small>
                                </div>
                              </div>
                              <div class="outer">
                                <div class="right">
                                    <label for="pass">Confirmpass</label>
                                       <input type="confirmpass" id="confirmpass" name="confirmpass" class="form-control">
                                        <small class="text-danger"><?= $conerr?></small>
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
         