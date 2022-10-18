<?php
//get data from form  
$firstName = $_POST['firstName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$message = $_POST['message'];

$mailheader = "From:".$firstName."<".$email.">\r\n";

$recipient = "keerthi.g12345@gmail.com";

mail($recipient, $gender, $number,$message,$mailheader) or die("Error!");
echo '<script>alert("Thank You..! Your Feedback is Valuable to Us"); location.replace(document.referrer);</script>';
?>
