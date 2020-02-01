<?php
include("../../assets/php/dbconfig.php");
$societyid=$_GET["societyid"];

    
  $query1="SELECT * FROM society_table WHERE so_id ='".$societyid."' ";
  $sq1=mysqli_query($dbconfig,$query1);
     $row1=mysqli_fetch_array($sq1); 
?>

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

<body class="ecommerce-page sidebar-collapse">
    <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="https://demos.creative-tim.com/material-kit-pro/index.html">
                    ConnecTU </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
             
                    <li class="button-container nav-item iframe-extern">
                        <a href="https://www.creative-tim.com/product/material-kit-pro?ref=presentation" target="_blank" class="btn  btn-rose   btn-round btn-block">
                            <i class="material-icons"></i> Home
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('../assets/img/examples/clark-street-merc.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <div class="brand">
                        <h2 class="title"> <?php echo $row1["so_name"] ?> </h2>
                        <img src="../<?php echo $row1["so_logo"] ?> " style="height:200px;"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main main-raised">
        <div class="section text-center">
            <div class="container">
                <h2 class="section-title">Our Team</h2>

                <div class="row">
 <?php



  $query="SELECT * FROM members_table WHERE mem_soc_id =".$societyid;
  $sq=mysqli_query($dbconfig,$query);
  while($row=mysqli_fetch_array($sq))
  {
    
    $query_get_user="SELECT * from user_table WHERE user_id = ".$row['mem_user_id'];
    $abc=mysqli_query($dbconfig,$query_get_user);
    // echo $query_get_user;
	  $i=0;
    $result_user=mysqli_fetch_array($abc);
$i++;
    echo "
                    <div class='col-md-4'>
                        <div class='team-player'>
                            <div class='card card-plain'>
                                <div class='col-md-6 ml-auto mr-auto'>
                                    <img src='../assets/img/faces/".$i.".jpg' alt='Thumbnail Image' class='img-raised rounded-circle img-fluid'>
                                </div>
                                <h4 class='card-title'>".$result_user['user_name']."
                                   
                                </h4>
                                <div class='card-footer justify-content-center'>
                  <a href='#pablo' class='btn btn-just-icon btn-link btn-twitter'><i class='fa fa-twitter'></i></a>
                  <a href='#pablo' class='btn btn-just-icon btn-link btn-facebook'><i class='fa fa-facebook-square'></i></a>
                  <a href='#pablo' class='btn btn-just-icon btn-link btn-google'><i class='fa fa-google'></i></a>
                </div>
                            </div>
                        </div>
                    </div>
    
    ";
    
  }
?>
 </div>
            </div>
        </div>
    </div><!-- section -->
    <br>
    <!-- section -->

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
        $(document).ready(function() {
            var slider2 = document.getElementById('sliderRefine');

            noUiSlider.create(slider2, {
                start: [101, 790],
                connect: true,
                range: {
                    'min': [30],
                    'max': [900]
                }
            });

            var limitFieldMin = document.getElementById('price-left');
            var limitFieldMax = document.getElementById('price-right');

            slider2.noUiSlider.on('update', function(values, handle) {
                if (handle) {
                    limitFieldMax.innerHTML = $('#price-right').data('currency') + Math.round(values[handle]);
                } else {
                    limitFieldMin.innerHTML = $('#price-left').data('currency') + Math.round(values[handle]);
                }
            });
        });
    </script>
</body>
</html>