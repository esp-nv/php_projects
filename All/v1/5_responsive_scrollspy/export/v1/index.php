<?php
$con = mysqli_connect("localhost", "root", "", "test");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=users.csv');

$output = fopen('php://output', 'w');
fputcsv($output, ['ID', 'E-mail address', 'Name']);

$connection = new mysqli('host', 'user', 'password', 'database');
$rows = $connection->query(
  'SELECT user_id,email_address,name FROM users',
  MYSQLI_USE_RESULT
);
while ($row = $rows->fetch_row()) {
  fputcsv($output, $row);
}