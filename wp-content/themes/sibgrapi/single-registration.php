<?php get_header(); ?>
<?php
$year = get_post_meta(get_the_ID(), 'registration_year', true);
$loop = new WP_Query(array('post_type' => 'event'));
while ($loop->have_posts()) {
   $loop->the_post();
   if (get_post_meta(get_the_ID(), 'event_year', true) == $year) {
      $url_active = "/".explode("/", get_the_permalink())[3]."/".explode("/", get_the_permalink())[4];
   }
}
wp_reset_postdata();
?>
<main id="main" class="page registration" data-aos="fade-up">
   <!-- ======= Breadcrumbs ======= -->
   <section class="breadcrumbs">
      <div class="container">
         <div class="d-flex justify-content-between align-items-center">
            <h2><?php the_title() ?></h2>
            <ol>
               <li><a href="<?php echo $url_active; ?>">home</a></li>               
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
         <?php echo get_post_meta($post->ID, 'registration_content', true); ?>        
      </div>
   </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
<?php get_footer(); ?>