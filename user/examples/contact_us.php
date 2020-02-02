
    <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('./assets/img/examples/office2.jpg');">
       <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="main main-raised">
        <div class="contact-content">
            <div class="container">
               <center><h2 class="title">Submit a Query</h2></center> 
               <br>
                <div class="row">
                   <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <p class="description">You can contact any society and the respective admin will get back to you.<br><br>
                        </p>
                        <form role="form" id="contact-form" method="post">
                            <div class="form-group">
                                <label for="name" nam class="bmd-label-floating">Your name</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmails" class="bmd-label-floating">Email address</label>
                                <input type="email" class="form-control" name="email" id="exampleInputEmails">
                                <span class="bmd-help">We'll never share your email with anyone else.</span>
                            </div>
                            <div class="form-group">
                                <label>Choose the Society you want to contact</label>
                                <select class="form-control" name="society">
                                    <option>Select Society</option>

<?php
include '../../assets/php/functions.php';
$query1="SELECT * from society_table";
$sql1=mysqli_query($dbconfig,$query1);
while($row1=mysqli_fetch_array($sql1))
{
    echo "
        <option value='".$row1['so_id']."'>".$row1['so_name']."</option>
    ";
}


?>





                                </select>
                            </div>
                            <div class="form-group label-floating">
                                <label class="form-control-label bmd-label-floating" for="message"> Your message</label>
                                <textarea class="form-control" rows="6" name="desc" id="message"></textarea>
                            </div>
                            <div class="submit text-center">
                                <input type="submit" name="submitcontact" class="btn btn-primary btn-raised btn-round" value="Contact Us">
                            </div>
                        </form>
                    </div>
 <?php
if(isset($_POST["submitcontact"]))
{
    $name=$_POST["name"];
    $email=$_POST["email"];
    $society=$_POST["society"];
    $querydesc=$_POST["desc"];

    $query = "INSERT INTO queries_table (society_id,query_desc,name,email) VALUES('$society','$querydesc','$name','$email')";
    $sql=mysqli_query($dbconfig,$query);
    if($sql) echo "<script>alert('Thanks! Will get back to you!.');</script>";
    else echo "<script>alert('ERROR!');</script>";
}



 ?>                  
      <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>
