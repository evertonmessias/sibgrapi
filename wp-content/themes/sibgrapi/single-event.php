<?php get_header(); ?>
<?php
$pid = get_the_ID();
$eyear = get_post_meta(get_the_ID(), 'event_year', true);
?>
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
				<?php if (get_post_meta($post->ID, 'event_slide_1', true) != "") { ?>
					<div class="carousel-item active" style="background-image: url('<?php echo get_post_meta($post->ID, 'event_slide_1', true); ?>');">
						<div class="carousel-container">
							<div class="carousel-content container">
								<h2 class="animate__animated animate__fadeInDown"><?php echo get_post_meta($post->ID, 'event_slide_1_1', true) ?></h2>
								<p class="animate__animated animate__fadeInUp"><?php echo get_post_meta($post->ID, 'event_slide_1_2', true); ?></p>
								<a href="<?php echo explode(",", get_post_meta($post->ID, 'event_slide_1_3', true))[1]; ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto"><?php echo explode(",", get_post_meta($post->ID, 'event_slide_1_3', true))[0]; ?></a>
							</div>
						</div>
					</div>
				<?php } ?>

				<!-- Slide 2 -->
				<?php if (get_post_meta($post->ID, 'event_slide_2', true) != "") { ?>
					<div class="carousel-item" style="background-image: url('<?php echo get_post_meta($post->ID, 'event_slide_2', true); ?>');">
						<div class="carousel-container">
							<div class="carousel-content container">
								<h2 class="animate__animated animate__fadeInDown"><?php echo get_post_meta($post->ID, 'event_slide_2_1', true) ?></h2>
								<p class="animate__animated animate__fadeInUp"><?php echo get_post_meta($post->ID, 'event_slide_2_2', true); ?></p>
								<a href="<?php echo explode(",", get_post_meta($post->ID, 'event_slide_2_3', true))[1]; ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto"><?php echo explode(",", get_post_meta($post->ID, 'event_slide_2_3', true))[0]; ?></a>
							</div>
						</div>
					</div>
				<?php } ?>

				<!-- Slide 3 -->
				<?php if (get_post_meta($post->ID, 'event_slide_3', true) != "") { ?>
					<div class="carousel-item" style="background-image: url('<?php echo get_post_meta($post->ID, 'event_slide_3', true); ?>');">
						<div class="carousel-container">
							<div class="carousel-content container">
								<h2 class="animate__animated animate__fadeInDown"><?php echo get_post_meta($post->ID, 'event_slide_3_1', true) ?></h2>
								<p class="animate__animated animate__fadeInUp"><?php echo get_post_meta($post->ID, 'event_slide_3_2', true); ?></p>
								<a href="<?php echo explode(",", get_post_meta($post->ID, 'event_slide_3_3', true))[1]; ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto"><?php echo explode(",", get_post_meta($post->ID, 'event_slide_3_3', true))[0]; ?></a>
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
	<!-- ======= Schedule Section ======= -->
	<section id="Schedule" class="services">
		<div class="container" data-aos="fade-up">
			<?php
			$terms = get_terms('schedule_categories', array('order' => 'DESC'));
			foreach ($terms as $term) {
				$cat_schedule[] = $term->name;
			}
			?>
			<div class="section-title">
				<h2>Schedule</h2>
				<h3>Check out our <span>Schedule</span></h3>
			</div>
			<div class="row">
				<?php
				$args = array(
					'post_type' => 'schedule',
					'schedule_categories' => $cat_schedule[0],
					'order' => 'DESC'
				);
				$loop = new WP_Query($args);
				while ($loop->have_posts()) {
					$loop->the_post();
					$syear = get_post_meta(get_the_ID(), 'schedule_date', true);
					if (strtotime($syear) >= strtotime(date('Y-m-d'))) {
				?>
						<div class="col-lg-3 col-md-3 d-flex" data-aos="zoom-in" data-aos-delay="100">
							<div class="icon-box">
								<div class="icon"><i class="bx bx-timer"></i></div>
								<h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
								<p>Date: <?php echo get_post_meta(get_the_ID(), 'schedule_date', true); ?></p>
							</div>
						</div>
				<?php }
				}
				wp_reset_postdata(); ?>
			</div>
		</div>
	</section><!-- End Schedule Section -->

	<!-- ======= Program Section ======= -->
	<section id="Program" class="team section-bg">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<h2>Program</h2>
				<h3>Program <span><?php echo $eyear; ?></span></h3>
			</div>

			<div class="row" data-aos="fade-up" data-aos-delay="100">
				<div class="col-lg-12 col-md-12 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
					<div class="member program">
						<?php echo get_post_meta($pid, 'event_program', true); ?>
						<br>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ======= Committee Section ======= -->
	<section id="Committee" class="team">
		<div class="container" data-aos="fade-up">
			<?php
			$terms = get_terms('committee_categories', array('order' => 'DESC'));
			foreach ($terms as $term) {
				$cat_committee[] = $term->name;
			}
			?>
			<div class="section-title">
				<h2>Committee</h2>
				<h3><?php echo $cat_committee[0]; ?></h3>
			</div>
			<div class="row">
				<?php
				$args = array(
					'post_type' => 'committee',
					'committee_categories' => $cat_committee[0],
					'order' => 'DESC'
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

								<span><?php echo get_post_meta($post->ID, 'committee_caption_role', true); ?></span>
								<span><?php echo get_post_meta($post->ID, 'committee_caption_local', true); ?></span>
							</div>
						</div>
					</div>

				<?php wp_reset_postdata();
				} ?>
			</div>
		</div>
	</section><!-- End Team Section -->

	<!-- ======= Registration Section ======= -->
	<section id="Registration" class="counts section-bg">
		<div class="container" data-aos="fade-up">
			<?php
			$terms = get_terms('registration_categories', array('order' => 'DESC'));
			foreach ($terms as $term) {
				$cat_registration[] = $term->name;
			}
			?>
			<div class="section-title">
				<h2>Registration</h2>
				<h3>Registration <span><?php echo $eyear; ?></span></h3>
			</div>
			<h1>&nbsp;</h1>
			<div class="row">
				<?php
				$args = array(
					'post_type' => 'registration',
					'registration_categories' => $cat_registration[0],
					'order' => 'ASC'
				);
				$loop = new WP_Query($args);
				while ($loop->have_posts()) {
					$loop->the_post();
				?>
					<div class="col-lg-4 col-md-4">
						<div class="count-box box-registration">
							<a href="<?php the_permalink() ?>">
								<i class="bx bx-highlight"></i>
								<br>
								<?php the_title(); ?>
							</a>
						</div>
					</div>
				<?php }
				wp_reset_postdata() ?>
			</div>
		</div>
	</section>

	<!-- ======= Sponsor Section ======= -->
	<section id="Sponsor" class="clients">

		<div class="section-title">
			<h2>Organized by</h2>
			<h3>Sponsor</h3>
		</div>
		<?php
		$sponsor_1 = array(get_post_meta($post->ID, 'event_sponsor_1', true), explode(',', get_post_meta($post->ID, 'event_sponsor_1_1', true))[0], explode(',', get_post_meta($post->ID, 'event_sponsor_1_1', true))[1]);
		$sponsor_2 = array(get_post_meta($post->ID, 'event_sponsor_2', true), explode(',', get_post_meta($post->ID, 'event_sponsor_2_1', true))[0], explode(',', get_post_meta($post->ID, 'event_sponsor_2_1', true))[1]);
		$sponsor_3 = array(get_post_meta($post->ID, 'event_sponsor_3', true), explode(',', get_post_meta($post->ID, 'event_sponsor_3_1', true))[0], explode(',', get_post_meta($post->ID, 'event_sponsor_3_1', true))[1]);
		$sponsor_4 = array(get_post_meta($post->ID, 'event_sponsor_4', true), explode(',', get_post_meta($post->ID, 'event_sponsor_4_1', true))[0], explode(',', get_post_meta($post->ID, 'event_sponsor_4_1', true))[1]);
		$sponsor_5 = array(get_post_meta($post->ID, 'event_sponsor_5', true), explode(',', get_post_meta($post->ID, 'event_sponsor_5_1', true))[0], explode(',', get_post_meta($post->ID, 'event_sponsor_5_1', true))[1]);
		$sponsor_6 = array(get_post_meta($post->ID, 'event_sponsor_6', true), explode(',', get_post_meta($post->ID, 'event_sponsor_6_1', true))[0], explode(',', get_post_meta($post->ID, 'event_sponsor_6_1', true))[1]);
		$sponsors = array($sponsor_1, $sponsor_2, $sponsor_3, $sponsor_4, $sponsor_5, $sponsor_6)
		?>
		<div class="container" data-aos="zoom-in">
			<div class="row">
				<?php
				foreach ($sponsors as $spo) {
					if ($spo[0] != "") { ?>
						<div class="logo col-lg-4 col-md-4 col-4 d-flex align-items-center justify-content-center">
							<a href="<?php echo $spo[2]; ?>" target="_blank">
								<img src="<?php echo $spo[0]; ?>" class="img-fluid" title="<?php echo $spo[1]; ?>">
							</a>
						</div>
				<?php }
				} ?>
			</div>
		</div>
		<br><br>
	</section>

	<!-- ======= Local Section ======= -->
	<section id="Local" class="local section-bg">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<h2>Local</h2>
				<h3>Event's <span>Place</span></h3>
			</div>

			<div class="row" data-aos="fade-up" data-aos-delay="100">

				<div class="col-lg-12">
					<iframe class="mb-4 mb-lg-0" src="<?php echo get_post_meta($pid, 'event_maps', true); ?>" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
				</div>

			</div>

		</div>
	</section>

</main><!-- End #main -->
<?php get_footer(); ?>