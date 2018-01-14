<?php

$host="localhost";
$user="root";
$pass="";
$db="autism1";

$con = mysqli_connect($host,$user,$pass,$db);  

mysqli_query($con, 'SET CHARACTER SET utf8');
mysqli_query($con, "SET SESSION collation_connection ='utf8_general_ci'");

 if (!$con)
 {
	 
 }
 else
 {
	 //echo "<h3> connected..";
 }
?>