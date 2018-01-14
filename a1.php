<?php

include "dbConnect.php";



$name=$_GET["name"];
$email=$_GET["email"];

$username=$_GET["username"];
$password=$_GET["password"];
$category=$_GET["category"];
$posting='Teacher';

 $sql_query = "insert into user values('$name','$email','$username','$password','$category','$posting');";  
if(mysqli_query($con,$sql_query))
{
	
	 //echo "<h3>Data insertion success...</h3>";
	 
	 include "sign.html";
	 
	 }
else
{
	include "regfail.html";
	
}





?>