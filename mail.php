<?php
//get data from form  
$firstName = $_POST['firstName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$message = $_POST['message'];
$to = "keerthi.g12345@gmail.com";
$subject = "Mail From codeconia";
$txt ="FirstName = ". $firstName .  "\r\n Gender =" . $gender . "\r\n Email =" . $email . "\r\n Number =" . $number . "\r\n Message =" . $message;
$headers = "From: noreply@codeconia.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
echo '<script>alert("Thank You..! Your Feedback is Valuable to Us"); location.replace(document.referrer);</script>';
?>
