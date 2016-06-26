<?php

require 'config/config.php';

class Member
{
	
	var $name;
	var $group;
}

$getAll = array();
$sql = "SELECT * from grouprecord ORDER BY GNAME";

$res = mysqli_query($con , $sql);
while($row = mysqli_fetch_array($res , MYSQLI_ASSOC))
{
	$obj = new Member();
	
	$obj->name = $row['USERNAME'];
	$obj->group = $row['GNAME'];
	$getAll[] = $obj;

}

echo json_encode($getAll);
