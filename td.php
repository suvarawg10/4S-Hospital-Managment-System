<?php
	$dbuser="root";
	$dbpass="";
	$db="hospital";
	$dbhost="localhost";
	$p_n=$_POST["mob"];
	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
	if(!$conn)
	{echo"connection was failed".mysqli_connect_error();}
		$dl="select d_id,d_name from doctor";
		$sql="select count(*) from doctor";
		if(mysqli_query($conn,$sql))
			{
				echo"succesfull";
			}
		else{
				echo"smthing went wrong";
			}

			$result = $conn->query($sql);
			$ddl= $conn->query($dl);

		if ($ddl->num_rows > 0) {
    		// output data of each row
    		while($row = $ddl->fetch_assoc()) {
       		 echo $row["d_name"]."<br>";
   			 }
				} else {		
    							echo "<div id='blur'><br>"."no doctor was exist!!!";
							}
		
		if ($result->num_rows > 0) {
    		// output data of each row
    		while($row = $result->fetch_assoc()) {
       		 echo "<div id='blur'><br><h1>"."Total No Of Doctors: " . $row["count(*)"]."</h1><br>";
   			 }
				} else {		
    							echo "<div id='blur'><br>"."no doctor was exist!!!";
							}
			$conn->close();

	?>
	<html>
<head>
	<meta charset="utf-8">
	<title> 4S Hospital </title>
	
	<link href="style.css" type="text/css" rel="stylesheet">
	
</head>
<style type="text/css">
		.l1{
		color: white;
		padding: 2px;
		width:100px;
		height:30px;
		background-color: lightblue;
		border-bottom:orange solid 3px;
		float: left;
		margin:15px;
		padding: 5px;
		margin-left: 150px;
		border-radius: 15px;
		}
		.l1:hover{
		background-color: #0cfcf8;
		}
		#eprleft{
			top:300px;
		}
		.body{
			height:0px;
			position: fixed;
		}
		.nav_down{
	width:100%;
	background-color:#2FA5EB !important;
	border-bottom:2px solid #f0f0f0;
}
.nav_down div{
	width:1200px;
	color:#fff;
	background-color:#000;
	font-family:calibri;
	padding:10px;
	text-align:left;
	margin-top: 300px;
}

	
</style>
<body>
	
	<div class="top">
		<div>
		
		</div>
	</div>
	
<header>
	<div id="logo">4S-SUVARNA SUPRIYA SHARANYA SAKSHI</div>
</header>
	
	
	
	<div id="blur">
		
		<div id="eprleft">
		
					<a href="epr.php">HOME</a>
			</ul>
		</div>
	</div>
	<div class="nav_down">
		<div>
		 &copy; 4S HospitaL, THANE-WEST 
		</div>
	</div>
	
</body>
</html>