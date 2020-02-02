
  <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('./assets/img/bg10.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h1 class="title">SOCIETIES AND CLUBS</h1>
          
<?php
include("../../assets/php/dbconfig.php");
          $query2="SELECT count(*) FROM society_table";
  $sq2=mysqli_query($dbconfig,$query2);
     $row1=mysqli_fetch_array($sq2);
            
            ?>
          
          <h3>A total of <span style="font-size: 2.3rem; font-weight: 500;" class="number-counter" data-count-from="0" data-count-to="<?php echo $row1['count(*)']; ?>" data-count-speed="50"></span> societies enrolled.</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="team-2" id="team-2">
        <div class="container">
          <div class="row">

            <?php


    
  $query1="SELECT * FROM society_table";
  $sq1=mysqli_query($dbconfig,$query1);
     while($row=mysqli_fetch_array($sq1))
     {
      echo 
      "

            <div class='col-md-3'>
              <div class='card card-profile card-plain'>
                <div class='card-header card-header-image'>
                  
                    <img class='img' src=' ".$row['so_logo']." ' height=200px;>
                  
                </div>
                <div class='card-body'>
                  <h4 class='card-title'>".$row['so_abbr']."</h4>
                  <h6 class='card-category text-muted'>".$row['so_name']."</h6>
                </div>

                <a href='examples/team.php?societyid=".$row['so_id']."'> <button class='btn btn-primary-small'> View Team </button> </a>

                <div class='card-footer justify-content-center'>
                  <a href='#pablo' class='btn btn-just-icon btn-dribbble btn-round'><i class='fa fa-dribbble'></i></a>
                  <a href='#pablo' class='btn btn-just-icon btn-twitter btn-round'><i class='fa fa-facebook'></i></a>
                  <a href='#pablo' class='btn btn-just-icon btn-twitter btn-round'><i class='fa fa-instagram'></i></a>
                </div>
              </div>
            </div>
      
      ";
     } 
?>
          </div>
         



        </div>
      </div>
    </div>
  </div>
<br>

  <script type="text/javascript">(function($) {
  $.fn.countTo = function(options) {
    return this.each(function() {
      //-- Arrange
      var FRAME_RATE = 60; // Predefine default frame rate to be 60fps
      var $el = $(this);
      var countFrom = parseInt($el.attr('data-count-from'));
      var countTo = parseInt($el.attr('data-count-to'));
      var countSpeed = $el.attr('data-count-speed'); // Number increment per second

      //-- Action
      var rafId;
      var increment;
      var currentCount = countFrom;
      var countAction = function() {              // Self looping local function via requestAnimationFrame
        if(currentCount < countTo) {              // Perform number incremeant
          $el.text(Math.floor(currentCount));     // Update HTML display
          increment = countSpeed / FRAME_RATE;    // Calculate increment step
          currentCount += increment;              // Increment counter
          rafId = requestAnimationFrame(countAction);
        } else {                                  // Terminate animation once it reaches the target count number
          $el.text(countTo);                      // Set to the final value before everything stops
          //cancelAnimationFrame(rafId);
        }
      };
      rafId = requestAnimationFrame(countAction); // Initiates the looping function
    });
  };
}(jQuery));

//-- Executing
$('.number-counter').countTo();</script>