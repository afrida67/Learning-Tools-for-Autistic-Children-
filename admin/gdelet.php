<?php

include "dbConnect.php";



$title=$_GET["title"];


$sql_query = "delete from games where name like '$title';";  
if(mysqli_query($con,$sql_query))
{
	
	  
	 echo"<h3>Data deleted successfully...</h3>";
	 
	 
	 }
else
{
	
	echo"<h3>Data insertion failed...</h3>";
}





?>