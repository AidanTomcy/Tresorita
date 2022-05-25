<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <title>Tresorita</title>
</head>

<body>
  <?php include "includes/navbar.php"; ?>

  <section id="home" class="intro-section">
    <div class="container">
      <div class="row align-items-center text-white">
        <div class="col-md-6 intros text-start">
          <h1 class="display-2">
            <div class="display-2--intro title">Tresorita</div>
            <div class="display-2--description lh-base">
              <p class="motto">For your well-being...</p>
            </div>
          </h1>
          <button onclick="aboutUs();" type="button" class="rounded-pill btn-rounded" id="know-more">Know more
            <span><i class="fas fa-arrow-right"></i></span>
          </button>
        </div>

        <div class="col-md-6 intros text-end">
          <div class="video-box">
            <img src="images/tresorita-logo.jpg" alt="image" class="img-fluid" width="500">
            <a href="#" class="glightbox position-absolute top-50 start-50 translate-middle">
            </a>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1" d="M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,133.3C672,139,768,213,864,202.7C960,192,1056,96,1152,74.7C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
  </section>


  <section id="portfolio" class="portfolio">
    <div class="container">
      <div class="row text-center mt-5">
        <h1 class="display-3 fw-bold text-capitalize title">Images</h1>
        <div class="heading-line"></div>
      </div>



      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/img-1.jpg" alt="img-1" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/img-2.jpg" alt="img-2" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/img-3.jpg" alt="img-3" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/img-4.jpg" alt="img-4" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/img-5.jpg" alt="img-5" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/img-6.jpg" alt="img-6" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/img-7.jpg" alt="img-7" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/img-8.jpg" alt="img-8" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/img-9.jpg" alt="img-9" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>


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
                <textarea name="message" placeholder="Message" id="message" rows="8" class="shadow form-control form-control-lg" autocomplete="off" required=""></textarea>
              </div>
              <div class="text-center d-grid mt-1">
                <button type="submit" class="btn btn-primary rounded-pill pt-3 pb-3" name="submit">
                  Submit&nbsp;&nbsp;
                  <i class="fas fa-paper-plane"></i>
                </button>
                <?php
                if (isset($_GET["error"])) {
                  if ($_GET["error"] == "invalidemail") {
                    echo '<p style="color:black;">Invalid Email Address</p>';
                  } else if ($_GET["error"] == "none") {
                    echo '<p style="color:black;">Thank you for reaching out to us.</p>';
                  } else if ($_GET["error"] == "stmtfailed") {
                    echo '<p style="color:black;">Something went wrong. Please try again later.</p>';
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

  <?php include "footer.php"; ?>


  <a href="#" class="shadow btn-primary rounded-circle back-to-top">
    <i class="fas fa-chevron-up"></i>
  </a>
  <script>
    document.addEventListener('contextmenu', event => event.preventDefault());

    function aboutUs() {
      location.replace('./aboutus.php')
    }
  </script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>