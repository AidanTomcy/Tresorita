<?php

  if (isset($_POST["submit"])) {
      
    #Grabbing Elements In Form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];

    #Including Other Files
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    #Error Handling
    if (emptyInputSignup($name, $email, $username, $pwd, $pwdrepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false) {
      header("location: ../signup.php?error=invaliduid");
      exit();
    }
    if (invalidEmail($email) !== false) {
      header("location: ../signup.php?error=invalidemail");
      exit();
    }
    if (pwdMatch($pwd, $pwdrepeat) !== false) {
      header("location: ../signup.php?error=passwordinvalid");
      exit();
    }
    if (uidExists($conn, $username, $email) !== false) {
      header("location: ../signup.php?error=usernametaken");
      exit();
    }

    #Create User If There Are No Errors
    createUser($conn, $name, $email, $username, $pwd);

  }
  else {
      header("location: ../signup.php");
      exit();
  }