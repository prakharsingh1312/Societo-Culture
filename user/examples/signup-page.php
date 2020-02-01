<?php
include('../../assets/php/functions.php');
if(isset($_GET['create_user']))
{
$name=$_POST["name"];
$username=$_POST["username"];
$useremail=$_POST["useremail"];
$usermob=$_POST["usermob"];
$password=$_POST["userpass"];
echo create_user($name,$username,$useremail,$usermob,$password);
}
else{
	echo'
  <div class="page-header header-filter" filter-color="purple" style="background-image: url(\'assets/img/bg7.jpg\'); background-size: cover; background-position: top center;">
  <div id="notification_div"><div id="notification_inner_div"><div id="notification_inner_cell_div"></div></div></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-5 ml-auto mr-auto">
          <div class="card card-signup">
            <h2 class="card-title text-center">Register</h2>
            <div class="card-body">
              <div class="row">
                
                <div class="col-xl-12">
                  <!-- <div class="social text-center">
                    <button class="btn btn-just-icon btn-round btn-twitter">
                      <i class="fa fa-twitter"></i>
                    </button>
                    <button class="btn btn-just-icon btn-round btn-dribbble">
                      <i class="fa fa-dribbble"></i>
                    </button>
                    <button class="btn btn-just-icon btn-round btn-facebook">
                      <i class="fa fa-facebook"> </i>
                    </button>
                    <h4> or be classical </h4>
                  </div> -->
                  <form class="form" method="post" action="?create_user">
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">face</i>
                          </span>
                        </div>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name..." required>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">@</i>
                          </span>
                        </div>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username..." required>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">mail</i>
                          </span>
                        </div>
                        <input type="text" class="form-control" name="useremail" id="useremail" placeholder="Email..." required>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">phone</i>
                          </span>
                        </div>
                        <input type="text" class="form-control" name="usermob" id="usermob" placeholder="10 Digit Mobile..." required>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">lock_outline</i>
                          </span>
                        </div>
                        <input type="password" placeholder="Password..." name="userpass" id="userpass" class="form-control" required />
                      </div>
                    </div>
                    
                    <div class="text-center">
                      <!-- <a href="#pablo" class="btn btn-primary btn-round">Register</a> -->
                      <input type="button"  name="submit" class="btn btn-primary btn-round signup_button" value="Submit">
                    </div>
                  </form>





                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>';}
?>