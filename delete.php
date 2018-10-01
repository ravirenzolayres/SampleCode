<?php
	include 'connection.php';
?>

<?php
	if (isset($_GET['delete_id']))
	{
		$deleteId = $_GET['delete_id'];

		$delete = "DELETE FROM tblinquire WHERE cust_id='$deleteId'";
		$sql = mysqli_query($con,$delete);
		header('location:viewData.php');
	}
?>
