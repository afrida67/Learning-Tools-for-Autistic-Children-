<?php

include "dbConnect.php";



$name=$_GET["name"];
$ins=$_GET["ins"];
$source=$_GET["source"];



 $sql_query = "insert into games(name,source,ins) values('$name','$source','$ins');";  
if(mysqli_query($con,$sql_query))
{
	
	  header("Location: /autism/admin/addgamesuccess.php");
	 
	 
	 
	 }
else
{
	
	echo"<h3>Data insertion failed...</h3>";
}





?>