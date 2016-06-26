<?php

require '../config/config.php';

if(isset($_GET['id']) && !empty($_GET['id'])){

	$id = $_GET['id'];
	$delUser = "DELETE from login WHERE id = '".$id."'";
	$res = mysqli_query($con,$delUser);
	if($res){
		echo "1";
	}
	else
	{
		echo "0";
	}

}