<?php

session_start();
require 'config/config.php';
$response = array();
if(isset($_POST))
{
	if(isset($_POST['name']))
	{
		$name = $_POST['name'];
	}
	else
	{
		$name = "";
	}

	if(isset($_POST['email']))
	{
		$email = $_POST['email'];
	}
	else
	{
		$email = "";
	}

	if(isset($_POST['contact']))
	{
		$contact = $_POST['contact'];
	}
	else
	{
		$contact = "";
	}

	if(isset($_POST['address']))
	{
		$address = $_POST['address'];
	}
	else
	{
		$address = "";
	}

	if(isset($_POST['website']))
	{
		$website = $_POST['website'];
	}
	else
	{
		$website = "";
	}
	if(isset($_POST['dob']))
	{
		$dob = $_POST['dob'];
	}
	else
	{
		$dob = "";
	}
	if(isset($_POST['doa']))
	{
		$doa = $_POST['doa'];
	}
	else
	{
		$doa = "";
	}

	$customerOf = $_SESSION['username'];

	$sql = "INSERT INTO happy_customers(name, email, contact, address, website, dob, doa, customerOf) VALUES ('$name','$email','$contact','$address','$website','$dob','$doa','$customerOf')";

	$res = mysqli_query($con , $sql);

	if($res)
	{
		$response['error'] = false;
		$response['message'] = "Customer added successfully";
	}
	else
	{	
		$response['error'] = true;
		$response['message'] = "Error in adding customer";
	}

	echo json_encode($response);

}