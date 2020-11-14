<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
$name = $_REQUEST[ 'contact-name' ];
	$email = $_REQUEST[ 'contact-email' ];
	$subject = $_REQUEST[ 'contact-subject' ];
	$message = $_REQUEST[ 'contact-message' ];
	$mail_subject = $subject . "( Customer Contact )";
	$message = "Name: ".$name." \n Email: ".$email." \n Subject: ".$subject." \n Message: ".$message;
	
	/* Replace YOUR_MAIL With Your Mail Address inside '' */
	if ( mail( 'support@bigfixtech.com', $mail_subject, $message, "From:" . $email ) ) {
		echo "Thank you <strong>$name</strong> for contacting with us !!!";
	} else {
		echo "Error in sending message !!! Please try again";
	}
?>