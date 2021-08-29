<?php get_header(); ?>
<style>
      .programa img{
         width: 100% !important;
      }
   </style>
<main id="main" class="page programa" data-aos="fade-up">
   <!-- ======= Breadcrumbs ======= -->
   <section class="breadcrumbs">
      <div class="container">
         <div class="d-flex justify-content-between align-items-center">
            <h2 class="page-title">Programa <?php echo get_option('agenda_input_1'); ?></h2>
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
   </section><!-- End Breadcrumbs -->
   <section class="inner-page">
      <div class="container">
         <?php the_content(); ?>
      </div>
   </section>
</main><!-- End #main -->
<?php get_footer(); ?>