<?php
	
	$serverName = "localhost";
	$user = "root";
	$password = "";
	$dbName = "dbInquiry";


	$con = mysqli_connect($serverName,$user,$password,$dbName);
	
	if (!$con)
	{
		die("Connection Failed" .mysqli_connect_error());
	}
?>