<?php
include '../../assets/php/dbconfig.php';
?>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">People Interested in your events</h4>
                  
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Emails
                        </th>
                       
                    
                        
                      </thead>
                      <tbody>

<?php

$query="SELECT * FROM event_reminders";
    $sq=mysqli_query($dbconfig,$query);
    while($row=mysqli_fetch_array($sq)) {


      echo "

                        <tr>
                          <td>
                            ".$row['email']."
                          </td>
                     
                         
                        </tr>
       

      ";
    }

?>



                      </tbody>
                      <button class="btn btn-primary">SEND MAILS</button>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>


</div>
        
