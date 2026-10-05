<?php

$CSVvar = fopen("sd.csv", "r");
if ($CSVvar !== FALSE) {
?>
	<html>
	<head>
		<style>
			table,th,td {
				border: 1px solid black;
			}
		</style>
	</head>
	<div>
		<table style="border:1px solid black">
			<thead>
				<tr>
					<th><b>Year</b></th>
					<th><b>Mobile Brand</b></th>
					<th><b>Total Sale</b></th>				
				</tr>
			</thead>
<?php
	while (! feof($CSVvar)) {
		$data = fgetcsv($CSVvar, 1000, ",");
		if (! empty($data)) {
			?>
			<tr>
				<td><?php echo $data[0]; ?></td>
				<td><div> <?php echo $data[2]?></td>
				<td><div><?php echo $data[1]; ?></div></td>
			</tr>
<?php }?>
<?php
	}
	?>
		</table>
	</div>
	</html>
<?php
}
fclose($CSVvar);
?>
