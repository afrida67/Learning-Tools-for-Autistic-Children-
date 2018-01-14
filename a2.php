<?php

include "dbConnect.php";



$category=$_GET["category"];
$id=$_GET["username"];
$password=$_GET["password"];



if($category=='Teacher')
{
	
    $sql_query = "select name from user where username like '$id' and password like '$password' and posting like '$category' ";
    $result = mysqli_query($con,$sql_query); 

	
 if(mysqli_num_rows($result) >0)  
	 
 {  
 $row = mysqli_fetch_assoc($result);  
 $name =$row["name"];  
   header("Location: /autism/quiz_oop/index.php");
    
 }  
 else  
 {   
      include "logfail.html";
 }  
}



if($category=='Admin')
{
	echo 'hi';
    $sql_query = "select name from user where username like '$id' and password like '$password' and posting like '$category' ";
    $result = mysqli_query($con,$sql_query); 

	
 if(mysqli_num_rows($result) >0 )  
	 
 {  
 $row = mysqli_fetch_assoc($result);  
 $name =$row["name"];  
    header("Location: /autism/admin/index.html");
    
    
 }  
 else  
 {   
     include "logfail.html";
 }  
}




?>