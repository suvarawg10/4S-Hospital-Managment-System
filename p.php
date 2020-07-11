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
			#mobid,#f,#d,#h,#addr,#dob{color: red;
				width: 200px;
				height:20px;
				border: none;
				border-top-right-radius:5px; 
				border-bottom-right-radius:5px;
				border-bottom-left-radius:5px;
				padding: 5px;
				display: none;
				
			}
			#a,#b{
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
		
		var m_ob = document.getElementById("mob").value;
		var f_n = document.getElementById("fn").value;
		var s_t = document.getElementById("st").value;
		var a_dd = document.getElementById("add").value;
		var g_en = document.getElementsByClassName("gen").checked;
		var d_ob = document.getElementById("dofb").value;
		var flag=true;
		if(f_n==''){document.getElementById("a").innerHTML="***fill the petient name***";flag=false;}
		if(s_t==''){document.getElementById("b").innerHTML="***fill the state***";flag=false;}
		if(a_dd==''){document.getElementById("addr").style.display="block";flag=false;}
		if(d_ob==null){document.getElementById("h").style.display="block";flag=false;}
		if(g_en==''){document.getElementById("d").style.display="block";flag=false;}
		if(m_ob.length!=10 || m_ob.length==0|| isNaN(m_ob)){document.getElementById("mobid").style.display="block";flag=false;}
  		if(flag==true){
 			alert("succesfully ");
 		}	
 			return flag;
	}
	
</script>

</head>

<!--<link rel="stylesheet" type="text/css" href="mystyle.css">-->
<body>
	<?php
	$t1;$bday;$mon;$a1;$ipl;$cty;
	$dbuser="root";
	$dbpass="";
	$db="hospital";
	$dbhost="localhost";
	$fn=$_POST["t1"];
	$dob=$_POST["bday"];
	$gend=$_POST["ra1"];
	$mon=$_POST["mon"];
	$add=$_POST["a1"];
	$sst=$_POST["ipl"];
	$cty=$_POST["cty"];
	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
	if(!$conn)
	{echo"connection was failed".mysqli_connect_error();}
	if(empty($fn)||empty($dob)||empty($gend)||empty($mon)||empty($add)||empty($sst)||empty($cty)){echo"fill the mandatory fields";}
	
	else{
		$sql="INSERT into patient(p_id,p_name,dob,area,city,state,d_entered,pph_no,gender)
		values(DEFAULT,'$fn','$dob','$add','$cty','$sst',now(),'$mon','$gend')";
		if(mysqli_query($conn,$sql))
			{	
				$pid="select p_id from patient where p_name=$fn";
				echo"registered patient id=".$conn->query($pid);
			}
		else{
				echo"smthing went wrong";
			}
	}
	?>
	<div>
		<header id ="frmh">PATIENT ENTRY FORM</header>
		<hr style="color: white">
		<form  action="p.php" method="post" autocomplete="off" onsubmit="return valid();">
		<table rowspacing="15px">
		<tr><td> NAME OF PATIENT<sup>*</sup>:
		<td><input type="text" name="t1" placeholder="eg.suvarna gaikwad" id="fn"><br><span id='a'></span>
		<tr><td>DATE OF BIRTH:<sup>*</sup></td>
		<td><input type="date" name="bday" id="dofb"><span id="dob">***Select This***</span>
		<tr><td>GENDER<sup>*</sup>:
		<td>	<input type="radio" class="gen" name="ra1" value="male">male|<input type="radio" name="ra1" value="female" class="gen">female|<input type="radio" name="ra1" value="other" class="gen">other<br><span id='d' >***select option***</span>
		<tr><td>	MOBILE NO<sup>*</sup>:<td><input name="mon" type="numbers" id="mob"><br><span id="mobid">***enter valid contact no.***</span>
			<br>
		<tr><td>ADDRESS:
		<td><input type="text" name="a1" id="add"><br><span id='addr'>***Enter Address***</span>
		<tr><td>STATE<sup>*</sup>:
			<td><input list="numbers" name="ipl" id="st">
			<datalist id="numbers">
				<option value="MAHARASHTRA">MAHARASHTRA</option>
				<option value="RAJSTAN">RAJSTAN</option>
				<option value="UTTERPRADESH">UTTERPRADESH</option>
				<option value="OTHER">OTHER</option>
				<option value="PAKISTAN" disabled="disabled">PAKISTAN</option>
			</datalist>	<br>	
			<span id='b' ></span>

				<span id='f' >***select COUNTRY***</span>
		<tr><td>	CITY <sup>*</sup>:
		<td>	<select id="loc" name="cty">
				<optgroup label="INDIA">
					<option value="DELHI">DELHI</option>
					<option value="NAVI MUMBAI">NAVI MUMBAI</option>
					<option value="AIROLI">AIROLI</option>
				</optgroup>
				<optgroup label="AUSTRALIA">
				</optgroup>
				<optgroup label="MALYSIA">
				</optgroup>
			</select>
			<BR>
		
			<BR>
		<tr><td><input type="RESET" name="reset" onclick="document.location.reload()"> <br>
			<td><input type="submit" name="smt" value="Submit" >  <br>
		</table>
		</form>
		
	</div>
	<a href="epr.php">HOME</a>
</body>
</html>