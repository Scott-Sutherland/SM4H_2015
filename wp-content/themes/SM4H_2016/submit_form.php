<?php

// PHP Swift Mailer

require 'lib/swift_required.php';


$name = $_POST['name'];
$company = $_POST['company'];
$telephone = $_POST['tel'];
$email = $_POST['email'];
$enquiry = $_POST['message'];

// Create the Transport
$transport = Swift_SmtpTransport::newInstance();
;

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

// Create a message
$message = Swift_Message::newInstance('Motorhome - New Enquiry!')
  ->setFrom('enquiries@scottishmotorhomes4hire.co.uk')
  ->setTo(array('scott@we-shape.co.uk'=>'Motorhome Enquiry'))
  ->setBody(
		'<html>' .
		' <head><style>body{font-family: Avant Garde,Avantgarde,Century Gothic,CenturyGothic,AppleGothic,sans-serif;}h3{font-size: 16px;}p{font-size: 14px;}</style></head>' .
		' <body>' .
		'  <h3>You have received an online enquiry:</h3>' .
		'  <p>Name: '.$name.'<br>Company: '.$company.'</p>'.
		'  <p>Email: '.$email.'<br>Telephone: '.$telephone.'</p>'.
		'  <p>Enquiry: '.$enquiry.'</p>'.
		' </body>' .
		'</html>',
		 
		'text/html' // Mark the content-type as HTML
	);

;

// Send the message
$result = $mailer->send($message);

header('Location: /tariff'); 

?>