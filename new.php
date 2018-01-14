<?php

				
				include "dbConnect.php";


              $title= $_SESSION['pass1'];
			 $age1= $_SESSION['pass2'];
			 $lang1= $_SESSION['pass3'];
			 
			 echo "$age";
			 echo "$lang";
			 
		$i=0;
		
		$terms = explode(" ",$title);
		$query = "SELECT * FROM picture WHERE ";
		
		foreach ($terms as $each) {
			$i++;	
			
			if($i==1 && !empty($each)) {
				$query .="title LIKE '%$each%' ";
			}
			
			if($i>1 && !empty($each)) {
				$query .="OR title LIKE '%$each%' ";
			}
		}

			
			
			$result = mysqli_query($con,$query);
		if($result)
        {
			while( $row = mysqli_fetch_array($result)) 
				 
			 {  
			 $title=$row["title"];
             $source=$row["source"];
             $age=	$row["age"];
             $lang=	$row["lang"];		 
			

			 
			 if (($age1==$age) && ($lang==$lang1)){
			 
			 
		
				 echo '<div class="row">
            <div class="col-md-6">
                <a href='.$source.'>
                    <img class="img-responsive" src="kid4.png" alt="" style="width: 400px; height:300px;">
                </a>
            </div> 
            <div class="col-md-6"></br></br></br>
                <h3>'.$title.'</h3>
                <h4></h4>
                </br>
                <a class="btn btn-primary" href='.$source.'>খেলো<span></span></a>
            </div>
        </div></br></br></br></br>';
				
		
			 }
			 }
		}
	    else {
				  echo '<div style="color: #E60F65; font-weight:bold; padding-left: 400px; padding-top: 40px; padding-bottom: 50px;">

          <h1>No Data Found</h1>		
		
		</div>';
			 }
			 
			?>