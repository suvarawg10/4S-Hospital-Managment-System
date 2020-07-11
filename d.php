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
			#e,#mobid,#f,#d,#g,#h{color: red;
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
			
		var email = document.getElementById("e_mail").value;
		var m_ob = document.getElementById("mob").value;
		var f_n = document.getElementById("fn").value;
		var qua_l = document.getElementById("ct").value;
		var sa_l = document.getElementById("price").value;
		var g_en = document.getElementById("gen").checked;
		var flag=true;
		if(f_n==''){document.getElementById("a").innerHTML="***fill the first name***";flag=false;}
		if(qua_l==''){document.getElementById("f").style.display="block";flag=false;}
		if(sa_l==0){document.getElementById("h").style.display="block";flag=false;}
		if(g_en==false){document.getElementById("d").style.display="block";flag=false;}
		if(m_ob.length!=10 || m_ob.length==0|| isNaN(m_ob)){document.getElementById("mobid").style.display="block";flag=false;}
		var atpos = email.indexOf("@");
  		var dotpos = email.lastIndexOf(".");
 		if (email == "" || atpos < 1 || ( dotpos - atpos < 2 )) {document.getElementById("e").style.display="block";flag=false;}
 		if(flag==true){
 			alert("succesfully");
 		}
	return flag;
	}
	
</script>

</head>

<!--<link rel="stylesheet" type="text/css" href="mystyle.css">-->
<body>
	<?php
	$dbuser="root";
	$dbpass="";
	$db="hospital";
	$dbhost="localhost";
	$d_n=$_POST["t1"];
	$qual=$_POST["ipl"];
	$sal=$_POST["PRICE"];
	$em=$_POST["email"];
	$gnd=$_POST["ra1"];
	$dp=$_POST["mb"];
	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
	if(!$conn)
	{echo"connection was failed".mysqli_connect_error();}
	
	else{
		$sql="INSERT into doctor(d_id,d_name,qual,saleary,email,gender,d_phno) 
		values(default,'$d_n','$qual','$sal','$em','$gnd','$dp')";
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
		<header id ="frmh">DOCTOR ENTRY FORM</header>
		<hr style="color: white">
		<form action="d.php" method="post" autocomplete="off" onsubmit="return valid();">
		<table rowspacing="15px">
		<tr><td>DOCTOR NAME<sup>*</sup>:
		<td><input type="text" name="t1" placeholder="eg.ajay" id="fn"><br><span id='a'></span>
		<tr><td>GENDER<sup>*</sup>:
		<td>	<input type="radio"id="gen" name="ra1" value="male">male|<input type="radio" name="ra1" value="female">female|<input type="radio" name="ra1" value="other">other<br><span id='d' >***select option***</span>
		<tr><td>QUALIFICATION<sup>*</sup>:
			<td><input list="numbers" name="ipl" id="ct">
			<datalist id="numbers">
				<option value="MBBS">MBBS</option>
				<option value="BMBS">BMBS</option>
				<option value="MBChB">MBChB</option>
				<option value="MBBCh"> MBBCh</option>
				<option value="Others" >Others</option>
			</datalist>	<br>	
			<span id='f' >***select Qualification***</span>
		<BR>
		<tr><td>	MOBILE NO<sup>*</sup>:<td><input name="mb" type="numbers" id="mob"><br><span id="mobid">***enter valid contact no.***</span>
			<br>
		<tr>	<td>EMAIL ADDRESS<sup>*</sup>:
		<td>	<input type="email" name="email" autofocus id="e_mail"><br><span id="e">***enter valid e-mail id***</span>
			<br>
		<tr><td>SALEARY<sup>*</sup>:<br>
			<td><input list="pr" name="PRICE" id="price">
			<datalist id="pr">
				<option value="40000">40000</option>
				<option value="50000">50000</option>
				<option value="60000">60000</option>
				<option value="70000">70000</option>
				<option value="12000" disabled="disabled">12000</option>
			</datalist>	
			<span id='h' >***select this***</span>
		<tr><td><input type="RESET" name="reset" onclick="document.location.reload()"> <br>
			<td><input type="submit" name="smt" value="Submit" >  <br>
		</table>
		</form>
		
	</div>
	<a href="epr.php">HOME</a>
</body>
</html>