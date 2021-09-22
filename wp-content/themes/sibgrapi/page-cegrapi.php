<?php get_header(); ?>
<main id="main" class="page" data-aos="fade-up">
   <!-- ======= Breadcrumbs ======= -->
   <section class="breadcrumbs">
      <div class="container">
         <div class="d-flex justify-content-between align-items-center">
            <h2 class="page-title"><?php the_title() ?></h2>
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
      </div>
   </section>
   <hr>
   	<!-- ======= Team Section ======= -->
	<section id="Management" class="team">
		<div class="container" data-aos="fade-up">
			<?php
			$terms = get_terms('management_categories', array('order' => 'DESC'));
			foreach ($terms as $term) {
				$cat_management[] = $term->name;
			}
			?>
			<div class="section-title">
				<h2>Management</h2>
				<h3><?php echo $cat_management[0]; ?></h3>
			</div>
			<div class="row">
				<?php
				$args = array(
					'post_type' => 'management',
					'management_categories' => $cat_management[0],
					'order' => 'ASC',
    				'orderby' => 'title'
				);
				$loop = new WP_Query($args);
				while ($loop->have_posts()) {
					$loop->the_post();
				?>
					<div class="col-lg-3 col-md-6 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
						<div class="member">
							<div class="member-img">
								<img src="<?php if (has_post_thumbnail()) the_post_thumbnail_url('full');
											else echo SITEPATH . 'assets/img/semimagem.png'; ?>" class="img-fluid" title="<?php echo get_the_title(); ?>">
							</div>
							<div class="member-info">
								<?php if (get_post_meta($post->ID, 'management_caption_url', true) != "") { ?>
									<h4>
										<a href="<?php echo get_post_meta($post->ID, 'management_caption_url', true); ?>" target="_blank">
											<?php echo get_the_title(); ?>
										</a>
									</h4>
								<?php } else { ?>
									<h4>
										<?php echo get_the_title() ?>
									</h4>
								<?php } ?>

								<span><?php echo get_post_meta($post->ID, 'management_caption_role', true); ?></span>
								<span><?php echo get_post_meta($post->ID, 'management_caption_local', true); ?></span>
							</div>
						</div>
					</div>

				<?php wp_reset_postdata();
				} ?>
			</div>
			<br><br>
			<h4 class="plus"><a title="All Management" href="/management"><i class="bx bxs-folder-plus"></i></a></h4>
		</div>
	</section><!-- End Team Section -->
</main><!-- End #main -->
<?php get_footer(); ?>