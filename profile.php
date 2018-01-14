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

    <title>Profile</title>
</head>

<div style="float:right; padding-top: 10px;">
	<a href="quiz_oop/home.php" style="text-decoration: none; padding-right: 10px; font-size: 25px; color: #640C84;">পরীক্ষা</a>
	><a href="#" style="text-decoration: none; font-size: 25px; padding-right: 50px; font-weight:bold; color: #E30D42;">প্রোফাইল </a></div>
</header><!-- /.header -->

<body style="background-image: url(main-slider.jpg);">
<div style = "height:100px;"></div>
   <div class="container" style="height: 1000px;">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
           

       

       <br>
	  
	
	
	<?php

        
		session_start();
		$now=$_SESSION['pass1'];
		//echo "$now";
		
		include "dbConnect.php";
		$id=$now;
		$query = "select * from signup where id like '$id';";

           $result = mysqli_query($con,$query);
			$items = array();
			$source=array();
			$tag=array();
			$i=0;
			$c=0;
			
			if($row = mysqli_fetch_array($result)) {
							
			     $id=$row["id"];
			     $name =$row["name"]; 
				 $age=$row["age"];
				
				 $num=$row["enum"];
				 $ques=$row["quesno"];
				 $email=$row["email"];
				 $im=$row["img"];
                    
			echo '	<p class=" text-info"></p>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">শিক্ষার্থীর প্রোফাইল</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <a href="'.$im.'"><img alt="User Pic" src="'.$im.'" class="img-circle img-responsive"> </a></div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>স্টুডেন্ট আইডি:</td>
                        <td>'.$id.'</td>
                      </tr>
                      <tr>
                        <td>নাম:</td>
                        <td>'.$name.'</td>
                      </tr>
                    
                         <tr>
                             <tr>
                        <td>বয়স:</td>
                        <td>'.$age.'</td>
                      </tr>
                       
                      <tr>
                        <td>ইমেইল এড্রেসঃ</td>
                        <td><a href="mailto:'.$email.'">'.$email.'</a></td>
                      </tr>
                        
                     
                    </tbody>
                  </table>
                  
                  <a href="quiz_oop/progress.php" class="btn btn-primary" style="margin-left:100px;">প্রগ্রেস রিপোর্ট</a>
                   
                  
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a href="mailto: '.$email.'" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-envelope"></i></a>
                       
                    </div>
            
          </div>
        </div>
      </div>
    </div>   
';            $_SESSION['pass1']=$name;
			}
		
		?>
		
	   

	
	</body></html>