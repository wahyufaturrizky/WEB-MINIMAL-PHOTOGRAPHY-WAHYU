<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connect - Minimal Photography Wahyu</title>
  <meta name="robots" content="noodp" />
  <!-- Google Fonts -->
  <link rel='stylesheet' id='luminis-fonts-css'
    href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900%7CPlayfair+Display:400,700,400i,700i'
    type='text/css' media='all' />
  <!-- Bootstrap CSS -->
  <link rel='stylesheet' id='luminis-bootstrap-css' href='assets/css/bootstrap.min.css' type='text/css' media='all' />
  <!-- Font Awesome Icons CSS -->
  <link rel='stylesheet' id='luminis-font-awesome-css' href='assets/fonts/fontawesome/css/all.min.css' type='text/css'
    media='all' />
  <!-- Owl Carousel -->
  <link rel='stylesheet' id='luminis-owl-carousel-css' href='assets/css/owl.carousel.min.css' type='text/css'
    media='all' />
  <!-- Main CSS File -->
  <link rel='stylesheet' id='luminis-style-css' href='assets/css/style.css' type='text/css' media='all' />
  <!-- Custome CSS File -->
  <link rel='stylesheet' id='luminis-style-css' href='assets/css/wahyustyle.css' type='text/css' media='all' />
  <!-- favicons -->
  <link rel="icon" href="assets/images/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" href="assets/images/favicon-192x192.png" sizes="192x192" />
  <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-180x180.png" />
</head>

<body class="home2">
  <!-- HEADER -->
  <header id="header-1" class="headerHolder">
    <nav class="navbar">
      <!-- MOBILE MENU BUTTON -->
      <button type="button" class="navbar-toggle nav-mobile-1 collapsed" data-toggle="collapse"
        data-target="#collapse-navigation">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- MENU -->
      <div class="nav-holder collapse navbar-collapse" id="collapse-navigation">
        <!-- LOGO -->
        <div class="logo-1" style="margin-top: 50px;">
          <img src="assets/images/logo-luminis.png" alt="" />
        </div>
        <ul id="menu-menu-1" class="nav menu-nav" style="margin-top: 100px;">
          <li class="menu-item current-menu-item">
            <a href="index.php"><span>Home</span></a>
          </li>
          <li class="menu-item">
            <a href="about.php"><span>About</span></a>
          </li>
          <li class="menu-item">
            <a href="journal.php"><span>Journal</span></a>
          </li>
          <li class="menu-item">
            <a href="connect.php"><span>Connect</span></a>
          </li>
        </ul>
      </div>
      <!-- /MENU -->
    </nav>
  </header>
  <!-- /HEADER -->

  <!-- Top Tittle -->
  <section class="topSingleBkg topPageBkg">
    <div class="inner-desc">
      <h1 class="post-title single-post-title">/Connecting and make something/</h1>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section class="layout-portfolio layout-full">
    <div class="container">
      <div class="portfolio-3cols clearfix">
        <div class="gallery-item">
          <a href="single-gallery-portraits.html">
            <div class="gallery-item-img" style="background-image:url('assets/images/portfolio/portraits/portrait-1.jpg');">
            </div>
            <div class="gallery-item-desc">
              <h2>Portraits</h2>
              <div class="gallery-item-subtitle"> Click to open the Gallery page </div>
            </div>
          </a>
        </div>
        <!-- /gallery-item -->
        <div class="gallery-item">
          <a href="single-gallery-weddings.html">
            <div class="gallery-item-img" style="background-image:url('assets/images/portfolio/weddings/wedding-1.jpg');">
            </div>
            <div class="gallery-item-desc">
              <h2>Weddings</h2>
              <div class="gallery-item-subtitle"> quidem rerum facilis </div>
            </div>
          </a>
        </div>
        <!-- /gallery-item -->
        <div class="gallery-item">
          <a href="single-gallery-black-white.html">
            <div class="gallery-item-img" style="background-image:url('assets/images/portfolio/black-white/ba-8.jpg');"></div>
            <div class="gallery-item-desc">
              <h2>Black &amp; White</h2>
              <div class="gallery-item-subtitle"> Click to open the Gallery page </div>
            </div>
          </a>
        </div>
      </div>
      <!-- portfolio-3cols -->
    </div>
  </section>

  <!-- Content Section -->
  <section id="wrap-content" class="page-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="page-holder custom-page-template-fw">
            <h3 class="text-center">tell me your stories.</h3>
            <div id="contact-form-holder">
              <form method="post" id="contact-form" action="include/contact-process.php">
                <div class="row">
                  <div class="col-sm-4"><input type="text" name="name" value="" class="comm-field" placeholder="Name">
                  </div>
                  <div class="col-sm-4"><input type="text" name="email" value="" class="comm-field" placeholder="Email">
                  </div>
                  <div class="col-sm-4"><input type="text" name="phone" value="" class="comm-field"
                      placeholder="Subject"></div>
                </div>
                <p><textarea type="date" name="message" rows="5" class="" id="msg-contact" placeholder="Wedding Date"></textarea></p>
                <p class="antispam">Leave this empty: <input type="text" name="url"></p>
                <p class="contact-btn"><input type="submit" value="Send message" id="submit"></p>
              </form>
            </div>
            <!-- contact-form-holder-->
            <div id="output-contact"></div>
          </div>
          <!--page-holder-->
        </div>
        <!--col-md-12-->
      </div>
      <!--row-->
    </div>
    <!--container-->
  </section>

  <!-- FOOTER -->
  <footer>
    <div class="container">
        <!-- FOOTER COPYRIGHT -->
        <div class="copyright">
          <p>Copyright &copy; 2020, <a href="https://intivestudio.com/" target="_blank">intive studio</a> . Design By <a
              href="https://www.linkedin.com/in/wahyu-fatur-rizky/" target="_blank">Wahyu Fatur Rizki</a></p>
        </div>
      </div>
      <!--container-->
  </footer>
  <!-- /FOOTER -->
  <!-- JS -->
  <script type='text/javascript' src='assets/js/jquery.js'></script>
  <script type='text/javascript' src='assets/js/jquery-migrate.min.js'></script>
  <script type='text/javascript' src='assets/js/bootstrap.min.js'></script>
  <script type='text/javascript' src='assets/js/jquery.easing.min.js'></script>
  <script type='text/javascript' src='assets/js/jquery.fitvids.js'></script>
  <script type='text/javascript' src='assets/js/owl.carousel.min.js'></script>
  <script type='text/javascript' src='assets/js/jquery.justifiedGallery.min.js'></script>
  <script type='text/javascript' src='assets/js/jquery.magnific-popup.min.js'></script>
  <!-- MAIN JS -->
  <script type='text/javascript' src='assets/js/init.js'></script>
</body>

</html>