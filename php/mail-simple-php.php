<?php

//sumbission data
$ipaddress  = $_SERVER['REMOTE_ADDR'];
$date       = date('d/m/Y');
$time       = date('H:i:s');

//form data
$name       = $_POST['name'];
$email      = $_POST['email'];
$subject    = $_POST['subject'];
$message    = $_POST['message'];

$empfaenger = 'jonas.buechel@movento.com';
$betreff    = 'New email from xploreparadise.com contact-form';
$nachricht  = 'Hallo';

$header     = 'MIME-Version: 1.0' . "\r\n";
$header     .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$header     .= 'To: '.$empfaenger.'' . "\r\n";
$header     .= 'From: info@xploreparadise.com' . "\r\n";

$nachricht = '
<html>
<head>
  <title>Geburtstags-Erinnerungen für August</title>
</head>
<body>
  <p>You have recieved a new message from the enquiries form on your website.</p>
  <p><strong>Name: </strong> '.$name.' </p>
  <p><strong>Email Address: </strong> '.$email.' </p>
  <p><strong>Subject: </strong> '.$subject.' </p>
  <p><strong>Message: </strong> '.$message.' </p>
  <p>This message was sent from the IP Address: '.$ipaddress.' on '.$date.' at '.$time.'</p>
</body>
</html>
';

mail($empfaenger, $betreff, $nachricht, $header);


?>