<?php
$host = "127.0.0.1";
$user = "root";
$pass = "root";
$db = "ddtc";
$conn = new mysqli($host,$user,$pass,$db);
date_default_timezone_set('Asia/Bangkok');
if(mysqli_connect_error())
{
	echo "Connect Failed".mysqli_connect_error();
}else{
	//echo "Connect".$db."OK";
	$conn -> query("set name utf8");
}
?>