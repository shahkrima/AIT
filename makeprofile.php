<!DOCTYPE html>
<html>
<head>
<title> Profile </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 
 div {
   
   background-color: lightgrey;
   
}
.floating-box {
    display: inline-block;
    width: 80%;
    height: 80%;
   margin:2px;
   padding:20px;
    border: 3px solid #14525F; 
}

 
.form {
   margin-left:auto;
   margin-right:auto;
   width:50%;
   
}

#submit {
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

</style>

</head>
<body>
<div>
<form class="form" action="home.php">
<h4 align="center" style="color:red" > Make Profile</h4>
        <div class="w3-section">
        
        <h4> About Studio </h4>
		<textarea type="text" id="about" rows="5" cols="20" placeholder="Describe your Studio." name="about" required style="width:100%"></textarea><br>
		
		 <h4> Personal Information </h4>
		 
		 <label><b>Profile Image</b> </label>
		 <input type="file" id="profileImage" name="profileImage" required><br><br>
		 
		 <input type="tel" id="contactNo" placeholder="Enter Contact No" name="contactNo" required style="width:100%"><br><br>
		 
		 <h4> Professional Information</h4>
				
		<textarea type="text" id="awards" rows="5" cols="20" placeholder="Awards." name="awards" required style="width:100%"></textarea><br><br>
		
		<input type="text" id="establishedSince" name="establishedSince" placeholder="Established Since" style="width:100%" required> <br><br>
		
		<input type="text" id="city" name="city" placeholder="City" style="width:100%" required> <br><br>
		
		<input type="text" id="noOfPhotographer" name="noOfPhotographer" placeholder="No of Photographer" style="width:100%" required> <br><br>
		
				 <h4> Service Information </h4>
		 
		 <input type="text" id="travel" name="travel" placeholder="Open to Travel?" style="width:100%" required> <br><br>
		 
        <textarea type="text" id="typeOfService" rows="5" cols="10" placeholder="Type of Service" name="typeOfService" required style="width:100%"></textarea><br><br>		
		 
		<textarea type="text" id="specialization" rows="5" cols="10" placeholder="Specialization" name="specialization" required style="width:100%"></textarea><br><br>
		
		 <h4> Recent Work </h4>
		 
		  <input type="file" id="Image1" name="Image1" required><br>
		  <input type="file" id="Image2" name="Image2" required><br>
		  <input type="file" id="Image3" name="Image3" required><br>
		  <input type="file" id="Image4" name="Image4" required><br>
		  <input type="file" id="Image5" name="Image5" required><br>
		
		<button class="w3-button w3-block w3-green w3-section w3-padding" id="submit" type="submit">Submit</button><br>
		    
	     </div>

      </form>
</div>
</body>
</html>