<?php
include("class/users.php");
$ans=new  users;
$answer=$ans->answer($_POST);
$ans->cat_shows();

$email=$_SESSION['email'];
$cat=$_SESSION['cat'];
$profile=new users;
$profile->users_profile($email);
$profile->cat_shows();


?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>answer</title>
	 <link rel="stylesheet" type="text/css" href="css/bg.css" />
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/bg.css">
  
   <div style="float:right; padding-top: 10px;">
	<a href="home.php" style="text-decoration: none; padding-right: 10px; font-size: 25px; color: #640C84;">পরীক্ষা </a>
	><a href="#" style="text-decoration: none; font-size: 25px; padding-right: 50px; font-weight:bold; color: #E30D42;">ফলাফল</a></div>
	
</head>
<body>
	<center>
	<?php
	$total_qus=$answer['right']+$answer['wrong']+$answer['no_answer'];
	$attempt_qus=$answer['right']+$answer['wrong'];
	?>
	<div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
  <h2><span style="font-size: 28pt;font-weight:bold;">পরীক্ষার ফলাফল</h2>
  <table border=5 bordercolor=#E92559 class="table " >
   
      <tr>
        <th><span style="font-size: 24pt">মোট প্রশ্ন</th>
        <th><span style="font-size: 24pt"><?php echo $total_qus; ?> টি </th>
      </tr>
   
   
      <tr>
        <td><span style="font-size: 17pt">মোট উত্তর দিয়েছে</td>
        <td><span style="font-size: 17pt"><?php echo $attempt_qus;?> টি </td>
      </tr>
      <tr>
        <td><span style="font-size: 17pt">সঠিক উত্তর</td>
        <td><span style="font-size: 17pt"><?php echo $answer['right'];?> টি </td>
      </tr>
      <tr>
        <td><span style="font-size: 17pt">ভুল উত্তর</td>
        <td><span style="font-size: 17pt"><?php echo $answer['wrong'];?> টি </td>
      </tr>
	  <tr>
        <td><span style="font-size: 17pt">উত্তর দেয় নাই </td>
        <td><span style="font-size: 17pt"><?php echo $answer['no_answer'];?> টি </td>
      </tr>
	  <tr>
        <th><span style="font-size: 22pt">ফলাফল </th>
        <th><span style="font-size: 22pt"><?php 
		$per=($answer['right']*100)/($total_qus);
		
				
		echo $per."%";
		  	  
		
		?></th>
		 
      </tr>
    </tbody>
	
  </table>
  
  		<?php 
	foreach($profile->data as $prof)
	{?>
      <tr>
        <td><span style="font-size: 18pt">আইডি : <?php echo $prof['id'];?><br></span> </td>
        <td><span style="font-size: 18pt">নাম : <?php echo $prof['name'];?><br></span> </td>
		<td><span style="font-size: 18pt">নম্বর: 
		<?php  
         echo  $per."%";
		 
		 $now=$prof['id'];
		 //echo "$now";
		$_SESSION['pass1']=$per; 
		$_SESSION['pass2']=$now; 
		$_SESSION['cat']=$cat;
        include "save.php";
           
		
		?></span></td>
	
      </tr>
    </tbody>
	<?php 	}?>
  
  </div>
  <div class="col-sm-2"></div>
</div>
			
	
	</center>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>