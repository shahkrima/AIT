<?php
include 'connect.php';

session_start();

 // Fetching variables of the form which travels in URL
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$contactNo = $_POST['contactNo'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

$result = mysql_query("SELECT email, password FROM customer WHERE email = '".$email."'");
$fetch = mysql_fetch_array($result);
$check_email = $fetch['email'];

if($email != $check_email){
//Insert Query of SQL
$_SESSION['name'] = $firstName;

$query = mysql_query("insert into customer(firstName, lastName, email, contactNo,password,confirmPassword) values ('$firstName', '$lastName', '$email', '$contactNo', '$password', '$confirmPassword')",$dbhandle);

header("location:category.php");
}
else{
	    echo "<script>alert('Already Registered');
		window.location='home.php'</script>";			
}

//mysql_close($connection); // Closing Connection with Server
?>