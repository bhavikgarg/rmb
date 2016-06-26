<?php

session_start();
require 'config/config.php';



if(isset($_GET['category']))
{
	$group = $_SESSION['group'];
	$category = $_GET['category'];
	$sql = "select * from grouprecord where GNAME='".$group."' and CATEGORY='".$category."'";
	$res = mysqli_query($con, $sql);
	$string = "<table class = 'table table-striped'><tr><th></th><th> Group Username </th><th> Email ID </th></tr>";

	while($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
	{
		$string .= "<tr><td><input type = 'radio' class = 'minimal' name = 'member' value = '".$row['USERNAME'].",".$row['EMAILID']."'></td><td>".$row['USERNAME']."</td><td>".$row['EMAILID']."</td></tr>";
	}

	$string .= "</table>";

	echo $string;

}