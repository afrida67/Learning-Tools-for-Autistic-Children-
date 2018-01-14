<?php

include "dbConnect.php";


 



$num=$_SESSION['pass1'];
$id=$_SESSION['pass2']; 
$cat=$_SESSION['cat'];


$sql_query = "update signup set enum = '$num', quesno= 'Question Set''$cat' where id=$id;";

if(mysqli_query($con,$sql_query))
{
	
	 //echo "<h3>Data insertion success...</h3>";
	 

	 
	 }

?>
			

			
				  