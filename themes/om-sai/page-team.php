<?php
/* Template Name: Team */
?>


<?php get_header(); ?>


<div class="team-page">
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
    <!-- Team Section -->
    <section class="team-section py-4">
        <div class="container">
            <?php 
            $taxonomys = 'team_category';
            $team_terms =  get_terms($taxonomys);
            foreach ($team_terms as $team_term) {
            $names= $team_term->name;
            $args = array(
                'post_type' => 'teams',
                'posts_per_page' => -1,
                'orderby' => 'ASC',
                'tax_query' => array(
                    array (
                        'taxonomy' => 'team_category',
                        'field' => 'slug',
                        'terms' => $names,
                    )
                ),
            );
            ?>
            <div class="team-cat py-5 text-center">
                <h2 class=" font-weight-bold after-border-b-primary text-black d-inline-block mb-4 pb-4 "><?php echo $names; ?></h2>

                <div class="row">
                    <?php               
                    $client = new WP_Query($args);
                    if ($client->have_posts()) :
                    while ($client->have_posts()) :
                        $client->the_post();
                        ?>
                    <!-- Team -->
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="img-holder position-relative p-3 bg-white box-shadow-2">
                             <?php the_post_thumbnail(); ?>
                            <div class="team-des text-center pt-3">
                                <h2 class="ls-title name mb-0 font-weight-bold text-dark"><?php the_title(); ?></h2>
                                <span class="desig xs-title"><?php echo the_field('position'); ?></span>
                            </div>
                        </div>
                    </div>
<?php endwhile;
                wp_reset_postdata(); 
            endif;?>
                </div>
            </div>
            <?php 
           }
            ?>

   
        </div>
    </section>
    <!-- End of Team Section -->
</div>


<?php get_footer(); ?>