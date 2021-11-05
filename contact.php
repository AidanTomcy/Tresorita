<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/vendors/glightbox/css/glightbox.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png"/>
    <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png"/>
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png"/>
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png"/>
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png"/>
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png"/>
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png"/>
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png"/>
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png"/>
    <link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png"/>
    <link rel="manifest" href="img/manifest.json"/>
    <meta name="msapplication-TileColor" content="#ffffff"/>
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png"/>
    <meta name="theme-color" content="#ffffff"/>
    <title>Contact Us</title>
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
          <li class="nav-item"><a class="nav-link" href="main.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="images.php">Images</a></li>
          <li class="nav-item"><a class="nav-link active" href="contact.php" aria-current="page">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="charityfund.php">Tresorita Trust</a></li>
          <?php 
            if (isset($_SESSION["useruid"])) {
              echo '<li class="nav-item"><a class="nav-link" href="includes/logout.inc.php">Logout</a></li>';
            }
            else {
              echo '<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>';
              echo '<li class="nav-item"><a class="nav-link" href="signup.php">Sign up</a></li>';
            }
          ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <div class="card level-3">
	<h5>Contact Us</h5>
    <br><p>If you have any doubts, complaints or feedback, Please don't hesitate to contact:</p>
    <p>1&#41; Josi Cherian
        <ul>
            <li>Email: josi@inoways.com</li>
            <li>Phone: +91 98201 84902</li>
        </ul>
    </p>
    <p>2&#41; Susan Josi
        <ul>
            <li>Email: sjosi0607@gmail.com</li>
            <li>Phone: +91 98201 54921</li>
        </ul>
    </p>
  </div>

  <section id="contact" class="get-started">
  <div class="container">
    <div class="row text-center">
      <h1 class="display-3 fw-bold text-capitalize title">Contact Us</h1>
      <div class="heading-line"></div>
      <p class="lh-lg">
        Contact us at any time, and you should get a response within 12 hours.
      </p>
    </div>


    <div class="row text-white">
      <div class="col-12 col-lg-6 gradient shadow p-3">
        <div class="cta-info w-100">
          <h4 class="display-4 fw-bold"></h4>
          <p class="lh-lg">
               If you have any doubts/complaints/feedback, please fill this form with the appropriate details and we will get back to you.
          </p>
          <h3 class="display-3--brief">What will be the next step?</h3>
          <ul class="cta-info__list">
            <li>You'll submit this form.</li>
            <li>We'll look at it.</li>
            <li>You will get a response.</li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-lg-6 bg-white shadow p-3">
        <div class="form w-100 pb-2">
          <h4 class="display-3--title mb-5 title">Contact us</h4>
          <form action="includes/submitform.inc.php" method="post" class="row">
            <div class="col-lg-6 col-md mb-3">
              <input type="text" placeholder="First Name" id="inputFirstName" class="shadow form-control form-control-lg" name="firstName" autocomplete="off" required="">
            </div>
            <div class="col-lg-6 col-md mb-3">
              <input type="text" placeholder="Last Name" id="inputLastName" class="shadow form-control form-control-lg" name="lastName" autocomplete="off" required="">
            </div>
            <div class="col-lg-12 mb-3">
              <input type="email" placeholder="Email Address" id="inputEmail" class="shadow form-control form-control-lg" name="email" autocomplete="off" required="">
            </div>
            <div class="col-lg-12 mb-3">
              <textarea name="message" placeholder="Message" id="message" rows="8" class="shadow form-control form-control-lg" name="message" autocomplete="off" required=""></textarea>
            </div>
            <div class="text-center d-grid mt-1">
              <input type="submit" class="btn btn-primary rounded-pill pt-3 pb-3" name="submit">
                Submit
                <i class="fas fa-paper-plane"></i>
              </button>
              <?php
                if (isset($_GET["error"])) {
                  if ($_GET["error"] == "invalidemail") {
                    echo '<p style="color:black;">Invalid Email Address</p>';
                  } else if ($_GET["error"] == "none") {
                    echo '<p style="color:black;">Thank you for reaching out to us.</p>';
                  }
                }
              ?>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
  
  <script>
    document.addEventListener("contextmenu", (event) => event.preventDefault());
  </script>
</body>
</html>