<?php $cor = "#f00"; ?>
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
    background-color: <?php echo $cor; ?>;
  }

  .contact .php-email-form button[type="submit"] {
    background-color: <?php echo $cor; ?> !important;
  }

  .contact .php-email-form button[type="submit"]:hover {
    background-color: #ccc !important;
  }

  .team .member,
  .services .icon-box:hover,
  .portfolio .portfolio-item:hover {
    box-shadow: 0px 0 5px 0 <?php echo $cor; ?>;
  }

  #preloader:before {
    border-color: 6px solid <?php echo $cor; ?>;
  }

  .contact .php-email-form input:focus,
  .contact .php-email-form textarea:focus,
  .services .icon-box:hover .icon {
    border-color: <?php echo $cor; ?>;
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
    color: <?php echo $cor; ?>;
  }
</style>

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
        <a href="<?php the_permalink() ?>">
          <img src="<?php echo get_option('portal_input_2'); ?>" title="SIBGRAPI">
          <span><?php the_title() ?></span>
        </a>
      </h1>
      <!-- Nav-Menu -->
      <?php if (url_active()[1] == "schedule") { 
        $year = explode("-",get_post_meta($post->ID, 'schedule_date', true))[0];
        $link1 = url_menu($year)[3];
        $link2 = url_menu($year)[4];
        wp_reset_postdata();        
      ?>
        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li id="home"><a href="/<?php echo $link1 . "/" . $link2 ?>">Home</a></li>
            <li id="schedule"><a href="/<?php echo $link1 . "/" . $link2 ?>/#Schedule">Schedule</a></li>
            <li id="program"><a href="/<?php echo $link1 . "/" . $link2 ?>/#Program">Program</a></li>
            <li id="committee"><a href="/<?php echo $link1 . "/" . $link2 ?>/#Committee">Committee</a></li>
            <li id="registration"><a href="/<?php echo $link1 . "/" . $link2 ?>/#Registration">Registration</a></li>
            <li id="sponsor"><a href="/<?php echo $link1 . "/" . $link2 ?>/#Sponsor">Sponsor</a></li>
            <li id="local"><a href="/<?php echo $link1 . "/" . $link2 ?>/#Local">Local</a></li>
            <li><a href="/">Portal</a></li>
          </ul>
        </nav>
      <?php } else { ?>
        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li id="home"><a href="<?php the_permalink() ?>">Home</a></li>
            <li id="schedule"><a href="/<?php echo url_active()[1] . "/" . url_active()[2] ?>/#Schedule">Schedule</a></li>
            <li id="program"><a href="/<?php echo url_active()[1] . "/" . url_active()[2] ?>/#Program">Program</a></li>
            <li id="committee"><a href="/<?php echo url_active()[1] . "/" . url_active()[2] ?>/#Committee">Committee</a></li>
            <li id="registration"><a href="/<?php echo url_active()[1] . "/" . url_active()[2] ?>/#Registration">Registration</a></li>
            <li id="sponsor"><a href="/<?php echo url_active()[1] . "/" . url_active()[2] ?>/#Sponsor">Sponsor</a></li>
            <li id="local"><a href="/<?php echo url_active()[1] . "/" . url_active()[2] ?>/#Local">Local</a></li>
            <li><a href="/">Portal</a></li>
          </ul>
        </nav>
      <?php } ?>
      <!-- .nav-menu -->
    </div>
  </header><!-- End Header -->