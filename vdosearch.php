<!DOCTYPE html>
<html>
    
<!-- Mirrored from demo.themeum.com/html/kidzy/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Sep 2016 04:22:21 GMT -->
<head>
        <title>Drawing Tools</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Themeum">

        <!-- Include All Css -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/fonts.css">
        <link rel="stylesheet" href="css/preset.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">

        <!--[if lt IE 9]>
            <script src="js/html5shive.js"></script>
        <![endif]-->

    </head>
    <body style="background: url(back.jpg);">
        <!-- Header Area -->
        <!-- Header Area -->
        <header class="header-area inner-page">
            <!-- Header Top Area -->
            <section class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="header-elements pull-right">
                                
             
                                <div class="login-or-signup pull-left">
                                    <a href="form/login.html" data-toggle="modal"><span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.header-top -->
            <nav id="po" class="navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="logo pull-left">
                                <a href="home.html"><img alt="Kidzy" src="play1.png" height="50" width="300"></a> 
                            </div>
							
                            <ul class="main-menu pull-right">
                                <li>
                                    <a href="home.html"><i class="fa fa-home" aria-hidden="true"></i> হোম</a>
                      
                                </li>
                               
                                <!--<li class="menu-has-child">
                                    <a href="#">Pages</a>
                                    <ul>
                                        <li>
                                            <a href="event.html">Event</a>
                                            <ul>
                                                <li><a href="event-details.html">Event Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="routine.html">Routine</a></li> 
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="404.html">404</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                    </ul>
                                </li>-->
                                <li class="menu-has-child">
								<a id="a" style="color: #E60F65; font-weight:bold;" >ভিডিও টিউটোরিয়াল</a>
								   <ul>
                                        <li><a href="vdo.php">একাডেমিকস</a></li>
										 <li><a href="vdo1.php">সাধারণ জ্ঞান </a></li>
										  <li><a href="vdo2.php">সোশ্যাল স্কিল</a></li>
										
                                    </ul>
								</li>
								
								
                                <li>
                                    <a id="a" href="drawing.php">ড্রয়িং টুলস </a>
                                </li>
								
								 <li class="menu-has-child">
								 <a>গেমস </a>
								      <ul>
                                        <li><a href="games.php">১-৫ বছর</a></li>
										 <li><a href="games.php">৬-১০ বছর</a></li>
										 <li><a href="games.php">১০ বছরের অধিক </a></li>
										
                                    </ul> 
								 </li>
								
								<li class="menu-has-child">
								<a id="a" >পিকচার টুলস</a>
								 <ul>
                                        <li><a href="pictures.php">একাডেমিকস</a></li>
										 <li><a href="pictures.php">সাধারণ জ্ঞান </a></li>
										 <li><a href="pictures.php">সোশ্যাল স্কিল</a></li>
										
                                    </ul>
								</li>
								
								
                               
                             
                            </ul>
                            <div class="mobile-menu hidden-lg hidden-md hidden-sm">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
               
            </nav>
        </header>
        <!-- /.header-area -->
		

        <!-- Breadcrumb  -->
        <section class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12 text-center">
                        <div class="breadcrumb-content">
                            <h2>খোঁজার ফলাফল</h2> 
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.breadcrumb-section  -->

<body>

    
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
		
	  <?php

				
			include "dbConnect.php";


             $title= $_SESSION['pass1'];
			 $age1= $_SESSION['pass2'];
			 $lang1= $_SESSION['pass3'];
			 
               
				 
		$i=0;
		
		$terms = explode(" ",$title);
		$query = "SELECT * FROM picture WHERE ";
		
		foreach ($terms as $each) {
			$i++;	
			
			if($i==1 && !empty($each)) {
				$query .="title LIKE '%$each%' ";
			}
			
			
		}

			
			
		$result = mysqli_query($con,$query);
		$c=0;
		if($result)
        { 
			while($row = mysqli_fetch_array($result)) {
							
			 
			 $title=$row["title"];
             $source=$row["source"];
             $age=	$row["age"];
             $lang=	$row["lang"];		 
			
              
			 
			 if (($age1==$age) && ($lang==$lang1)){
			 
			 $c=$c+1;
		   if (substr($source, 0, 4) === 'http') {
				 echo '<div class="row">
            <div class="col-md-6">
                   <div class="item-image" style="margin-top: 10px;">
                    <<iframe width="200" height="300" src='.$source.'  frameborder="0" allowfullscreen></iframe>
                   </div>
            </div> 
            <div class="col-md-6"></br></br></br>
                <h3>'.$title.'</h3>
                <h4></h4> 
                </br>
				
				<h3>বয়স:   '.$age.'</h3>
                <h4></h4>
                </br>
				
                <a class="btn btn-primary" href='.$source.'>দেখুন<span></span></a>
            </div>
        </div></br></br></br></br>'; }
		
		else {
			
			echo '<div class="row">
            <div class="col-md-6">
                   <div class="item-image" >
						 <video width="500" height="420" controls>
						 <source src='.$source.' type="video/MP4" />
						</video>
						</div>
            </div> 
            <div class="col-md-6"></br></br></br></br></br></br></br></br></br>
                <h3>'.$title.'</h3>
                <h4></h4>
                </br>
				
				<h3>বয়স:   '.$age.'</h3>
                <h4></h4>
                </br>
				
                <a class="btn btn-primary" href='.$source.'>দেখুন<span></span></a>
            </div>
        </div></br></br></br></br>'; 
		}
		
				
		
			 }
			 
			 
			 }
			 
			 
		}
		if($c==0){
				
				 echo '<div style="color: #E60F65; font-weight:bold; padding-left: 400px; padding-top: 40px; padding-bottom: 50px;">

                     <h1>No Data Found</h1>		
		
		         </div>';
				
			 }
	    
			 
			?>
		
		
		
		
		
		
		

       
        <hr>

     

      </div>
              <!-- Footer Section -->
        <footer class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 text-left">
                        <div class="about-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="play1.png" alt="Smiley face"></a>
                            </div>
                            <p>
                                 আপনার শিশুর সঠিক বিকাশের হাতিয়ার।

                            </p>
                            <span>&copy; 2016 Kidzy School</span>
                            <ul class="social-icon">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12 text-left">
                        <div class="footer-widget">
                            <h3>ডাইরেক্ট  লিংক</h3>
                            <ul>
                                <li><a href="#">হোম </a></li>
                                <li><a href="#">ভিডিও</a></li>
                                <li><a href="#">পিকচার</a></li>
                                <li><a href="#">ড্রয়িং</a></li>
                                <li><a href="#">লগ ইন</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12 text-left">
                        <div class="footer-widget">
                            <h3>ওয়েবসাইটের লিংক</h3>
                            <ul>
                                <li><a href="#">Do2learn.com </a></li>
                                <li><a href="#">Autism Speaks</a></li>
                                <li><a href="#">Autism Now</a></li>
                                <li><a href="#">Autism Games</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget">
                            <h3>কিভাবে ব্যবহার করবেন?</h3>
                              <ul>
                                <li><a href="#">মেন্যু রাউস করুন  </a></li>
                                <li><a href="#">যেকোন একটি টুল সিলেক্ট করুণ</a></li>
                                <li><a href="#">আপনার শিশুকে শিখতে দিন</a></li>
                                <li><a href="#">পড়াশুনা শেষে টেস্ট নিন</a></li>
                                
                            </ul>
                            <form action="#" method="post" class="subscribe-form">
                               
                                <button class="primary-btn pull-right"><span>যোগাযোগ করুন</span></button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.footer-section -->
		

        <!-- Include All JavaScript -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mixIt.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from demo.themeum.com/html/kidzy/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Sep 2016 04:22:44 GMT -->
</html>
