<?php
/* Redirect browser */
header("Location: http://www.rentatender.biz/contact.html");
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$numberofpeople = $_POST['numberofpeople'];
$nonalchoholic = $_POST['nonalchoholic'];
$extrastaff = $_POST['extrastaff'];
$fullbar = $_POST['fullbar'];
$beerwine = $_POST['beerwine'];
$setting = $_POST['setting'];


$questions = $_POST['questions'];


if($nonalchoholic){
	$nonalchoholic = "Needed";
}
if($extrastaff){
	$extrastaff = "Needed";
}
if($fullbar){
	$fullbar = "Needed";
}
if($beerwine){
	$beerwine = "Needed";
}



// The message to send
$message = "
You have a new message! \r\n
Name: $name $lastname\r\n
Email: $email\r\n
Phone: $phone\r\n
Event Date: $date\r\n
Number of People: $numberofpeople\r\n
Non Alchoholic Beverages: $nonalchoholic\r\n
Extra Staff: $extrastaff\r\n
Full Bar: $fullbar\r\n
Beer & Wine: $beerwine\r\n
Setting: $setting\r\n
Questions: $questions\r\n
";


echo"$message";
// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('rentatendercontact@gmail.com', 'New Message From Rentatender', $message);

mail('georgegarciaweb@gmail.com', 'New Message From Rentatender', $message);


?>



