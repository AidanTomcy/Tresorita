<?php
  // use smtp\Exception;
  // use smtp\PHPMailer;
  require 'smtp/Exception.php';
  require 'smtp/PHPMailer.php';
  require 'smtp/SMTP.php';
  use Exception;
  use  PHPMailer;

  $mail = new PHPMailer();
  $mail->IsSMTP();

  $mail->SMTPDebug  = 0;  
  $mail->SMTPAuth   = TRUE;
  $mail->SMTPSecure = "tls";
  $mail->Port       = 587;
  $mail->Host       = "smtp.gmail.com";
  $mail->Username   = "info.saintsforus@gmail.com";
  $mail->Password   = "Aidan@1709";

  $mail->IsHTML(true);
  $mail->AddAddress("aidantomcy@gmail.com", "Aidan");
  $mail->SetFrom("info.saintsforus@gmail.com", "Aidan");
  $mail->AddReplyTo("info.saintsforus@gmail.com", "Aidan");
  // $mail->AddCC("cc-recipient-email", "cc-recipient-name");
  $mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
  $content = "<b>This is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>";

  $mail->MsgHTML($content);
  // if(!$mail->Send()) {
  //   echo "Error while sending Email.";
  //   var_dump($mail);
  // } else {
  //   echo "Email sent successfully";
  // }

?>