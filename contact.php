<?php
include 'connect.php';

session_start();
$logout = false;
	if(isset($_SESSION['name']))
	{
		$logout = true;
	}
	
	@$name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="description" content="Hire great Phoographers">
  <meta name="keywords" content="bridal photos,candid photography, event photographer, find a photographer,
  kids photos, local photographer, photographer, professional photography, wedding photographer, commercial photographer">
  <meta name="author" content="Radhika">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- home -->
	<link rel="stylesheet" href="css/home.css">
	<!-- modal -->
	<link rel="stylesheet" href="css/modal.css">

<style> 
.img1 {
	background-size: cover;
	background-position: center;
	background-color: #051939;
	
}
div {
   
   color: #14525F;
   
}
h1 {
	margin-left: 20px;
	margin-top: 20px;
}
.floating-box {
    display: inline-block;
    width: 80%;
    height: 60%;
   margin:2px;
   padding:20px;
    border: 3px solid #14525F; 
}
.img{
background-color: #6D6D5E;
    color: #ffffff;
    height: 60%;
    background-image: url('images/web.gif');
    background-repeat: no-repeat;
    background-size: cover;
	}

#submit {
	background-color: #14525F;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 10px 30px;
    cursor: pointer;
}
#form {
	 width: 60%;
    padding: 12px 20px;
    margin: 8px 20px;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
}
input:focus {
    border: 3px solid #555;
}	
</style>
</head>
<body>
<header>
	
	<div class="w3-row">
		<img src="images/logo3.png">
		
		<div class="img1">
			<div class="w3-row">
			<nav>
				<div class="topnav" id="myTopnav">
					<a href="home.php">Home</a>					
					<a href="about.php">About</a>
					<a href="help.php">Help</a>
					<a  id="<?php if($logout) echo "logout"; else echo "modal"; ?>" href="<?php if($logout) echo "logout.php"; else echo "#"; ?>"><?php if($logout) echo "Logout"; else echo "Login"; ?></a>
					<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>			
				</div>
			</nav>	
			</div>		
		</div>
	</div>
	</header>
<section>
<div class="img"> 
<div>
<h1>Contact Us at Clickmypic@gmail.com or Fill the Form.</h1>
<form>
  <label for="name"></label>
  <input type="text" id="form" name="name" placeholder="Name" required><br>
   <label for="email"></label>
  <input type="email" id="form" name="email" placeholder="Email" required><br>
  <label for="email"></label>
  <input type="tel" id="form" name="tel" placeholder="Mobile Number"maxlength="10" pattern="[0-9]{10}" required><br>
 <input type="text" id="form" name="msg" placeholder="Message" required><br> <br><br>
  <input type="Submit" id="submit" value="Submit">
</form>
</div>
</div>
</section>
<footer>
	<div class="col-12">
	<div class="footer">Click My Pic &copy; 2017 </div>
	</div>
	</footer>
		<!-- Modal -->
	<!-- The Modal -->
	<div id="myModal" class="modal">
	<!-- Modal content -->
	<div class="modal-content">
		<div class="modal-header">
			<span class="close">&times;</span> <br><br>
		</div>
		<div class="modal-body">
			<form class="form" action="" method="post" >
				<input type="button" class="needPhoto"  id="login1" name="needPhoto" value="I need a Photographer">
				<pre><p align="centre" style="font-size:20px ">         OR</p></pre>
				<input type="button" id="login2" class="needPhoto" name="photographer" value="I am a Photographer   ">
			</form>
			<br>
		</div>
	</div>
	</div>
	<!-- Modal_Login -->
	<!-- The Modal -->
	<div id="myModal1" class="modal">
	<!-- Modal content -->
	<div class="modal-content">
		<div class="modal-header1">
			<span class="close1">&times;</span>
			<h2>CLICK MY PIC</h2>
		</div>
		<div class="modal-body">
			<form class="form" action="loginvalidate.php" method="POST">
			<div class="w3-section">
				<input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Enter Email Id" name="email" required style="width:100%"><br><br>		  	  
				<input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" required style="width:100%"><br><br>
				<!--<input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember Me <br><br>-->
				<button class="w3-button w3-block w3-green w3-section w3-padding" id="loginbtn" type="submit">Login</button>		
				<p> New to Click My Pic? <a href="#" id="signup1"> Sign Up</a></p>
			</div>
			</form>
		</div>
	</div>
	</div>
	<!-- Modal_Signup -->
	<!-- The Modal -->
	<div id="myModal2" class="modal"
	<!-- Modal content -->
	<div class="modal-content">
		<div class="modal-header1">
			<span class="close2">&times;</span>
			<h2>CLICK MY PIC</h2>
		</div>
		<div class="modal-body">
			<form class="form" action="insertcustomer.php" method="post">
				<div class="w3-section">
					<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter First Name" name="firstName" required style="width:100%"><br><br>
					<input class="w3-input w3-border w3-margin-top" type="text" placeholder="Enter Last Name" name="lastName" required style="width:100%"><br><br>
					<input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Enter Email Id" name="email" required style="width:100%"><br><br>		  
					<input class="w3-input w3-border w3-margin-bottom" type="tel" placeholder="Enter Contact No" name="contactNo" required style="width:100%"><br><br>			
					<input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" required style="width:100%"><br><br>	
					<input class="w3-input w3-border" type="password" placeholder="Confirm Password" name="confirmPassword" required style="width:100%"><br><br>
					<!--<input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Tell me about Click My Pic News <br><br>-->
					<button class="w3-button w3-block w3-green w3-section w3-padding" id="signUpbtn" type="submit">Sign Up</button><br>		  
					<!--<p> Already a member? <a href="#" id="login1"> Login</a></p>-->
				</div>
			</form>
		</div>
	</div>
	</div>
	<!-- Modal_Login1 -->
	<!-- The Modal -->
	<div id="myModal3" class="modal">
	<!-- Modal content -->
	<div class="modal-content">
		<div class="modal-header1">
			<span class="close3">&times;</span>
			<h2>CLICK MY PIC</h2>
		</div>
		<div class="modal-body">
			<form class="form" action="loginvalidate1.php" method="POST">
			<div class="w3-section">
				<input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Enter Email Id" name="email" required style="width:100%"><br><br>		  	  
				<input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" required style="width:100%"><br><br>
				<!--<input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember Me <br><br>-->
				<button class="w3-button w3-block w3-green w3-section w3-padding" id="loginbtn" type="submit">Login</button>		
				<p> New to Click My Pic? <a href="#" id="signup2"> Sign Up</a></p>
			</div>
			</form>
		</div>
	</div>
	</div>
	<!-- Modal_Signup1 -->
	<!-- The Modal -->
	<div id="myModal4" class="modal">
	<!-- Modal content -->
	<div class="modal-content">
		<div class="modal-header1">
			<span class="close4">&times;</span>
			<h2>CLICK MY PIC</h2>
		</div>
		<div class="modal-body">		
			<form class="form" action="home.php">
				<div class="w3-section">
					<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter First Name" name="firstName" required style="width:100%"><br><br>
					<input class="w3-input w3-border w3-margin-top" type="text" placeholder="Enter Last Name" name="lastName" required style="width:100%"><br><br>		 
					<input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Enter Email Id" name="email" required style="width:100%"><br><br>		  
					<input class="w3-input w3-border w3-margin-bottom" type="tel" placeholder="Enter Contact No" name="contactNo" required style="width:100%"><br><br>
					<input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" required style="width:100%"><br><br>		  
					<input class="w3-input w3-border" type="password" placeholder="Confirm Password" name="confirmPassword" required style="width:100%"><br><br>		  
					<button class="w3-button w3-block w3-green w3-section w3-padding" id="makeProfile" name="makeProfile" type="submit" onclick="location.href = 'makeprofile.php';">Make Profile</button><br>
					<!--<input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Tell me about Click My Pic News <br><br>-->
					<button class="w3-button w3-block w3-green w3-section w3-padding" id="signUpbtn" type="submit">Sign Up</button><br>		  
					<!--<p> Already a member? <a href="#" id="login2"> Login</a></p>-->
				</div>
			</form>	
		</div>
	</div>
	</div>

	<!-- Get free Quotes -->
	<!-- The Modal -->
<div id="myModal5" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close5">&times;</span>
    <pre>  <h3 style="color:red">         Hire the right Photographer!</h3></pre>
    </div>
    <div class="modal-body1">
	
	<form class="form" action="home.php">

        <div class="w3-section">

		 <label>
        <input id="photographerType" name="photographerType" list="type" type="text" placeholder="Photographer Type" style="width:100%" required> 
        <datalist id="type"> 
        	<option value="Wedding Photographer" ></option> 
        	<option value="Fashion Photographer" ></option> 
        	<option value="Commercial Photographer" ></option> 
        	<option value="Kids Photographer" ></option> 
        	
        </datalist>
		</label><br><br>

        <input type="text" id="city" name="type" placeholder="City" style="width:100%" required> <br><br>

        <label>
        <input id="budget" name="budget" list="budgetlist" type="text" placeholder="Budget" style="width:100%" required> 
        <datalist id="budgetlist"> 
        	<option value="Less than Rs 5000" ></option> 
        	<option value="Rs 5000 to Rs 15000" ></option> 
        	<option value="Rs 15000 to Rs 25000" ></option> 
        	<option value="More than Rs 25000" ></option> 
        	
        </datalist>
		</label><br><br>
		
		<textarea type="text" id="address" rows="5" cols="10" placeholder="Please describe your requirements." required style="width:100%"></textarea><br><br>
		
		<input type="text" id="fullName" name="fullName" placeholder="Full Name" style="width:100%" required> <br><br>
		
		<input type="email" id="email" name="email" placeholder="Email Id" style="width:100%" required> <br><br>
		
		<input type="tel" id="contactNo" placeholder="Enter Contact No" name="contactNo" required style="width:100%"><br><br>
		
		<button class="w3-button w3-block w3-green w3-section w3-padding" id="getQuotes" type="submit">Get Quotes</button><br>
		    
	     </div>

      </form>

      </div>
   
  </div>

</div>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

//Modal
// Get the modal
var modal = document.getElementById('myModal');
// Get the button that opens the modal
var btn = document.getElementById("modal");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

//Modal_Login
// Get the modal_login
var modal1 = document.getElementById('myModal1');
// Get the button that opens the moda
var btn1 = document.getElementById("login1");
// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close1")[0];
// When the user clicks the button, open the modal 
btn1.onclick = function() {
    modal1.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    modal1.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
//Modal_Signup
// Get the modal
var modal2 = document.getElementById('myModal2');
// Get the button that opens the modal
var btn2 = document.getElementById("signup1");
// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close2")[0];
// When the user clicks the button, open the modal 
btn2.onclick = function() {
    modal2.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
    modal2.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}

//Modal_Login1
// Get the modal
var modal3 = document.getElementById('myModal3');
// Get the button that opens the modal
var btn3 = document.getElementById("login2");
// Get the <span> element that closes the modal
var span3 = document.getElementsByClassName("close3")[0];
// When the user clicks the button, open the modal 
btn3.onclick = function() {
    modal3.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span3.onclick = function() {
    modal3.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal3) {
        modal3.style.display = "none";
    }
}

//Modal_Signup1
// Get the modal
var modal4 = document.getElementById('myModal4');
// Get the button that opens the modal
var btn4 = document.getElementById("signup2");
// Get the <span> element that closes the modal
var span4 = document.getElementsByClassName("close4")[0];
// When the user clicks the button, open the modal 
btn4.onclick = function() {
    modal4.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span4.onclick = function() {
    modal4.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal4) {
        modal4.style.display = "none";
    }
}
//Get free Quotes
// Get the modal
var modal5 = document.getElementById('myModal5');

// Get the button that opens the modal
var btn5 = document.getElementById("Quotes");

// Get the <span> element that closes the modal
var span5 = document.getElementsByClassName("close5")[0];

// When the user clicks the button, open the modal 
btn5.onclick = function() {
    modal5.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span5.onclick = function() {
    modal5.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal5) {
        modal5.style.display = "none";
    }
}

</script>


<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</body>
</html>
