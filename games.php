
<html lang="en">

<html>
    
<!-- Mirrored from demo.themeum.com/html/kidzy/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Sep 2016 04:22:21 GMT -->
<head>
        <title>Games</title>
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
    <body>
        <!-- Header Area -->
        <header class="header-area inner-page">
            <!-- Header Top Area -->
            <section class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="header-elements pull-right">
                                
             
                                <div class="login-or-signup pull-left">
                                   <a href="sign.html" style="color: white;" ><i class="icon-user"></i><span>Login/sign up</span></a>
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
                                    <a  href="home.html"><i class="fa fa-home" aria-hidden="true"></i> হোম</a>
                      
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
								<a id="a" >ভিডিও টিউটোরিয়াল</a>
								   <ul>
                                        <li><a href="vdo.php">একাডেমিকস</a></li>
										 <li><a href="vdo.php">সাধারণ জ্ঞান </a></li>
										  <li><a href="vdo.php">সোশ্যাল স্কিল</a></li>
										
                                    </ul>
								</li>
								
								
                                <li>
                                    <a id="a" href="drawing.php">ড্রয়িং টুলস </a>
                                </li>
								
								 <li class="menu-has-child">
								 <a style="color: #E60F65; font-weight:bold;">গেমস  </a>
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
								
								
                               
                                <li>
                                    <a href="#" id="search-pop"><i class="fa fa-search"></i></a>
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
                <div class="search-area">
                    <form action="checkgame.php" method="post">
                        <input type="search" name="search" placeholder="অনুসন্ধান করুন (বিষয় লিখুন)....">
                    </form>
                    <a href="#" class="search-close"><i class="fa fa-times"></i></a>
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
                            <h2>গেমস  </h2>
                            <ul>
                               
                                
                            </ul>
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





				$sql_query = "select * from games;";
				$result = mysqli_query($con,$sql_query); 

					
				while( $row = mysqli_fetch_array($result)) 
					 
				 {  
				 
				 $name =$row["name"]; 
				 $pic=$row["pic"];
				 $source=$row["source"];
				 $ins=$row["ins"];
				 
				 
				 echo '<!-- Project One -->
        <div class="row">
            <div class="col-md-6">
                <a href='.$source.'>
                    <img class="img-responsive" src='.$pic.' alt="" style="width: 500px; height:300px;">
                </a>
            </div>
            <div class="col-md-6">
                <h3>'.$name.'</h3></br></br>
                <h4>'.$ins.'</h4> </br></br>

                <a class="btn btn-primary" href='.$source.'>ক্লিক করুন  <span></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>';
              
				 }
				
				?>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

       

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>

		
</div>
        <!-- Include All JavaScript -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mixIt.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/main.js"></script>
    </body>
	          <!-- Footer Section -->
        <footer class="footer-section">
		<div class="container">
            
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 text-left">
                        <div class="about-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img alt="" src="images/home1/play1.png"></a>
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
                            <h3>কিভাবে ব্যাবহার করবেন?</h3>
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
		
	
  <div id="scroll-to-top" class="scroll-to-top">
  <span>
    <i class="fa fa-chevron-up"></i>    
  </span>
</div><!-- /#scroll-to-top -->


        <!-- Login Modal -->
        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" id="loginModal">
            <div class="modal-dialog" role="document">
                <!-- Modal content-->
                <div class="modal-content custom-box-shadow">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">
                        <i class="fa fa-close"></i>
                    </button>
                    <div class="modal-body">
                        <h2 class="title" id="loginModalLabel">Already Registered</h2>
                        <form id="login-form" method="post" action="#">
                            <fieldset class="userdata">
                                <input type="text" required="required" class="input-username" name="username" placeholder="Username">
                                <input type="password" required="required" class="input-password" name="password" placeholder="Password">
                                <div class="clearfix"></div>
                                <div class="button-wrap">
                                    <button type="submit">Log in</button>
                                </div>
                                <p class="forget-name-link pull-left">
                                    Forgot <a href="#">Username</a> or <a href="#">Password</a>
                                </p>				 	
                            </fieldset>
                        </form>
                    </div>
                    <!--/Modal body-->
                    <div class="modal-footer">
                        New Here?<a href="#">Create an account</a>
                    </div>
                    <!--/Modal footer-->
                </div> <!-- Modal content-->
            </div>
            <!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- Include All JavaScript -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mixIt.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/main.js"></script>
		
				
		<!-- Include modernizr-2.8.3.min.js -->
<script src="assets/js/modernizr-2.8.3.min.js"></script>

<!-- Include jquery.min.js plugin -->
<script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Include magnific-popup.min.js -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>

<!-- Google Maps Script -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>

<!-- Gmap3.js For Static Maps -->
<script src="assets/js/gmap3.js"></script>

<!-- Javascript Plugins  -->
<script src="assets/js/plugins.js"></script>

<!-- Custom Functions  -->
<script src="assets/js/functions.js"></script>

<script src="assets/js/wow.min.js"></script>

<script type="text/javascript" src="assets/js/jquery.ajaxchimp.min.js"></script>




<script>

 $(document).ready(function() {

  /* -------- One page Navigation ----------*/
  $('#main-menu #menu').onePageNav({
    currentClass: 'active',
    changeHash: false,
    scrollSpeed: 1500,
    scrollThreshold: 0.5,
    scrollOffset: 95,
    filter: ':not(.sub-menu a, .not-in-home)',
    easing: 'swing'
  }); 


  /*----------- Google Map - with support of gmaps.js ----------------*/

  function isMobile() { 
   return ('ontouchstart' in document.documentElement);
 }

 function init_gmap() {
   if ( typeof google == 'undefined' ) return;
   var options = {
    center: [-37.817331, 144.955652],
    zoom: 15,
    mapTypeControl: true,
    mapTypeControlOptions: {
     style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
   },
   navigationControl: true,
   scrollwheel: false,
   streetViewControl: true
 }

 if (isMobile()) {
  options.draggable = false;
}

$('#googleMaps').gmap3({
  map: {
   options: options
 },
 marker: {
   latLng: [-37.817331, 144.955652],
   options: { icon: 'images/mapicon.png' }
 }
});
}

init_gmap();
});



</script>

    </body>

<!-- Mirrored from demo.themeum.com/html/kidzy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Sep 2016 04:21:28 GMT -->
</html>
