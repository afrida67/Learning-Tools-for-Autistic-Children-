<?php

include "dbConnect.php";



$name=$_GET["name"];
$category=$_GET["category"];

$age=$_GET["age"];
$source=$_GET["source"];
$lang=$_GET["lang"];


 $sql_query = "insert into picture values('$category','$age','$name','$source','$lang');";  
if(mysqli_query($con,$sql_query))
{
	
	  header("Location: /autism/admin/addvdosuccess.php");
	 
	 
	 
	 }
else
{
	
	echo"<h3>Data insertion failed...</h3>";
}





?>