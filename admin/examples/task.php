<?php
include '../../assets/php/dbconfig.php';
?>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List of all Task</h4>
                  
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Applicant Name
                        </th>
                        <th>
                          Task allocated
                        </th>
                        
                        <th>
                          Status
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
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Assign Task</h4>
                  
                </div>
                <div class="card-body">
                  <form method="post">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email of the candidate</label>
                          <input type="text" class="form-control" value="" >
                        </div>
                      </div>
                      
                      
                    </div>
                    <div class="row">
                      <div class="col-md-7">
                        <div class="form-group">
                          <label class="bmd-label-floating">Task Details</label>
                          <input type="email" name="addemail" class="form-control" required>
                        </div>
                      </div>
                      
                    </div>
</form>
</div>
          </div></div>          


        </div>
      