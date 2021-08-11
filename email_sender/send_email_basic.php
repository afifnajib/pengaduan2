<?php

	$headers = "From: YOUR_NAME <you@your_website.com> \r\n";

	$to = "this_person@their_website.com";
	$subject = "sending emails with php";
	
	$message = "Sending emails using php\n\n";
	$message .= "Even send custom multi line emails? Tell me more!";

	if ( mail($to, $subject, $message, $headers) )
		echo 'Success!';
	else
		echo 'UNSUCCESSFUL...';

?>