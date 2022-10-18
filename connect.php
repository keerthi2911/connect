<?php
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["firstName"]==""||$_POST["gender"]==""||$_POST["email"]==""||$_POST["number"]==""||$_POST["message"]==""){
echo "Fill All Fields..";
}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['email'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
$firstName = $_POST['firstName'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];
$headers = 'From:'. $email2 . "rn"; // Sender's Email
$headers .= 'Cc:'. $email2 . "rn"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail("keerthig12345@gmail.com", $firstName,$gender,$email,$number,$message);
echo "Your mail has been sent successfuly ! Thank you for your feedback";
}
}
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>hello</h1>
</body>
</html>
