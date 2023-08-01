<img src="simdondar.jpg"/>
<?php
echo "try update";
echo "test 123";
/*
$conn = mysql_connect('database', 'root', 'example');
mysql_select_db("mysql");
if (!$conn) {
die('ERROR: Unable to connect: ' . mysql_error());
}

echo 'Connected to the database.<br>';
mysql_close($conn);
*/
$servername = "database";
$username = "root";
$password = "example";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

phpinfo();
?>
