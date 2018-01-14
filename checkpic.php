<?php


include "dbConnect.php";

 $search = $_POST["search"];    
 $title=$search;


$_SESSION['pass1']=$title;

include "picsearch.php";
?>
			

			
				  