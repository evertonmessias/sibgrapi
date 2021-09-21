<?php get_header(); ?>
<!-- ======= Hero Section ======= -->
<section id="hero">
	<div class="hero-container">
		<div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

			<ol class="carousel-indicators" id="hero-carousel-indicators">
				<li data-target="#heroCarousel" data-slide-to="0" class=""></li>
				<li data-target="#heroCarousel" data-slide-to="1" class=""></li>
				<li data-target="#heroCarousel" data-slide-to="2" class=""></li>
			</ol>

			<div class="carousel-inner" role="listbox">

				<!-- Slide 1 -->
				<?php if (get_option('portal_input_111') != "") { ?>
					<div class="carousel-item active" style="background-image: url('<?php echo get_option('portal_input_111'); ?>');">
						<div class="carousel-container">
							<div class="carousel-content container">
								<h2 class="animate__animated animate__fadeInDown"><?php echo get_option('portal_input_112') ?></h2>
								<p class="animate__animated animate__fadeInUp"><?php echo get_option('portal_input_113'); ?></p>
								<a href="<?php echo explode(",", get_option('portal_input_114'))[1]; ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto"><?php echo explode(",", get_option('portal_input_114'))[0]; ?></a>
							</div>
						</div>
					</div>
				<?php } ?>

				<!-- Slide 2 -->
				<?php if (get_option('portal_input_115') != "") { ?>
					<div class="carousel-item" style="background-image: url('<?php echo get_option('portal_input_115'); ?>');">
						<div class="carousel-container">
							<div class="carousel-content container">
								<h2 class="animate__animated animate__fadeInDown"><?php echo get_option('portal_input_116') ?></h2>
								<p class="animate__animated animate__fadeInUp"><?php echo get_option('portal_input_117'); ?></p>
								<a href="<?php echo explode(",", get_option('portal_input_118'))[1]; ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto"><?php echo explode(",", get_option('portal_input_118'))[0]; ?></a>
							</div>
						</div>
					</div>
				<?php } ?>

				<!-- Slide 3 -->
				<?php if (get_option('portal_input_119') != "") { ?>
					<div class="carousel-item" style="background-image: url('<?php echo get_option('portal_input_119'); ?>');">
						<div class="carousel-container">
							<div class="carousel-content container">
								<h2 class="animate__animated animate__fadeInDown"><?php echo get_option('portal_input_120') ?></h2>
								<p class="animate__animated animate__fadeInUp"><?php echo get_option('portal_input_121'); ?></p>
								<a href="<?php echo explode(",", get_option('portal_input_122'))[1]; ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto"><?php echo explode(",", get_option('portal_input_122'))[0]; ?></a>
							</div>
						</div>
					</div>
				<?php } ?>

			</div>

			<a class="carousel-control-prev" title="Previous" href="#heroCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" title="Next" href="#heroCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>

		</div>
	</div>
</section><!-- End Hero -->

<main id="main">
	<!-- ======= Featured Services Section ======= -->
	<section id="featured-services" class="featured-services">
		<div class="container" data-aos="fade-up">
			<div class="row">
				<?php
				$bloco_link1 = explode(',', get_option('portal_input_7'));
				$bloco_link2 = explode(',', get_option('portal_input_8'));
				$bloco_link3 = explode(',', get_option('portal_input_9'));
				$bloco_link4 = explode(',', get_option('portal_input_10'));
				$bloco_links = array($bloco_link1, $bloco_link2, $bloco_link3, $bloco_link4);
				foreach ($bloco_links as $bloco) {
					if ($bloco[0] != "" && $bloco[1] != "" && $bloco[2] != "") {
				?>
						<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
							<div class="icon-box" data-aos="fade-up" data-aos-delay="100">
								<div class="icon"><i class="bx <?php echo $bloco[0]; ?>"></i></div>
								<h4 class="title"><a href="<?php echo $bloco[1]; ?>"><?php echo $bloco[2]; ?></a></h4>
								<p class="description">&emsp;</p>
							</div>
						</div>
				<?php }
				} ?>

			</div>

		</div>
	</section><!-- End Featured Services Section -->

		<!-- ======= Events Section ======= -->
		<section id="Events" class="services event section-bg">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>Events</h2>				
			</div>
			<div class="row">
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
					if (get_post_meta($post->ID, 'website', true) == "Internal") {
						$urllink = get_the_permalink();
						$target = "";
					} else {
						$urllink = get_post_meta($post->ID, 'event_url', true);
						$target = "target='_blank'";
					}
				?>
					<div class="col-lg-3 col-md-3 d-flex" data-aos="zoom-in" data-aos-delay="100">
						<div class="icon-box">
							<a href="<?php echo $urllink; ?>" <?php echo $target; ?>>
								<?php if (get_post_meta($post->ID, 'event_slide_0', true) != "") { ?>
									<img src="<?php echo get_post_meta($post->ID, 'event_slide_0', true); ?>" title="<?php the_title() ?>">
								<?php } ?>
								<h4><?php the_title() ?></h4>
							</a>
						</div>
					</div>
				<?php }	 ?>
			</div>
			<br><br>
			<h4 class="plus"><a title="All Events" href="/event"><i class="bx bxs-folder-plus"></i></a></h4>
		</div>
	</section><!-- End Schedule Section -->

	<!-- ======= About Sibgrapi ======= -->
	<section id="Sibgrapi" class="about">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>About</h2>
				<h3>SIBGRAPI</h3>
			</div>
			<div id="Sibgrapi" class="row">
				<div class="col-lg-12 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="100">
					<?php
					$loop = new WP_Query(array('pagename' => 'sibgrapi'));
					while ($loop->have_posts()) {
						$loop->the_post();
						echo "<p>" . the_content() . "</p>";
					}
					?>
				</div>
			</div>
		</div>
		</div>
	</section><!-- End About Section -->

	<!-- ======= Counts Section ======= -->
	<section id="counts" class="counts">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<h2>Statistics</h2>				
			</div>

			<div class="row">
				<?php
				$bloco_count1 = explode(',', get_option('portal_input_23'));
				$bloco_count2 = explode(',', get_option('portal_input_24'));
				$bloco_count3 = explode(',', get_option('portal_input_25'));
				$bloco_count4 = explode(',', get_option('portal_input_26'));
				$bloco_counts = array($bloco_count1, $bloco_count2, $bloco_count3, $bloco_count4);
				foreach ($bloco_counts as $bloco) {
					if ($bloco[0] != "" && $bloco[1] != "" && $bloco[2] != "") {
				?>
						<div class="col-lg-3 col-md-6">
							<div class="count-box">
								<i class="bx <?php echo $bloco[0]; ?>"></i>
								<span data-toggle="counter-up"><?php echo $bloco[1]; ?></span>
								<p><?php echo $bloco[2]; ?></p>
							</div>
						</div>
				<?php }
				} ?>

			</div>

		</div>
	</section><!-- End Counts Section -->

	<!-- ======= Portfolio Section ======= -->
	<section id="Portfolio" class="portfolio section-bg">
		<div class="container" data-aos="fade-up">
			<?php
			$categories = get_terms('category', array('order' => 'DESC'));
			foreach ($categories as $category) {
				if ($category->name != "Portfolio") {
				$cat_portfolio[] = $category->name;
				}
			}
			?>

			<div class="section-title">
				<h2>Portfolio</h2>
				<h3>Check out our <span>Portfolio</span></h3>
			</div>
			<div class="row" data-aos="fade-up" data-aos-delay="100">
				<div class="col-lg-12 d-flex justify-content-center">

					<ul id="portfolio-flters">
						<?php
						foreach ($categories as $category) {
							if ($category->name != "Portfolio") { ?>
								<li data-filter=".filter-<?php echo $category->name; ?>" <?php if ($cat_portfolio[0] == $category->name) echo "class='filter-active'";
																							else echo "onclick='mostrar(" . $category->name . ")'"; ?>><?php echo $category->name; ?></li>
						<?php }
						} ?>
					</ul>
				</div>
			</div>

			<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

				<?php foreach ($categories as $category) {
					if ($category->name != "Portfolio") {
						$args = array(
							'category_name' => $category->name,
							'posts_per_page' => 6
						);
						$loop = new WP_Query($args);
						while ($loop->have_posts()) {
							$loop->the_post();
				?>
							<div <?php if ($cat_portfolio[0] != $category->name) echo "style='display: none;'"; ?> class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $category->name; ?>">
								<img src="<?php if (has_post_thumbnail()) the_post_thumbnail_url('full');
											else echo SITEPATH . "assets/img/semimagem.png"; ?>" class="img-fluid" title="<?php the_title() ?>">
								<div class="portfolio-info">
									<h4><?php the_title() ?></h4>
									<a href="<?php if (has_post_thumbnail()) the_post_thumbnail_url('full');
												else echo SITEPATH . "assets/img/semimagem.png"; ?>" data-gall="portfolioGallery" class="venobox preview-link" title="<?php the_title() ?>"><i class="bx bx-plus"></i></a>
									<a href="<?php the_permalink() ?>" class="details-link" title="Link"><i class="bx bx-link"></i></a>
								</div>
							</div>
				<?php }
					}
				} ?>
			</div>
			<br><br>
			<h4 class="plus"><a title="All Portfolio" href="/portfolio"><i class="bx bxs-folder-plus"></i></a></h4>
		</div>
	</section><!-- End Portfolio Section -->

	<!-- ======= Contact Section ======= -->
	<section id="Contact" class="contact">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<h2>Contact</h2>
				<h3>Contact <span>Us</span></h3>
			</div>

			<div class="row" data-aos="fade-up" data-aos-delay="100">

				<div class="col-lg-12">
					<?php echo do_shortcode('[wpforms id="176"]'); ?>
				</div>

			</div>

		</div>
	</section><!-- End Contact Section -->

</main><!-- End #main -->
<?php get_footer(); ?>