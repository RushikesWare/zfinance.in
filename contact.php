<?php

    $to = "reshma.jadhav@zpluscybertech.com";
	$from = $_REQUEST['eaddress'];
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $number = $_REQUEST['tel'];
    $message = $_REQUEST['message'];


    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

   // $subject = "You have a message from your student.";

    // $logo = 'img/logo.png';
    $link = '#';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	//$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody>";
	$body .= "<tr><td style='border:none;'><strong>Name:</strong> {$name}</td></tr>";
    $body .= "<tr><td style='border:none;'><strong>Number:</strong> {$number}</td></tr>";
    $body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$subject}</td></tr>";
	$body .= "<tr><td  style='border:none;'><strong>Message:</strong>{$message}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

	$send = mail($to, $subject, $body, $headers);
	
	echo "<h2><center>Your Mail Send Sucessfully!!!</center></h2>"
?>