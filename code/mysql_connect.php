<?php
$conn = mysql_connect($host, $user, $pass);
mysql_select_db($db);
if (!$conn) {
die('ERROR: Unable to connect: ' . mysql_error());
}

echo 'Connected to the database.<br>';

mysql_close($conn);
?>
