<?php

session_start();
$response = array();

$username = $_SESSION['username'];
require 'config/config.php';

if(isset($_POST))
{
	$description = $_POST['description'];
	$sentBy = 'RMB';
	if(isset($_POST['validity']))
		$validity = $_POST['validity'];
	else
		$validity = "";

	$sendTo = $_POST['sendTo'];
	if($sendTo === 'all')
	{
		if(isset($_POST['groupName']) && !empty($_POST['groupName']))
		{
			$sendTo = $_POST['groupName'];
		}
	}
	else if($sendTo === 'member')
	{
		if(isset($_POST['selectMember']) && !empty($_POST['selectMember']))
		{
			$member = $_POST['selectMember'];
			$sendTo = end(explode(",", $member));
		}
	}

	$sql = "INSERT INTO goodies(description, validity, isUsed, sendTo, sentBy,isSeen) VALUES ('$description','$validity','n','$sendTo','$sentBy','n')";

	$res = mysqli_query($con , $sql);

	if($res)
	{
		$response['error'] = false;
		$response['message'] = "Goodie sent to ".$sendTo." successfully";
	}
	else
	{
		$response['error'] = true;
		$response['message'] = "Goodie not sent..Try again";	
	}
	echo json_encode($response);
}