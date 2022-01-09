<?php
  if (isset($_POST["submit"])) {
    # Storing Contents Of Contact Form in index.php in database
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    require_once("functions.inc.php");
    if (invalidEmail($email) !== false) {
      header("location: ../index.php?error=invalidemail");
    }


  }

  //Import PHPMailer classes into the global namespace
  //These must be at the top of your script, not inside a function
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
  use Symfony\Component\Dotenv\Dotenv;
  
  //Load Composer's autoloader
  require '../vendor/autoload.php';
  
  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);
  $dotenv = new Dotenv();
  $dotenv->load(__DIR__.'/.env');
  $password = $_SERVER['EMAIL_PASSWORD'] ?? '';
  
  // Get data from form
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $fullName = $firstName . ' ' . $lastName;
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  try {
      //Server settings
      // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'info.saintsforus@gmail.com';                     //SMTP username
      $mail->Password   = $password;                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set   `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  
      //Recipients
      $mail->setFrom('aidantomcy@gmail.com', 'Tresorita Website');
      $mail->addAddress('aidantomcy@gmail.com', 'Tresorita Website');
      $mail->addAddress('aidantomcy@gmail.com');
      $mail->addReplyTo('aidantomcy@gmail.com', 'Tresorita Website');
  
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'New Form Submission in Tresorita Website';
      $mail->Body    = '<h1>New Form Submission</h1><p>There is a new form submission in the website, here are the details: <br>Name: '. $fullName . '<br>Email: ' . $email . '<br>Message: ' . $message .'</p>';
      $mail->AltBody = 'New Form Submission\n\nThere is a new form submission in the website, here are the details:\nName: '. $fullName . '\nEmail: ' . $email . '\nMessage: ' . $message;
  
      $mail->send();
      // header("location: ../index.php?error=none");
      echo "Message Sent Successfully! Redirecting...";
      echo '<script>location.replace("../index.php?error=none");</script>';
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      // header("location: ../index.php?error=stmtfailed");
  }