<?php get_header(); ?>
<?php get_header_portal(); ?>
<main id="main" class="page" data-aos="fade-up">
   <!-- ======= Breadcrumbs ======= -->
   <section class="breadcrumbs">
      <div class="container">
         <div class="d-flex justify-content-between align-items-center">
            <h2 class="page-title">Registration</h2>
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
      <?php the_content(); ?>
      <br><hr><br>
         <ul>
            <?php
            $args = array(
               'post_type' => 'page',
               'orderby' => 'title',
               'order'   => 'ASC',
               'posts_per_page' => 100
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()) {
               $loop->the_post();
               if (strstr(get_the_title(),"Registration ")) { ?>
                  <li>
                     <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                  </li>
            <?php }
            } ?>
         </ul>
         
      </div>
   </section>
</main><!-- End #main -->
<?php get_footer(); ?>