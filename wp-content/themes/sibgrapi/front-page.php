<?php get_header(); ?>

<!-- ======= Hero Section ======= -->
<section id="hero" style="background: url('<?php echo get_option('schedule_input_3'); ?>') top left;" class="d-flex align-items-center">
	<div class="container" data-aos="zoom-out" data-aos-delay="100">
		<h1><?php bloginfo() ?>&nbsp;<span><?php echo get_option('schedule_input_1'); ?></span></h1>
		<h2>Conference on Patterns, Graphics, and Images</h2>
		<div class="d-flex">
			<a href="#About" class="btn-get-started scrollto">About</a>
		</div>
	</div>
</section><!-- End Hero -->

<main id="main">
	<!-- ======= Featured Services Section ======= -->
	<section id="featured-services" class="featured-services">
		<div class="container" data-aos="fade-up">
			<div class="row">
				<?php
				$bloco_link1 = explode(',', get_option('schedule_input_7'));
				$bloco_link2 = explode(',', get_option('schedule_input_8'));
				$bloco_link3 = explode(',', get_option('schedule_input_9'));
				$bloco_link4 = explode(',', get_option('schedule_input_10'));
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

	<!-- ======= About Section ======= -->
	<section id="About" class="about section-bg">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<h2>About</h2>
				<h3>About <span>Us</span></h3>
			</div>

			<div class="row">
				<div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="100">
					<h3>SIBGRAPI</h3>
					<?php
					$loop = new WP_Query(array('pagename' => 'About SIBGRAPI'));
					while ($loop->have_posts()) {
						$loop->the_post();
						echo "<p>" . the_content() . "</p>";
					}
					?>
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="100">
					<h3>CEGRAPI</h3>
					<?php
					$loop = new WP_Query(array('pagename' => 'About CEGRAPI'));
					while ($loop->have_posts()) {
						$loop->the_post();
						echo "<p>" . the_content() . "</p>";
					}
					?>
				</div>
			</div>

		</div>
	</section><!-- End About Section -->

	<!-- ======= Counts Section ======= -->
	<section id="counts" class="counts">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<h2>Statistics</h2>
				<h3><span>Our</span> statistics</h3>
			</div>

			<div class="row">
				<?php
				$bloco_count1 = explode(',', get_option('schedule_input_23'));
				$bloco_count2 = explode(',', get_option('schedule_input_24'));
				$bloco_count3 = explode(',', get_option('schedule_input_25'));
				$bloco_count4 = explode(',', get_option('schedule_input_26'));
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

	<!-- ======= Schedule Section ======= -->
	<section id="Schedule" class="services section-bg">
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
					if(strtotime(get_post_meta($post->ID, 'schedule_date', true)) >= strtotime(date('Y-m-d'))){
				?>
					<div class="col-lg-3 col-md-3 d-flex" data-aos="zoom-in" data-aos-delay="100">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-timer"></i></div>
							<h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
							<p>Date: <?php echo get_post_meta($post->ID, 'schedule_date', true); ?></p>
						</div>
					</div>
				<?php }} ?>
			</div>
			<br><br>
			<h4 class="plus"><a title="Schedule Completa" href="/schedule"><i class="bx bxs-folder-plus"></i></a></h4>
		</div>
	</section><!-- End Schedule Section -->

	<!-- ======= Portfolio Section ======= -->
	<section id="Portfolio" class="portfolio">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<h2>Portfolio</h2>
				<h3>Check out our <span>Portfolio</span></h3>
			</div>
			<div class="row" data-aos="fade-up" data-aos-delay="100">
				<div class="col-lg-12 d-flex justify-content-center">

					<ul id="portfolio-flters">
					<?php $categories = get_categories(array('order'=>'DESC'));				
					foreach( $categories as $category ) { 
						if(strstr($category->slug,"20")){ ?>					
						<li data-filter=".filter-<?php echo $category->slug; ?>" <?php if(get_option('schedule_input_1') == $category->slug)echo "class='filter-active'";else echo "onclick='mostrar(".$category->slug.")'";?>><?php echo $category->slug; ?></li>
					<?php }} ?>					
					</ul>
				</div>
			</div>

			<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

			<?php foreach( $categories as $category ) { 
						if(strstr($category->slug,"20")){ 
							$args = array(
								'category_name' => $category->slug,
								'posts_per_page' => 6
							);
							$loop = new WP_Query($args);
							while ($loop->have_posts()) {
								$loop->the_post();
							?>						
				<div <?php if(get_option('schedule_input_1') != $category->slug)echo "style='display: none;'"; ?> class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $category->slug; ?>">
					<img src="<?php if(has_post_thumbnail())the_post_thumbnail_url('full');else echo SITEPATH."assets/img/semimagem.png"; ?>" class="img-fluid" title="<?php the_title() ?>">
					<div class="portfolio-info">
						<h4><?php the_title() ?></h4>						
						<a href="<?php if(has_post_thumbnail())the_post_thumbnail_url('full');else echo SITEPATH."assets/img/semimagem.png"; ?>" data-gall="portfolioGallery" class="venobox preview-link" title="<?php the_title() ?>"><i class="bx bx-plus"></i></a>
						<a href="<?php the_permalink() ?>" class="details-link" title="Link"><i class="bx bx-link"></i></a>
					</div>
				</div>
				<?php }}}?>
			</div>
			<br><br>
			<h4 class="plus"><a title="Portfolio Completo" href="/portfolio"><i class="bx bxs-folder-plus"></i></a></h4>
		</div>
	</section><!-- End Portfolio Section -->

	<!-- ======= Team Section ======= -->
	<section id="Management" class="team section-bg">
		<div class="container" data-aos="fade-up">
			<?php
			$args = array(
				'post_type' => 'management',
				'posts_per_page' => 1,
				'order' => 'DESC'
			);
			$loop = new WP_Query($args);
			while ($loop->have_posts()) {
				$loop->the_post();
				$titulo_management_atual = get_the_title();
				$conteudo_management_atual = get_the_content();
			}
			?>
			<div class="section-title">
				<h2>Management</h2>
				<h3><?php echo $titulo_management_atual; ?></h3>
			</div>

			<div class="row">
				<div class="col-lg-12 col-md-12 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
					<div class="member">
						<?php echo $conteudo_management_atual; ?>
						<h1>&ensp;</h1>
						<h4 class="plus"><a title="Gestões Anteriores" href="/management"><i class="bx bxs-folder-plus"></i></a></h4>
					</div>
				</div>
			</div>
		</div>
	</section><!-- End Team Section -->

	<section id="Committee" class="team committee section-bg">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<h2>Committee</h2>
				<h3>Committee <span><?php echo get_option('schedule_input_1'); ?></span></h3>
			</div>

			<div class="row" data-aos="fade-up" data-aos-delay="100">
				<div class="col-lg-12 col-md-12 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100">
					<div class="member">
						<?php echo get_option('schedule_input_30'); ?>
						<br>
					</div>
				</div>
			</div>
		</div>
	</section><!-- End Team Section -->

	<!-- ======= Contact Section ======= -->
	<section id="Contact" class="contact">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<h2>Contact</h2>
				<h3>Contact<span>Us</span></h3>
			</div>

			<div class="row" data-aos="fade-up" data-aos-delay="100">

				<div class="col-lg-6 ">
					<iframe class="mb-4 mb-lg-0" src="<?php echo get_option('schedule_input_6'); ?>" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
				</div>

				<div class="col-lg-6">
					<?php echo do_shortcode('[wpforms id="176"]'); ?>
				</div>

			</div>

		</div>
	</section><!-- End Contact Section -->

	<!-- ======= Clients Section ======= -->
	<section id="clients" class="clients">

		<div class="section-title">
			<h2>Organized by</h2>
			<h3>Sponsor</h3>
		</div>
		<?php
		$org_logo_1 = array(get_option('schedule_input_11'), explode(',', get_option('schedule_input_12'))[0], explode(',', get_option('schedule_input_12'))[1]);
		$org_logo_2 = array(get_option('schedule_input_13'), explode(',', get_option('schedule_input_14'))[0], explode(',', get_option('schedule_input_14'))[1]);
		$org_logo_3 = array(get_option('schedule_input_15'), explode(',', get_option('schedule_input_16'))[0], explode(',', get_option('schedule_input_16'))[1]);
		$org_logo_4 = array(get_option('schedule_input_17'), explode(',', get_option('schedule_input_18'))[0], explode(',', get_option('schedule_input_18'))[1]);
		$org_logo_5 = array(get_option('schedule_input_19'), explode(',', get_option('schedule_input_20'))[0], explode(',', get_option('schedule_input_20'))[1]);
		$org_logo_6 = array(get_option('schedule_input_21'), explode(',', get_option('schedule_input_22'))[0], explode(',', get_option('schedule_input_22'))[1]);
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
	</section><!-- End Clients Section -->

</main><!-- End #main -->
<?php get_footer(); ?>