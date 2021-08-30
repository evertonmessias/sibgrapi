<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php bloginfo() ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo get_option('schedule_input_2'); ?>" rel="icon">

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
  <?php wp_head(); ?>

</head>

<body>
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">

      <div class="contact-info mr-auto">
        <?php if (get_option('schedule_input_5') != "") { ?>
          <i class="icofont-envelope"></i>&ensp;<a href="mailto:<?php echo get_option('schedule_input_5'); ?>"><?php echo get_option('schedule_input_5'); ?></a>
        <?php } ?>
        &emsp;
        <?php if (get_option('schedule_input_4') != "") { ?>
          <i class="bx bxl-whatsapp"></i>&ensp;<a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo get_option('schedule_input_4'); ?>&text=SIBGRAPI"><?php echo get_option('schedule_input_4'); ?></a>
        <?php } ?>
      </div>

      <div class="search">
        <?php echo get_search_form() ?>
      </div>

      <div class="social-links">
        <?php if (get_option('schedule_input_27') != "") {
          $social1 = explode(",", get_option('schedule_input_27'));
        ?>
          <a title="<?php echo $social1[2]; ?>" href="<?php echo $social1[1]; ?>" target="_blank"><i class="bx <?php echo $social1[0]; ?>"></i></a>
        <?php } ?>

        <?php if (get_option('schedule_input_28') != "") {
          $social2 = explode(",", get_option('schedule_input_28'));
        ?>
          <a title="<?php echo $social2[2]; ?>" href="<?php echo $social2[1]; ?>" target="_blank"><i class="bx <?php echo $social2[0]; ?>"></i></a>
        <?php } ?>

        <?php if (get_option('schedule_input_29') != "") {
          $social3 = explode(",", get_option('schedule_input_29'));
        ?>
          <a title="<?php echo $social3[2]; ?>" href="<?php echo $social3[1]; ?>" target="_blank"><i class="bx <?php echo $social3[0]; ?>"></i></a>
        <?php } ?>
        
        <a title="Login" href="/wp-admin"><i class="bx bxs-user"></i></a>
      </div>

    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto">
        <a href="/">
          <img src="<?php echo get_option('schedule_input_2'); ?>" title="SIBGRAPI">
          <span>SIBGRAPI</span>
        </a>
      </h1>
      <!-- Nav-Menu -->
      <?php wp_nav_menu(array('theme_location' => 'sibgrapi-nav', 'container_class' => 'nav-menu d-none d-lg-block')); ?>
    </div>
  </header><!-- End Header -->