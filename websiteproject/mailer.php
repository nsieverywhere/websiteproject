require('./PHPMailer/class.phpmailer.php');
$mail=new PHPMailer();
$mail->CharSet = 'UTF-8';

$body = 'This is the message';

$mail->IsSMTP();
$mail->Host       = 'smtp.gmail.com';

$mail->SMTPSecure = 'tls';
$mail->Port       = 587;
$mail->SMTPDebug  = 1;
$mail->SMTPAuth   = true;

$mail->Username   = 'me.sender@gmail.com';
$mail->Password   = '123!@#';

$mail->SetFrom('me.sender@gmail.com', $name);
$mail->AddReplyTo('no-reply@mycomp.com','no-reply');
$mail->Subject    = 'subject';
$mail->MsgHTML($body);

$mail->AddAddress('abc1@gmail.com', 'title1');
$mail->AddAddress('abc2@gmail.com', 'title2'); /* ... */

$mail->AddAttachment($fileName);
$mail->send();