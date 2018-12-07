<!DOCTYPE html>
<html lang="en">

<head>
  <base href="<?php echo base_url(); ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Spectrum</title>

  <!-- Bootstrap Core CSS -->
  <link href="assets/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">

  <!-- Fonts -->
  <link href="assets/css/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

  <!-- Retina Images Plugin -->
  <script src="assets/js/plugins/retina/retina.min.js"></script>

  <!-- Plugin CSS -->
  <link href="assets/css/plugins/hover/hover.min.css" rel="stylesheet">
  <link href="assets/css/plugins/owl.carousel/owl.carousel.css" rel="stylesheet">
  <link href="assets/css/plugins/owl.carousel/owl.theme.css" rel="stylesheet">
  <link href="assets/css/plugins/owl.carousel/owl.transitions.css" rel="stylesheet">
  <link href="assets/css/plugins/jquery.fs.wallpaper/jquery.fs.wallpaper.css" rel="stylesheet">
  <link href="assets/css/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Spectrum CSS -->
  <!-- Note: spectrum.css is the default blue theme. To use another theme, uncomment the one you want and delete the rest, including the default spectrum.css! -->
  <!-- <link href="assets/css/spectrum.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/spectrum-aqua.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/spectrum-coffee.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/spectrum-coral.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/spectrum-lavender.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/spectrum-olive.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/spectrum-orange.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/spectrum-peach.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/spectrum-pink.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/spectrum-purple.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/spectrum-rust.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/spectrum-seafoam.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/spectrum-slate.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/spectrum-turquoise.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/spectrum-yellow.css" rel="stylesheet"> -->

  <!-- DEMO CSS AND STYLE SWITCHER - DEMO PURPOSES ONLY! -->
  <link id="changeable-colors" rel="stylesheet" href="assets/css/spectrum.css">
  <link href="assets/demo/style-switcher.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

  <div id="wrapper">

    <nav class="navbar navbar-dark navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
          <a class="navbar-brand" href="#page-top">
                        <span class="logo">
                            <img src="assets/img/logo.png" alt="">
                        </span>
                    </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
            <li class="hidden">
              <a href="#page-top"></a>
            </li>
            <?php foreach ($links as $link): ?>
            <li class="page-scroll">
              <?php echo anchor('home/page/' . $link->page_id, $link->name); ?>
            </li>
            <?php endforeach; ?>
<!--
            <li class="page-scroll">
              <a href="#about">About</a>
            </li>
            <li class="page-scroll">
              <a href="#features">Features</a>
            </li>
            <li class="page-scroll">
              <a href="#work">Work</a>
            </li>
            <li class="page-scroll">
              <a href="#blog">Blog</a>
            </li>
            <li class="page-scroll">
              <a href="#pricing">Pricing</a>
            </li>
            <li class="page-scroll">
              <a href="#contact">Contact</a>
            </li>
-->
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>

    <header class="intro-img intro-dark-bg" style="background-image: url(assets/img/demo-bgs/demo-bg-1.jpg)" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="intro-body" data-scrollreveal="move 0 over 1.5s">
        <div class="container">
          <div class="intro-welcome">Welcome to Spectrum!</div>
          <br>
          <h1 class="brand-heading">
            A <span class="text-primary">Multipurpose</span><br>One Page <span class="text-primary">Theme</span>
          </h1>
          <hr class="light">
          <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="item active">
                <h4>Spectrum is a One Page Website Framework</h4>
              </div>
              <div class="item">
                <h4>It's Easy to Use and Easy to Customize</h4>
              </div>
              <div class="item">
                <h4>Full Documentation and Support is Included</h4>
              </div>
            </div>
          </div>
          <div class="page-scroll" data-scrollreveal="enter bottom after .6s">
            <a href="#about" class="btn btn-scroll-light sink">
                            <i class="fa fa-angle-double-down"></i>
                        </a>
          </div>
        </div>
      </div>
    </header>

    <section id="about" class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h2>About Spectrum</h2>
            <hr class="primary">
            <p>Spectrum is a responsive Bootstrap design framework for one page websites. This theme features a variety of easy to use content sections that you can <strong>cut and paste</strong> into the framework in whatever way you please! With the number of content sections in this template, there are <strong>thousands</strong> of options for customization! When you're done, your site will be totally unique!</p>
            <div class="browser-demo">
              <img class="img-responsive img-demo-bar" src="assets/demo/browser-bar.png" alt="">
              <div class="inner">
                <div class="fly-in nav" data-scrollreveal="enter right over 1.5s">
                  <div class="fly-in-name">
                    <h5>Navigation: Dark</h5>
                  </div>
                </div>
                <div class="fly-in intro" data-scrollreveal="enter left over 1.5s">
                  <div class="fly-in-name">
                    <h5>Header: Half Page Image Slider</h5>
                  </div>
                </div>
                <div class="fly-in about" data-scrollreveal="enter right over 1.5s">
                  <div class="fly-in-name">
                    <h5>About: Option Two</h5>
                  </div>
                </div>
                <div class="fly-in services" data-scrollreveal="enter left over 1.5s">
                  <div class="fly-in-name">
                    <h5>Services: Option One</h5>
                  </div>
                </div>
                <div class="fly-in last contact" data-scrollreveal="enter right over 1.5s">
                  <div class="fly-in-name">
                    <h5>Contact: Option Three</h5>
                  </div>
                </div>
              </div>
            </div>
            <p class="demo-text">Build it your way!</p>
          </div>
        </div>
      </div>
    </section>

    <section class="about-3 bg-lighter text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-6">
            <h2>About Us</h2>
            <hr class="primary">
            <p>Spectrum is a template created by Start Bootstrap Themes! With this template, you will have many different options when it comes to the style and layout of your website!</p>
            <p>LESS files are included with the download, so if you want to customize the theme further, you have the power to do so! If you don't want to mess with LESS, the complete CSS is included as well.</p>
          </div>
          <div class="col-lg-3 col-lg-offset-1 col-md-6">
            <h2>Our Team</h2>
            <hr class="primary">
            <div id="about-3-carousel" class="text-center">
              <div class="item about-img-1">
                <div class="info">
                  <!-- Mobile Fallback Image -->
                  <img class="img-responsive img-circle visible-xs" src="assets/img/demo-portraits/portrait-1.jpg" alt="">
                  <!-- Name / Position / Social Links -->
                  <h3>Patricia Smith</h3>
                  <p>CEO &amp; Founder</p>
                  <ul class="list-inline">
                    <li><a class="light-text" href="#"><i class="fa fa-facebook fa-fw"></i></a>
                    </li>
                    <li><a class="light-text" href="#"><i class="fa fa-linkedin fa-fw"></i></a>
                    </li>
                    <li><a class="light-text" href="#"><i class="fa fa-twitter fa-fw"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="item about-img-2">
                <div class="info">
                  <!-- Mobile Fallback Image -->
                  <img class="img-responsive img-circle visible-xs" src="assets/img/demo-portraits/portrait-2.jpg" alt="">
                  <!-- Name / Position / Social Links -->
                  <h3>John Johnson</h3>
                  <p>Managing Director</p>
                  <ul class="list-inline">
                    <li><a class="light-text" href="#"><i class="fa fa-facebook fa-fw"></i></a>
                    </li>
                    <li><a class="light-text" href="#"><i class="fa fa-linkedin fa-fw"></i></a>
                    </li>
                    <li><a class="light-text" href="#"><i class="fa fa-twitter fa-fw"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="item about-img-3">
                <div class="info">
                  <!-- Mobile Fallback Image -->
                  <img class="img-responsive img-circle visible-xs" src="assets/img/demo-portraits/portrait-3.jpg" alt="">
                  <!-- Name / Position / Social Links -->
                  <h3>Barbara Williams</h3>
                  <p>Creative Director</p>
                  <ul class="list-inline">
                    <li><a class="light-text" href="#"><i class="fa fa-facebook fa-fw"></i></a>
                    </li>
                    <li><a class="light-text" href="#"><i class="fa fa-linkedin fa-fw"></i></a>
                    </li>
                    <li><a class="light-text" href="#"><i class="fa fa-twitter fa-fw"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="item about-img-4">
                <div class="info">
                  <!-- Mobile Fallback Image -->
                  <img class="img-responsive img-circle visible-xs" src="assets/img/demo-portraits/portrait-4.jpg" alt="">
                  <!-- Name / Position / Social Links -->
                  <h3>Elizabeth Jones</h3>
                  <p>Art Director</p>
                  <ul class="list-inline">
                    <li><a class="light-text" href="#"><i class="fa fa-facebook fa-fw"></i></a>
                    </li>
                    <li><a class="light-text" href="#"><i class="fa fa-linkedin fa-fw"></i></a>
                    </li>
                    <li><a class="light-text" href="#"><i class="fa fa-twitter fa-fw"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="item about-img-1">
                <div class="info">
                  <!-- Mobile Fallback Image -->
                  <img class="img-responsive img-circle visible-xs" src="assets/img/demo-portraits/portrait-1.jpg" alt="">
                  <!-- Name / Position / Social Links -->
                  <h3>Jennifer Davis</h3>
                  <p>Web Developer</p>
                  <ul class="list-inline">
                    <li><a class="light-text" href="#"><i class="fa fa-facebook fa-fw"></i></a>
                    </li>
                    <li><a class="light-text" href="#"><i class="fa fa-linkedin fa-fw"></i></a>
                    </li>
                    <li><a class="light-text" href="#"><i class="fa fa-twitter fa-fw"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="item about-img-2">
                <div class="info">
                  <!-- Mobile Fallback Image -->
                  <img class="img-responsive img-circle visible-xs" src="assets/img/demo-portraits/portrait-2.jpg" alt="">
                  <!-- Name / Position / Social Links -->
                  <h3>Michael Brown</h3>
                  <p>Graphic Designer</p>
                  <ul class="list-inline">
                    <li><a class="light-text" href="#"><i class="fa fa-facebook fa-fw"></i></a>
                    </li>
                    <li><a class="light-text" href="#"><i class="fa fa-linkedin fa-fw"></i></a>
                    </li>
                    <li><a class="light-text" href="#"><i class="fa fa-twitter fa-fw"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="item about-img-3">
                <div class="info">
                  <!-- Mobile Fallback Image -->
                  <img class="img-responsive img-circle visible-xs" src="assets/img/demo-portraits/portrait-3.jpg" alt="">
                  <!-- Name / Position / Social Links -->
                  <h3>Maria Wilson</h3>
                  <p>Accounts Manager</p>
                  <ul class="list-inline">
                    <li><a class="light-text" href="#"><i class="fa fa-facebook fa-fw"></i></a>
                    </li>
                    <li><a class="light-text" href="#"><i class="fa fa-linkedin fa-fw"></i></a>
                    </li>
                    <li><a class="light-text" href="#"><i class="fa fa-twitter fa-fw"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="item about-img-4">
                <div class="info">
                  <!-- Mobile Fallback Image -->
                  <img class="img-responsive img-circle visible-xs" src="assets/img/demo-portraits/portrait-4.jpg" alt="">
                  <!-- Name / Position / Social Links -->
                  <h3>Sandra Taylor</h3>
                  <p>Marketing Specialist</p>
                  <ul class="list-inline">
                    <li><a class="light-text" href="#"><i class="fa fa-facebook fa-fw"></i></a>
                    </li>
                    <li><a class="light-text" href="#"><i class="fa fa-linkedin fa-fw"></i></a>
                    </li>
                    <li><a class="light-text" href="#"><i class="fa fa-twitter fa-fw"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <aside class="bg-parallax-dark nopadding" style="background-image: url(assets/img/demo-bgs/faces-demo.jpg);" data-stellar-background-ratio="0.5">
      <div class="aside-overlay">
        <div class="container">
          <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2">
              <h2>Your Website, Your Way</h2>
              <hr class="light">
              <p>Spectrum comes ready to go with a variety of layout options to choose from, or you can build your own layout using the instructions in the documentation!</p>
              <a href="#" class="btn btn-outline btn-light btn-lg btn-square">Buy Spectrum!</a>
            </div>
          </div>
        </div>
      </div>
    </aside>

    <section id="features" class="services-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 text-center">
            <h2>Features</h2>
            <hr class="primary">
            <p>Spectrum is one of the most flexible themes available. It has a variety of different header formats, section options, and color schemes built in. It also includes complete LESS files for deeper customization!</p>
          </div>
          <div class="col-lg-12 text-center" data-scrollreveal="enter bottom over 1.5s">
            <ul id="services-1-carousel" class="icon-effect list-inline">
              <!-- ICON USAGE: The icons in this example are generated using Font Awesome unicodes. To use different icons you will need to create a custom CSS class like the ones used below (ex. icon-code, or icon-envelope-o). -->
              <li class="item">
                <span class="icon icon-code"></span>
                <h3>Easy to Use</h3>
                <p>Spectrum's code is written in easy to use, HTML code blocks.</p>
              </li>
              <li class="item">
                <span class="icon icon-envelope-o"></span>
                <h3>Support</h3>
                <p>We also provide email support just in case you get lost.</p>
              </li>
              <li class="item">
                <span class="icon icon-mobile"></span>
                <h3>Responsive</h3>
                <p>Spectrum is 100% responsive and looks great on any screen.</p>
              </li>
              <li class="item">
                <span class="icon icon-info-circle"></span>
                <h3>Documented</h3>
                <p>Includes complete documentation and usage instructions.</p>
              </li>
              <li class="item">
                <span class="icon icon-pencil"></span>
                <h3>Themes</h3>
                <p>Spectrum includes a variety of ready to use color schemes.</p>
              </li>
              <li class="item">
                <span class="icon icon-wrench"></span>
                <h3>Plugins</h3>
                <p>Well documented jQuery plugins bring special features to Spectrum.</p>
              </li>
              <li class="item">
                <span class="icon icon-rocket"></span>
                <h3>Ready to Launch</h3>
                <p>Pick your sections, add your content, and your site is ready to launch!</p>
              </li>
              <li class="item">
                <span class="icon icon-flag"></span>
                <h3>Unique</h3>
                <p>The the amount of customization available, Spectrum is one of a kind!</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="screen-cta text-center bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2>Fifteen Color Schemes</h2>
            <hr class="light">
            <div data-scrollreveal="enter bottom move 200px over 1.5s">
              <img src="assets/img/call-to-action/screen.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="work" class="portfolio-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2>Our Work</h2>
            <hr class="primary">
            <ul class="list-inline hidden-xs" id="filters">
              <li>
                <button data-filter="*" type="button" class="btn btn-primary btn-square btn-raised">All</button>
              </li>
              <li>
                <button data-filter=".web" type="button" class="btn btn-primary btn-square btn-raised">Website</button>
              </li>
              <li>
                <button data-filter=".graphic" type="button" class="btn btn-primary btn-square btn-raised">Graphic</button>
              </li>
              <li>
                <button data-filter=".print" type="button" class="btn btn-primary btn-square btn-raised">Print</button>
              </li>
            </ul>
          </div>
        </div>
        <div class="row" data-scrollreveal="enter bottom over 1.5s">
          <div class="isotope">
            <div class="col-sm-4 portfolio-item web">
              <a href="#portfolio-modal-1" class="portfolio-link" data-toggle="modal">
                <div class="caption">
                  <div class="caption-content">
                    <h3><i class="fa fa-search fa-2x"></i>
                    </h3>
                  </div>
                </div>
                <img src="assets/img/demo-portfolio/1.jpg" class="img-centered" alt="">
              </a>
            </div>
            <div class="col-sm-4 portfolio-item graphic">
              <a href="#portfolio-modal-2" class="portfolio-link" data-toggle="modal">
                <div class="caption">
                  <div class="caption-content">
                    <h3><i class="fa fa-search fa-2x"></i>
                    </h3>
                  </div>
                </div>
                <img src="assets/img/demo-portfolio/2.jpg" class="img-centered" alt="">
              </a>
            </div>
            <div class="col-sm-4 portfolio-item print">
              <a href="#portfolio-modal-1" class="portfolio-link" data-toggle="modal">
                <div class="caption">
                  <div class="caption-content">
                    <h3><i class="fa fa-search fa-2x"></i>
                    </h3>
                  </div>
                </div>
                <img src="assets/img/demo-portfolio/3.jpg" class="img-centered" alt="">
              </a>
            </div>
            <div class="col-sm-4 portfolio-item web">
              <a href="#portfolio-modal-2" class="portfolio-link" data-toggle="modal">
                <div class="caption">
                  <div class="caption-content">
                    <h3><i class="fa fa-search fa-2x"></i>
                    </h3>
                  </div>
                </div>
                <img src="assets/img/demo-portfolio/4.jpg" class="img-centered" alt="">
              </a>
            </div>
            <div class="col-sm-4 portfolio-item graphic">
              <a href="#portfolio-modal-1" class="portfolio-link" data-toggle="modal">
                <div class="caption">
                  <div class="caption-content">
                    <h3><i class="fa fa-search fa-2x"></i>
                    </h3>
                  </div>
                </div>
                <img src="assets/img/demo-portfolio/5.jpg" class="img-centered" alt="">
              </a>
            </div>
            <div class="col-sm-4 portfolio-item print">
              <a href="#portfolio-modal-2" class="portfolio-link" data-toggle="modal">
                <div class="caption">
                  <div class="caption-content">
                    <h3><i class="fa fa-search fa-2x"></i>
                    </h3>
                  </div>
                </div>
                <img src="assets/img/demo-portfolio/6.jpg" class="img-centered" alt="">
              </a>
            </div>
            <div class="col-sm-4 portfolio-item web">
              <a href="#portfolio-modal-2" class="portfolio-link" data-toggle="modal">
                <div class="caption">
                  <div class="caption-content">
                    <h3><i class="fa fa-search fa-2x"></i>
                    </h3>
                  </div>
                </div>
                <img src="assets/img/demo-portfolio/7.jpg" class="img-centered" alt="">
              </a>
            </div>
            <div class="col-sm-4 portfolio-item graphic">
              <a href="#portfolio-modal-1" class="portfolio-link" data-toggle="modal">
                <div class="caption">
                  <div class="caption-content">
                    <h3><i class="fa fa-search fa-2x"></i>
                    </h3>
                  </div>
                </div>
                <img src="assets/img/demo-portfolio/8.jpg" class="img-centered" alt="">
              </a>
            </div>
            <div class="col-sm-4 portfolio-item print">
              <a href="#portfolio-modal-2" class="portfolio-link" data-toggle="modal">
                <div class="caption">
                  <div class="caption-content">
                    <h3><i class="fa fa-search fa-2x"></i>
                    </h3>
                  </div>
                </div>
                <img src="assets/img/demo-portfolio/9.jpg" class="img-centered" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="clients bg-dark">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-12">
            <h2>Our Clients</h2>
            <hr class="light">
          </div>
          <div class="col-lg-12">
            <ul id="clients-carousel" class="text-center">
              <li class="item">
                <img class="img-responsive" src="assets/img/demo-clients/1.png" alt="">
              </li>
              <li class="item">
                <img class="img-responsive" src="assets/img/demo-clients/2.png" alt="">
              </li>
              <li class="item">
                <img class="img-responsive" src="assets/img/demo-clients/3.png" alt="">
              </li>
              <li class="item">
                <img class="img-responsive" src="assets/img/demo-clients/4.png" alt="">
              </li>
              <li class="item">
                <img class="img-responsive" src="assets/img/demo-clients/5.png" alt="">
              </li>
              <li class="item">
                <img class="img-responsive" src="assets/img/demo-clients/6.png" alt="">
              </li>
              <li class="item">
                <img class="img-responsive" src="assets/img/demo-clients/7.png" alt="">
              </li>
              <li class="item">
                <img class="img-responsive" src="assets/img/demo-clients/8.png" alt="">
              </li>
              <li class="item">
                <img class="img-responsive" src="assets/img/demo-clients/9.png" alt="">
              </li>
              <li class="item">
                <img class="img-responsive" src="assets/img/demo-clients/10.png" alt="">
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="blog" class="blog-1 bg-lighter">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2>From Our Blog</h2>
            <hr class="primary mb">
          </div>
        </div>
        <div class="row blog-row">
          <div class="col-md-4 blog-col" data-scrollreveal="enter left over 1.5s">
            <a href="#" class="blog-preview-img">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search fa-3x"></i>
                </div>
              </div>
              <img src="assets/img/demo-blog/1.jpg" class="img-responsive" alt="">
            </a>
            <div class="blog-preview-content">
              <h3>
                <a href="#">Blog Post Title</a>
              </h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, quisquam, sunt, corporis.</p>
              <div class="continue"><a href="#">Continue Reading &rarr;</a>
              </div>
              <ul class="meta list-inline">
                <li>February 31, 2015</li>
                <li>9 Comments</li>
                <li><i class="fa fa-heart text-primary"></i> 12</li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 blog-col" data-scrollreveal="enter bottom over 1.5s">
            <a href="#" class="blog-preview-img">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search fa-3x"></i>
                </div>
              </div>
              <img src="assets/img/demo-blog/2.jpg" class="img-responsive" alt="">
            </a>
            <div class="blog-preview-content">
              <h3>
                <a href="#">Blog Post Title</a>
              </h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, quisquam, sunt, corporis.</p>
              <div class="continue"><a href="#">Continue Reading &rarr;</a>
              </div>
              <ul class="meta list-inline">
                <li>February 31, 2015</li>
                <li>9 Comments</li>
                <li><i class="fa fa-heart text-primary"></i> 12</li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 blog-col" data-scrollreveal="enter right over 1.5s">
            <a href="#" class="blog-preview-img">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search fa-3x"></i>
                </div>
              </div>
              <img src="assets/img/demo-blog/3.jpg" class="img-responsive" alt="">
            </a>
            <div class="blog-preview-content">
              <h3>
                <a href="#">Blog Post Title</a>
              </h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, quisquam, sunt, corporis.</p>
              <div class="continue"><a href="#">Continue Reading &rarr;</a>
              </div>
              <ul class="meta list-inline">
                <li>February 31, 2015</li>
                <li>9 Comments</li>
                <li><i class="fa fa-heart text-primary"></i> 12</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="pricing" class="pricing-1">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-8 col-md-offset-2">
            <h2>Pricing</h2>
            <hr class="primary">
            <p>Three licensing options are availalbe for the Spectrum Template. A single application license, a multiple application license, and an extended license are the three options availalbe.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 pricing-col" data-scrollreveal="enter left over 1.5s">
            <div class="pricing-table">
              <div class="pricing-heading" style="background-image: url('assets/img/demo-pricing/1.jpg')">
                <h2>Single</h2>
              </div>
              <div class="content">
                <div class="price">
                  <span class="amount">$15</span>
                  <span class="period">one time</span>
                </div>
                <ul class="pricing-items list-unstyled text-center">
                  <li class="item">Single Installation</li>
                  <li class="item">
                    <span class="text-primary">Fully Responsive</span> Design</li>
                  <li class="item">Dedicated Email Support</li>
                  <li class="item">Complete
                    <span class="text-primary">CSS and LESS</span> Files Included</li>
                  <li class="item">Full Documentation and Usage Instructions</li>
                  <li class="pricing-button">
                    <a href="#" class="btn btn-primary btn-square btn-raised">Buy Now</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 pricing-col" data-scrollreveal="enter bottom over 1.5s">
            <div class="pricing-table featured">
              <div class="pricing-heading" style="background-image: url('assets/img/demo-pricing/2.jpg')">
                <h2>Multiple</h2>
              </div>
              <div class="content">
                <div class="price">
                  <span class="amount">$55</span>
                  <span class="period">one time</span>
                </div>
                <ul class="pricing-items list-unstyled text-center">
                  <li class="item">Multiple Installations</li>
                  <li class="item">
                    <span class="text-primary">Fully Responsive</span> Design</li>
                  <li class="item">Dedicated Email Support</li>
                  <li class="item">Complete
                    <span class="text-primary">CSS and LESS</span> Files Included</li>
                  <li class="item">Full Documentation and Usage Instructions</li>
                  <li class="pricing-button">
                    <a href="#" class="btn btn-primary btn-square btn-raised">Buy Now</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 pricing-col" data-scrollreveal="enter right over 1.5s">
            <div class="pricing-table">
              <div class="pricing-heading" style="background-image: url('assets/img/demo-pricing/1.jpg')">
                <h2>Extended</h2>
              </div>
              <div class="content">
                <div class="price">
                  <span class="amount">$650</span>
                  <span class="period">one time</span>
                </div>
                <ul class="pricing-items list-unstyled text-center">
                  <li class="item">Multiple Installations, Sublicense, or Resell</li>
                  <li class="item">
                    <span class="text-primary">Fully Responsive</span> Design</li>
                  <li class="item">Dedicated Email Support</li>
                  <li class="item">Complete
                    <span class="text-primary">CSS and LESS</span> Files Included</li>
                  <li class="item">Full Documentation and Usage Instructions</li>
                  <li class="pricing-button">
                    <a href="#" class="btn btn-primary btn-square btn-raised">Buy Now</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-primary">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-8 col-lg-offset-2">
            <h2 class="allcaps">Your New Website is Waiting!</h2>
            <br>
            <a href="#" class="btn btn-default btn-lg btn-square btn-raised">Buy Spectrum!</a>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="contact-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-6" data-scrollreveal="enter left over 1.5s">
            <h2>Contact Us</h2>
            <p>Spectrum comes loaded with a working contact form! Just follow the instructions in the documentation to get your form working. All you need to do is change an email address, no code writing required!</p>
            <p>The contact form to the right is a demo form and will not send email to Start Bootstrap. If you have a question about the theme, please contact us through our WrapBootstrap profile.</p>
          </div>
          <div class="col-lg-5 col-lg-offset-1" data-scrollreveal="enter right over 1.5s">
            <br>
            <form name="sentMessage" id="contactForm" novalidate>
              <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>Name</label>
                  <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>Email Address</label>
                  <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <label>Message</label>
                  <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="row">
                <div class="form-group col-xs-12">
                  <button type="submit" class="btn btn-lg btn-primary btn-square btn-raised">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer-1">
      <div class="upper">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <h2 class="script">Spectrum</h2>
              <address>
                                <strong>Twitter, Inc.</strong>
                                <br>795 Folsom Ave, Suite 600
                                <br>San Francisco, CA 94107
                                <br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>
            </div>
            <div class="col-md-3">
              <h4>Features</h4>
              <ul class="list-unstyled footer-links">
                <li>
                  <a href="#">Responsive</a>
                </li>
                <li>
                  <a href="#">Easy to Use</a>
                </li>
                <li>
                  <a href="#">Well Documented</a>
                </li>
              </ul>
            </div>
            <div class="col-md-3">
              <h4>Documentation</h4>
              <ul class="list-unstyled footer-links">
                <li>
                  <a href="#">Bootstrap Components</a>
                </li>
                <li>
                  <a href="#">Usage Information</a>
                </li>
                <li>
                  <a href="#">Full Documentation</a>
                </li>
              </ul>
            </div>
            <div class="col-md-3">
              <h4>Social</h4>
              <ul class="list-inline">
                <li>
                  <a href="#" class="btn btn-social-light btn-facebook"><i class="fa fa-fw fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#" class="btn btn-social-light btn-twitter"><i class="fa fa-fw fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#" class="btn btn-social-light btn-dribbble"><i class="fa fa-fw fa-dribbble"></i></a>
                </li>
                <li>
                  <a href="#" class="btn btn-social-light btn-google-plus"><i class="fa fa-fw fa-google-plus"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="lower">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <span class="small">Copyright &copy; 2015 - Start Bootstrap Themes. All Rights Reserved.</span>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Style Switcher - FOR DEMO PURPOSES ONLY -->
    <div id="style-switcher" class="close-style-switcher">
      <!--Panel Button -->
      <a class="panel-button"><i class="fa fa-gear"></i></a>
      <!-- Colors -->
      <div class="segment">
        <h4>Theme Colors</h4>
        <a title="spectrum-rust" class="switcher rust-bg"></a>
        <a title="spectrum-coral" class="switcher coral-bg"></a>
        <a title="spectrum-peach" class="switcher peach-bg"></a>
        <a title="spectrum-orange" class="switcher orange-bg"></a>
        <a title="spectrum-yellow" class="switcher yellow-bg"></a>
        <a title="spectrum-coffee" class="switcher coffee-bg"></a>
        <a title="spectrum-olive" class="switcher olive-bg"></a>
        <a title="spectrum-seafoam" class="switcher seafoam-bg"></a>
        <a title="spectrum-turquoise" class="switcher turquoise-bg"></a>
        <a title="spectrum-slate" class="switcher slate-bg"></a>
        <a title="spectrum-aqua" class="switcher aqua-bg"></a>
        <a title="spectrum" class="switcher blue-bg"></a>
        <a title="spectrum-lavender" class="switcher lavender-bg"></a>
        <a title="spectrum-purple" class="switcher purple-bg"></a>
        <a title="spectrum-pink" class="switcher pink-bg"></a>
      </div>
      <div class="segment">
        <h4>Section Options</h4>
        <ul class="list-unstyled small">
          <li><a href="sections/sections-about.html">About Sections</a>
          </li>
          <li><a href="sections/sections-portfolio.html">Portfolio Sections</a>
          </li>
          <li><a href="sections/sections-services.html">Services Sections</a>
          </li>
          <li><a href="sections/sections-blog.html">Blog Sections</a>
          </li>
          <li><a href="sections/sections-pricing.html">Pricing Sections</a>
          </li>
          <li><a href="sections/sections-contact.html">Contact Sections</a>
          </li>
          <li><a href="sections/sections-other.html">Other Sections</a>
          </li>
          <li><a href="sections/footers.html">Footers</a>
          </li>
        </ul>
        <a href="docs/index.html" class="btn btn-xs btn-primary">Docs Preview</a>
      </div>
    </div>
    <!-- End Style Switcher -->

  </div>

  <!-- Standard Portfolio Modal - Images and Text -->
  <div id="portfolio-modal-1" class="portfolio-modal modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row first">
          <div class="col-lg-12">
            <h2 class="page-header">Project Name</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div id="project-details-carousel" class="owl-carousel owl-theme">

              <div class="item">
                <img src="assets/img/demo-portfolio/10.jpg" alt="">
              </div>
              <div class="item">
                <img src="assets/img/demo-portfolio/11.jpg" alt="">
              </div>
              <div class="item">
                <img src="assets/img/demo-portfolio/12.jpg" alt="">
              </div>

            </div>
          </div>
          <div class="col-md-4">
            <h3>Project Description:</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, et, ea, accusantium reprehenderit aliquam numquam fuga natus fugiat odit distinctio illo at unde.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, iusto molestiae possimus sint dignissimos! Laudantium, dolore, vel, sint, labore optio perferendis illo dolorum similique soluta eum cupiditate assumenda consequatur maiores.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <h3>Project Details:</h3>
            <ul class="list-unstyled project-details">
              <li>
                <strong>Client:</strong>Lorem Ipsum</li>
              <li>
                <strong>Services:</strong>Web Design, Photography</li>
              <li>
                <strong>Date:</strong>January 2015</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Standard Portfolio Modal - Video and Text -->
  <div id="portfolio-modal-2" class="portfolio-modal modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row first">
          <div class="col-lg-12">
            <h2 class="page-header">Project Name</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <iframe src="http://player.vimeo.com/video/87701971?title=0&amp;byline=0&amp;portrait=0" width="400" height="225" style="border: none;"></iframe>
          </div>
          <div class="col-md-4">
            <h3>Project Description:</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, et, ea, accusantium reprehenderit aliquam numquam fuga natus fugiat odit distinctio illo at unde.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, iusto molestiae possimus sint dignissimos! Laudantium, dolore, vel, sint, labore optio perferendis illo dolorum similique soluta eum cupiditate assumenda consequatur maiores.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <h3>Project Details:</h3>
            <ul class="list-unstyled project-details">
              <li>
                <strong>Client:</strong>Lorem Ipsum</li>
              <li>
                <strong>Services:</strong>Web Design, Photography</li>
              <li>
                <strong>Date:</strong>January 2015</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Core JavaScript Files -->
  <script src="assets/js/jquery-1.10.2.js"></script>
  <script src="assets/js/bootstrap/bootstrap.min.js"></script>
  <script src="assets/js/modernizr.custom.js"></script>

  <!-- Plugin JavaScript Files -->
  <script src="assets/js/plugins/jquery.easing/jquery.easing.1.3.js"></script>
  <script src="assets/js/plugins/jquery.fitvids/jquery.fitvids.js"></script>
  <script src="assets/js/plugins/jquery.fs.wallpaper/jquery.fs.wallpaper.min.js"></script>
  <script src="assets/js/plugins/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/plugins/jquery.tubular/jquery.tubular.1.0.js"></script>
  <script src="assets/js/plugins/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/js/plugins/scrollReveal/scrollReveal.js"></script>
  <script src="assets/js/plugins/stellar/stellar.js"></script>
  <script src="assets/js/plugins/SmoothScroll/SmoothScroll.js"></script>
  <script src="assets/js/plugins/jqBootstrapValidation/jqBootstrapValidation.js"></script>
  <script src="assets/js/contact_me.js"></script>
  <script src="assets/js/plugins/isotope/isotope.pkgd.min.js"></script>

  <!-- Spectrum JavaScript Files -->
  <script src="assets/js/spectrum.nav.js"></script>
  <script src="assets/js/spectrum.js"></script>

  <!-- Style Switcher JavaScript - DEMO PURPOSES ONLY! -->
  <script src="assets/demo/style.switcher.js"></script>

</body>

</html>
