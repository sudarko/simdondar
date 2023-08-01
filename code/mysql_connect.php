<?php
$conn = mysql_connect($host, $username, $password);
mysql_select_db($dbname);
if (!$conn) {
die('ERROR: Unable to connect: ' . mysql_error());
}

echo 'Connected to the database.<br>';

mysql_close($conn);
?>
