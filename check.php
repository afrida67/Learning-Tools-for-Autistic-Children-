<?php

include "dbConnect.php";

 $search = $_POST["search"];    
 $age = $_POST["age"];   
 $lang = $_POST["lang"]; 
 
$title=$search;


$_SESSION['pass1']=$title;
$_SESSION['pass2']=$age;
$_SESSION['pass3']=$lang;

include "vdosearch.php";
?>
			

			
				  