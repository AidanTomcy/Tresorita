<?php
function isValidEmail($email)
{
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return true;
  }

  return false;
}

if (isset($_POST["submit"])) {
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $fullName = $firstName . ' ' . $lastName;
  $email = $_POST['email'];
  $message = $_POST['message'];

  if (isValidEmail($email) === false) {
    header("location: ../index.php?error=invalidemail");
  }
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Symfony\Component\Dotenv\Dotenv;

require '../vendor/autoload.php';

$mail = new PHPMailer(true);
$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env');
$password = $_SERVER['EMAIL_PASSWORD'] ?? '';

try {
  $mail->isSMTP();
  $mail->Host       = 'smtp.gmail.com';
  $mail->SMTPAuth   = true;
  $mail->Username   = 'info.saintsforus@gmail.com';
  $mail->Password   = $password;
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
  $mail->Port       = 465;

  $mail->setFrom('aidantomcy@gmail.com', 'Tresorita Website');
  $mail->addAddress('aidantomcy@gmail.com', 'Tresorita Website');
  $mail->addAddress('aidantomcy@gmail.com');
  $mail->addReplyTo('aidantomcy@gmail.com', 'Tresorita Website');

  $mail->isHTML(true);
  $mail->Subject = 'New Form Submission in Tresorita Website';

  $mail->Body    = '<h1>New Form Submission</h1>';
  $mail->Body   .= '<p>There is a new form submission in the website, here are the details:';
  $mail->Body   .= ' <br>Name: ' . $fullName . '<br>Email: ' . $email;
  $mail->Body   .= '<br>Message: ' . $message . '</p>';

  $mail->AltBody  = 'New Form Submission\n\nThere is a new form submission in the website,';
  $mail->AltBody .= 'here are the details:\nName: ' . $fullName . '\nEmail: ' . $email;
  $mail->AltBody .= '\nMessage: ' . $message;

  $mail->send();
  echo "Message Sent Successfully! Redirecting...";
  echo '<script>location.replace("../index.php?error=none");</script>';
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
