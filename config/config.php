<?php

ob_start();

define("HOST","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE_NAME","refermyb_projectrmb");

/*$db = new mysqli(HOST , USERNAME , PASSWORD , DATABASE_NAME);

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}*/

$con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE_NAME);

/* setting default time zone  */
date_default_timezone_set('Asia/Calcutta');