<?php include('header.php'); 
include('dbcon.php');
?>
<body>

    <div class="row-fluid">
        <div class="span12">


         
<div class="container">
<br />
<br />
<div class="pull-right">
<label style="font-weight:bold; color:blue; font-family:cursive; font-size:18px;">Order by:</label>
<a class="btn btn-default" href="ascending.php">Ascending</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a class="btn btn-info" href="decending.php">Descending</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a class="btn btn-default" href="index.php">Default</a>
</div>
<br />
<br />
<br />
<br />
<table  class="table table-striped table-bordered">
	<thead>
		<tr>
			<th style="text-align:center; font-family:cursive; font-size:18px; color:blue;">FirstName</th>
			<th style="text-align:center; font-family:cursive; font-size:18px; color:blue;">LastName</th>
			<th style="text-align:center; font-family:cursive; font-size:18px; color:blue;">MiddleName</th>
			<th style="text-align:center; font-family:cursive; font-size:18px; color:blue;">Address</th>
			<th style="text-align:center; font-family:cursive; font-size:18px; color:blue;">Email</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$query=mysqli_query($con,"select * from member order by firstname DESC")or die(mysqli_error($con));
		while($row= mysqli_fetch_array($query)){
		$id=$row['member_id'];
		?>                              
		<tr>									
			<td style="text-align:center; font-family:cursive; font-size:18px;"><?php echo $row['firstname'] ?></td>
			<td style="text-align:center; font-family:cursive; font-size:18px;"><?php echo $row['lastname'] ?></td>
			<td style="text-align:center; font-family:cursive; font-size:18px;"><?php echo $row['middlename'] ?></td>
			<td style="text-align:center; font-family:cursive; font-size:18px;"><?php echo $row['address'] ?></td>
			<td style="text-align:center; font-family:cursive; font-size:18px;"><?php echo $row['email'] ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
</div>

		 
        </div>
        </div>
    </div>



</body>
</html>


