<?php
include '../../assets/php/functions.php';
if(isset($_GET["submitevent"]))
{
  $eventname=$_POST["eventname"];
  $eventdate=$_POST["eventdate"];
  $eventvenue=$_POST["eventvenue"];
  $eventdesc=$_POST["eventdesc"];
  $eventreglink=$_POST["eventreglink"];
	$file=$_FILES['event_poster'];
$eventposter=upload_file($file);
  $societyid=$_SESSION["soc_id"];
  $query="INSERT into events_table (event_name,event_poster,event_des,event_tags,event_type,event_venue,event_date,event_reg_link,society_id) VALUES('$eventname','$eventposter','$eventdesc','123','1','$eventvenue','$eventdate','$eventreglink','$societyid') ";
  $abc=mysqli_query($dbconfig,$query);
  if($abc) echo"event added";
  else echo "error";
}

if(isset($_GET["submitannouncement"]))
{
  // $eventname=$_POST["eventname"];
  // $eventdate=$_POST["eventdate"];
  // $eventvenue=$_POST["eventvenue"];
  $eventdesc=$_POST["eventdesc"];
  // $eventreglink=$_POST["eventreglink"];
  $societyid=$_SESSION["soc_id"];
  $query="INSERT into events_table (event_des,event_type,society_id) VALUES('$eventdesc','2','$societyid') ";
  $abc=mysqli_query($dbconfig,$query);
  if($abc) echo"event added";
  else echo "error";
}
?>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Adding Events to Publish</h4>
                  <p class="card-category">Enter the details of your event</p>
                </div>
                <div class="card-body">
                  <form method="post" onsubmit="return false" id="event_form" action="" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Society Name (FIXED)</label>
                          <input type="text" class="form-control " value=" <?php echo $_SESSION['soc_name']; ?> " disabled>
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div class="form-group">
                          <label class="bmd-label-floating">Event Name</label>
                          <input type="text" name="eventname" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label-control">Start Date</label>
                          <input type="date" class="form-control datetimepicker" name="eventdate" required/>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label-control">End Date</label>
                          <input type="date" class="form-control datetimepicker" />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Venue</label>
                          <input type="text" class="form-control" name="eventvenue" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                      <div class="form-group">
<input type="file" class="custom-file-input bmd-label-floating" id="customFile" name="event_poster">

                        <label class="custom-file-label bmd-label-floating" for="customFile">Choose file</label> 
                      </div>
                    </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Registration Link</label>
                          <input type="text" class="form-control" name="eventreglink" required>
                        </div>
                      </div>
                    </div>
                   
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Event Description</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> Please add in depth details of the event</label>
                            <textarea class="form-control" name="eventdesc" rows="5" required></textarea>
                          </div>
                        </div>
                      </div>
                    </div>

                    <input type="submit" name="submitevent" id="submitevent" class="btn btn-success pull-right" value="Post It !"></input>

                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Adding Announcements</h4>
                  <p class="card-category">Enter the details of the announcement</p>
                </div>
                <div class="card-body">
                  <form method="post" onsubmit="return false" id="announcement_form" action="" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Society Name (FIXED)</label>
                          <input type="text" class="form-control" value=" <?php echo $_SESSION['soc_name']; ?> " disabled>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label-control">Start Date</label>
                          <input type="date" class="form-control datetimepicker" name="eventdate" required/>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label-control">End Date</label>
                          <input type="date" class="form-control datetimepicker" value=""/>
                        </div>
                      </div>
                    </div> -->
                    <div class="row">
                      
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Announcement</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> Please add in depth details of the announcement</label>
                            <textarea class="form-control" rows="5" name="eventdesc" required></textarea>
                          </div>
                        </div>
                      </div>
                    </div>

                   

                    <input type="submit" name="submitannouncement" class="btn btn-warning pull-right" value="Announce"></input>

                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            </div>
          </div>
        