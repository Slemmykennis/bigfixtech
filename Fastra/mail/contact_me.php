<?php 
	
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