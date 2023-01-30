<?php

  $name = $_POST['Submit'];
  $visitor_email = $_POST['email'];
  
	$email_from = 'timegear0000@gmail.com';

	$email_subject = "Newsletter Subscription";

	$email_body = "Thank You for suscriing to my page.\n $message".




  $to = "yourname@yourwebsite.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);
  header("Location: http://127.0.0.1:55681/preview/app/index.html?mailsend");

 ?>
