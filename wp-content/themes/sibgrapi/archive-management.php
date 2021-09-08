<?php get_header(); ?>
<style>
      .management .contentmanagement{
         display: none;
      }
      .management ul{
         list-style: none;                  
      }      
   </style>
<main id="main" class="page management" data-aos="fade-up">
   <!-- ======= Breadcrumbs ======= -->
   <section class="breadcrumbs">
      <div class="container">
         <div class="d-flex justify-content-between align-items-center">
            <h2 class="page-title">All Management</h2>
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
         <h1>REFAZER COM classificação em TERMS</h1>
         <ul>
            <?php
            $args = array(
               'post_type' => 'management',
               'posts_per_page' => 100
            );
            $loop = new WP_Query($args);
            $x = 1;
            while ($loop->have_posts()) {
               $loop->the_post(); ?>
                  <li>
                  <a href="#!" title="Click" onclick="$('#p<?php echo $x; ?>').slideToggle(500)"><h5><?php echo get_the_title(); ?></h5></a>
                  <div class="contentmanagement" id="p<?php echo $x; ?>"><br><?php echo get_the_content(); ?><br><br></div>
                  </li><br>
            <?php $x++; } ?>
         </ul>
      </div>
   </section>
</main><!-- End #main -->
<?php get_footer(); ?>