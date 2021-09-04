<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php bloginfo() ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo get_option('portal_input_2'); ?>" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo SITEPATH; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo SITEPATH; ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo SITEPATH; ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo SITEPATH; ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo SITEPATH; ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo SITEPATH; ?>assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo SITEPATH; ?>assets/css/style.css" rel="stylesheet">
  <link href="<?php echo SITEPATH; ?>assets/css/sibgrapi.css" rel="stylesheet">
  <style>
    .back-to-top i:hover,
    #topbar,
    #hero .btn-get-started,
    .featured-services .icon-box:hover::before,
    .counts .count-box i,
    .nav-menu>ul>li>a:before,
    .skills .progress-bar,
    .portfolio-details .portfolio-details-carousel .owl-dot.active,    
    #footer .footer-newsletter form input[type="submit"],
    #footer .footer-top .social-links a,
    .php-email-form .button-send {
      background-color: <?php echo get_option('portal_input_3') ?>;
    }

    .contact .php-email-form button[type="submit"]{
      background-color: <?php echo get_option('portal_input_3') ?> !important;
    }
    .contact .php-email-form button[type="submit"]:hover{
      background-color: #ccc !important;
    }

    .services .icon-box:hover {
      box-shadow: 0px 0 10px 0 <?php echo get_option('portal_input_3') ?>;
    }

    .portfolio .portfolio-item:hover {
      box-shadow: 0px 0 5px 0 <?php echo get_option('portal_input_3') ?>;
    }

    #preloader:before {
      border-color: 6px solid <?php echo get_option('portal_input_3') ?>;
    }

    .contact .php-email-form input:focus,
    .contact .php-email-form textarea:focus,
    .services .icon-box:hover .icon {
      border-color: <?php echo get_option('portal_input_3') ?>;
    }

    a,
    #header .logo a span,
    .nav-menu a:hover,
    .nav-menu .active>a,
    .nav-menu li:hover>a,
    .nav-menu .drop-down ul a:hover,
    .nav-menu .drop-down ul .active>a,
    .nav-menu .drop-down ul li:hover>a,
    .mobile-nav a:hover,
    .mobile-nav .active>a,
    .mobile-nav li:hover>a,
    .section-title h2,
    .section-title h3 span,
    .featured-services .icon i,
    .about .content ul i,
    .services .icon-box:hover h4 a,
    .services .icon-box:hover .icon i,
    .portfolio #portfolio-flters li:hover,
    .portfolio #portfolio-flters li.filter-active,
    .portfolio .portfolio-item .portfolio-info .preview-link:hover,
    .portfolio .portfolio-item .portfolio-info .details-link:hover,
    .contact .info-box i,
    #footer .footer-top .footer-contact h3 span,
    #footer .footer-top .footer-links ul i,
    #footer .footer-top .footer-links ul a:hover,
    #topbar .search form input[type=submit] {
      color: <?php echo get_option('portal_input_3') ?>;
    }
  </style>
  <?php wp_head(); ?>
</head>