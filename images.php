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
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <style>
    body {
      background: linear-gradient(to right, #00aaff, #00ff6c);
    }
  </style>
  <title>Images</title>
</head>

<body>
  <?php include "includes/navbar.php"; ?>

  <section id="portfolio" class="portfolio">
    <div class="container">
      <div class="row text-center mt-5">
        <h1 class="display-3 title" style="font-weight:medium;">Images</h1>
        <p class="lead">(Other Images on Home Page)</p>
        <div class="heading-line"></div>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/img-10.jpg" alt="img-1" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/img-11.jpg" alt="img-2" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/img-12.jpg" alt="img-3" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/img-13.jpg" alt="img-4" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/img-14.jpg" alt="img-5" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/img-15.jpg" alt="img-6" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/img-16.jpg" alt="img-7" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/img-17.jpg" alt="img-8" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/img-18.jpg" alt="img-9" class="img-fluid">
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