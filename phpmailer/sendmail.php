<?php

function SendMessage($to, $cc='', $bcc='', $subj, $body, $attach='',$host="") {

	require_once('class.phpmailer.php');

	$mail = new PHPMailer;

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'mail.lonmadi.ru'; 
	$mail->Port = 25;
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'noreply@lonmadi.ru';                 // SMTP username
	$mail->Password = '&^wQ$%d2';                           // SMTP password


	$mail->From = 'noreply@lonmadi.ru';
	if($host) { $mail->FromName = $host; } else { $mail->FromName = $_SERVER['HTTP_HOST']; }
	$mail->addAddress($to);     // Add a recipient
	if($cc) {$mail->addCC($cc);}
	if($bcc) {$mail->addBCC($bcc);}


	if($attach) {$mail->addAttachment($attach);}         // Add attachments


	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = $subj;
	$mail->Body    = $body;



	if(!$mail->send()) {
		return false;
	} else {
		return true;
	}

}



?>