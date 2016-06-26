<?php

session_start();
include('config/config.php');

$type = $_POST['type'];
$username = $_SESSION['username'];
if($type == 'new')
{

	$startdate = $_POST['startdate'].'+'.$_POST['zone'];
	$title = $_POST['title'];
	$date = $_POST['startdate'];
	$insert = mysqli_query($con,"INSERT INTO calendar(`title`, `startdate`, `enddate`, `allDay`,`username`,`date`) VALUES('$title','$startdate','$startdate','false','$username','$date')");
	$lastid = mysqli_insert_id($con);
	echo json_encode(array('status'=>'success','eventid'=>$lastid));
}

if($type == 'changetitle')
{
	$eventid = $_POST['eventid'];
	$title = $_POST['title'];
	$email = $_POST['email'];
	$message = $_POST['msg'];
	$update = mysqli_query($con,"UPDATE calendar SET title='$title', email = '$email' where id='$eventid'");
	if($update)
	{
		$subject = "Reminder";
		mail($email, $subject, $message);
		echo json_encode(array('status'=>'success'));
	}
	else
		echo json_encode(array('status'=>'failed'));
}

if($type == 'resetdate')
{
	$title = $_POST['title'];
	$startdate = $_POST['start'];
	$enddate = $_POST['end'];
	$eventid = $_POST['eventid'];
	$email = $_POST['email'];
	$update = mysqli_query($con,"UPDATE calendar SET title='$title', email = '$email', startdate = '$startdate', enddate = '$enddate' where id='$eventid'");
	if($update)
		echo json_encode(array('status'=>'success'));
	else
		echo json_encode(array('status'=>'failed'));
}

if($type == 'remove')
{
	$eventid = $_POST['eventid'];
	$delete = mysqli_query($con,"DELETE FROM calendar where id='$eventid'");
	if($delete)
		echo json_encode(array('status'=>'success'));
	else
		echo json_encode(array('status'=>'failed'));
}

if($type == 'fetch')
{
	$events = array();
	$query = mysqli_query($con, "SELECT * FROM calendar WHERE username = '".$username."'");
	while($fetch = mysqli_fetch_array($query,MYSQLI_ASSOC))
	{
	$e = array();
    $e['id'] = $fetch['id'];
    if(!empty($fetch['email']))
    {
    	$e['title'] = $fetch['title'].":: \r\n".$fetch['email'];	
    }
    else
    {
    	$e['title'] = $fetch['title'];
    }
    $e['start'] = $fetch['startdate'];
    $e['end'] = $fetch['enddate'];

    $allday = ($fetch['allDay'] == "true") ? true : false;
    $e['allDay'] = $allday;

    array_push($events, $e);
	}
	echo json_encode($events);
}


?>