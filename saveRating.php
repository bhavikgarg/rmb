<?php

require 'config/config.php';

if(isset($_GET))
{
	$response = array();
	$id = $_GET['id'];
	$rating = $_GET['rating'];

	$sql = "UPDATE send_message SET Rating = '".$rating."' WHERE id = '".$id."'";
	$res = mysqli_query($con, $sql);

	$response['error'] = false;
	$response['message'] = "Rating saved successfully";

	echo json_encode($response);
}