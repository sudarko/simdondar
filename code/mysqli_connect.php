<?php
require_once("dbconfig.php");
$conn = new mysqli($host, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
