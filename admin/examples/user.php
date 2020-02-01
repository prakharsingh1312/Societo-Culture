<?php
include '../../assets/php/dbconfig.php';
if(isset($_GET["update_user"]))
{
  $username=$_POST["username"];
  $email=$_POST["email"];
  $name=$_POST["name"];
  $mobile=$_POST["mob"];
  $user_id=$_SESSION["user_id"];
  $query="UPDATE user_table set user_name='$name' , user_uname='$username' , user_email='$email' , user_mobile='$mobile' WHERE user_id=$user_id ";
	echo $query;
  $abc=mysqli_query($dbconfig,$query);
  if($abc) echo"user updated";
  else echo "error";
}
?>



<div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Profile</h4>
                  <!-- <p class="card-category">Complete your profile</p> -->
                </div>
                <div class="card-body">
                  <form method="post" onsubmit="return false" id="profile_form" action="" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Society</label>
                          <input type="text" class="form-control" value=" <?php echo $_SESSION['soc_name']; ?> " disabled>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" class="form-control" name="username" value=" <?php echo $_SESSION['user_uname']; ?> " required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" class="form-control" name="email" value=" <?php echo $_SESSION['user_email']; ?>  " required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name="name" value=" <?php echo $_SESSION['user_name']; ?>  " >
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <!-- <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="Password" class="form-control">
                        </div>
                      </div> -->
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Mobile Number</label>
                          <input type="text" class="form-control" name="mob" value=" <?php echo $_SESSION['user_mob']; ?>  ">
                        </div>
                      </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
           
            </div>
          </div>