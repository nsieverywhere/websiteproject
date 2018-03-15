<!DOCTYPE html>
<html>
<head>
	<title>Email Handler</title>
</head>
<body>
	<?php
	 include 'database.php'; 
	$from = "nsikansimon@gmail.com";
	$subject = "Message From Nsikan";
	$txt = $_GET["message"];
	$email = $_GET["email"];
require("PHPMailer-master/src/PHPMailer.php");
require("PHPMailer-master/src/SMTP.php");
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "Enter your email username here";
    $mail->Password = "Enter your email password here";
    $mail->SetFrom($from);
    $mail->Subject = $subject;
    $mail->Body = $txt;
    $mail->AddAddress("$email");

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }
?>
</body>
</html>
