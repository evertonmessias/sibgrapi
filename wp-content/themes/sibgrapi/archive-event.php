<?php get_header(); ?>
<main id="main" class="page" data-aos="fade-up">
   <!-- ======= Breadcrumbs ======= -->
   <section class="breadcrumbs">
      <div class="container">
         <div class="d-flex justify-content-between align-items-center">
            <h2><strong>All Events</strong></h2>
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
   </section><!-- End Breadcrumbs -->

   <section class="inner-page">
      <div class="container">
         <?php
         $args = array(
            'post_type' => 'event',
            'posts_per_page' => '-1',
            'order' => 'DESC',
             'orderby' => 'title'
         );
         $loop = new WP_Query($args);
         while ($loop->have_posts()) {
            $loop->the_post();
         ?>
            <ul>
               <li>
                  <a target="_blank" href="<?php the_permalink() ?>"><?php echo get_the_title(); ?></a>
               </li>
            </ul>
         <?php }wp_reset_postdata() ?>
      </div>
   </section>
</main><!-- End #main -->
<?php get_footer(); ?>