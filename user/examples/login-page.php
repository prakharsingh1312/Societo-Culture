<?php
include("../../assets/php/functions.php");
if(isset($_GET['login'])){
	$username=mysqli_real_escape_string($dbconfig,$_POST['username']);
	$password=mysqli_real_escape_string($dbconfig,$_POST['password']);
	echo login_user($username,$password);
}
else{
echo '<div class="page-header header-filter" style="background-image: url(\'assets/img/bg7.jpg\'); background-size: cover; background-position: top center;">

    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
          <form class="form" method="" action="">
            <div class="card card-login card-hidden">
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Login</h4>
                
              </div>
              <div id="notification_div"><div id="notification_inner_div"><div id="notification_inner_cell_div"></div></div></div>
              <div class="card-body ">
                <p class="card-description text-center"></p>
                
                <span class="bmd-form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">face</i>
                      </span>
                    </div>
                    <input type="text" class="form-control" id="username" placeholder="Username">
                  </div>
                </span>
                <span class="bmd-form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">lock_outline</i>
                      </span>
                    </div>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                  </div>
                </span>
              </div>
              <div class="card-footer justify-content-center">
                <button class="btn btn-rose btn-link btn-lg login_button">Lets Go</button>
                <a href="#signup" class="btn btn-info btn-link btn-lg">Signup Instead</a>
              </div>              
            </div>
          </form>
        </div>
      </div>
    </div>
    
  </div>';}
?>
 