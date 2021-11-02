<?php
  if (isset($_POST["submit"])) {
    #Storing Contents Of Contact Form in main.php in database
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    require_once('dbh.inc.php');
    require_once('functions.inc.php');

    if (invalidEmail($email) !== false) {
      header("location: ../main.php?error=invalidemail");
    }

    storeContentsOfContact($conn, $firstName, $lastName, $email, $message);
  }