<?php
// Check for empty fields
if(empty($_POST['name'])  		  ||
   empty($_POST['email']) 		  ||
   empty($_POST['comments'])	  ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['comments'];

	
// Create the email and send the message
$to = 'heath.palmer@hyperloopuc.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Enquiry from website from $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: heath.palmer@hyperloopuc.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
$thankYou="<p>Thank you! Your message has been sent.</p>";
header("Location: ../../contact.html#success?s=sent");
return true;
			
?>