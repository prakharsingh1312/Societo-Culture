
<?php
include '../../assets/php/dbconfig.php';
?>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List of all Queries</h4>
                  
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Name
                        </th>
                        <th>
                          Email
                        </th>
                        
                        <th>
                          Query
                        </th>
                    
                        
                      </thead>
                      <tbody>

<?php

$query="SELECT * FROM queries_table WHERE society_id = ".$_SESSION["soc_id"];
    $sq=mysqli_query($dbconfig,$query);
    while($row=mysqli_fetch_array($sq)) {

      echo "

                        <tr>
                          <td>
                            ".$row['name']."
                          </td>
                          <td>
                            ".$row['email']."
                          </td>
                          <td>
                            ".$row['query_desc']."
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

