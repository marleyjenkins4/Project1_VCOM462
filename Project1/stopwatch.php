

<?php 

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$timeStart=$POST_['start'];
$timeStop=$POST_['stop'];
$activity=$POST_['activity'];

mysql_query('INSERT INTO Timer (timeStart, timeStop) VALUES ( '.$date_start.' '.$date_start.', '.$date_end.')');
?>