<?php



require 'config/config.php';

session_start();

$group = $_SESSION['group'];

class Category {
	var $name;
}



$sql = "select distinct Category from industry join groupdata on groupdata.Industry = industry.Industry_Name where Group_Name='".$group."'";

$getAll = array();

$res = mysqli_query($con , $sql);
while($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
{
	$obj = new Category();
	$obj->name = $row['Category'];
	$getAll[] = $obj;
}

echo json_encode($getAll);