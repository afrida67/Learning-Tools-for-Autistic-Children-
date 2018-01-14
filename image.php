<?php

session_start();
include "dbConnect.php";





$sql_query = "select * from picture;";
$result = mysqli_query($con,$sql_query); 

	
while( $row = mysqli_fetch_array($result)) 
	 
 {  
 
 $name =$row["lang"]; 
 $cat=$row["title"]; 
 
 $_SESSION['pass'] = $cat;


 //echo "$name<br>";
 //echo "$cat";
/* echo "<img src='".$name."'>";
 echo '<video width="270" height="320" controls>
          <source src='.$name.' type="video/MP4" />
        </video>';*/
		
	//echo '<iframe width="290" height="300" src='.$name.'  frameborder="0" allowfullscreen></iframe>';
		
   //echo"login successful";
 }  
  include "new.php";
?>