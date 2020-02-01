<?php
include '../../assets/php/dbconfig.php';
?>

        <div class="container-fluid">

          <div class="row">

            <div class="col-md-12">

              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List of all Members <div class="col-lg-6 col-md-8 col-sm-12 mx-auto pull pull-right">
                  <div class="dropdown">
                    <button href="#pablo" class="dropdown-toggle btn btn-primary btn-round btn-block" data-toggle="dropdown">Attendance for the event </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <h6 class="dropdown-header">Event Date</h6>
                      <a href="#pablo" class="dropdown-item">1-02-2020</a>
                      <a href="#pablo" class="dropdown-item">2-02-2020</a>
                      <a href="#pablo" class="dropdown-item">3-02-2020</a>
                      <a href="#pablo" class="dropdown-item">4-02-2020</a>
                      <a href="#pablo" class="dropdown-item">5-02-2020</a>
                    </div>
                  </div>
                </div></h4>
                  
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Name
                        </th>
                        <th>
                          User Email
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
                            ".$result_society['user_name']."
                          </td>
                          <td>
                            ".$result_society['user_email']."
                          </td>
                          
                          <td class='togglebutton'>
                            <label>
                              <input type='checkbox'></input>
                              <span class='toggle'>
                                
                              </span>
                            </label>
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
                  <h4 class="card-title">Schedule a Meetup</h4>
                  
                </div>
                <div class="card-body">
                  <form method="post">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Date of Meetup</label>
                          <input type="text" class="form-control" value="" >
                        </div>
                      
                      
                      
                    </div>
                    
                      <div class="col-md-7">
                        <div class="form-group">
                          <label class="bmd-label-floating">Purpose of Meetup</label>
                          <input type="email" name="addemail" class="form-control" required>
                        </div>
                     </div>
                     <div class="col-md-2">
                        <input type="submit" name="adduser" class="btn btn-success pull-right" value="Add Task"></input>
                     </div>

                    </div>
</form>
</div>
          </div></div>          


        </div>
      