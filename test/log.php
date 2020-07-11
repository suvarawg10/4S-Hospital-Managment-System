<?php
 $dbuser="root";
  $dbpass="";
  $db="hospital";
  $dbhost="localhost";
  $u=$_POST["u_s"];
  $p=$_POST["p_s"];
  echo "*".$u."*".$p;
  $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
  if(!$conn)

  {echo"connection was failed".mysqli_connect_error();}
  
  else{
    $sql="select user_id,pass from authentication where user_id='$u' and pass='$p'";
    if($result=mysqli_query($conn,$sql))
      {
              $row=mysqli_fetch_array($result);
              if ($result->num_rows > 0)
              {
              		if($row['user_id']==$u and $row['pass']==$p)
              		{echo"<script>alert('login succesfull')</script>";}
         
  					       else{echo"<script>alert('Invalid User Id or PassWord ')</script>".$u.$p.$row['user_id'].$row['pass'];}
  				}
  				else
  					{echo"no sign uped user exist!!"."U".$u."p".$p."r1".$row['user_id']."r2".$row['pass'];}
      }
    else{
        echo"<script>alert('smthing went wrong');</script>";
      }
  }
  ?>