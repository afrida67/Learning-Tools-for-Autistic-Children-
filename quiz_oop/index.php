<!DOCTYPE html>
<html lang="en">
<head>
  <title>singin and signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/bg.css" />
   
   <div style="float:right; padding-top: 10px;">
	<a href="http://localhost/autism/home.html" style="text-decoration: none; padding-right: 10px; font-size: 25px; color: #640C84;">হোম  </a>
	><a href="#" style="text-decoration: none; font-size: 25px; padding-right: 50px; font-weight:bold; color: #E30D42;">পরীক্ষা</a></div>
</head>
<body>
<br>
<br>
<div class="container">
	<div class="row" style="float:middle;">
	
			 <div>
				  <h1 style="padding-left: 300px; padding-bottom:30px; font-size: 25px; font-weight:bold;">পরীক্ষা দিয়ে প্রগ্রেস যাচাই করুন</h1>
				  
				
			</div>
		
    </div>
</div>




	<div class="container">
		<div class="row">
			     <div class="col-sm-6">
					  <div class="panel panel-info">
                      <div class="panel-heading" style="color: #790486; font-weight:bold;">লগইন করুন আপনার শিক্ষার্থীর জন্য</div>
						<div class="panel-body">
						<?php
						if(isset($_GET['run'])  && $_GET['run']=="failed")
						{
							echo "Your email or password is not correct";
						}
						
						
						?>
							  <form role="form" action="signin_sub.php" method="post">
								<div class="form-group">
								  <label for="email">Email:</label>
								  <input type="email" class="form-control" name="e" id="email" placeholder="Enter email">
								</div>
								<div class="form-group">
								  <label for="pwd">Password:</label>
								  <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password">
								</div>
								<button type="submit" class="btn btn-default">Submit</button>
							  </form>
						  </div>
						  </div>
					  </div>
				 
				   <div class="col-sm-6">
							<div class="panel panel-info">
								
								<div class="panel-heading" style="color: #790486; font-weight:bold;">নতুন একাউন্ট তৈরী করো </div>
							<div class="panel-body">
							<?php 
							if(isset($_GET['run'])&& $_GET['run']=="success")
							{
								echo '<mark><h3 style="font-size:20px;">Your registration successfully done...</h3></mark>';
							} 
							?>
							  <form role="form" method="post" action="signup_sub.php" enctype="multipart/form-data"  >
							  	<div class="form-group">
								  <label for="name">Name:</label>
								  <input type="text" class="form-control" name="n" id="name" placeholder="Enter name" required>
								</div>
								
								  	<div class="form-group">
								  <label for="age">Age:</label>
								  <input type="number" class="form-control" name="a" id="age" placeholder="Enter age" required>
								</div>
								
								
								<div class="form-group">
								  <label for="email">Email:</label>;
								  <input type="email" class="form-control" name="e" id="email" placeholder="Enter email" required>
								</div>
								<div class="form-group">
								  <label for="pwd">Password:</label>
								  <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password" required>
								</div>
								<div class="form-group">
								  <label for="pwd">Upload your image</label>
								  <input type="file" class="form-control" name="img" >
								</div>
						
								  	<div class="form-group">
								
								  <input type="number" class="form-control" style="display:none" name="ee" id="enum" >
								</div>
								
								<button type="submit" class="btn btn-default">Submit</button>
							  </form>
						  </div>
						  </div>
			      </div>
	   </div>
   </div>
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
