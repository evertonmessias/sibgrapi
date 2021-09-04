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
        
        <a title="Login" href="/wp-admin/admin.php?page=cegrapi"><i class="bx bxs-user"></i></a>
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