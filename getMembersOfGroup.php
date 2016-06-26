<?php

require 'config/config.php';

if(isset($_GET['name']))
{
	$name = $_GET['name'];
	$html = "";
	$sql = "SELECT distinct(EMAILID), USERNAME from grouprecord WHERE GNAME = '".$name."'";
	$res = mysqli_query($con, $sql);
	while($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
	{
		$radio = "<input type = 'radio' class = 'minimal' name = 'selectMember' value = '".$row['USERNAME'].",".$row['EMAILID']."'>";
		$html .= "<tr><td>".$radio."</td><td>".$row['USERNAME']."</td><td>".$row['EMAILID']."</td></tr>";
	}
	echo $html;
}