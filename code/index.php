<img src="simdondar.jpg"/>
<?php
echo "try update";
echo "test 123";
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
