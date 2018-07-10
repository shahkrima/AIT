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
* {
    box-sizing: border-box;
}
.row::after {
    content: "";
    clear: both;
    display: table;
}
[class*="col-"] {
    float: left;
    padding: 15px;
}

.img {
    background-color: #6D6D5E;
    color: #ffffff;
    padding: 15px;

    width: 100%;
    height: 400px;
    background-image: url('images/child.gif');
    background-repeat: no-repeat;
    background-size: cover;
    }
	

.image1 {
    border-radius:100%;
	 padding: 40px;
	 
	background-image: url('images/man.gif');
    background-repeat: no-repeat;
    background-size: cover;
	width:100px;
	height:100px;
}
.box {
    width: 100%;
    height: auto;
	 padding: 10px;
	 padding-right:120px;
    border: #B0C4E3;
	text-align:center;
	
}
.main {
    width: 75%;
    float: right;
    padding: 15px;
	color:#051939;
   font-size:25px;
}
.main1 {
    color:#F48A12;
	   
}
.button {
    background-color: #F48A12 /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 40px 750px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
	
}

.button1 {
    background-color: #051939; 
    color: white; 
	padding: 10px 20px;
	padding-right:40px;
    border: 2px solid #051939;
	display: inline-block;
	 font-size: 35px;
	 text-align:center;
    margin: 40px 10px;
	width:100%;
	height:auto;
	
}

.button1:hover {
    background-color: white;
    color: #051939;
}
.imgpart {
    width: 100%;
    height: 100%;
	 padding: 20px;
    border: #B0C4E3;
     color:#051939;}
 
 div.gallery {
    margin: 13px;
    border: 1px solid #ccc;
    float: left;
    width: 300px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: 200px;
}
 
 div.gallery1 {
    margin: 13px;
    border: 1px solid #ccc;
    float: left;
    width: 300px;
	
}

div.gallery1:hover {
    border: 1px solid #777;
}

div.gallery1 img {
    width: 100%;
    height: 200px;
}



 table {
    border-collapse: collapse;
    width: 100%;
	
	
}

th, td {
    padding: 20px;
    text-align: left;
    border-bottom: 1px solid #ddd;
	font-size:20px;
}

tr:hover{background-color:#F8DDC5;}

.blue{
color:#152055;}
/* For mobile phones: */
[class*="col-"] {
    width: 100%;
}
@media screen and (max-width: 880px) {
    li {
               float: top;
               text-align: center;
               width: 100%;
               display: block;
       }}
@media only screen and (min-width: 600px) {
    /* For tablets: */
    .col-m-1 {width: 8.33%;}
    .col-m-2 {width: 16.66%;}
    .col-m-3 {width: 25%;}
    .col-m-4 {width: 33.33%;}
    .col-m-5 {width: 41.66%;}
    .col-m-6 {width: 50%;}
    .col-m-7 {width: 58.33%;}
    .col-m-8 {width: 66.66%;}
    .col-m-9 {width: 75%;}
    .col-m-10 {width: 83.33%;}
    .col-m-11 {width: 91.66%;}
    .col-m-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
    /* For desktop: */
    .col-1 {width: 8.33%;}
    .col-2 {width: 16.66%;}
    .col-3 {width: 25%;}
    .col-4 {width: 33.33%;}
    .col-5 {width: 41.66%;}
    .col-6 {width: 50%;}
    .col-7 {width: 58.33%;}
    .col-8 {width: 66.66%;}
    .col-9 {width: 75%;}
    .col-10 {width: 83.33%;}
    .col-11 {width: 91.66%;}
    .col-12 {width: 100%;}
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
	
	<div class="img w3-row-padding"></div>
	
	</header>
	

<div class="row">
<br>
<div class="w3-row">
<div class="w3-col l3">
<div class="gallery1">
	<img src="images/man.gif" alt="" style="width:500; height:400">
	<h1>RR Photography</h1>
</div>
</div>
<div class="w3-col l9">
<div class="box"><br>
<div class="main">
We Frame your special moments because we don't take a photograph we make it!!!<br><br><br></div>
</div>
<div>
<button class="button1" id="hire">Hire Me</button>

 
</div>
</div>
</div>

<div class="blue">
<h1>Recent Work Of RR Photography</h1>
</div>
<div class="row">
<div class="gallery">
  <a target="_blank" href="images/3.gif">
    <img src="images/3.gif" alt="Trolltunga Norway" style="width:500; height:400">
  </a>
  
</div>

<div class="gallery">
  <a target="_blank" href="images/8.gif">
    <img src="images/8.gif" alt="Forest" width="200" height="400">
  </a>
  
</div>

<div class="gallery">
  <a target="_blank" href="images/9.gif">
    <img src="images/9.gif" alt="Northern Lights" width="200" height="400">
  </a>
  
</div>


<div class="gallery">
  <a target="_blank" href="images/4.gif">
    <img src="images/4.gif" alt="Mountains" width="200" height="400">
  </a>
  
</div>
</div>
<div class="row">
<div class="gallery">
  <a target="_blank" href="images/5.gif">
    <img src="images/5.gif" alt="Mountains" width="200" height="400">
  </a>
  
</div>
<div class="gallery">
  <a target="_blank" href="images/11.gif">
    <img src="images/11.gif" alt="Mountains" width="200" height="400">
  </a>
  
</div>
<div class="gallery">
  <a target="_blank" href="images/2.gif">
    <img src="images/2.gif" alt="Mountains" width="200" height="400">
  </a>
  
</div>
<div class="gallery">
  <a target="_blank" href="images/camera.jpg">
    <img src="images/camera.jpg" alt="Mountains" width="200" height="400">
  </a>
  
</div>

</div>
<br><br>
<br>
<br>
<div class="blue">
<table>
  <tr>
    <th>Professional Information</th>
    
  </tr>
  <tr>
    <td>Awards</td>
    <td></td>
    <td>Well has become on the top five out of 1000 Submission in Mumbai Documentary festival</td>
  </tr>
  <tr>
    <td>Established since</td>
    <td></td>
    <td>2011</td>
  </tr>
  <tr>
    <td>City</td>
    <td></td>
    <td>Delhi</td>
  </tr>
  <tr>
    <td>No. of photographers</td>
    <td></td>
    <td>7</td>
  </tr>
 
</table>
<br>
<br>
<table>
  <tr>
   <th>Services</th>
    
  </tr>
  <tr>
    <td>Open to Travel</td>
    <td></td>
    <td>Yes</td>
  </tr>
  <tr>
    <td>Type of Service</td>
    <td></td>
    <td>Cinematography , Video Editing , Photo Editing , Photography</td>
  </tr>
  <tr>
    <td>Specialization</td>
    <td></td>
    <td>Candid Weddings , Destinations Weddings and all types of portfolios, be it Kids Portfolio, Models Portfolio, Fashion Photography,
	Candid Weddings , Abstract Photography, Product Photography, Event Photography and Fashion Photography Worldwide</td>
  </tr>
 
</table>
</div>
<footer>
	<div class="col-12">
	<div class="footer">Click My Pic &copy; 2017 </div>
	</div>
	</footer>
	<!-- The Modal -->
<div id="myModalh" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="closeh">&times;</span>
      <h3 style="color:red">&nbsp;&nbsp;&nbsp;&nbsp;Send Enquiry</h3>
      </div>
    <div class="modal-body">
	
	<form class="form" action="/action_page.php">

        <div class="w3-section">

		 <label>
        <input id="photographerType" name="photographerType" list="type" type="text" placeholder="Photographer Type" style="width:100%" required> 
        <datalist id="type"> 
        	<option label="Wedding Photographer" ></option> 
        	<option label="Fashion Photographer" ></option> 
        	<option label="Commercial Photographer" ></option> 
        	<option label="Kids Photographer" ></option> 
        	
        </datalist>
		</label><br>

        <input type="text" id="city" name="type" placeholder="City" style="width:100%" required> <br><br>

        <label>
        <input id="budget" name="budget" list="budgetlist" type="text" placeholder="Budget" style="width:100%" required> 
        <datalist id="budgetlist"> 
        	<option label="Less than Rs 5000" ></option> 
        	<option label="Rs 5000 to Rs 15000" ></option> 
        	<option label="Rs 15000 to Rs 25000" ></option> 
        	<option label="More than Rs 25000" ></option> 
        	
        </datalist>
		</label><br>
		
		<textarea type="text" id="address" rows="5" cols="10" placeholder="Please describe your requirements." required style="width:100%"></textarea><br>
		
		<input type="text" id="fullName" name="fullName" placeholder="Full Name" style="width:100%" required> <br><br>
		
		<input type="email" id="email" name="email" placeholder="Email Id" style="width:100%" required> <br><br>
		
		<input type="tel" id="contactNo" placeholder="Enter Contact No" name="contactNo" required style="width:100%"><br><br>
		
		<button class="w3-button w3-block w3-green w3-section w3-padding" id="sendEnquiry" type="submit">Send Enquiry</button><br>
		    
	     </div>

      </form>

      </div>
   
  </div>

</div>
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
// Get the modal
var modalh = document.getElementById('myModalh');

// Get the button that opens the modal
var btnh = document.getElementById("hire");

// Get the <span> element that closes the modal
var spanh = document.getElementsByClassName("closeh")[0];

// When the user clicks the button, open the modal 
btnh.onclick = function() {
    modalh.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanh.onclick = function() {
    modalh.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modalh) {
        modalh.style.display = "none";
    }
}
</script>


</body>


</html>
