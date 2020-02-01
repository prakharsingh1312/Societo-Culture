<?php
include '../../assets/php/functions.php';
if(isset($_POST["add_dept"]))
{
  $deptname=$_POST["deptname"];
  $societyid=$_SESSION["soc_id"];
  $query="INSERT into departments_table (dept_name,dept_soc_id) VALUES('$deptname','$societyid') ";
  $abc=mysqli_query($dbconfig,$query);
  if($abc) echo"event added";
  else echo "error";
}
?>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Department Table</h4>
                  <p class="card-category"> List of all departments of the society</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Department ID
                        </th>
                        <th>
                          Department Name
                        </th>
                        
                        <th>
                          Department Strength
                        </th>
                        
                      </thead>
                      <tbody>
<?php

$query="SELECT * FROM departments_table WHERE dept_soc_id = ".$_SESSION["soc_id"];
    $sq=mysqli_query($dbconfig,$query);
    while($row=mysqli_fetch_array($sq)){

      $query_get_count="SELECT count(*) from members_table WHERE mem_dept =".$row['dept_id'];
    $abc=mysqli_query($dbconfig,$query_get_count);
    $result_society=mysqli_fetch_array($abc);

      echo "

       <tr>
                          <td>
                            ".$row['dept_id']."
                          </td>
                          <td>
                            ".$row['dept_name']."
                          </td>
                          <
                          <td class='text-primary'>
                            ".$result_society['count(*)']."
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
                  <h4 class="card-title">Add Department</h4>
                  <p class="card-category">Add a New Department</p>
                </div>
                <div class="card-body">
                  <form method="post">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Society</label>
                          <input type="text" class="form-control" value=" <?php echo $_SESSION["soc_name"]; ?> " disabled>
                        </div>
                      </div>
                      <!-- <div class="col-md-7">
                        <div class="form-group">
                          <label class="bmd-label-floating">Department ID</label>
                          <input type="text" class="form-control">
                        </div>
                      </div> -->
                      
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Department Name</label>
                          <input type="text" class="form-control" name="deptname" required>
                        </div>
                      </div>
                      
                    </div>
                    
                    
                    <input type="submit" name="add_dept" value="Create Department" class="btn btn-success pull-right"></input>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
           
           


            <div class="col-lg-6 col-md-12">
              <div class="card">
               
              </div>
            </div>
           


        </div>
      