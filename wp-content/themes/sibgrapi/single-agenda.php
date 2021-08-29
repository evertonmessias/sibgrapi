<?php get_header(); ?>
<main id="main" class="page agenda" data-aos="fade-up">
   <!-- ======= Breadcrumbs ======= -->
   <section class="breadcrumbs">
      <div class="container">
         <div class="d-flex justify-content-between align-items-center">
            <h2><?php the_title() ?></h2>
            <ol>
               <li><a href="/">inicio</a></li>
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
                  <li><strong>Data</strong>: 
                  <?php echo (DateTime::createFromFormat('Y-m-d', get_post_meta($post->ID, 'agenda_date', true)))->format('d/m/Y'); ?>
                  </li>                  
               </ul>
            </div>
         </div>

         <div class="portfolio-description">
            <?php echo get_post_meta($post->ID, 'agenda_content', true); ?>
         </div>
      </div>
   </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
<?php get_footer(); ?>