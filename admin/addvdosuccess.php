<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<style>
input[type=text],select{
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=file]{
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
	margin-left:60px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 14px 10px;
	margin-left: 30px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

form-class {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<!-- Mirrored from webthemez.com/demo/free-bootstrap-admin-template-dream/ui-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Nov 2016 13:59:55 GMT -->
<head>



</style>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Play&Learn </title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">এডমিন প্যানেল</a>
				
			
            </div>
			
			 <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" style ="color: white;"  href="http://localhost/autism/home.html" aria-expanded="false">
                        <i class="fa fa-home"></i> হোম 
                    </a>
                    
                </li>
               
                <li class="dropdown">
                    <a class="dropdown-toggle" style ="color: white;"  data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>এডমিন প্রোফাইল</a>
                        </li>
                        
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i>লগ আউট</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
<li>
                        <a href="index.html" ><i class="fa fa-dashboard"></i>  ড্যাশবোর্ড </a>
                    </li>
                    <li>
                        <a href="videos.html" class="active-menu">ভিডিও টুলস</a>
                    </li>
					<li>
                        <a href="picture tools.html">পিকচার টুলস</a>
                    </li>
                    <li>
                        <a href="drawing.html">ড্রয়িং টুলস </a>
                    </li>
                    
                    <li>
                        <a href="games.html" >গেমস </a>
                    </li>
                    <li>
                        <a href="user.html" > স্টুডেন্টস ইনফরমেশন</a>
                    </li>
					<li>
                        <a href="user.html">টিচার  ইনফরমেশন</a>
                    </li>


                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
		
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            ভিডিও<small>           ভিডিও সংক্রান্ত যাবতীয় তথ্য</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
                     
          
		   
		  
		  
		  
		  
		  
		  
		  
				
					<center>
                        <div class="panel panel-default">
                        <div class="panel-heading">
                        ভিডিও সেকশন 
                        </div>    
						
                         <div class="panel-body"> 
						 
						 
						 
						 
						 
						 
						 
						 
						 
						 
						 
						 
						 
						 
						 <h4>ভিডিও অ্যাড হয়েছে সফলভাবে... </h4>
<div class="form-class">									
  <form action="add1.php">
    <label style="padding-left:30px;" for="fname">Title: </label>
    <input type="text" id="fname" placeholder="বিষয় লিখুন" name="name"><br>

    <br><label for="lname">Category: </label>
   <select id="country" name="category">
      <option value="social skill">social skill</option>
      <option value="ecademics">ecademics</option>
      <option value="general knowledge">general knowledge</option>
    </select>

   <br><br><label for="country" style="padding-left:30px;">  Age:  </label>
    <select id="country" name="age">
      <option value="1-5">1-5</option>
      <option value="6-15">6-15</option>
     
    </select><br><br>
	
	
	<label for="country">  Language:  </label>
    <select id="country" name="lang">
      <option value="bangla">bangla</option>
      <option value="english">english</option>
     
    </select><br><br>
  
   
    <input  style="padding-left:120px;" type="file" id="fname" name="source"><br>
	
    <br><input type="submit" value="ভিডিও অ্যাড করুন ">
  </form></div>
  
                   
  <hr>
  <h4>ভিডিও টেবিল </h4>	
  <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                               ভিডিও টুলসগুলো 
                            </div> 
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>For age</th>
                                                <th>Language</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
  
    <?php

				
			include "dbConnect.php";	 
              	
		$query = "SELECT * FROM picture group by title;";

		$result = mysqli_query($con,$query);
		
		 
			while($row = mysqli_fetch_array($result)) {
							
			 
			    $title=$row["title"];
                $category=$row["category"];
                $age=	$row["age"];
                $lang=	$row["lang"];	
		
			 echo '
                                            <tr>
                                                <td>'.$title.'</td>
                                                <td>'.$category.'</td>
                                                <td>'.$age.'</td>
                                                <td>'.$lang.'</td>
                                                
                                            </tr>
                                            

                                       
									
									
					
									';
			 
		}
		
		
			 
			?>
  
  
   </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>			
  
  
  
									
									
								
						 
									
									
									
                    

                  
					<br>
                     <div class="box">
						<a href="#popup3" class="btn btn-fail">ভিডিও মুছে ফেলুন </a>
					</div>
                      </center>
										<div id="popup3" class="overlay">
										<div class="popup">
											<h4>ফাইল এর নাম লিখুন </h4>
										<a class="close" href="#">&times;</a>
											<div class="content">
										<form action="vdodelet.php">
													<br>
										<input type="text" name="title">
												<br>
  
												<br><br>
												<input type="submit"  class="btn btn-success" value="Delete">
															</form>
											</div>
											</div>
                                             </div>
                    
                    

                   
                </div>
            </div>
			</center>
                    
                    
                <!-- /. ROW  -->
				
				</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
 
</body>

<!-- Mirrored from webthemez.com/demo/free-bootstrap-admin-template-dream/ui-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Nov 2016 13:59:55 GMT -->
</html>
