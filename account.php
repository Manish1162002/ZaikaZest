<?php
ob_start();
include 'include/header.php';
include 'include/sidebar.php';
if(!isset($_SESSION['role']) || $_SESSION['role']!=0){
    header('Location.php');
}

?>
<div class="col-lg-2"></div>
<div class="col-lg-7 col-sm-12">
        <div class="row">
            <div class="col-lg-3"></div>
                <div class="col-lg-6 updateprofile-outer">
                    <form class="update-form" method="post" action="profileupdate.php" enctype="multipart/form-data">
                        <div class="profile-image">
                            <img src="profile/<?=$result['profile_image']?>" alt="" height="100" width="100">
                        </div>
                        <fieldset>
                            <legend>Profile</legend>
                            <div class="right">
                                <label for="name">Name</label>
                                <input type="text" id="name" value="<?=$result['name']?>" name="name" class="form-control">
                            </div>
                            <div class="right">
                                <label for="email">Email id</label>
                                <input type="email" id="email" value="<?=$result['email']?>" name="email" class="form-control">
                            </div>
                            <div class="right">
                                <label for="phone">Phone</label>
                                <input type="number" id="phone" value="<?=$result['phone']?>" name="phone" class="form-control">
                            </div>
                            <div class="right">
                                <label for="dob">DOB</label>
                                <input type="date" id="dob" value="<?=$result['dob']?>" name="dob" class="form-control">
                            </div>
                            <div class="right">
                                <label for="phone">Gender</label><br>
                                Male <input type="radio" id="gen" value="male"<?=$result['gender']=='male'? 'checked':''?> name="gender" class="">
                                Female <input type="radio" id="gen" value="female"<?=$result['gender']=='female'? 'checked':''?> name="gender" class="">
                                Other <input type="radio" id="gen" value="other"<?=$result['gender']=='other'? 'checked':''?> name="gender" class="">
                            </div>
                            <div class="right">
                                <label for="dob">State</label>
                                <select name="state" id="" class="form-control">
                                    <option value="">--Select state--</option>
                                    <?php $state=['uttar pradesh','uttarakhand','bihar'];
                                    foreach($state as $st){
                                        ?> 
                                        <option <?= $result['state']==$st ? 'selected':''?> value="<?=$st;?>"><?=ucfirst($st);?></option> 
                                        <?php 
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="outer">
                                <div class="right">
                                    <label for="city">City</label>
                                    <input type="text" name="city" value="<?=$result['city']?>">
                                </div>
                                <div class="right">
                                    <label for="file">Photo</label>
                                    <input type="file" name="profile" id="file" class="firm-control">
                                    <input type="hidden" id="file" value="<?=$result['profile_image']?>" name="oldprofile" class="firm-control">
                                </div>
                            </div>
                            <div class="outer">
                                <input type="submit" value="save">
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="col-lg-3"></div>
     </div>
</section>
<?php
include 'include/footer.php';
?>