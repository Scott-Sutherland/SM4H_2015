<?php

// PHP Swift Mailer

require 'lib/swift_required.php';


$name = $_POST['name'];
$surname = $_POST['surname'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$address = $_POST['address'];
$postcode = $_POST['postcode'];
$country = $_POST['country'];

$start = $_POST['start'];
$end = $_POST['end'];
$adults = $_POST['adults'];
$children = $_POST['children'];
$purpose = $_POST['purpose'];
$area = $_POST['area'];

$airport = $_POST['enquiry-airport'];
$rail = $_POST['enquiry-railway'];

$childSeats = $_POST['child-seats'];
$boosterSeats = $_POST['booster-seats'];
$adultBikes = $_POST['bikes'];
$generator = $_POST['generator'];

$contactMethod = $_POST['contact-preference'];

// Create the Transport
$transport = Swift_SmtpTransport::newInstance();

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

// Create a message
$message = Swift_Message::newInstance('Motorhome - New Enquiry!')
  ->setFrom('enquiries@scottishmotorhomes4hire.co.uk')
  ->setTo(array('robbie@scottishmotorhomes4hire.co.uk'=>'Motorhome Enquiry'))
  ->setBody(
		'<!DOCTYPE html><html class="no-js">' .
		'<head><meta name="viewport" content="width=device-width, initial-scale=1"><style>body,html {margin: 10px 0; padding: 0; font-family: helvetica, arial, sans-serif; font-size: 14px;}table {border-collapse: collapse;}.width{margin: 0 auto; width: 320px;}.header-table tr td{padding: 20px 15px 10px !important;}.content-table {margin-top: 5px !important;}.content-table tr {border-top: solid 1px #cccccc;}.content-table tr td{border: solid 1px #cccccc; padding: 10px 15px;}' .
		'@media (min-width: 640px) {.width{margin: 0 30px; width: 640px;}}</style></head><body>' .
		'<table width="100%"><tbody><tr><td><table class="header-table width"><tbody><tr bgcolor="#B86BC8" cellspacing="0" style="color: white;"><td>Motorhome Enquiry</td></tr></tbody></table>' .
		'<table width="100%"><tbody><tr><td><table class="header-table width"><tbody><tr cellspacing="0" style="color: #B86BC8;"><td>Personal Details</td></tr></tbody></table>' .
		'<table class="content-table width"><tbody>' .
		'<tr><td width="25%">Name</td><td width="75%">' . $name . '&nbsp;' . $surname . '</td></tr>' .
		'<tr><td width="25%">Email</td><td width="75%">' . $email . '</td></tr>' .
		'<tr><td width="25%">Contact Number</td><td width="75%">' . $telephone . '</td></tr>' .
		'<tr><td width="25%">Home Address</td><td width="75%">' . $address . '<br>' . $postcode . '<br>' . $country . '</td></tr>' .
		'</tbody></table>' .
		'<table width="100%"><tbody><tr><td><table class="header-table width"><tbody><tr cellspacing="0" style="color: #B86BC8;"><td>Hire Details</td></tr></tbody></table>' .
		'<table class="content-table width"><tbody>' .
		'<tr><td width="25%">Hire Dates</td><td width="75%">' . $start . ' until ' . $end . '</td></tr>' .
		'<tr><td width="25%">Number of Adults</td><td width="75%">' . $adults . '</td></tr>' .
		'<tr><td width="25%">Number of Children</td><td width="75%">' . $children . '</td></tr>' .
		'<tr><td width="25%">Purpose of Hire</td><td width="75%">' . $purpose . '</td></tr>' .
		'<tr><td width="25%">Area of Travel</td><td width="75%">' . $area . '</td></tr>' .
		'</tbody></table>' .
		'<table width="100%"><tbody><tr><td><table class="header-table width"><tbody><tr cellspacing="0" style="color: #B86BC8;"><td>Extra Requirements</td></tr></tbody></table>' .
		'<table class="content-table width"><tbody>' .
		'<tr><td width="25%">Airport Collection</td><td width="75%">' . $airport . '</td></tr>' .
		'<tr><td width="25%">Railway Collection</td><td width="75%">' . $rail . '</td></tr>' .
		'<tr><td width="25%">Child Seats</td><td width="75%">' . $childSeats . '</td></tr>' .
		'<tr><td width="25%">Booster Seats</td><td width="75%">' . $boosterSeats . '</td></tr>' .
		'<tr><td width="25%">Adult Bikes</td><td width="75%">' . $adultBikes . '</td></tr>' .
		'<tr><td width="25%">Generator Required?</td><td width="75%">' . $generator . '</td></tr>' .
		'</tbody></table>' .
		'<table width="100%"><tbody><tr><td><table class="header-table width"><tbody><tr cellspacing="0" style="color: #B86BC8;"><td>Contact Preference</td></tr></tbody></table>' .
		'<table class="content-table width"><tbody>' .
		'<tr><td width="25%">Contact by...</td><td width="75%">' . $contactMethod . '</td></tr>' .
		'</tbody></table>' .
		'<table class="width" style="margin-top: 20px;"><tbody><tr height="10" bgcolor="#B86BC8"><td height="10">&nbsp;</td></tr></tbody></table>' .
		'</td></tr></tbody></table></body></html>',
		 
		'text/html' // Mark the content-type as HTML
	);

;

// Send the message
$result = $mailer->send($message);

header('Location: /enquiry/thank-you/'); 

?>