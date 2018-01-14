<?php

$host = "localhost";
$user = "afrida";
$password = "afrida";
$dbname = "quiz_oop";

$con = mysqli_connect($host,$user,$password,$dbname);

if(!$con)
{
	die("Error in database connection". mysqli_connect_error());
}
else
{
	echo "<h3>Database connection Success.....";
}
mysql_query('SET CHARACTER SET utf8');
mysql_query("SET SESSION collation_connection =’utf8_general_ci'");

?>