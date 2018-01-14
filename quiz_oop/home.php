<?php
include("class/users.php");
$email=$_SESSION['email'];
$profile=new users;
$profile->users_profile($email);
$profile->cat_shows();
//print_r($profile->cat);
//print_r($profile->data);
?>
<!DOCTYPE html>
<html lang="bn">
<head>
  <title>Exam</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/bg.css" />
  
  
</head>
<body>

	<div class="container">
	

  <h1><span style="font-size: 30px; padding-left:450px; font-weight:bold; padding-top: 20px;">Play & Learn</span></h1>
  <ul class="nav nav-tabs">
  
     <li><a href="http://localhost/autism/home.html" style="font-size: 16pt">হোম</a></li>
    <li class="active"><a data-toggle="tab" href="#home"><span style="font-size: 16pt">পরীক্ষা</span></a></li>
	
	
	
	<?php 
	
	
	
	foreach($profile->data as $prof)
	{?>
     
	  
	
  
	
	
	
	
	
	
	
	<?php

        $now=$prof['id'];
		 //echo "$now";
		
		$_SESSION['pass1']=$now;
		//include "sel.php";
		
		
		}?>
	
	
	
	
	
	
    <li><a  href="http://localhost/autism/profile.php"><span style="font-size: 16pt">প্রোফাইল</span></a></li>
    
 
	
	
	
	 <li style="float:right"> <a href="http://localhost/autism/quiz_oop/index.php" class="btn btn-primary"><span>Logout</span></a></li>
	
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3></h3></br></br></br>
	  <center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select" ><span style="font-size: 16pt">কুইজ শুরু করো</span></button></center>       
	   <div class="col-sm-4"></div>
	   <div class="col-sm-4"><br>
	   <div id="select" class="tab-pane fade">

		  <form  method="post" action="qus_show.php">
		  <select class="form-control" id="" name="cat">
		  <option>প্রশ্ন বাছাই করো </option>
		  <?php		  
		  foreach($profile->cat as $category)
		  {  ?>			  			
			<option value="<?php echo $category['id'];?>"><?php echo $category['cat_name'];?> <?php echo "(For Age : ";?><?php echo $category['age'];?><?php echo " )";?></option>
			<?php   }?>
		  </select><br>
		 <center><input type="submit" value="শুরু করো" class="btn btn-primary" /></center>
		</form>
	  
	  
	  </div>
	  </div>
	  <div class="col-sm-4"></div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3></h3>
	  
	  <table class="table">
    <thead>
      <tr>
        
         <th><span style="font-size: 20pt">নাম</span></th>
		 <th><span style="font-size: 20pt">বয়স</span></th>
		 <th><span style="font-size: 20pt">প্রশ্নপত্র ১</span></th>
       
		  <th><span style="font-size: 20pt">ফলাফল</span></th>
		   <th><span style="font-size: 20pt">ছবি</span></th>
      </tr>
    </thead>
    <tbody>
	

  </table>
	  
	  
	  
	  
	 
	
	  
	  
	  
	  
	  
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Hi,hellow</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
