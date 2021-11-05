<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>About Us</title>
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
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="aboutus.php">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="images.php">Images</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
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
        </ul>
      </div>
    </div>
  </nav>

  <br><br><br><br>
  <section id="services" class="services">
  <div class="container">
    <div class="row text-center">
      <h1 class="display-3 fw-bold">About Us</h1>
      <div class="heading-line mb-1"></div>
    </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content">
          <h3 class="display-3--title mt-1">Lorem Ipsum</h3>
          <p class="lh-lg">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Temporibus consectetur omnis soluta non est mollitia nobis.
            Earum libero illo maiores! Harum eligendi sit ut recusandae
            veritatis laboriosam atque magni ad! Nulla maxime officia
            consectetur vitae quaerat sint ex doloremque a? Accusamus
            nostrum, nobis quam optio quis labore beatae eaque hic.
          </p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
        <div class="services__pic">
          <img src="images/img-1.jpg" alt="" class="img-fluid">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start">
        <div class="services__pic">
          <img src="images/img-2.jpg" alt="" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content">
          <h3 class="display-3--title mt-1">Lorem Ipsum</h3>
          <p class="lh-lg">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Temporibus consectetur omnis soluta non est mollitia nobis.
            Earum libero illo maiores! Harum eligendi sit ut recusandae
            veritatis laboriosam atque magni ad! Nulla maxime officia
            consectetur vitae quaerat sint ex doloremque a? Accusamus
            nostrum, nobis quam optio quis labore beatae eaque hic.
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content">
          <h3 class="display-3--title mt-1">Lorem Ipsum</h3>
          <p class="lh-lg">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Temporibus consectetur omnis soluta non est mollitia nobis.
            Earum libero illo maiores! Harum eligendi sit ut recusandae
            veritatis laboriosam atque magni ad! Nulla maxime officia
            consectetur vitae quaerat sint ex doloremque a? Accusamus
            nostrum, nobis quam optio quis labore beatae eaque hic.
          </p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
        <div class="services__pic">
          <img src="images/img-12.jpg" alt="" class="img-fluid">
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