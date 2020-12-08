<?php
/* Template Name: Client */
?>

<?php get_header(); ?>
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
</div>
	<!-- End of Page Banner -->
	<!-- Client Section -->
	<section class="client-section  text-center bg-light py-4">
	    <div class="container">
	    	<header class="section-header text-left mb-3 text-center pb-4">
			<h3 class="md-title section-title text-black after-border-b-primary">Our Clients</h3>
		</header>
			<!-- Client wrapper  -->
			<?php 
			$taxonomy = 'client-category';
		    $terms =  get_terms($taxonomy);
		    foreach ($terms as $term) {
		    $name= $term->name;
			$args = array(
                'post_type' => 'clients',
                'posts_per_page' => -1,
                'orderby' => 'ASC',
                'tax_query' => array(
			        array (
			            'taxonomy' => 'client-category',
			            'field' => 'slug',
			            'terms' => $name,
			        )
			    ),
            );
            ?>
	    	<div class="wrapper box-shadow-2 py-3 mb-5">
	    		<header class="section-header-two">
		                <h2 class="font-weight-bold section-title xs-title text-uppercase border-b-primary pb-3 mb-5"><?php echo $term->name; ?></h2>
		            
		        </header>
		        <div class="row">
		        	<?php 	            
		        	$client = new WP_Query($args);
	            	if ($client->have_posts()) :
	                while ($client->have_posts()) :
	                    $client->the_post();
	                    ?>
		            <div class="col-lg-2 col-md-3 col-4">
		                <div class="slider-wrapper">
		                    <?php the_post_thumbnail(); ?>
		                </div>
		            </div> <!-- end col-lg-2 col-md-3 col-4 -->
		        <?php endwhile;
		        	wp_reset_postdata();
		        endif;
		         ?>
		        </div>
			</div>
		<?php } ?>
			<!-- End of wrapper -->
	    </div>
	</section>
	<!-- End of Client section -->
</div>



<?php get_footer(); ?>