<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		formfill
	</title>
	<style type="text/css" href="style.css">
		body{
		
			width: 1200px;
			background: lightblue;
		}
		div{
			background-color: white;
			width: 650px;
			margin:  50px 300px;
		
		}
		form
		{
			padding: 40px;
			margin: 10,auto;
			word-spacing: 3px;
		}
		sup{
			color:red; 
		}
		header#frmh{
			background: linear-gradient(175deg,darkblue,skyblue,blue);
			border: double;
			border-color: white;
			border-width: 3px;
			border-top-left-radius: 30px;
			border-bottom-right-radius: 30px;
			opacity: 0.8;
			text-shadow: 1px 2px 2px black;
    		font-family: sans-serif;
    		color: white;
    		font-size: 25px;
    		padding:30px 100px ;
    		word-spacing: 4px;

		}
		input:hover,textarea:hover{
			background-color: lightblue;
			border-bottom:grey; 
		}
		table{
			border-spacing: 5px;
		}
		input{
			border: none;
			border-bottom:2px solid black; 
		}
			input[type=submit], input[type=reset]{
					border: 2px solid darkblue;
					-webkit-transition-duration: 0.4s;
   					 transition-duration: 0.4s;
    				color: darkblue;
    				width: 150px;
    				height: 30px;
    				margin: 20px;
    				border-radius: 25px;
    				text-shadow: 6px;
    				font-family: serif;
    				font-size: 20px;

			}
			input[type=submit]:hover, input[type=reset]:hover {
    			background-color: #008CBA;
    			color: white;
				}
			#coid,#f,#h{color: red;
				width: 200px;
				height:20px;
				border: none;
				border-top-right-radius:5px; 
				border-bottom-right-radius:5px;
				border-bottom-left-radius:5px;
				padding: 5px;
				display: none;
				
			}
			#a{
				color:red;
				width: 200px;
				height:30px;
				border: none;
				border-top-right-radius:5px; 
				border-bottom-right-radius:5px;
				border-bottom-left-radius:5px;
				padding: 5px;
				}
	
	</style>

	<script type="text/javascript" >
	function valid()
	{		
			
	
		var co_d = document.getElementById("mob").value;
		var f_n = document.getElementById("fn").value;
		var d_t = document.getElementById("ct").value;
		var c_st = document.getElementById("cooid").value;
		var flag=true;
		if(f_n==''){document.getElementById("a").innerHTML="***fill the name***";flag=false;}
		if(d_t==''){document.getElementById("f").style.display="block";flag=false;}
		if(c_st==0){document.getElementById("coid").style.display="block";flag=false;}
		if(co_d==''){document.getElementById("h").style.display="block";flag=false;}
 		
	return flag;
	}
	
</script>

</head>

<!--<link rel="stylesheet" type="text/css" href="mystyle.css">-->
<body>
	<?php
	$dbuser="root";
	$dbpass="";
	$dbhost="localhost";
	$db="hospital";
	$f_n=$_POST["t1"];
	$d_t=$_POST["ipl"];
	$co_d=$_POST["cd"];
	$c_st=$_POST["cst"];
	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
	if(!$conn)
	{echo"connection was failed".mysqli_connect_error();}
	if(empty($f_n)||empty($d_t)||empty($co_d)||empty($c_st)){echo"fill the mandatory fields";}
	else
	{
		$sql="INSERT into medicines(d_id,med_code,name,price) values('$d_t','$co_d','$f_n','$c_st')";
		if(mysqli_query($conn,$sql))
			{
				echo"succesfull";
			}
		else{
				echo"smthing went wrong";
			}
	}
	?>
	<div>
		<header id ="frmh">MEDICINE DETAILS ENTRY FORM</header>
		<hr style="color: white">
		<form action="m.php" method="post" autocomplete="off" onsubmit="return valid();">
		<table rowspacing="15px">
		<tr><td>CODE<sup>*</sup>:<td><input type="numbers" id="mob" name="cd"><br><span id="h">***enter code.***</span>
			<br>
		<tr><td>MEDICINE NAME<sup>*</sup>:
		<td><input type="text" name="t1" id="fn"><br><span id='a'></span>
		<tr><td>COST<sup>*</sup>:<td><input type="numbers" id="cooid" name="cst"><br><span id="coid">***enter cost.***</span>
			<br>
		<tr><td>PESCRIBED BY<sup>*</sup>:
			<td><input list="numbers" name="ipl" id="ct">
			<datalist id="numbers">
				<option value="1">1.Dr.shetty</option>
				<option value="2">2.Dr.shanti</option>
				<option value="3">3.Dr.A.J.kanti</option>
				<option value="4">4.Dr.Ramanujan</option>
				<option value="NUll" >NOT YET</option>
			</datalist>	<br>	
			<span id='f' >***select this***</span>
		<BR>

		<tr><td><input type="RESET" name="reset" onclick="document.location.reload()"> <br>
			<td><input type="submit" name="smt" value="Submit" >  <br>
		</table>
		</form>
		
	</div>
	<a href="epr.php">HOME</a>
</body>
</html>