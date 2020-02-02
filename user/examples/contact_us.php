<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        ConnecTU
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="../assets/css/material-kit.css?v=2.2.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
    <link href="../assets/demo/vertical-nav.css" rel="stylesheet" />
</head>

<body class="contact-page sidebar-collapse">
    <?php include '../header.php'; ?>

    <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('../assets/img/examples/office2.jpg');">
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
<br>
<br>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="../assets/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="../assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
    <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="../assets/js/plugins/jasny-bootstrap.min.js" type="text/javascript"></script>
    <!--	Plugin for Small Gallery in Product Page -->
    <script src="../assets/js/plugins/jquery.flexisel.js" type="text/javascript"></script>
    <!-- Plugins for presentation and navigation  -->
    <script src="../assets/demo/modernizr.js" type="text/javascript"></script>
    <script src="../assets/demo/vertical-nav.js" type="text/javascript"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Js With initialisations For Demo Purpose, Don't Include it in Your Project -->
    <script src="../assets/demo/demo.js" type="text/javascript"></script>
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-kit.js?v=2.2.0" type="text/javascript"></script>
    <script>
        $().ready(function() {
            materialKitDemo.initContactUsMap();
        });

    </script>
</body>

</html>
