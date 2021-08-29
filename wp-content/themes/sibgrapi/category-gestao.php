<?php get_header(); ?>
<style>
      .gestao .contentgestao{
         display: none;
      }
      .gestao ul{
         list-style: none;                  
      }      
   </style>
<main id="main" class="page gestao" data-aos="fade-up">
   <!-- ======= Breadcrumbs ======= -->
   <section class="breadcrumbs">
      <div class="container">
         <div class="d-flex justify-content-between align-items-center">
            <h2 class="page-title">Todas as Gestões</h2>
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
         <ul>
            <?php
            $args = array(
               'category_name' => 'gestao',
               'posts_per_page' => 100
            );
            $loop = new WP_Query($args);
            $x = 1;
            while ($loop->have_posts()) {
               $loop->the_post(); ?>
                  <li>
                  <a href="#!" title="Clique" onclick="$('#p<?php echo $x; ?>').slideToggle(500)"><h5><?php echo get_the_title(); ?></h5></a>
                  <div class="contentgestao" id="p<?php echo $x; ?>"><br><?php echo get_the_content(); ?><br><br></div>
                  </li><br>
            <?php $x++; } ?>
         </ul>
      </div>
   </section>
</main><!-- End #main -->
<?php get_footer(); ?>