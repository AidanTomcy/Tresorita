# Tresorita

<p align="center">
    <img src="php/src/images/tresorita-logo.jpg">
</p>

This website is created for Mr. Josi Cherian. To contact him:

1. Email : [josi@inoways.com](mailto:josi@inoways.com)
2. Phone No. : [+91 98201 84902](tel:+919820184902)

All of the website code is in php/src.
The backend for this website has been made with PHP and MySQL.  
The frontend code for this website has been taken from [this repository](https://github.com/MuriungiPatrick/Bootstrap-5-portfolio-template)
This website uses the Bootstrap and Font Awesome libraries.  
All of the major styles are in assets/css/style.css.  
The usersTable.sql only contains the code for the users table.  
There is no React, Angular, Vue or any frontend library.  
Warning: This website is not yet hosted.  
Please do create an issue if you find a bug.

The includes/submitform.inc.php sends the contents to an email id.
Here is what it looks like:

```php
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
      $mail->addAddress('aidantomcy@gmail.net', 'Tresorita Website');
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
```

## Tools Used

<p align="center">
    <a href="https://php.net" target="_blank_"><img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" height="100px"></a>&nbsp;
    <a href="https://mysql.com" target="_blank_"><img src="https://download.logo.wine/logo/MySQL/MySQL-Logo.wine.png" height="100px"></a>&nbsp;
    <a href="https://sass-lang.com" target="_blank_"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Sass_Logo_Color.svg/1200px-Sass_Logo_Color.svg.png" height="100px"></a>
    <br><br>
    <img src="https://pluralsight2.imgix.net/paths/images/javascript-542e10ea6e.png" height="100px">&nbsp;
    <a href="https://npmjs.com" target="_blank_"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/db/Npm-logo.svg/540px-Npm-logo.svg.png" height="100px"></a>&nbsp;&nbsp;
    <a href="https://getbootstrap.com" target="_blank_"><img src="https://upload.wikimedia.org/wikipedia/commons/b/b2/Bootstrap_logo.svg" height="100px"></a>
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/61/HTML5_logo_and_wordmark.svg" width="100px">
    <br><br>
    <a href="https://fontawesome.com" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Font_Awesome_5_logo_black.svg/1920px-Font_Awesome_5_logo_black.svg.png" height="100px">&nbsp;</a>
</p>
