
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>answer</title>
	 <link rel="stylesheet" type="text/css" href="css/bg.css" />
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
  
   <div style="float:right; padding-top: 10px;">
	<a href="home.php" style="text-decoration: none; padding-right: 10px; font-size: 25px; color: #640C84;">পরীক্ষা</a>
	><a href="#" style="text-decoration: none; font-size: 25px; padding-right: 50px; font-weight:bold; color: #E30D42;">ফলাফল</a></div>
	
</head>
<body>
<center>
	
	<div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
  <h2><span style="font-size: 28pt; padding-top:60px; font-weight:bold;">প্রগ্রেস রিপোর্ট </h2>

     <?php

       
		session_start();
		
		include "dbConnect.php";
		$name=$_SESSION['pass1'];
		
		
		$query = "select * from signup where name like '$name';";

           $result = mysqli_query($con,$query);
			$items = array();
			$source=array();
			$tag=array();
			$i=0;
			$c=0;
			$source=array();
			while($row = mysqli_fetch_array($result)) {
							
			    
				$i=$i+1;
				 $num=$row["enum"];
				 $ques=$row["quesno"];
				 $source[]=$num;
				
                    
			echo ' <table border=5 bordercolor=#E92559 class="table " >
    <tbody>
      <tr>
        <th><span style="font-size: 24pt">'.$ques.'</th>
		<td><span style="font-size: 17pt"></td>
      </tr>
  
    
      <tr>
        <td><span style="font-size: 17pt">মোট প্রাপ্ত নম্বরঃ</td>
        <td><span style="font-size: 17pt">'.$num.'</td>
      </tr>
      
    </tbody>
	
  </table>  '
                 
  
  ;         
			
          			
		}
		$sum=$source[$i-1];
		$i=$i-2;
		while($i==0){
		$sum=$sum-$source[$i];
	    $i--;}
		
		if($sum>=0){
              echo '
			  
			  
			  
		<div><h2>ফলাফলের উন্নতি</h2><h2>'.$sum.'%</h2></div>';}
		else{
			$sum=$sum*(-1);
			echo '
			  
			  
			  
		<div><h2>ফলাফলের অবনতি </h2><h2>'.$sum.'%</h2></div>';}
		?>









	
  
  
  
  
  
  
  		
		
  </div>
  <div class="col-sm-2"></div>
</div>
			
	
	</center>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>