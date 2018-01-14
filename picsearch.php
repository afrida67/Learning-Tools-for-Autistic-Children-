





<!DOCTYPE html>
<html>


<!-- Mirrored from preview.byaviators.com/template/superlist/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Oct 2016 05:58:26 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link href="http://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet" type="text/css">
    <link href="assetsp/libraries/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assetsp/libraries/owl.carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css" >
    <link href="assetsp/libraries/colorbox/example1/colorbox.css" rel="stylesheet" type="text/css" >
    <link href="assetsp/libraries/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css">
    <link href="assetsp/libraries/bootstrap-fileinput/fileinput.min.css" rel="stylesheet" type="text/css">
    <link href="assetsp/css/superlist.css" rel="stylesheet" type="text/css" >

    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.png">

    <title>Picture Tools</title>
</head>


<body class="">

<div class="page-wrapper">
    
    <header class="header header-transparent">
    <div class="header-wrapper">
        <div class="container">
            <div class="header-inner">
                <div class="header-logo">
                    <a href="index-2.html" >
                        
                        <span style="font-weight: bold;">Play&Learn</span>
                    </a>
                </div><!-- /.header-logo -->

                <div class="header-content">
                    <div class="header-bottom">
                        <div class="header-action">
                            
                        </div><!-- /.header-action -->

                        <ul class="header-nav-primary nav nav-pills collapse navbar-collapse">
    <li >
        <a href="home.html" style="font-size: 15px;"><i style="font-size: 18px;" class="fa fa-home" aria-hidden="true"></i> হোম</a>

        
    </li>

    <li >
        <a href="#" style="font-size: 15px;"}>ভিডিও টিউটোরিয়াল<i class="fa fa-chevron-down"></i></a>

        <ul class="sub-menu">
             <li><a href="vdo.php">একাডেমিকস</a></li>
										 <li><a href="vdo.php">সাধারণ জ্ঞান </a></li>
										  <li><a href="vdo.php">সোশ্যাল স্কিল</a></li>
        </ul>
    </li>

    <li>
        <a  href="drawing.php" style="font-size: 15px;">ড্রয়িং টুলস </i></a>

    </li>

    <li >
        <a href="#" style="font-size: 15px;">গেমস <i class="fa fa-chevron-down"></i></a>

        <ul class="sub-menu">
             <li><a href="games.php">১-৫ বছর</a></li>
										 <li><a href="games.php">৬-১০ বছর</a></li>
										 <li><a href="games.php">১০ বছরের অধিক </a></li>
										
        </ul>
    </li>

    <li >
        <a href="#" style="font-size: 15px; font-weight:bold; color:#cc043c;">পিকচার টুলস <i class="fa fa-chevron-down"></i></a>

        <ul class="sub-menu">
               <li><a href="pictures.php">একাডেমিকস</a></li>
										 <li><a href="pictures.php">সাধারণ জ্ঞান </a></li>
										 <li><a href="pictures.php">সোশ্যাল স্কিল</a></li>
        </ul>
    </li>

   
	
					

</ul>

                    </div><!-- /.header-bottom -->
                </div><!-- /.header-content -->
            </div><!-- /.header-inner -->
        </div><!-- /.container -->
    </div><!-- /.header-wrapper -->
</header><!-- /.header -->




    <div class="main" style="background: url(facility-bg.jpg);">
        <div class="main-inner">
            <div class="content">
                <div class="mt-150">
    <div class="hero-image">
    <div class="hero-image-inner" style="background-image: url('assetsp/img/tmp/a1.jpg');">
        <div class="hero-image-content">
            <div class="container">
                <h1 style="font-size:35px; font-weight:bold;">পিকচার টুলস</h1>

                <p> এখানে থাকবে বিভিন্ন ছবি যা দেখে বাচ্চারা সহজেই   <br>  শিখেনিতে পারবে নানা বিষয়াদি।  </p>

                <a href="pictures.php" class="btn btn-primary btn-lg"> আরো দেখুন </a>
                
            </div><!-- /.container -->
        </div><!-- /.hero-image-content -->
		
		
		

       
    </div><!-- /.hero-image-inner -->
</div><!-- /.hero-image -->

</div>


    <div class="page-header">
    <h1 style="color: #8a0ea3; font-weight:bold;">খোঁজার ফলাফল </h1>
    
	
</div><!-- /.page-header -->
 
		
		<?php
          
			include "dbConnect.php";
            
			 $title= $_SESSION['pass1'];
			
			 
             
				 
	    $i=0;
		
		$terms = explode(" ",$title);
		$query = "SELECT * FROM picturetool WHERE ";
		
		foreach ($terms as $each) {
			$i++;	
			
			if($i==1 && !empty($each)) {
				$query .="topics LIKE '%$each%' ";
			}
			
			if($i>1 && !empty($each)) {
				$query .="OR topics LIKE '%$each%' ";
			}
			
		}
        $query .="group by topics";
		
		
			
			
			$result = mysqli_query($con,$query);
			$items = array();
			$source=array();
			$tag=array();
			$i=0;
			$c=0;
			if($result){
			while( $row = mysqli_fetch_array($result)) 
				 
			 {  
			
			 $title=$row["topics"];
             $tag[]=$row["tag"];	
			$source[]=$row["source"];
 
			
			$c=$c+1;
			 $items[] = $title;
			
			$i=$i+1;
			  
			 }
			}
			if($c==0){
				
				 echo '<div style="color: #E60F65; font-weight:bold; padding-left: 400px; padding-top: 40px; padding-bottom: 50px;">

                     <h1>No Data Found</h1>		
		
		         </div>';
				
			 }
			?>

<!--1st section-->



 <div class="container" >   

 
    
				
   	                 
                
               
                    
					
       
		

 
 
 
 

<div class="cards-simple-wrapper">
    <div class="row">
         <?php
          
			include "dbConnect.php";
            
			
			while( $i>1) 
				 
			 {  
			        $title=$items[$i-1];
					
					

                echo '<div class="col-sm-6 col-md-3">
                <div class="card-simple" data-background-image='.$source[$i-1].'>
                    <div class="card-simple-background">
                        <div   class="card-simple-content">
                            <h2><a href="listing-detail.html">'.$title.'</a></h2>
        

                   
                            <div class="card-simple-actions">
                                <a></a>
    

                            <a href="picture2.php?take='.$title.'" class="fa fa-eye" title="ছবি দেখুন" data-toggle="tooltip" data-placement="bottom"></a>
                                <a></a>
          

                  </div><!-- /.card-simple-actions -->
                        </div><!-- /.card-simple-content -->

         

               <div class="card-simple-label">'.$tag[$i-1].'</div>
                        
                    </div><!-- /.card-

                   simple-background -->
                </div><!-- /.card-simple -->
            </div><!-- /.col-* -->';
			
	

		    $i=$i-1;
			 }
		
			?>

		

        
             

         
        
    </div><!-- /.row -->
</div><!-- /.cards-simple-wrapper -->
<!--1st Section-->


        











</div><!-- /.container -->

            </div><!-- /.content -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->

     <footer class="footer">
    <div class="footer-top" style="width: 1500px">
        <div class="container" >
            <div class="row">
                <div class="col-sm-4">
                    <h2>পিকচার টিউটোরিয়াল </h2>

                    <p>এখানে বিভিন্ন ছবির লিস্ট আছে যা দেখে আপনার সন্তান সহজেই শিখতে পারবে নতুন সব বিষয়। </p>
                </div><!-- /.col-* -->

                <div class="col-sm-4">
                    <h2>যোগাযোগ করুন</h2>

                    <p>
                        <a href="#">ashzavin@gmail.com</a>
                    </p>
                </div><!-- /.col-* -->

                <div class="col-sm-4">
                    <h2>Stay Connected</h2>

                    <ul class="social-links nav nav-pills">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                       
                    </ul><!-- /.header-nav-social -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-top -->

    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-left">
                &copy; 2016 All rights reserved. Created by <a href="#">Group 7</a>.
            </div><!-- /.footer-bottom-left -->

            <div class="footer-bottom-right">
                <ul class="nav nav-pills">
                    <li><a href="home.html">হোম </a></li>
                    <li><a href="vdo.php">ভিডিও </a></li>
                    <li><a href="terms-conditions.html"> ড্রয়িং </a></li>
                    <li><a href="contact-1.html">গেমস </a></li>
                </ul><!-- /.nav -->
            </div><!-- /.footer-bottom-right -->
        </div><!-- /.container -->
    </div>
</footer><!-- /.footer -->


</div><!-- /.page-wrapper -->

<script src="assetsp/js/jquery.js" type="text/javascript"></script>
<script src="assetsp/js/map.js" type="text/javascript"></script>

<script src="assetsp/libraries/bootstrap-sass/javascripts/bootstrap/collapse.js" type="text/javascript"></script>
<script src="assetsp/libraries/bootstrap-sass/javascripts/bootstrap/carousel.js" type="text/javascript"></script>
<script src="assetsp/libraries/bootstrap-sass/javascripts/bootstrap/transition.js" type="text/javascript"></script>
<script src="assetsp/libraries/bootstrap-sass/javascripts/bootstrap/dropdown.js" type="text/javascript"></script>
<script src="assetsp/libraries/bootstrap-sass/javascripts/bootstrap/tooltip.js" type="text/javascript"></script>
<script src="assetsp/libraries/bootstrap-sass/javascripts/bootstrap/tab.js" type="text/javascript"></script>
<script src="assetsp/libraries/bootstrap-sass/javascripts/bootstrap/alert.js" type="text/javascript"></script>

<script src="assetsp/libraries/colorbox/jquery.colorbox-min.js" type="text/javascript"></script>

<script src="assetsp/libraries/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="assetsp/libraries/flot/jquery.flot.spline.js" type="text/javascript"></script>

<script src="assetsp/libraries/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>

<script src="http://maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing" type="text/javascript"></script>

<script type="text/javascript" src="assetsp/libraries/jquery-google-map/infobox.js"></script>
<script type="text/javascript" src="assetsp/libraries/jquery-google-map/markerclusterer.js"></script>
<script type="text/javascript" src="assetsp/libraries/jquery-google-map/jquery-google-map.js"></script>

<script type="text/javascript" src="assetsp/libraries/owl.carousel/owl.carousel.js"></script>
<script type="text/javascript" src="assetsp/libraries/bootstrap-fileinput/fileinput.min.js"></script>

<script src="assetsp/js/superlist.js" type="text/javascript"></script>

</body>

<!-- Mirrored from preview.byaviators.com/template/superlist/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Oct 2016 05:59:37 GMT -->
</html>
