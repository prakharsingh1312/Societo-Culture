<?php
include '../../assets/php/dbconfig.php';
?>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List of all Members</h4>
                  
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          User ID
                        </th>
                        <th>
                          User Email
                        </th>
                        
                        <th>
                          Name
                        </th>
                         <th>
                          Phone Number
                        </th>
                        
                      </thead>
                      <tbody>

<?php

$query="SELECT * FROM members_table WHERE mem_soc_id = ".$_SESSION["soc_id"];
    $sq=mysqli_query($dbconfig,$query);
    while($row=mysqli_fetch_array($sq)) {

      $query_get_count="SELECT * from user_table WHERE user_id =".$row['mem_user_id'];
    $abc=mysqli_query($dbconfig,$query_get_count);
    $result_society=mysqli_fetch_array($abc);

      echo "

                        <tr>
                          <td>
                            ".$result_society['user_id']."
                          </td>
                          <td>
                            ".$result_society['user_email']."
                          </td>
                          <td>
                            ".$result_society['user_name']."
                          </td>
                          <td class='text-primary'>
                            ".$result_society['user_mobile']."
                          </td>
                        </tr>
       

      ";
    }

?>



                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class = "row">
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Add User</h4>
                  <p class="card-category">Add a New User</p>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Society</label>
                          <input type="text" class="form-control" disabled>
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      
                    </div>
                    
                    
                    <button type="submit" class="btn btn-success pull-right">Add User</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
           
           


            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Modify Department</h4>
                  <p class="card-category">Edit or Delete a Department</p>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Society</label>
                          <input type="text" class="form-control" disabled>
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div class="form-group">
                          <label class="bmd-label-floating">Department ID</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Department Name</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      
                    </div>
                    
                    
                    <button type="submit" class="btn btn-warning pull-right">Create Department</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
           


        </div>
      