<?php
	include 'header.php';
	include 'connection.php';
?>

	<?php

		if (isset($_GET['btnUpdate']))
		{
			$updateId = $_GET['cust_id'];
			$updateName = $_POST['cust_name'];
			$updateEmail = $_POST['email'];
			$updateMessage = $_POST['message'];

			$update = "UPDATE `tblinquire` SET `cust_name`='$updateName',`email`='$updateEmail',
							  `message`='$updateMessage' WHERE `cust_id`='updateId'";

			$sql = mysqli_query($con,$update);
			header('location:viewData.php');
		}
	?>
	
<?php
	include 'footer.php';
?> 