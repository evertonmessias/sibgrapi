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
				<?php if (get_post_meta($post->ID, 'event_logo_2', true) != "") { ?>
					<div class="carousel-item active" style="background-image: url('<?php echo get_post_meta($post->ID, 'event_logo_2', true); ?>');">
						<div class="carousel-container">
							<div class="carousel-content container">
								<h2 class="animate__animated animate__fadeInDown"><?php echo get_post_meta($post->ID, 'event_logo_2_1', true) ?></h2>
								<p class="animate__animated animate__fadeInUp"><?php echo get_post_meta($post->ID, 'event_logo_2_2', true); ?></p>
								<a href="<?php echo explode(",", get_post_meta($post->ID, 'event_logo_2_3', true))[1]; ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto"><?php echo explode(",", get_post_meta($post->ID, 'event_logo_2_3', true))[0]; ?></a>
							</div>
						</div>
					</div>
				<?php } ?>

				<!-- Slide 2 -->
				<?php if (get_post_meta($post->ID, 'event_logo_3', true) != "") { ?>
					<div class="carousel-item" style="background-image: url('<?php echo get_post_meta($post->ID, 'event_logo_3', true); ?>');">
						<div class="carousel-container">
							<div class="carousel-content container">
								<h2 class="animate__animated animate__fadeInDown"><?php echo get_post_meta($post->ID, 'event_logo_3_1', true) ?></h2>
								<p class="animate__animated animate__fadeInUp"><?php echo get_post_meta($post->ID, 'event_logo_3_2', true); ?></p>
								<a href="<?php echo explode(",", get_post_meta($post->ID, 'event_logo_3_3', true))[1]; ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto"><?php echo explode(",", get_post_meta($post->ID, 'event_logo_3_3', true))[0]; ?></a>
							</div>
						</div>
					</div>
				<?php } ?>

				<!-- Slide 3 -->
				<?php if (get_post_meta($post->ID, 'event_logo_4', true) != "") { ?>
					<div class="carousel-item" style="background-image: url('<?php echo get_post_meta($post->ID, 'event_logo_4', true); ?>');">
						<div class="carousel-container">
							<div class="carousel-content container">
								<h2 class="animate__animated animate__fadeInDown"><?php echo get_post_meta($post->ID, 'event_logo_4_1', true) ?></h2>
								<p class="animate__animated animate__fadeInUp"><?php echo get_post_meta($post->ID, 'event_logo_4_2', true); ?></p>
								<a href="<?php echo explode(",", get_post_meta($post->ID, 'event_logo_4_3', true))[1]; ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto"><?php echo explode(",", get_post_meta($post->ID, 'event_logo_4_3', true))[0]; ?></a>
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
			<div class="section-title">
				<h2>Schedule</h2>
				<h3>Check out our <span>Schedule</span></h3>
			</div>
			<div class="row">
				<?php
				$args = array(
					'post_type' => 'schedule',
					'posts_per_page' => 12
				);
				$loop = new WP_Query($args);
				while ($loop->have_posts()) {
					$loop->the_post();
					$syear = get_post_meta(get_the_ID(), 'schedule_date', true);
					if (strtotime($syear) >= strtotime(date('Y-m-d')) && explode("-",$syear)[0] == $eyear) {
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
				<h3>Program <span><?php echo get_option('portal_input_1'); ?></span></h3>
			</div>

			<div class="row" data-aos="fade-up" data-aos-delay="100">
				<div class="col-lg-12 col-md-12 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
					<div class="member">
						<?php echo get_post_meta($pid, 'event_content', true); ?>
						<br>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ======= Committee Section ======= -->
	<section id="Committee" class="team">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<h2>Committee</h2>
				<h3>Committee <span><?php echo get_option('portal_input_1'); ?></span></h3>
			</div>

			<div class="row" data-aos="fade-up" data-aos-delay="100">
				<div class="col-lg-12 col-md-12 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
					<div class="member">
						<?php echo get_post_meta($pid, 'event_content', true); ?>
						<br>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ======= Registration Section ======= -->
	<section id="Registration" class="team section-bg">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<h2>Registration</h2>
				<h3>Registration <span><?php echo get_option('portal_input_1'); ?></span></h3>
			</div>

			<div class="row" data-aos="fade-up" data-aos-delay="100">
				<div class="col-lg-12 col-md-12 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
					<div class="member">
						<ul class="registration">
							<?php
							$args = array(
								'post_type' => 'registration',
								'orderby' => 'title',
								'order'   => 'ASC',
								'posts_per_page' => 100
							);
							$loop = new WP_Query($args);
							while ($loop->have_posts()) {
								$loop->the_post();
							?>
								<li>
									<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
								</li>
							<?php } ?>
						</ul>
					</div>
				</div>
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
		$org_logo_1 = array(get_option('portal_input_11'), explode(',', get_option('portal_input_12'))[0], explode(',', get_option('portal_input_12'))[1]);
		$org_logo_2 = array(get_option('portal_input_13'), explode(',', get_option('portal_input_14'))[0], explode(',', get_option('portal_input_14'))[1]);
		$org_logo_3 = array(get_option('portal_input_15'), explode(',', get_option('portal_input_16'))[0], explode(',', get_option('portal_input_16'))[1]);
		$org_logo_4 = array(get_option('portal_input_17'), explode(',', get_option('portal_input_18'))[0], explode(',', get_option('portal_input_18'))[1]);
		$org_logo_5 = array(get_option('portal_input_19'), explode(',', get_option('portal_input_20'))[0], explode(',', get_option('portal_input_20'))[1]);
		$org_logo_6 = array(get_option('portal_input_21'), explode(',', get_option('portal_input_22'))[0], explode(',', get_option('portal_input_22'))[1]);
		$org_logos = array($org_logo_1, $org_logo_2, $org_logo_3, $org_logo_4, $org_logo_5, $org_logo_6)
		?>
		<div class="container" data-aos="zoom-in">
			<div class="row">
				<?php
				foreach ($org_logos as $logos) {
					if ($logos[0] != "") { ?>
						<div class="logo col-lg-4 col-md-4 col-4 d-flex align-items-center justify-content-center">
							<a href="<?php echo $logos[2]; ?>" target="_blank">
								<img src="<?php echo $logos[0]; ?>" class="img-fluid" title="<?php echo $logos[1]; ?>">
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
					<iframe class="mb-4 mb-lg-0" src="<?php echo get_option('portal_input_6'); ?>" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
				</div>

			</div>

		</div>
	</section>

</main><!-- End #main -->
<?php get_footer(); ?>