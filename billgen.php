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
			#a,#b,#c{
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
	function show(){

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
	$p_n=$_POST["mob"];
	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
	if(!$conn)
	{echo"connection was failed".mysqli_connect_error();}
	if(empty($p_n)){echo"fill the mandatory fields";}
	else
	{
		$sql="select * from bill where p_id=$p_n";
		if(mysqli_query($conn,$sql))
			{
							echo"succesfull";
			}
		else{
				echo"smthing went wrong";
			}

			$result = $conn->query($sql);

		if ($result->num_rows > 0) {
    		// output data of each row
    		while($row = $result->fetch_assoc()) {
       		 echo "<br>"."id: " . $row["p_id"]. "<br>". "bill no: " .$row["bill_no"]. "<br>"."room cost:" .$row["room_cost"]. "<br>".
       		 "Medicine cost:" .$row["med_cost"]."<br>". "doctor fees: " .$row["d_fees"]."<br>"."TOTAL:"."RS.".($row["room_cost"]+$row["med_cost"]+$row["d_fees"]);
   			 }
				} else {
    							echo "<br>"."no petient of this id exist!!!";
							}
			$conn->close();

	}
	?>
	<div>
		<header id ="frmh">BILL GENERATER FORM</header>
		<hr style="color: white">
		<form action="billgen.php" method="post" autocomplete="off" onsubmit="show();">
		<table rowspacing="15px">
		<tr><td>patient registeration no(pid)<sup>*</sup>:<td><input type="numbers" name="mob"><br><span id="mobid">***enter valid id.***</span>
			<br>
		<tr><td><input type="RESET" name="reset" onclick="HTMLFormElement.reset()"> <br>
			<td><input type="submit" name="smt" value="Submit" >  <br>
		</table>
		</form>
		
	</div>
	<a href="epr.php">HOME</a>
</body>
</html>