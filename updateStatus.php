<?php

require 'config/config.php';

if(isset($_GET['id']))
{
	$id = $_GET['id'];
	echo "ID is : ".$id;
	$sql = "UPDATE goodies SET isSeen = 'y' WHERE id = '".$id."'";

	$res = mysqli_query($con , $sql);

	if($res)
	{
		echo "Yes";
	}
	else
	{	
		echo "No";
	}
}