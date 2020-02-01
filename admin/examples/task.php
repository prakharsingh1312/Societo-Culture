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
                          Member Name
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

$query="SELECT * FROM tasks_table WHERE task_soc_id = ".$_SESSION["soc_id"]." ORDER BY task_status";
    $sq=mysqli_query($dbconfig,$query);
    while($row=mysqli_fetch_array($sq)) {

      $query_get_count="SELECT * from user_table WHERE user_id =".$row['user_id'];
    $abc=mysqli_query($dbconfig,$query_get_count);
    $result_society=mysqli_fetch_array($abc);

      echo "

                        <tr>
                          <td>
                            ".$result_society['user_name']."
                          </td>
                          <td>
                            ".$row['task_desc']."
                          </td>
                          <td>
                            ".$row['task_status']."
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
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Member Email</label>
                          <input type="email" class="form-control" name ="addemail" value="" >
                        </div>
                      
                      
                      
                    </div>
                    
                      <div class="col-md-7">
                        <div class="form-group">
                          <label class="bmd-label-floating">Task Description</label>
                          <input type="text" name="descrip" class="form-control" required>
                        </div>
                     </div>
                     <div class="col-md-2">
                        <input type="submit" name="addtask" class="btn btn-success pull-right" value="Add Task"></input>
                     </div>

                    </div>
</form>


<?php

if(isset($_POST["addtask"]))
{
  $addemail=$_POST["addemail"];
  $descrip=$_POST["descrip"];

  $query1="SELECT * FROM user_table WHERE user_email = '".$addemail."'";
    $sq1=mysqli_query($dbconfig,$query1);
    $row1=mysqli_fetch_array($sq1);

  if(!empty($row1))
  {

    $userid=$row1['user_id'];
    $socid=$_SESSION['soc_id'];
    $memdept=$_POST['addmemdept'];
    $memrole=$_POST['addrole'];


    $query2="INSERT into tasks_table (user_id,task_desc,task_status,task_soc_id) VALUES ('$userid','$descrip','0','$socid')"; echo $query2;
    $sq2=mysqli_query($dbconfig,$query2);
    if($sq2) echo "task added";
    else echo "error adding task";
  }
  else echo "user does not exist";
}

?>


</div>
          </div></div>          


        </div>
      