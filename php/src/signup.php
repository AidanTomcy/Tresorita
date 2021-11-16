<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/signup.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/vendors/glightbox/css/glightbox.min.css">
  <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png" />
  <link rel="icon" type="image/png" sizes="192x192" href="img/android-icon-192x192.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png" />
  <link rel="manifest" href="img/manifest.json" />
  <meta name="msapplication-TileColor" content="#ffffff" />
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png" />
  <meta name="theme-color" content="#ffffff" />
  <title>Sign Up</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="main.php">
        <img src="images/logo.png" alt="tresorita logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link navbar-title active">&nbsp;&nbsp;Tresorita</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="images.php">Images</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="charityfund.php">Tresorita Trust</a></li>
          <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="signup.php">Sign up</a></li>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="login-box">
    <h2 class="title">Signup</h2>
    <form action="includes/signup.inc.php" method="post">
      <div class="user-box">
        <input type="text" name="name" required="" autocomplete="off">
        <label>Name</label>
      </div>
      <div class="user-box">
        <input type="text" name="uid" required="" autocomplete="off">
        <label>Username</label>
      </div>
      <div class="user-box">
        <input type="text" name="email" required="" autocomplete="off">
        <label>Email</label>
      </div>
      <div class="user-box">
        <input type="password" name="pwd" required="" autocomplete="off">
        <label>Password</label>
      </div>
      <div class="user-box">
        <input type="password" name="pwdrepeat" required="" autocomplete="off">
        <label>Password Confirmation</label>
      </div>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <button type="submit" name="submit" id="submit-btn">Submit</button>
    </form>

    <?php
    #Prints Error Messages Based On Error

    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo '<p style="color:white;">Please fill in all fields.</p>';
      } else if ($_GET["error"] == "invaliduid") {
        echo '<p style="color:white;">Choose a proper username.</p>';
      } else if ($_GET["error"] == "invalidemail") {
        echo '<p style="color:white;">Please enter a valid email id.</p>';
      } else if ($_GET["error"] == "passwordsdontmatch") {
        echo '<p>Passwords don\'t match.</p>';
      } else if ($_GET["error"] == "stmtfailed") {
        echo '<p style="color:white;">Something went wrong. Please try again.</p>';
      } else if ($_GET["error"] == "usernametaken") {
        echo '<p style="color:white;">Username taken. Please choose another username.</p>';
      } else if ($_GET["error"] == "none") {
        echo '<p style="color:white;">Signup Successful. Please <a href="login.php">Login</a>.</p>';
      }
    }
    ?>

    <script>
      document.addEventListener("contextmenu", (event) => event.preventDefault());
    </script>
  </div>
</body>

</html>