<?php
	if( isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['message']) ){
	$fullname = $_POST['fullname']; // HINT: use preg_replace() to filter the data
	$email = $_POST['email'];
	$message = nl2br($_POST['message']);
	$to = "info@domain.com";	
	$from = $email;
	$subject = 'Contact Form Message';
	$message = '<b>Name:</b> '.$fullname.' <br><b>Email:</b> '.$email.' <p>'.$message.'</p>';
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if( mail($to, $subject, $message, $headers) ){
		echo "success";
	} else {
		echo "<h3 align='center'>The server failed to send the message. Please try again later.</h2>";
	}
}
?>