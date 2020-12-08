
<?php
/* Template Name: Service Page */
?>
<?php get_header(); ?>


<?php while(have_posts()): the_post();  ?>

<div class="service-detail-page">
	<!-- Page Banner -->


  <?php
      $id_image = get_field('cover_image');
      $image = wp_get_attachment_image_src($id_image, 'service');
      ?>

  <div class="page-banner" style="background: linear-gradient(to right, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(<?php echo the_post_thumbnail_url(); ?>); background-size: cover; background-repeat: no-repeat; background-position: center center;  padding: 68px 0;">

		<div class="container">
			<h1 class="page-title lg-title"><?php the_title(); ?></h1>
			<div class="bread-crumbs">
				<ul class="list-none d-flex justify-content-end">
					<li class="xs-title"><a href="<?php echo home_url('/'); ?>" class="d-inline-block text-white">Home</a></li>
					<span class="seperator px-2 text-white"> > </span>
					<li class="xs-title"><a href="<?php echo  site_url('/service'); ?>" class="d-inline-block text-white">Our Services</a></li>
					<span class="seperator px-2 text-white"> > </span>
					<li class="xs-title active"><?php the_title(); ?></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- End of Page Banner -->
	<section class="service-section py-5 bg-section">
	<div class="container">
		<header class="section-header text-left mb-3 text-center pb-4">
			<h3 class="md-title section-title text-black after-border-b-primary">Our Services</h3>
		</header>
		<div class="wrapper">
		
			<?php
               $args = array(
                 'post_type'  => 'services',
                 'post_per_page'  => 15,
                 'orderby' => 'title',
                 'order' => 'ASC'
               );
               $services = new WP_Query($args);
               while($services->have_posts()) : $services->the_post();
             ?>
             <div class="row">

				<!-- col -->
				<div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
					<div class="holder position-relative bg-white">
						<div class="meta-icon bg-main text-white d-inline-block">
							<i class="fas fa-expand"></i>
						</div>
						<img  src="<?php echo the_post_thumbnail_url(); ?>" alt="">
						<div class="text position-absolute">
							<img src="assets/images/logo.png" data-src="assets/images/services/import.png" alt="">
							<div class="content">
								<a href="service-detail.php" class="d-block title ls-title text-capitalize text-white mb-2"><?php echo the_title();  ?></a>
								<a href="<?php the_permalink(); ?>" class="xs-title button text-white">View Service <i class="fas fa-arrow-right ml-2"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
             <?php    endwhile; wp_reset_postdata(); ?>
			<div class="btn-wrapper text-center mt-4">
				<a href="<?php echo site_url('/service'); ?>" class="d-inline-block button-one">View all</a>
			</div>
		</div>
	</div>
	</section>
</div>
<?php endwhile; ?>

<?php get_footer(); ?>


