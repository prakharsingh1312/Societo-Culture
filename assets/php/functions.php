<?php
include("dbconfig.php");
function create_user($name,$username,$useremail,$usermob,$password){
	$password=md5($password);
	$query="INSERT into user_table (user_name,user_uname,user_email,user_mobile,user_password) VALUES('$name','$username','$useremail','$usermob','$password')";
	$sq=mysqli_query($dbconfig,$query);
	if($sq) return 1;
}
function login_user($username,$password){
	$password=md5($password);
	$lq="SELECT * FROM user_table WHERE user_name='$username'";
	$sq=mysqli_query($con,$lq);
	$row=mysqli_fetch_array($sq);
	if(!empty($row))
	{
		if (row['user_password'] == $password) {
			return 1;
		}
		else return 0;
	}
	else return -1;
}
?>