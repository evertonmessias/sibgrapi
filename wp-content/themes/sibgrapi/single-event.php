<?php get_header(); ?>
<?php get_header_sibgrapi(); ?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto">
        <a href="/">
          <img src="<?php echo get_option('portal_input_2'); ?>" title="SIBGRAPI">
          <span><?php the_title() ?></span>
        </a>
      </h1>
      <!-- Nav-Menu -->
      <?php wp_nav_menu(array('theme_location' => 'sibgrapi-nav', 'container_class' => 'nav-menu d-none d-lg-block')); ?>
    </div>
  </header><!-- End Header -->
<main id="main" class="page event" data-aos="fade-up">
   <!-- ======= Breadcrumbs ======= -->
   <section class="breadcrumbs">
      <div class="container">
         <div class="d-flex justify-content-between align-items-center">
            <h2><?php the_title() ?></h2>
            <ol>
               <li><a href="/">home</a></li>
               <li>
                  <?php
                  if (url_active()[2] == "") echo url_active()[1];
                  else echo "<a href='/" . url_active()[1] . "'>" . url_active()[1] . "</a>";
                  ?>
               </li>
               <li>
                  <?php
                  if (url_active()[2] != "") echo url_active()[2];
                  ?>
               </li>
            </ol>
         </div>
      </div>
   </section><!-- Breadcrumbs Section -->
   <!-- ======= Portfolio Details Section ======= -->
   <section class="portfolio-details">
      <div class="container">

         <div class="portfolio-details-container"> 
            <div class="portfolio-info">
               <h3><?php the_title() ?></h3>
               <ul>
                  <li><strong>Date</strong>: 
                  <?php echo get_post_meta($post->ID, 'event_date', true); ?>
                  </li>                  
               </ul>
            </div>
         </div>

         <div class="portfolio-description">
            <?php echo get_post_meta($post->ID, 'event_content', true); ?>
         </div>
      </div>
   </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
<?php get_footer(); ?>