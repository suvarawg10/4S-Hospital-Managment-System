<?php
	$dbuser="root";
	$dbpass="";
	$db="hospital";
	$dbhost="localhost";
	$f_n=$_POST["t1"];
	$d_f=$_POST["n1"];
	$med_c=$_POST["n2"];
	$r_cost=$_POST["PRICE"];
	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
	if(!$conn)
	{echo"connection was failed".mysqli_connect_error();}
	if(empty($f_n)||empty($d_f)||empty($med_c)){echo"fill the mandatory fields";}
	else
	{
		$sql="INSERT into bill(p_id,bill_no,room_cost,med_cost,d_fees) values('$f_n',default,'$r_cost','$med_c','$d_f')";
		if(mysqli_query($conn,$sql))
			{
				echo"succesfull";
			}
		else{
				echo"smthing went wrong";
			}
	}
	?>
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
			#m{color: red;
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
			
		
		var f_n = document.getElementById("fn").value;
		var m_c = document.getElementById("medc").value;
		var flag=true;
		if(f_n==0){document.getElementById("a").innerHTML="***fill this***";flag=false;}
		if(m_c==0){document.getElementById("m").style.display="block";flag=false;}
 		if(flag==true){
 			alert(" succesfully",f_n,m_c,ABC,DEF);
 		}
	return flag;
	}
	
</script>

</head>

<!--<link rel="stylesheet" type="text/css" href="mystyle.css">-->
	
<body>
	<div>
		<header id ="frmh">Patient Bill Form</header>
		<hr style="color: white">
		<form  action="b.php" method="post" autocomplete="off" onsubmit="return valid();">
		<table rowspacing="15px">
		<tr><td>PATIENT ID<sup>*</sup>:
		<td><input type="numbers" name="t1" placeholder="eg.0001" id="fn"><br><span id='a'></span>
		<tr><td>DOCTOR FEES:<sup>*</sup>:
		<td><input name="n1" min="200" max="50000" step="200" type="numbers" id="ps"><br>
		<tr><td>MEDICINE COST<sup>*</sup>:
		<td>	<input type="numbers" name="n2" id="medc"><br><span id='m' >***ENTER THIS***</span><br>
		<tr><td>ROOM COST<sup>*</sup>:<br>
			<td><input list="pr" name="PRICE" id="price" >
			<datalist id="pr">
				<option value="0" >NO</option>
				<option value="400">(G.W)400</option>
				<option value="500">(ICU)500</option>
				<option value="600">(ISOLATED)600</option>
				<option value="700">(DOUBLE BED)700</option>
				<option value="1200" disabled="disabled">(VIP)1200</option>
			</datalist>
			<tr><td><input type="RESET" name="reset" onclick="document.location.reload()"> <br>
			<td><input type="submit" name="smt" value="Submit" >  <br>
		</table>
		</form>
	</div>
	<a href="epr.php">HOME</a>
</body>
</html>