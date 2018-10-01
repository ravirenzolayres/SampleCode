<?php
	include 'header.php';
	include 'connection.php';
?>

<div class="container">
	<div class="row">
		<div class="col-sm-12 text-center">
			<table class="table text-center">
				<tr>
					<td class="text-center">Customer ID</td>
					<td class="text-center">Name</td>
					<td class="text-center">Email</td>
					<td class="text-center">Message</td>
					<td class="text-center">Actions</td>
				</tr>

			<?php

			$select = "SELECT * FROM tblinquire";
			$sql = mysqli_query($con,$select);

			while($row = mysqli_fetch_assoc($sql))
			{
				echo
				"<tr>
					<td>{$row['cust_id']}</td>
					<td>{$row['cust_name']}</td>
					<td>{$row['email']}</td>
					<td>{$row['message']}</td>
					<td>
						<button class='btn btn-primary' id='update'>UPDATE</button>
						<button class='btn btn-danger' id='delete'>DELETE</button>
					</td>
				</tr>";
			}
			?>
			</table>
		</div>
	</div>
</div>

<div id="modalUpdate" class="modalContainer">
	<div class="modalContent">
		<div class="modalHeader">
			<a href="#" id='btnX' class='btnX'>&times;</a>
			<h1>Update Information</h1>
		</div>
		<div class="modalBody">
			<form action="add.php" method="POST">
					<input autocomplete="off" class="update-form-control" type="hidden" name="cust_id" id="cust_id" />
					<input autocomplete="off" class="update-form-control" type="text" name="cust_name" id="cust_name" placeholder="Name"/>
					<input autocomplete="off" class="update-form-control" type="email" name="email" id="email" placeholder="Email"/>
					<input autocomplete="off" class="update-form-control" type="text" name="message" id="message" placeholder="Message"/>
					<input class="update-form-control" type="submit" name="save" id="save" />
				</form>
		</div>

		<div class="modalFooter">
			
		</div>
	</div>
</div>

<?php
	include 'footer.php';
?>