<?php

session_start();
require 'config/config.php';

if(isset($_POST))
{

	$response = array();
	$reference = $_POST['reference'];
	$remark = $_POST['remark'];

	$category = $_POST['category'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];

	$member = $_POST['member'];
	$username = $_SESSION['username'];
	$group = $_SESSION['group'];
	$res = mysqli_query($con, "SELECT Group_Id from groupdata WHERE Group_Name = '".$group."'");
	if($row = mysqli_fetch_array($res , MYSQLI_ASSOC))
	{
		$groupID = $row['Group_Id'];
	}

	$arr = explode(",",$member);
	
	$recieverMail = $arr[1];

	$sql = "insert into send_message(Reference,Remark,Category,Group_Id,Receiver_Mail_Id,sender_username, User_Name,User_Address,User_Phone,User_Mail) values ('".$reference."','".$remark."','".$category."','".$groupID."','".$recieverMail."','".$username."','".$name."','".$address."','".$contact."','".$email."')";
	
	$res = mysqli_query($con , $sql);

	// send mail here

	if($res)
	{
		$response['error'] = false;
		$response['message'] = "Reference posted successfully";
	}
	else
	{
		$response['error'] = true;
		$response['message'] = "Could not post reference";	
	}
	echo json_encode($response);
}