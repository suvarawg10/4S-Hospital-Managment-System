<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		APOLLO
	</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script>
function openWin() {
    window.open("suc.html");
}
function epr()
{
    var x = document.getElementById("eml").value;
    var y = document.getElementById("fn").value;
   if(y=="workshop" && x=="ep@gmail.com")
      { window.open("epr.php");}
    else
    {
      alert("INVALID INPUT",x,y);
    }
  
 
       
}
</script>
<script src="jq.js"></script>
<script>
  $(document).ready(function()
        {   {$("input#sin").on('click',function()
              {var label=$("input#sin").val();
                if(label=="Log In")
                {   $("#formsi").show(1000);
                      $("#blur").hide(1000);
                      $("input#sin").val("Sign In");
                }
                  if(label=="Sign In")
                {
                      $("input#sin").val("Log In");
                      $("#formsi").hide(1000);
                      $("#blur").show(1000);
                    } 
              });}

         });
</script>
<style type="text/css">
</style>
</head>

<body >

  <div id="bd">
    
	<div class="container">

		<header>
			<div id="logo">4S-SUVARNA SUPRIYA SHARANYA SAKSHI</div>
			<div ><input style="color: white;font-family: verdana;background: #29487d;" type="submit" name="Log In" value="Log In"  id="sin"> </div>
		</header> 
		<main>
  
    <section id="loginsec">
        <div id="formsi">
        <form  onsubmit="return epr();"><table>
             <tr>  <td>EMAIL ID<sup>*</sup>:
            <td>  <input type="email" name="email" autofocus id="eml"><br>
            <br> 
          <tr><td>PASSWORD<sup>*</sup>:
          <td><input type="password" name="t1"  id="fn"><br>
          <tr><br>
          <tr><td><input type="RESET" name="reset" onclick="HTMLFormElement.reset()"> <br>
          <td><input type="submit" name="smt" value="Submit" >  <br>

          </table>
        </form>
    </div>
    <div id="blur">
				<h1 class="text1">Create a new account</h1>
				<h2 class="text2">It's free and always will be.</h2>
			<table cellspacing="4px">
				<tr >
					<td><input class="in1" class="text2" type="text" name="f_name" placeholder="First name"></td>
					<td><input class="in1" type="text" name="l_name" placeholder="Surname"></td>
				</tr>
        <tr>
          <td > <input class="in1" type="text" name="ui" placeholder="User Id" maxlength="12"></td>
          <td > <input class="in1" type="password" name="pw" placeholder="New Password" maxlength="12"></td>
        </tr>
        <tr>
          <td colspan="2"><input  class="in2" type="email/Mobile" name="email_no" placeholder="Mobile Number or Email Address" maxlength="12"></td>
        </tr>
			</table>
			Birthday<br>
			<span>
        	<select   id="day" name="day" value="day">
          		<option >1</option>
          		<option>2</option>
          		<option>3</option>
          		<option>4</option>
          		<option>5</option>
          		<option selected>6</option>
          		<option>7</option>
          		<option>8</option>
          		<option>9</option>
          		<option>10</option>
          		<option >11</option>
          		<option>12</option>
          		<option>13</option>
          		<option>14</option>
          		<option>15</option>
          		<option>16</option>
          		<option>17</option>
          		<option>18</option>
          		<option>19</option>
          		<option>20</option>
          		<option >21</option>
          		<option>22</option>
          		<option>23</option>
          		<option>24</option>
          		<option>25</option>
          		<option>26</option>
          		<option>27</option>
          		<option>28</option>
          		<option>29</option>
          		<option>30</option>
          		<option>31</option>
           	</select>
           </span>
			<span>
        	<select id="month" name="month" value="month">
          		<option selected>Jan</option>
          		<option>Feb</option>
          		<option>Mar</option>
          		<option>Apr</option>
          		<option>May</option>
          		<option>June</option>
          		<option>July</option>
          		<option selected>Aug</option>
          		<option>Sept</option>
          		<option>Oct</option>
          		<option>Nov</option>
          		<option>Dec</option>
        	</select>
      		</span>
      		<span >
        	<select id="year" name="year" value="year">
          		<option selected>1993</option>
          		<option>1994</option>
          		<option>1995</option>
          		<option>1996</option>
          		<option>1997</option>
          		<option>1998</option>
          		<option>1999</option>
          		<option>2000</option>
          		<option>2001</option>
          		<option>2002</option>
          		<option>2003</option>
          		<option>2004</option>
        	</select>
        	</span>
        	<span id="t3">
        	<a href="#">why do I need to provide my date of birth?</a>
      		</span>
      		<br><br>
      		<input id="t4" type="radio" name="Gender" value="F">Female<input id="t4" type="radio" name="Gender" value="M">Male<br>
      		<br><span id="t5">By clicking Sign Up, you agree to our<a href="#"> Terms</a>, <a href="#">Data Policy </a>and <a href="#">Cookie Policy</a>. You may receive SMS notifications from us and can opt out at any time</span>
      		<input type="submit" name="Sign_Up" value="Sign Up" class="b" onclick="href='main.php';">   
        </div>
        </div>

      	</form>
     		</section>
		</main>
  
		<footer>
		<div class="f" style="font-size: 10px">
			<a href="#" style="color: gray"> English (UK)</a> <a href="#"> मराठी</a> <a href="#"> हिन्दीا</a> <a href="#">ગુજરાતી</a>  <a href="#"> ಕನ್ನಡ</a> <a href="#"> ਪੰਜਾਬੀத</a> <a href="#"> மிழ்</a> <a href="#"> বাংলা</a> <a href="#"> తెలుగు</a> <a href="#"> മലയാളം</a>
			<input type="submit" name="Sign_Up" value="+" class="c">
			<hr color="silver"><br>
			<a href="#">Sign Up</a><a href="#">Log In</a><a href="#">Messenger </a>      <a href="#">Facebook Lite </a>           <a href="#">Mobile</a>   <a href="#">Find Friends</a>   <a href="#">People</a>          <a href="#">Pages</a>  <a href="#">Video</a>   <a href="#"> interests </a>  <a href="#"> Places</a>   <a href="#"> Games</a>   <a href="#">Locations </a>   <a href="#">Market</a>   <a href="#"> place</a>    <a href="#">Groups </a>   <a href="#">Instagram</a>    <a href="#">Local </a>   <a href="#">About</a>   <a href="#">Create ad </a>   <a href="#">Create Page</a>   <a href="#">Developers </a>   <a href="#">Careers </a>    <a href="#">Privacy </a>    <a href="#">Cookies</a>    <a href="#">AdChoices</a>     <a href="#">Terms </a>   <a href="#">Help</a>   <a href="#"> Settings</a>   <a href="#"> Activity </a>   <a href="#">log</a><br>	<h5 style="color: gray">4s &#169; 2018</h5>	</div>


		</footer>
  </div>
   
</body>
</html>