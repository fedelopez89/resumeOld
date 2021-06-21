<?php

// Variables
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$to='fede.lopez89@gmail.com';
$email_body="Nuevo mensaje: de la web";
$headers="From: $email";

// Body
$bodyMessage="
<strong>Name:</strong> $nombre<br /><br />
<strong>Email:</strong> $email<br /><br />
<strong>Phone:</strong> $phone<br /><br />
<strong>Message:</strong> $Message<br /><br />
";

// Send Mail
$sent = mail($to, $email_subject, $email_body, $headers);
if ($sent)
  echo 'Email sent correctly';
else
  echo 'Error sending the email';

?>