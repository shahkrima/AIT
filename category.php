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
<style>



/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */

}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 30%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}
.modal-dialog{
    overflow-y: initial;
}
.modal-body{
    height: auto;
    overflow-y: auto;
}

.modal-dialog1{
    overflow-y: initial;
}
.modal-body1{
    height: 400px;
    overflow-y: auto;
}


/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: red;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    text-decoration: none;
    cursor: pointer;
}

/* The Close Button */
.close1 {
    color: red;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close1:hover,
.close1:focus {
    color: red;
    text-decoration: none;
    cursor: pointer;
}

/* The Close Button */
.close2 {
    color: red;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close2:hover,
.close2:focus {
    color: red;
    text-decoration: none;
    cursor: pointer;
}

/* The Close Button */
.close3 {
    color: red;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close3:hover,
.close3:focus {
    color: red;
    text-decoration: none;
    cursor: pointer;
}

/* The Close Button */
.close4 {
    color: red;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close4:hover,
.close4:focus {
    color: red;
    text-decoration: none;
    cursor: pointer;
}

/* The Close Button */
.close5 {
    color: red;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close5:hover,
.close5:focus {
    color: red;
    text-decoration: none;
    cursor: pointer;
}
.modal-header {
    padding: 2px 16px;
     color: white;
}

.modal-body {padding: 2px 16px;}

.needPhoto,#photographer {
    background-color: #051939 ; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

.needPhoto:hover,#photographer:hover {
cursor:pointer;
text-decoration:none;
}

.form {
   margin-left:auto;
   margin-right:auto;
   width:60%;
}
   input{
    border-radius: 5px;
    padding: 8px;
	color:;
}

.modal-header1 {
    padding: 2px 16px;
    background-color: #051939;
    color: white;
}

#loginbtn {
    background-color: #051939 ; 
    border: none;
    color: white;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: block;
    font-size: 16px;
	margin: auto;
}
#signUpbtn {
    background-color: #051939 ; 
    border: none;
    color: white;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: block;
    font-size: 16px;
	margin: auto;
}
#signUpbtn,#makeProfile,#getQuotes {
    background-color: #051939 ; 
    border: none;
    color: white;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: block;
    font-size: 16px;
	margin: auto;
}

.img1 {
	background-size: cover;
	background-position: center;
	background-color: #051939;
	
}
.orange{
color:#051939;}

.input[type=text], select {
    width: 15%;
    padding: 10px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;

}


div.gallery {
    margin: 18px;
    border: 1px solid #ccc;
    float: left;
    width: 300px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}

.padding {
	padding-left: 25px;
	padding-right: 25px;
}

</style>
</head>
<body>

<header>
	
	<div class="w3-row-padding">
		<img src="images/logo3.png">
		
		<div class="img1">
			<div class="w3-row">
			<nav>
				<div class="topnav" id="myTopnav">
					<a href="home.php">Home</a>					
					<a href="about.php">About</a>
					<a href="contact.php">Contact</a>
					<a href="help.php">Help</a>
					<a  id="<?php if($logout) echo "logout"; else echo "modal"; ?>" href="<?php if($logout) echo "logout.php"; else echo "#"; ?>"><?php if($logout) echo "Logout"; else echo "Login"; ?></a>
					<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>			
				</div>
			</nav>	
			</div>		
		</div>
	</div>
	</header>
	
<br>
<section>
<div class="orange">
<h1><?php echo"Welcome $name"?></h1>
<h1> Photographers</h1> 

</div>
<div class="form1">
 <form action="/action_page.php">
 <label for="Category">Type of Photographer</label>
    <select id="Type of Photographer" name="Type of Photographer">
      <option value="Wedding">Wedding</option>
      <option value="Commercial">Commercial</option>
      <option value="Fashion">Fashion</option>
	  <option value="Kids">Kids</option>
    </select>
	
<label for="City">City</label>
    <select id="City" name="City">
      <option value="Pune">Pune</option>
      <option value="Mumbai">Mumbai</option>
      <option value="Delhi">Delhi</option>
	  <option value="Chennai">Chennai</option>
    </select>
	<label for="Price">Price</label>
	<input id="slider1" type="range" min="0" max="30000" step="10" onchange="updateTextInput(this.value);" />
	 <input type="text" id="textInput" value=""><br><br>
	 </form>
 </div> 
 
<div class="w3-row-padding padding">	
		
			<div class="w3-col l4">
				<a href="profile.php">
				<div class="polaroid">
				<img src="images/3.gif" style="width: 100%;" >	
					<div class="container">
					<p>RR PHOTOGRAPHERS</p>
					</div>
				</div></a>
			</div>		
			<div class="w3-col l4">
				<a href="profile.php">
				<div class="polaroid">
				<img src="images/4.gif" style="width: 100%;">	
					<div class="container">
					<p>CUTE KIDS</p>
					</div>
				</div></a>
			</div>
			<div class="w3-col l4">
				<a href="profile.php">
				<div class="polaroid">
				<img src="images/7.gif" style="width: 100%;">	
					<div class="container">
					<p>AWESOME</p>
					</div>
				</div></a>
			</div>			
		
		</div>
		<br>
<div class="w3-row-padding padding">	
		
			<div class="w3-col l4">
				<a href="profile.php">
				<div class="polaroid">
				<img src="images/9.gif" style="width: 100%;" >	
					<div class="container">
					<p>PHOTOGRAPHERS</p>
					</div>
				</div></a>
			</div>		
			<div class="w3-col l4">
				<a href="profile.php">
				<div class="polaroid">
				<img src="images/10.gif" style="width: 100%;">	
					<div class="container">
					<p>ASHISH STUDIOS</p>
					</div>
				</div></a>
			</div>
			<div class="w3-col l4">
				<a href="profile.php">
				<div class="polaroid">
				<img src="images/11.gif" style="width: 100%;">	
					<div class="container">
					<p>TRADITIONAL</p>
					</div>
				</div></a>
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
			<form class="form" action="">
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
	
	<form class="form" action="/action_page.php">

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


<script>function updateTextInput(val){
document.getElementById('textInput').value=val;}
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


</body>


</html>