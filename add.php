<?php
	include 'connection.php';
?>

<?php

	if (isset($_POST['cust_id']))
	{
		$id = $_POST['cust_id'];
		$name = $_POST['cust_name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$insert = "INSERT INTO `tblinquire`(`cust_id`,`cust_name`,`email`,`message`) VALUES ('$id','$name','$email','$message')";
		mysqli_query($con,$insert);
		header('location:index.php');
	}
?>
