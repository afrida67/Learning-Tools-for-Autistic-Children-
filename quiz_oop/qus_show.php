<?php
include("class/users.php");
$qus=new  users;
$cat=$_POST['cat'];
$qus->qus_show($cat);
$_SESSION['cat']=$cat;
/* echo"<pre>";
print_r($qus->qus); */
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bg.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	function timeout()
	{
		var hours=Math.floor(timeLeft/3600);
		var minute=Math.floor((timeLeft-(hours*60*60)-30)/60);
		var second=timeLeft%60;
		var hrs=checktime(hours);
		var mint=checktime(minute);
		var sec=checktime(second);
		if(timeLeft<=0)
		{
			clearTimeout(tm);
			document.getElementById("form1").submit();
		}
		else
		{

			document.getElementById("time").innerHTML=hrs+":"+mint+":"+sec;
		}
		timeLeft--;
		var tm= setTimeout(function(){timeout()},1000);
	}
	function checktime(msg)
	{
		if(msg<10)
		{
			msg="0"+msg;
		}
		return msg;
	}
	</script>
	
	 <div style="float:right; padding-top: 10px;">
	<a href="home.php" style="text-decoration: none; padding-right: 10px; font-size: 25px; color: #640C84;">হোম  </a>
	><a href="#" style="text-decoration: none; font-size: 25px; padding-right: 50px; font-weight:bold; color: #E30D42;">পরীক্ষা</a></div>
  
</head>
<body onload="timeout()" >
<style>
#search {
    width: 10em;  height: 4em;
	font-size: 20px; 
    font-weight: bold;
    font-family: ariel
}
</style>

<div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		  <h2>বহু নির্বাচনী প্রশ্ন 
		  <script type="text/javascript">
		  var timeLeft=1*60*60;
		  
		  </script>
		  
		  <div id="time"style="float:right">timeout</div></h2>
		<?php
		$i=1;
		foreach($qus->qus as $qust) {?> 
		<form method="post" id="form1" action="answer.php">
		  <table class="table table-bordered">
			<thead>
			  <tr class="danger">
				<th><span style="font-size: 22pt"><?php   echo  $i;?>.<span style="font-size: 22pt"> <?php echo $qust['question'];?></span>   </th>
			  </tr>
			</thead>
			
			<tbody>
			<?php if(isset($qust['ans1'])){?>
			  <tr class="info">
				<td>&nbsp;1&emsp;<input type="radio" value="0" name="<?php echo $qust['id']; ?>" />&nbsp;<img src="img/<?php echo $qust['ans1'];  ?>" alt="" width="80px" height="75px" /></td> </td>
			  </tr>
			<?php }?>
			<?php if(isset($qust['ans2'])){?>
			  <tr class="info">
				<td>&nbsp;2&emsp;<input type="radio"  value="1"  name="<?php echo $qust['id']; ?>" />
				&nbsp;<img src="img/<?php echo $qust['ans2'];  ?>" alt="" width="80px" height="75px" /></td>
			  </tr>
			  
	
			  
			  <?php }?>
			  <?php if(isset($qust['ans3'])){?>
			  <tr class="info">
				<td>&nbsp;3&emsp;<input type="radio" value="2" name="<?php echo $qust['id']; ?>" />&nbsp;<img src="img/<?php echo $qust['ans3'];  ?>" alt="" width="80px" height="75px" /></td></td>
			  </tr>
			  <?php }?>
			  <?php if(isset($qust['ans4'])){?>
			  	<tr class="info">
				<td>&nbsp;4&emsp;<input type="radio" value="3" name="<?php echo $qust['id']; ?>" />&nbsp;<img src="img/<?php echo $qust['ans4'];  ?>" alt="" width="80px" height="75px" /></td></td>
			  </tr>
			  <?php }?>
			<tr class="info">
				<td><input type="radio" checked="checked" style="display:none" value="no_attempt" name="<?php echo $qust['id']; ?>" /></td>
			  </tr>
			</tbody>
			
		  </table>
		<?php $i++;}?>
	<center><input type="submit" id="search" value="কুইজ জমা দাও"  class="primary-btn bg1"style="background-color: #008CBA;margin-bottom:5%;color:#000;"></center>
</form>	
		</div>
<div class="col-sm-2"></div>
</div>

</body>
</html>
