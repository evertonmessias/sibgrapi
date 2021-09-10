<?php get_header(); ?>
<main id="main" class="page committee" data-aos="fade-up">
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

        <?php if(has_post_thumbnail()){ ?>
        <div class="owl-carousel portfolio-details-carousel">
          <a href="<?php the_post_thumbnail_url('full'); ?>" target="_blank">
            <img src="<?php the_post_thumbnail_url('full'); ?>" class="img-fluid img-committee" title="<?php the_title() ?>">
          </a>
        </div>  
        <?php } ?>
      </div>
      
      <div class="member-info">
								<?php if (get_post_meta($post->ID, 'committee_caption_url', true) != "") { ?>
									<h4>
										<a href="<?php echo get_post_meta($post->ID, 'committee_caption_url', true); ?>" target="_blank">
											<?php echo get_the_title(); ?>
										</a>
									</h4>
								<?php } else { ?>
									<h4>
										<?php echo get_the_title() ?>
									</h4>
								<?php } ?>

								<span><?php echo get_post_meta($post->ID, 'committee_caption_role', true); ?></span><br>
								<span><?php echo get_post_meta($post->ID, 'committee_caption_local', true); ?></span>
							</div>
      </div>
 
  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
<?php get_footer(); ?>