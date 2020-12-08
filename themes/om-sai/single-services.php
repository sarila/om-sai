
<?php
/* Template Name: Service Page */
?>

<?php get_header(); ?>



<?php while(have_posts()): the_post();  ?>



  <div class="service-list-page">
  	<!-- Page Banner -->
      <div class="page-banner" style="background: linear-gradient(to right, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(<?php echo the_post_thumbnail_url(); ?>); background-size: cover; background-repeat: no-repeat; background-position: center center;  padding: 68px 0;">
		<div class="container">
			<h1 class="page-title lg-title"><?php echo the_title();  ?></h1>
			<div class="bread-crumbs">
				<ul class="list-none d-flex justify-content-end">
					<li class="xs-title"><a href="<?php echo home_url(); ?>" class="d-inline-block text-white">Home</a></li>
					<span class="seperator px-2 text-white"> > </span>
					<li class="xs-title"><a href="service-list.php" class="d-inline-block text-white">Our Services</a></li>
					<span class="seperator px-2 text-white"> > </span>
					<li class="xs-title active"><?php echo the_title();  ?></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- End of Page Banner -->
	<section class="service-detail-section py-5 bg-light">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-9 col-12">
					<div class="service-slider">
						<h2 class="section-title mb-4 font-weight-bold sm-title text-uppercase left-border d-inline-block">Construction for a better tomorrow</h2>
						<img src="<?php echo the_post_thumbnail_url();?>" alt="">
					</div>
					<div class="content py-md-4 py-2 px-md-3 bg-white xs-title">
						<h2 class="section-title mb-4 font-weight-bold sm-title text-uppercase left-border d-inline-block">We give the best Services</h2>
						<p><?php echo the_content();  ?></p>
					</div>
				</div>
				<!-- Left -->
				<div class="col-lg-3 col-12">
					<div class="content py-md-4 py-2 px-md-3  xs-title">
						<h2 class="section-title mb-4 font-weight-bold ls-title text-uppercase left-border d-block mb-3">Related Services</h2>
						<?php
			               $args = array(
			                 'post_type'  => 'services',
			                 'post_per_page'  => -1,
			                 'orderby' => 'title',
			                 'order' => 'ASC'
			               );
			               $services = new WP_Query($args);
			               while($services->have_posts()) : $services->the_post();
			            ?>
						<a href="<?php the_permalink(); ?>" class="d-block box-shadow-1 bg-main xs-title text-white holder px-md-2 px-1 py-1 text-capitalize mb-3"><?php the_title(); ?> <i class="fas fa-angle-right ml-3"></i></a>
			            <?php    endwhile; wp_reset_postdata(); ?>
					</div>

				</div>
			</div>
		</div>
	</section>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>
