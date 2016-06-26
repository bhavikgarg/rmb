
<?php

require 'config/config.php';

class Group {
	var $id;
	var $name;
}



$sql = "SELECT DISTINCT Group_Name, Group_Id FROM groupdata WHERE status =  'Active'";

$getAll = array();

$res = mysqli_query($con , $sql);
while($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
{
	$obj = new Group();
	$obj->id = $row['Group_Id'];
	$obj->name = $row['Group_Name'];
	$getAll[] = $obj;
}

echo json_encode($getAll);