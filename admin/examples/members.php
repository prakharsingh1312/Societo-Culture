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
                  <h4 class="card-title">Add Member</h4>
                  <p class="card-category">Add a New User</p>
                </div>
                <div class="card-body">
                  <form method="post">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Society</label>
                          <input type="text" class="form-control" value="<?php echo $_SESSION['soc_name']; ?>" disabled>
                        </div>
                      </div>
                      
                      
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" name="addemail" class="form-control" required>
                        </div>
                      </div>
                      
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Role</label>
                          <select name="addrole" class="form-control" required>
                            <option disabled> Select Role </option>
                            <option value="1">Executive</option>
                            <option value="2">Core</option>
                            <option value="3">Member</option>
                          </select>
                        </div>
                      </div>
                      
                    </div>
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Department</label>
                          <select name="addmemdept"  class="form-control" required>
                            <option disabled> Select Role </option>
                         
<?php
    $query2="SELECT * FROM departments_table WHERE dept_soc_id = ".$_SESSION['soc_id'];
    $sq2=mysqli_query($dbconfig,$query2);
    while($row2=mysqli_fetch_array($sq2))
    {
      echo "


                            <option value=' ".$row2['dept_id']." '> ".$row2['dept_name']." </option>

      ";
    }
?>

                         
                          </select>
                        </div>
                      </div>
                      
                    </div>
                    
                    <input type="submit" name="adduser" class="btn btn-success pull-right" value="Add User"></input>
                    <div class="clearfix"></div>
                  </form>

<?php

if(isset($_POST["adduser"]))
{
  $addemail=$_POST["addemail"];
  $addrole=$_POST["addrole"];

  $query1="SELECT * FROM user_table WHERE user_email = '".$addemail."'"; echo $query1;
    $sq1=mysqli_query($dbconfig,$query1);
    $row1=mysqli_fetch_array($sq1);

  if(!empty($row1))
  {

    $userid=$row1['user_id'];
    $socid=$_SESSION['soc_id'];
    $memdept=$_POST['addmemdept'];
    $memrole=$_POST['addrole'];


    $query2="INSERT into members_table (mem_user_id,mem_soc_id,mem_dept,mem_score,mem_role) VALUES ('$userid','$socid','$memdept','0','$memrole')"; echo $query2;
    $sq2=mysqli_query($dbconfig,$query2);
    if($sq2) echo "member added";
    else echo "error adding member";
  }
  else echo "user does not exist";
}

?>





                </div>
              </div>
            </div>
           
           


            <div class="col-lg-6 col-md-12">
              <div class="card">
               
              
              </div>
            </div>
           


        </div>
      