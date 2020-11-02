<?php	
	if(empty($_POST['name_27536']) && strlen($_POST['name_27536']) == 0 || empty($_POST['email_27536']) && strlen($_POST['email_27536']) == 0 || empty($_POST['message_27536']) && strlen($_POST['message_27536']) == 0)
	{
		return false;
	}
	
	$name_27536 = $_POST['name_27536'];
	$email_27536 = $_POST['email_27536'];
	$message_27536 = $_POST['message_27536'];
	$optin_27536 = $_POST['optin_27536'];
	
	$to = 'info@blocsaddons.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Volt CMS page contact form";
	$email_body = "You have received a new message. \n\n".
				  "Name_27536: $name_27536 \nEmail_27536: $email_27536 \nMessage_27536: $message_27536 \nOptin_27536: $optin_27536 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: info@blocsaddons.com\n";
	$headers .= "Reply-To: $email_27536";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>