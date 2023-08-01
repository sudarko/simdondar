<img src="simdondar.jpg"/>
<?php
echo "try update";
echo "test 123";
$conn = mysql_connect('database', 'root', 'example');
mysql_select_db("mysql");
if (!$conn) {
die('ERROR: Unable to connect: ' . mysql_error());
}

echo 'Connected to the database.<br>';
/*
$result = mysql_query('SELECT name FROM employee');

$row = mysql_fetch_row($result);
echo "Employee 1: ", $row[0], "<br>\n";
*/
mysql_close($conn);

phpinfo();
?>
