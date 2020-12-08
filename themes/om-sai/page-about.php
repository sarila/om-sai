<?php
/* Template Name: About Us */
?>

<?php get_header(); ?>
<?php while(have_posts()): the_post();  ?>

<div class="about-page">
	<!-- Page Banner -->
	<div class="page-banner" style="background: linear-gradient(to right, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(<?php echo the_post_thumbnail_url(); ?>); background-size: cover; background-repeat: no-repeat; background-position: center center;  padding: 68px 0;">
		<div class="container">
			<h1 class="page-title lg-title"><?php echo the_title();  ?></h1>
			<div class="bread-crumbs">
				<ul class="list-none d-flex justify-content-end">
					<li class="xs-title"><a href="<?php echo home_url(); ?>" class="d-inline-block text-white">Home</a></li>
					<span class="seperator px-2 text-white"> > </span>
					<li class="xs-title active"><?php echo the_title();  ?></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- End of Page Banner -->
<!-- About Section -->
<section class="about-section py-80">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="img-holder position-relative">				
              	<?php
                  $id_image = get_field('image');
                  $image1 = wp_get_attachment_image_src($id_image, 'about_1');
                  ?>
					<img src="<?php echo $image1[0]; ?>" alt="">

					
					<!-- Left Image -->
					<div class="content box-shadow-3 px-lg-3 py-4 px-1">
						<h2 class="xs-title left-border text-uppercase d-inline-block text-dark"><?php echo the_title();  ?> </h2>
						<h3 class="md-title mb-4 text-black"><?php echo the_field('title');  ?></h3>
						<p> <?php echo the_content();  ?></p>
					</div>
					<!-- End of Content -->
				</div>
			</div>
			<!-- col-6 -->
		</div>
	</div>			
</section>
<!-- End of About Section -->
<!-- Mission section -->
<section class="our-mission">
    <div class="container">
        <div class="row">
        	<div class="col-lg-6 col-12 mb-3">
                <div class="wrapper box-shadow-2 p-md-4 p-2">
                    <h2 class="sm-title text-black font-weight-bold after-border-b-primary"><?php echo the_field('mission_title');  ?></h2>
                    <p><?php echo the_field('mission_description');  ?></p>
                </div>
            </div>
            <!-- Mission -->
            <div class="col-lg-6 col-12 mb-3">
                <div class="wrapper box-shadow-2 p-md-4 p-2 second">
                    <h2 class="sm-title text-black font-weight-bold after-border-b-primary"><?php echo the_field('vision_title');  ?></h2>
                    <p><?php echo the_field('vision_description');  ?></p>
                </div>
            </div>
            <!-- Mission -->
            <div class="col-lg-6 col-12 mb-3">
                <div class="wrapper box-shadow-2 p-md-4 p-2">
                    <h2 class="sm-title text-black font-weight-bold after-border-b-primary"><?php echo the_field('value_title');  ?></h2>
                    <p><?php echo the_field('value_description');  ?></p>
                </div>
            </div>
        </div>
</section>
<!-- End of Mission -->
<!-- Message from director -->
<section class="mfb py-4 bg-light">
	<div class="container">
		<header class="section-header text-center mb-3">
			<h2 class="section-title font-weight-bold xs-title text-uppercase left-border d-inline-block">Message from board of <?php echo the_field('position'); 	 ?> of</h2>
			<h3 class="lg-title text-black"><?php echo the_field('company_name'); 	 ?> </h3>
		</header>
		<div class="row">
			<div class="col-lg-4 col-12 mb-3">
				<div class="holder p-3 bg-white">
					<?php
	                  $id_image = get_field('message_image');
	                  $image2 = wp_get_attachment_image_src($id_image, 'about_2');
	                  ?>
					<img src="<?php echo $image2[0]; ?>" alt="">
				</div>
			</div>
			<div class="col-lg-8 col-12 mb-3">
				<div class="holder p-3">
					<p><?php echo the_field('message_content'); 	 ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End of message from director -->
<!-- CTA-->
<div class="cta text-center text-white">
	<div class="container">
		<h2 class="page-title lg-title">Provide you the highest quality work that meets your expectation.</h2>
		<p>Need a high quality business for your project?</p>
		<a href="<?php 	echo site_url('/contact') ?>" class="button-one">Contact Now</a>
	</div>
</div>
<!-- End of CTA -->
<!-- Testimonial Section -->

<section class="testimonial-section bg-main py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 mb-2">
				<header class="section-header mb-0 text-center">
					<h2 class="section-title text-white xs-title text-uppercase left-border d-inline-block">What They Are Saying</h2>
					<h3 class="lg-title text-white mb-1">Clients Love</h3>
				</header>
				<div class="content text-white xs-title d-none">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa quo sapiente repellat dicta laboriosam delectus distinctio ullam, voluptatum, quas ratione hic dolorum optio, at maiores excepturi nemo odit asperiores nostrum!</p>
					<div class="row mb-4">
						<div class="col-4">
							<img src="assets/images/logo.png" data-src="assets/images/clients/logo_1.png" alt="">
						</div>
						<div class="col-4">
							<img src="assets/images/logo.png" data-src="assets/images/clients/logo_2.png" alt="">
						</div>
						<div class="col-4">
							<img src="assets/images/logo.png" data-src="assets/images/clients/logo_3.png" alt="">
						</div>
					</div>
					<a href="contact.php" class="button-one-sec">Contact Now</a>
				</div>
			</div>
			<!-- Left Side -->
			<div class="col-12">
				<div class="testimonial-slider owl-carousel owl-theme">
					<?php
				       $args = array(
								 'post_type'  => 'testimonials',
								 'post_per_page'  => 7,
								 'orderby' => 'title',
								 'order' => 'ASC'
						 );
						 $testimonials = new WP_Query($args);
						 while($testimonials->have_posts()) : $testimonials->the_post();
					?>
					<!-- slider Item -->
					<div class="slider-item text-white">
						<div class="client-img mb-3 text-center">
							<img data-src="<?php echo the_post_thumbnail_url(); ?>" alt="">
						</div>
						<div class="qoute">
							<img src="assets/images/logo.png" data-src="assets/images/testimonials/quote.png" alt="">
						</div>
						<div class="content xs-title mb-2 text-white text-center">
							<p> <?php echo the_content(); ?></p>
							<div class="client">
								<h2 class="ls-title text-white text-capitalize"><?php the_title(); ?></h2>
								<h3 class="desig ts-title text-white"><?php echo the_field('position'); ?></h3>
							</div>
						</div>
					</div>
					<?php    endwhile; wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End of testimonial Section -->
</div>
<?php endwhile; ?>
<?php get_footer(); ?>