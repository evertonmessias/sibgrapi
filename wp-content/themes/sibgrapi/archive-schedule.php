<?php get_header(); ?>
<main id="main" class="page" data-aos="fade-up">
   <!-- ======= Breadcrumbs ======= -->
   <section class="breadcrumbs">
      <div class="container">
         <div class="d-flex justify-content-between align-items-center">
            <h2><strong>All Schedule</strong></h2>
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
         // new  
         $x = 1;
         while (have_posts()) {
            the_post();
            if (strtotime(get_post_meta($post->ID, 'schedule_date', true)) >= strtotime(date('Y-m-d'))) {
         ?>
               <ul>
                  <li>
                     <a href="<?php the_permalink() ?>">
                        <?php
                        if ($x < 10) $n = "0" . $x;
                        else "" . $n = $x;
                        echo $n . ". ";
                        echo "<strong>" . get_post_meta($post->ID, 'schedule_date', true) . "</strong> - ";
                        echo get_the_title();
                        ?>
                     </a>
                  </li>
               </ul>
         <?php $x++;
            }
         }wp_reset_postdata()
         ?>
         <?php
         // old 
         $x = 1;
         while (have_posts()) {
            the_post();
            if (strtotime(get_post_meta($post->ID, 'schedule_date', true)) < strtotime(date('Y-m-d'))) {
         ?>
               <br>
               <hr><br>
               <h5>History</h5><br>
               <ul>
                  <li>
                     <a href="<?php the_permalink() ?>">
                        <?php
                        if ($x < 10) $n = "0" . $x;
                        else "" . $n = $x;
                        echo $n . ". ";
                        echo "<strong>" . get_post_meta($post->ID, 'schedule_date', true) . "</strong> - ";
                        echo get_the_title();
                        ?>
                     </a>
                  </li>
               </ul>
         <?php $x++;
            }
         }wp_reset_postdata()
         ?>
      </div>
   </section>
</main><!-- End #main -->
<?php get_footer(); ?>