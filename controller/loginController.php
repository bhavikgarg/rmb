<?php

require '../config/config.php';

/*print_r($_POST);*/

$username=mysqli_real_escape_string($con , $_POST['username']);
$password=mysqli_real_escape_string($con , $_POST['password']);

/*echo "Username is : ".$username;
echo "Pwd is : ".$password;*/

$sql = "SELECT * FROM login WHERE username='".$username."' AND password='".$password."' AND status = 1";
// echo "The SQL fired is : ".$sql;
$res = mysqli_query($con , $sql);

$cnt = mysqli_num_rows($res);
// echo "Count is : ".$cnt;
if($cnt==1)
{
	$row=mysqli_fetch_array($res , MYSQLI_ASSOC);
	$un=$row['username'];
	$ut=$row['usertype'];
	$group = $row['groupName'];
	
	session_start();
	$_SESSION['username'] = $un;
	$_SESSION['type'] = $ut;
	$_SESSION['group'] = $group;

	
}
else
{
	
	$ut = 0;
}

echo $ut;
