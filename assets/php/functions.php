<?php
include("dbconfig.php");
function create_user($name,$username,$useremail,$usermob,$password){
	$password=md5($password);
$query="INSERT into user_table (user_name,user_uname,user_email,user_mobile,user_password) VALUES('$name','$username','$useremail','$usermob','$password')";
$sq=mysqli_query($dbconfig,$query);
if($sq) return 1;

}
?>