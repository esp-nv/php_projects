<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
                <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://sourcecodester.com">Sourcecodester</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Delete Uploaded File Using MySQLi</h3>
		<hr style="border-top:1px dotted #000;"/>
		<div class="col-md-4">
			<form method="POST" action="upload.php" enctype="multipart/form-data">
				<div class="form-group">	
					<input name="file" type="file" required="required"/>
				</div>	
				<button class="btn btn-primary" name="upload"><span class="glyphicon glyphicon-upload"></span> Upload</button>
			</form>
		</div>
		<div class="col-md-8">
			<table class="table table-bordered">
				<thead class="alert-info">
					<tr>
						<th>File Name</th>
						<th>File Location</th>
						<th>Action</th>
					</tr>
				<thead>
				<tbody>
					<?php
						require 'dbcon.php';
						$query=mysqli_query($conn, "SELECT * FROM `file`") or die(mysqli_error());
						while($fetch=mysqli_fetch_array($query)){
					?>
						<tr>
							<td><?php echo $fetch['filename']?></td>
							<td><?php echo $fetch['location']?></td>
							<td><a href="delete.php?file_id=<?php echo $fetch['file_id']?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
						</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</div>	
<script src="js/jquery-3.2.1.min.js"></script>	
<script src="js/bootstrap.js"></script>	
</body>
</html>