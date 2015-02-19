<!DOCTYPE html>
<html lang="en">
<head>
  <!-- META DATA -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="format-detection" content="telephone=no">

  <meta name="description" content="Miami based web design firm. Creating responsive websites, great user interface and user experience, and great native apps. Available for consultation.">
  <title>Yovu</title>

  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="assets/images/ico/favicon.png">

  <!-- STYLESHEETS -->
  <link rel="stylesheet" href="assets/style/bootstrap-uncompressed.css" type="text/css" />
  <link rel="stylesheet" href="assets/style/font-awesome.css" type="text/css" />

  <!-- JQUERY -->
  <script src="assets/js/jquery-1.10.2.min.js" type="text/javascript"></script>


  <!-- TWITTER BOOTSTRAP -->
  <script src="assets/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
  <!--[if lt IE 9]>
  <script src="assets/js/bootstrap/html5shiv.js"></script>
  <![endif]-->


  <!-- PLUGINS -->
  <script src="assets/js/plugins/jquery.bxslider.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/jquery.centralized.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/jquery.fixedonlater.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/jquery.hashloader.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/jquery.mixitup.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/jquery.nav.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/jquery.parallax-1.1.3.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/jquery.responsivevideos.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/jquery.scrollTo.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/jquery.tweet.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/jquery.tweetCarousel.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/source/jquery.validate.js" type="text/javascript"></script>


  <!-- INITIALIZE -->
  <script src="assets/js/application/source/application.js" type="text/javascript"></script>


  <!-- GOOGLE WEB FONTS -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,700,600,300,800' rel='stylesheet' type='text/css'>
</head>
<body>
  <!-- NAVIGATION -->
  <nav class="fixed-top" id="navigation">
    <div class="container">
      <div class="row-fluid">
        <div class="span12 center">
          <!-- LOGO -->
          <a class="brand pull-left" href="./">
            <img src="assets/images/logo.png" alt="Yovu" style="height: 32px;">
          </a>
          <!-- END LOGO -->

          <!-- MOBILE MENU BUTTON -->
          <div class="mobile-menu" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </div>
          <!-- END MOBILE MENU BUTTON -->

          <!-- MAIN MENU -->
          <ul id="main-menu" class="nav-collapse collapse">
            <li><a href="#page-welcome">Home</a></li>
            <li><a href="#page-work">Our Work</a></li>
            <li><a href="#page-features">How We Can Help</a></li>
            <li><a href="#page-about">About Us</a></li>
            <li><a href="#page-contact">Contact Us</a></li>
          </ul>
          <!-- END MAIN MENU -->

        </div>
      </div>
    </div>
  </nav>
  <!-- END NAVIGATION -->

  <!-- PAGE | WELCOME -->
  <div class="pages white paralax page-welcome" id="page-welcome">
    <div class="overlay"></div>
    <!-- Centralized content -->
    <div class="centralized">
      <div class="container">
        <div class="row-fluid">
          <div class="span12 center">
            <!-- Animated logo -->
            <div class="logo">
              <div class="scrollNormal">
                <a href="#page-work">
                  <img src="assets/images/pages/welcome/logo_welcome.png" width="140" height="140" alt="Yovu" style="max-width: 224px!important; width: 224px; margin: -44px 0px 0px -48px;">
                </a>
              </div>
              <div class="scrollDown">
                <a href="#page-work">
                  <img src="assets/images/pages/welcome/logo2_welcome.png" width="140" height="140" alt="Yovu">
                </a>
              </div>
            </div>

            <div class="line-divider" id="welcome-messages">
              <ul class="slides">
                <li>
                  <h1>We're Language Ninjas</h1>
                </li>
                <li>
                  <h1>Code Cowboys</h1>
                </li>
                <li>
                  <h1>Armchair Sociologists</h1>
                </li>
                <li>
                  <h1>Hired Guns</h1>
                </li>
              </ul>
            </div>
            <p>We create software that matters</p>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END PAGE | Welcome -->

  <!-- PAGE | WORK -->
  <div class="pages page-work" id="page-work">
    <div class="container">
      <!-- Header -->
      <header>
        <h4 class="line-divider">Our Work</h4>
        <h1>Who We've Helped</h1>
        <!-- Short desciption about Work in general -->
        <div class="row">
          <div class="span8 offset2">
            <p>
              You may not know it, but you've likely seen our work. We're proud to labor behind the scenes with some of the best and brightest in the business.
            </p>
          </div>
        </div>

        <!-- Sub menu -->
        <!--
        Params:
        plugin-filter: Defines links for filtering.
      -->
      <nav class="submenu" style="display: none;">
        <ul>
          <li>
            <a href="#" class="plugin-filter active" data-filter="all">All</a>
          </li>
          <li>
            <a href="#" class="plugin-filter" data-filter="typography">Typography</a>
          </li>
          <li>
            <a href="#" class="plugin-filter" data-filter="illustration">Illustration</a>
          </li>
          <li>
            <a href="#" class="plugin-filter" data-filter="branding">Branding</a>
          </li>
          <li>
            <a href="#" class="plugin-filter" data-filter="photography">Photography</a>
          </li>
        </ul>
      </nav>
    </header>
    <!-- End Header -->

    <!-- Article -->
    <article>
      <!-- Portfolio items
      Params:
      plugin-filter-elements: Defines items for filtering, each item has class which defines filter value.
      portfolio-items: Customise portfolio items for hover effect.
    -->
    <ul class="thumbnails plugin-filter-elements portfolio-items">
      <li class="span4 mix illustration branding">
        <a href="#pages/portfolio/the_college_tourist.html" data-destination="portfolio-items" data-insert="before">
          <!-- Portfolio image -->
          <img src="/assets/images/pages/clients/thecollegetourist.png" style="width: 311px; height: 239px;" alt="Treble">

          <!-- Portfolio name, activated on hover -->
          <div class="portfolio-overlay">
            <h4>The College Tourist</h4>
          </div>
        </a>
      </li>

      <li class="span4 mix branding typography illustration">
        <a href="#pages/portfolio/cardoneondemand.html" data-destination="portfolio-items" data-insert="before">
          <img src="/assets/images/pages/clients/cardoneondemand.png" style="width: 311px; height: 239px;" alt="Treble">
          <div class="portfolio-overlay">
            <h4>Cardone ON-DEMAND</h4>
          </div>
        </a>
      </li>

      <li class="span4 mix photography illustration">
        <a href="#pages/portfolio/multistat.html" data-destination="portfolio-items" data-insert="before">
          <img src="/assets/images/pages/clients/multistat.png" style="width: 311px; height: 239px;" alt="Treble">
          <div class="portfolio-overlay">
            <h4>MultiStat</h4>
          </div>
        </a>
      </li>

      <li class="span4 mix photography">
        <a href="#pages/portfolio/welcometomiami.html" data-destination="portfolio-items" data-insert="before">
          <img src="/assets/images/pages/clients/welcometomiami.png" style="width: 311px; height: 239px;" alt="Treble">
          <div class="portfolio-overlay">
            <h4>Welcome To Miami</h4>
          </div>
        </a>
      </li>

      <li class="span4 mix photography typography branding">
        <a href="#pages/portfolio/impalamiami.html" data-destination="portfolio-items" data-insert="before">
          <img src="/assets/images/pages/clients/impalamiami.png" style="width: 311px; height: 239px;" alt="Treble">
          <div class="portfolio-overlay">
            <h4>Impala Miami</h4>
          </div>
        </a>
      </li>

      <li class="span4 mix photography">
        <a href="#pages/portfolio/primecard.html" data-destination="portfolio-items" data-insert="before">
          <img src="/assets/images/pages/clients/primecard.png" style="width: 311px; height: 239px;" alt="Treble">
          <div class="portfolio-overlay">
            <h4>Primecard</h4>
          </div>
        </a>
      </li>


    </ul>
  </article>
  <!-- End Article -->

  <!-- Footer -->
  <footer>

  </footer>
  <!-- End footer -->
</div>
</div>
<!-- END PAGE | WORK -->

<!-- PAGE | FEATURES  -->
<div class="pages white paralax page-features" id="page-features">
  <div class="overlay"></div>
  <div class="container">
    <!-- Header -->
    <header>
      <h4 class="line-divider" style="color: #ffffff;">How Can We Help</h4>
      <div class="row">
        <div class="span8 offset2">
          <p>
            Your website is often the first glimpse a customer sees of your business and everyone knows that first impressions last a lifetime. We create websites that not only look great, but work great too. By creating a design that works across all mediums, we build a cohesive brand that customers can’t forget. You’ve got one chance to do it right, and we can help.
          </p>
        </div>
      </div>
    </header>
    <!-- End Header -->

    <!-- Article -->
    <article>
      <!-- Features blocks -->
      <div class="row-fluid">
        <div class="span4 center">
          <img src="assets/images/pages/features/code.png" alt="Treble">
          <h5>Web Developer</h5>
          <p class="smallFontBy08 cutBy10">
            We are passionate about building businesses. Have an idea you want to launch? We will help plan and develop your application tailored to your goals.
          </p>
        </div>
        <div class="span4 center">
          <img src="assets/images/pages/features/tools.png" alt="Treble">
          <h5>Rescue</h5>
          <p class="smallFontBy08 cutBy10">
            Have a project in need of saving? We can step into an existing project and try to bring it back to life.
          </p>
        </div>
        <div class="span4 center">
          <img src="assets/images/pages/features/settings.png" alt="Treble">
          <h5>Scale</h5>
          <p class="smallFontBy08 cutBy10">
            Go big when you need it, we know how to help you handle seriously huge amounts of traffic.
          </p>
        </div>
      </div>
      <!-- Testemonials -->
      <div class="row-fluid">
        <div class="span8 offset2">

        </div>
      </div>
    </article>
    <!-- End Article -->
  </div>
</div>
<!-- END PAGE | FEATURES -->

<!-- PAGE | ABOUT -->
<div class="pages page-about" id="page-about">
  <div class="container">
    <!-- Header -->
    <header>
      <h4 class="line-divider">Meet The Team</h4>
      <h1>Today anybody can make a website, but not everybody can do it well.</h1>
    </header>
    <!-- End Header -->

    <!-- Article -->
    <article>
      <!-- List of people and description with their contact details which are visable on hover -->
      <ul class="thumbnails about-items">
        <li class="span4 center">
          <div class="item">
            <img style="width: 280px;" class="img-circle" src="/assets/images/pages/about/dan.jpg" alt="Dainel Vera">
          </div>
          <h5>
            Dainel Vera<br/>
            <small>Lead Developer</small>
          </h5>

        </li>
        <li class="span4 center">
          <div class="item">
            <img style="width: 280px;" class="img-circle" src="/assets/images/pages/about/joshua.jpg" alt="Joshua Martinez">
          </div>
          <h5>
            Joshua Martinez<br/>
            <small>Creative Director</small>
          </h5>
        </li>

        <li class="span4 center">
          <div class="item">
            <img style="width: 280px;" class="img-circle" src="/assets/images/pages/about/serguei.png" alt="Serguei Hernandez">
          </div>
          <h5>
            Serguei Hernandez<br/>
            <small>SEO Director</small>
          </h5>
        </li>

        <li class="span4 center">
          <div class="item">
            <img style="width: 280px;" class="img-circle" src="/assets/images/pages/about/x.jpg" alt="Xavier Banegas">
          </div>
          <h5>
            Xavier Banegas<br/>
            <small>Developer</small>
          </h5>
        </li>

      </ul>
    </article>
    <!-- End Article -->
  </div>
</div>
<!-- END PAGE | ABOUT -->



<!-- PAGE | CONTACT -->
<div class="pages black-bg white page-contact" id="page-contact">
  <div class="container">
    <!-- Header -->
    <header>
      <h4 class="line-divider">Contact Us</h4>
      <h1>Say hello!</h1>
      <div class="row">
        <div class="span8 offset2">
          <p>
            Want to hire us? We love to work with great clients and make their ideas become a reality.
          </p>
        </div>
      </div>
    </header>
    <!-- End Header -->

    <!-- Start Article -->
    <article>
      <div class="row-fluid">
        <!-- Contact form -->
        <div class="span6">
          <h5>Drop Us A Line</h5>
          <form id="dropUsALine" autocomplete="off">
            <input type="text" name="fullname" class="span12" placeholder="Name">
            <input type="email" name="email" class="span12" placeholder="Email">

            <p style="margin: 0px;">I'd like to contact Yovu about:</p>
            <div class="contact-subject">
              <label for="subject-features">
                <input id="subject-features" name="subject[]" type="checkbox" value="Development">
                Development
              </label>
              <label for="subject-scaling">
                <input id="subject-scaling" name="subject[]" type="checkbox" value="Rescue">
                Rescue
              </label>
              <label for="subject-apis">
                <input id="subject-apis" name="subject[]" type="checkbox" value="Scaling">
                Scaling
              </label>
              <label for="subject-other">
                <input id="subject-other" name="subject[]" type="checkbox" value="Other">
                Other
              </label>
            </div>
            <button type="submit" class="btn btn-primary">Send Your Message</button>
          </form>
        </div>
        <!-- End Contact form -->
        <!-- Contact information -->
        <div class="span5 offset1" style="margin-top: 64px;">

          <div class="contact-side">

            <div class="contact-social">
              FOLLOW US
              <span>
                <a class="twitter" href="https://twitter.com/YovuNinjas"><i class="fa fa-twitter"></i></a>
                <a class="facebook" href="https://www.facebook.com/yovuninjas"><i class="fa fa-facebook"></i></a>
                <a class="github" href="https://github.com/yovu"><i class="fa fa-github"></i></a>
              </span>
            </div>
          </div>

        </div>
        <!-- End Contact information -->
      </div>
    </article>
    <!-- End Article -->

  </div>

  <!-- Background map image -->
  <div id="map-image">
    <img src="assets/images/pages/contact/map.png" alt="Treble">
  </div>
</div>
<!-- END PAGE | CONTACT -->

</body>
</html>
