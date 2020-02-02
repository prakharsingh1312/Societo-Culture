<?php
include("dbconfig.php");

function create_user($name,$username,$useremail,$usermob,$password){
	global $dbconfig;
	$password=md5($password);
	$query="INSERT into user_table (user_name,user_uname,user_email,user_mobile,user_password) VALUES('$name','$username','$useremail','$usermob','$password')";
	$sq=mysqli_query($dbconfig,$query);
	if($sq) return 1;
	else return $query;
}

function login_user($username,$password){
	global $dbconfig;
	$password=md5($password);
	$query="SELECT * FROM user_table WHERE user_uname='$username'";
	$sq=mysqli_query($dbconfig,$query);
	$row=mysqli_fetch_array($sq);
	if(!empty($row))
	{
		if ($row['user_password'] == $password) {
			$query_get_society="SELECT * from members_table WHERE mem_user_id =".$row['user_id'];
			$abc=mysqli_query($dbconfig,$query_get_society);
			$result_society=mysqli_fetch_array($abc);

			$query1="SELECT * from society_table WHERE so_id =".$result_society['mem_soc_id'];
			$abc1=mysqli_query($dbconfig,$query1);
			$result1=mysqli_fetch_array($abc1);

			$_SESSION['soc_id']=$result1['so_id'];
			$_SESSION['soc_name']=$result1['so_name'];
			$_SESSION['user_name']=$row['user_name'];
			$_SESSION['user_id']=$row['user_id'];
			$_SESSION['user_uname']=$row['user_uname'];
			$_SESSION['user_email']=$row['user_email'];
			$_SESSION['user_mob']=$row['user_mobile'];
			

			return 1;
			}
			else return 0;
		}
	
	else return -1;
}

function upcoming_events(){
	global $dbconfig;
	$content='';
	$query="SELECT * FROM events_table WHERE DATE(event_date) >= DATE(NOW()) AND event_type='1' ";
	$sq=mysqli_query($dbconfig,$query);
	while($row=mysqli_fetch_array($sq)){
		$eventname=$row['event_name'];
		$eventdesc=$row['event_des']; $eventdesc = substr($eventdesc,0,100); $eventdesc.='...';
		$posterpath=$row['event_poster'];
		$societyid=$row['society_id'];
		$eventdate=date("d-m-Y",strtotime($row['event_date']));
		$query_get_society="SELECT * from society_table WHERE so_id = '".$societyid."' ";
		$abc=mysqli_query($dbconfig,$query_get_society);
		$result_society=mysqli_fetch_array($abc);

		$societyname=$result_society['so_name'];
		$logopath=$result_society['so_logo'];


		$content.="<div class='col-md-6 col-lg-4'>
            <div class='rotating-card-container'>
              <div class='card card-rotate card-background'>
                <div class='front front-background' style=\"background-image: url('".$posterpath."');\">
                  <div class='card-body'>
                    <h6 class='card-category'>".$societyname."</h6>
                    <a href='#pablo'>
                      <h3 class='card-title'>".$eventname."</h3>
                    </a>
                    <p class='card-description'>
                     ".$eventdesc."
                    </p>
                    <h4 class='card-title'> ".$eventdate." </h4>
                  </div>
                </div>
                <div class='back back-background' style=\"background-image: url('".$posterpath."');\">
                  <div class='card-body' style='text-align:-webkit-center'>
                    <img src='".$logopath."' style='width:50%'/>
                    
                    <div class='footer text-center'>
                      <a href='examples/event.php?eventid=".$row['event_id']."' class='btn btn-info btn-round'>Explore</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>";
	}
	return $content;
}


function past_events(){
	global $dbconfig;
	$content='';
	$query="SELECT * FROM events_table WHERE DATE(event_date) < DATE(NOW())  AND event_type='1' ORDER BY DATE(event_date) DESC";
	$sq=mysqli_query($dbconfig,$query);
	while($row=mysqli_fetch_array($sq)){
		$eventname=$row['event_name'];
		$eventdesc=$row['event_des']; $eventdesc = substr($eventdesc,0,150); $eventdesc.='...';
		$posterpath=$row['event_poster'];
		$societyid=$row['society_id'];
		$eventdate=date("d-m-Y",strtotime($row['event_date']));

		$query_get_society="SELECT * from society_table WHERE so_id = '".$societyid."' ";
		$abc=mysqli_query($dbconfig,$query_get_society);
		$result_society=mysqli_fetch_array($abc);

		$societyname=$result_society['so_name'];
		$logopath=$result_society['so_logo'];


		$content.="<div class='col-md-6 col-lg-6' '>
                    <div class='card card-background' style=\"background-image: url('".$posterpath."');\">
                        <div class='card-body' >
                            <h6 class='card-category text-info'>".$societyname."</h6>
                            <a href='#pablo'>
                                <h3 class='card-title'>".$eventname."</h3>
                            </a>
                            <p class='card-description'>
                                ".$eventdesc."
                            </p>
                             <h4 class='card-title'> ".$eventdate." </h4>
                        </div>
                    </div>
                </div>";
	}
	return $content;
}

function filter_events_by_tag($tagvalue){
	global $dbconfig;
	 $content='';
		$reqtag=$tagvalue;
		$query="SELECT * FROM events_table WHERE DATE(event_date) >= DATE(NOW()) AND event_type='1' AND event_tags like '%".$reqtag."%' ORDER BY DATE(event_date)";
		$sq=mysqli_query($dbconfig,$query);
		while($row=mysqli_fetch_array($sq)){
		$eventname=$row['event_name'];
		$eventdesc=$row['event_des']; $eventdesc = substr($eventdesc,0,100); $eventdesc.='...';
		$posterpath=$row['event_poster'];
		$societyid=$row['society_id'];
		$eventdate=date("d-m-Y",strtotime($row['event_date']));

		$query_get_society="SELECT * from society_table WHERE so_id = '".$societyid."' ";
		$abc=mysqli_query($dbconfig,$query_get_society);
		$result_society=mysqli_fetch_array($abc);

		$societyname=$result_society['so_name'];
		$logopath=$result_society['so_logo'];


		$content.="<div class='col-md-6 col-lg-4'>
            <div class='rotating-card-container'>
              <div class='card card-rotate card-background'>
                <div class='front front-background'  style=\"background-image: url('".$posterpath."');\">
                  <div class='card-body'>
                    <h6 class='card-category'>".$societyname."</h6>
                    <a href='#pablo'>
                      <h3 class='card-title'>".$eventname."</h3>
                    </a>
                    <p class='card-description'>
                     ".$eventdesc."
                    </p>
                    <h4 class='card-title'> ".$eventdate." </h4>
                  </div>
                </div>
                <div class='back back-background' style=\"background-image: url('".$posterpath."');\">
                  <div class='card-body' style='text-align:-webkit-center'>
                    <img src='".$logopath."' style='width:50%'/>
                    
                    <div class='footer text-center'>
                      <a href='examples/event.php?eventid=".$row['event_id']."' class='btn btn-info btn-round'>Explore</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>";
	}

	
	return $content;
}

function filter_events_by_society($societyid){
	global $dbconfig;
	$content='';
	$query="SELECT * FROM events_table WHERE society_id = ' ".$societyid." '  AND event_type='1'  ";
	$sq=mysqli_query($dbconfig,$query);
	while($row=mysqli_fetch_array($sq)){
		$eventname=$row['event_name'];
		$eventdesc=$row['event_des']; $eventdesc = substr($eventdesc,0,100); $eventdesc.='...';
		$posterpath=$row['event_poster'];
		$societyid=$row['society_id'];
		$eventdate=date("d-m-Y",strtotime($row['event_date']));

		$query_get_society="SELECT * from society_table WHERE so_id = '".$societyid."' ";
		$abc=mysqli_query($dbconfig,$query_get_society);
		$result_society=mysqli_fetch_array($abc);

		$societyname=$result_society['so_name'];
		$logopath=$result_society['so_logo'];


		$content.="<div class='col-md-6'>
                    <div class='card card-background' style=\"background-image: url('".htmlspecialchars($posterpath)."');\">
                        <div class='card-body'>
                            <h6 class='card-category text-info'>".$societyname."</h6>
                            <a href='#pablo'>
                                <h3 class='card-title'>".$eventname."</h3>
                            </a>
                            <p class='card-description'>
                                ".$eventdesc."
                            </p>
                             <h4 class='card-title'> ".$eventdate." </h4>
                        </div>
                    </div>
                </div>";
	}
	return $content;
}

function upload_file($file){
    $name = $file["name"];
	$tmp = explode('.', $name);
    $ext = end($tmp);
    $path='assets/img/'.$name.'.'.$ext;
    $file=$file['tmp_name'];
    move_uploaded_file($file,'../../user/'.$path);
    return $path;
}

function show_announcements(){
	global $dbconfig;
	$content='';
	$query="SELECT * FROM events_table WHERE event_type='2' ORDER BY event_time DESC";
	$sq=mysqli_query($dbconfig,$query);
	while($row=mysqli_fetch_array($sq)){
		$eventname=$row['event_name'];
		$eventdesc=$row['event_des']; $eventdesc = substr($eventdesc,0,250);
		$posterpath=$row['event_poster'];
		$societyid=$row['society_id'];
		
		$query_get_society="SELECT * from society_table WHERE so_id = '".$societyid."' ";
		$abc=mysqli_query($dbconfig,$query_get_society);
		$result_society=mysqli_fetch_array($abc);

		$societyname=$result_society['so_name'];
		$logopath=$result_society['so_logo'];


		$content.="
                                <div class='media' style='padding:0% 10% 0% 10%;'>
                                    <a class='float-left' href='#pablo'>
                                        <div class='avatar'>
                                            <img class='media-object' src='".$logopath."' alt='...'>
                                        </div>
                                    </a>
                                    <div class='media-body'>
                                        <h4 class='media-heading'>".$societyname." <small>&#xB7; Just Now </small></h4>
                                        <p>".$eventdesc."</p>
                                    </div>
                                </div>
                            ";
	}
	return $content;
}
function show_members(){
	$_SESSION['soc_id']=1;
	global $dbconfig;
	$content='';
	$query="SELECT * FROM user_table,members_table,departments_table WHERE mem_soc_id={$_SESSION['soc_id']} and user_id=mem_user_id and mem_dept=dept_id ORDER BY mem_score DESC";
	$sq=mysqli_query($dbconfig,$query);
	$i=0;
	while($row=mysqli_fetch_array($sq)){
		$i++;
		$content.="<tr>
                        <td>{$i}</td>
						<td>{$row['user_name']}</td>
                        <td>{$row['mem_score']}</td>
                        <td>{$row['dept_name']}</td>
                      </tr>";
	}
		return $content;
}
?>