<?php
//get data from form  
$firstName = $_POST['firstName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$message = $_POST['message'];
$to = "keerthig12345@mail.com";
$subject = "Mail From website";
$txt ="FirstName = ". $firstName . "\r\n  Gender = " . $gender . "\r\n Email =" . $email . "\r\n Number =" . $number . "\r\n Message =" . $message;
$headers = "From: noreply@vcetinfo.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
echo '<script>alert("Thank You..! Your Feedback is Valuable to Us"); location.replace(document.referrer);</script>';
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
