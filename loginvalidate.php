<?php
include 'connect.php';
session_start();

if(isset($_POST["email"], $_POST["password"])) 
    {     

        $email = $_POST["email"]; 
        $password = $_POST["password"]; 

        $result1 = mysql_query("SELECT email, password FROM customer WHERE email = '".$email."' AND  password = '".$password."'");
		$result = mysql_query("SELECT email, password, firstName FROM customer WHERE email = '".$email."'");
		$fetch = mysql_fetch_array($result);
		$firstName = $fetch['firstName'];

        if(mysql_num_rows($result1) > 0 )
        { 
			$_SESSION['name'] = $firstName;
            header("location:category.php");
		}
        else
        {
             echo "<script>alert('Invalid Emal Id OR Password');</script>";
			header("location:home.php");

        }
}
?>