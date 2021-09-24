<?php
// Select header
$nav_menu_portal = false;
$nav_menu_sibgrapi = false;

$terms = get_terms('registration_categories', array('order' => 'DESC'));
foreach ($terms as $term) {
  $cat_registration[] = $term->name;
}

$terms = get_terms('schedule_categories', array('order' => 'DESC'));
foreach ($terms as $term) {
  $cat_schedule[] = $term->name;
}

// ********************** Montar headers:

if ((url_active()[1] == "registration" && url_active()[2] != "") || (url_active()[1] == "schedule" && url_active()[2] != "")) {
  // ********************** Montar header para types 
  if (url_active()[1] == "schedule") {
    $year = $cat_schedule[0];
  }
  if (url_active()[1] == "registration") {
    $year = $cat_registration[0];
  }
  $ok = false;
  $loop = new WP_Query(array('post_type' => 'event'));
  while ($loop->have_posts()) {
    $loop->the_post();
    if (get_post_meta(get_the_ID(), 'event_year', true) == $year) {
      $nav_menu_sibgrapi = true;
      $url_menu = "/" . explode("/", get_the_permalink())[3] . "/" . explode("/", get_the_permalink())[4];
      $title = get_the_title();
      $post_color = get_post_meta(get_the_ID(), 'event_color', true);
      $logo = get_post_meta(get_the_ID(), 'event_slide_0', true);
      $ok = true;
    }
  }
  wp_reset_postdata();
  if (!$ok) {
    $title = "Post without event !";
    $post_color = "#aaa";
    $logo = SITEPATH . "assets/img/semimagem.png";
  }
} else if (url_active()[1] == "event" && url_active()[2] != "") {
  if (get_post_meta(get_the_ID(), 'event_url', true) != "") {
    echo "<script>window.location.href='" . get_post_meta(get_the_ID(), 'event_url', true) . "'</script>";
  } else {
    // ********************** Montar header para o event
    if (get_the_title() == "") echo "<script>window.location.href = '/';</script>";
    $nav_menu_sibgrapi = true;
    $url_menu = "/" . url_active()[1] . "/" . url_active()[2];
    $title = get_the_title();
    $post_color = get_post_meta(get_the_ID(), 'event_color', true);
    $logo = get_post_meta(get_the_ID(), 'event_slide_0', true);
  }
} else {
  // ********************** Montar header para o portal
  $nav_menu_portal = true;
  $url_menu = "/";
  $title = get_option('portal_input_0');
  $post_color = get_option('portal_input_3');
  $logo = get_option('portal_input_2');
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $title; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo $logo; ?>" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Arial:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
      background-color: <?php echo $post_color; ?>;
    }

    .contact .php-email-form button[type="submit"] {
      background-color: <?php echo $post_color; ?> !important;
    }

    .contact .php-email-form button[type="submit"]:hover {
      background-color: #ccc !important;
    }

    .services .icon-box:hover,
    .portfolio .portfolio-item:hover,
    .counts .box-registration:hover {
      box-shadow: 0px 0 5px 0 <?php echo $post_color; ?>;
    }

    #preloader:before {
      border-color: 6px solid <?php echo $post_color; ?>;
    }

    .contact .php-email-form input:focus,
    .contact .php-email-form textarea:focus,
    .services .icon-box:hover .icon {
      border-color: <?php echo $post_color; ?>;
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
      color: <?php echo $post_color; ?>;
    }
  </style>
  <?php wp_head(); ?>
</head>

<body>
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">

      <div class="contact-info mr-auto">
        <?php if (get_option('portal_input_5') != "") { ?>
          <i class="icofont-envelope"></i>&ensp;<a href="mailto:<?php echo get_option('portal_input_5'); ?>"><?php echo get_option('portal_input_5'); ?></a>
        <?php } ?>
        &emsp;
        <?php if (get_option('portal_input_4') != "") { ?>
          <i class="bx bxl-whatsapp"></i>&ensp;<a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo get_option('portal_input_4'); ?>&text=SIBGRAPI"><?php echo get_option('portal_input_4'); ?></a>
        <?php } ?>
      </div>

      <div class="search">
        <?php echo get_search_form() ?>
      </div>

      <div class="social-links">
        <?php if (get_option('portal_input_27') != "") {
          $social1 = explode(",", get_option('portal_input_27'));
        ?>
          <a title="<?php echo $social1[2]; ?>" href="<?php echo $social1[1]; ?>" target="_blank"><i class="bx <?php echo $social1[0]; ?>"></i></a>
        <?php } ?>

        <?php if (get_option('portal_input_28') != "") {
          $social2 = explode(",", get_option('portal_input_28'));
        ?>
          <a title="<?php echo $social2[2]; ?>" href="<?php echo $social2[1]; ?>" target="_blank"><i class="bx <?php echo $social2[0]; ?>"></i></a>
        <?php } ?>

        <?php if (get_option('portal_input_29') != "") {
          $social3 = explode(",", get_option('portal_input_29'));
        ?>
          <a title="<?php echo $social3[2]; ?>" href="<?php echo $social3[1]; ?>" target="_blank"><i class="bx <?php echo $social3[0]; ?>"></i></a>
        <?php } ?>

        <a title="Login" href="/wp-admin/admin.php?page=cegrapi"><i class="bx bxs-user"></i></a>
      </div>

    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto">
        <a class="logosbc" href="https://www.sbc.org.br/" target="_blank">
          <img src="<?php echo SITEPATH; ?>assets/img/sbc.png" title="SBC">
        </a> 
        <a href="<?php echo $url_menu; ?>">
          <?php if ($logo != "") { ?>
            <img src="<?php echo $logo; ?>" title="<?php echo $title; ?>">
          <?php } ?>
          <span><?php echo $title; ?></span>
        </a> 
      </h1>
      <!-- Nav-Menu -->
      <nav class="nav-menu d-none d-lg-block">
        <div class="search">
          <?php echo get_search_form() ?>
        </div>
        <ul>
          <?php if ($nav_menu_portal) { ?>
            <li id="home"><a href="/">Home</a></li>
            <li id="events"><a href="/#Events">Events</a></li>
            <li id="sibgrapi"><a href="/#Sibgrapi">About</a></li>
            <li id="portfolio"><a href="/#Portfolio">Portfolio</a></li>
            <li id="contact"><a href="/#Contact">Contact</a></li>
            <li id="cegrapi" class="drop-down"><a href="/cegrapi">CEGRAPI</a>
              <ul>
                <li><a href="/management">Management</a></li>
                <li><a href="/publications">Publications</a></li>
                <li><a href="/iapr">IAPR</a></li>
              </ul>
            </li>            

          <?php } else if ($nav_menu_sibgrapi) { ?>

            <li id="home"><a href="<?php echo $url_menu; ?>">Home</a></li>
            <li id="schedule"><a href="<?php echo $url_menu; ?>/#Schedule">Schedule</a></li>
            <li id="program"><a href="<?php echo $url_menu; ?>/#Program">Program</a></li>
            <li id="committee"><a href="<?php echo $url_menu; ?>/#Committee">Committee</a></li>
            <li id="registration"><a href="<?php echo $url_menu; ?>/#Registration">Registration</a></li>
            <li id="sponsor"><a href="<?php echo $url_menu; ?>/#Sponsor">Sponsor</a></li>
            <li id="local"><a href="<?php echo $url_menu; ?>/#Local">Local</a></li>
            <li><a href="/">Portal</a></li>

          <?php } ?>
        </ul>
      </nav>
      <!-- .nav-menu -->
    </div>
  </header><!-- End Header -->