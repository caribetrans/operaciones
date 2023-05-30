<?php
$mail->SMTPDebug = 0;                                   // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                     // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'no-reply@caribetrans.com';          // SMTP username
$mail->Password = '9@%5Gjb9*';                         // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                   // TCP port to connect to
$mail->setFrom('no-reply@caribetrans.com', 'Portal Caribetrans');
?>