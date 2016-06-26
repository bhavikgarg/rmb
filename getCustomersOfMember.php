<?php

require 'config/config.php';

if(isset($_GET['name']))
{
	$name = $_GET['name'];
	$customerOf = end(explode(",", $name));
	$html = "";
	$sql = "SELECT * from happy_customers WHERE customerOf = '".$customerOf."'";
	$res = mysqli_query($con, $sql);
	while($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
	{
		
		$html .= "<tr><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['contact']."</td><td>".$row['address']."</td><td>".$row['website']."</td><td>".$row['dob']."</td><td>".$row['doa']."</td></tr>";
	}
	echo $html;
}