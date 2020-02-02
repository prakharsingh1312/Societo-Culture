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
						<?php $sql="SELECT * from events_table where event_type=3";
						$query=mysqli_query($dbconfig,$sql);
						while($row=mysqli_fetch_assoc($query)){
							echo '<a  class="dropdown-item">'.$row['event_date'].'</a>';
						}?>
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

         
           


        </div>
      