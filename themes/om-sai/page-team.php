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
            <div class="team-cat py-5 text-center">
                <h2 class=" font-weight-bold after-border-b-primary text-black d-inline-block mb-4 pb-4 ">Director Finance and Administration</h2>
                <div class="row">
                	<?php
		                $taxonomy = 'project-category';
		                $terms =  get_terms($taxonomy);
		                foreach ($terms as $term) {
		                ?>
		                     <li class="button-two mb-2 xs-title" data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></li>
		                <?php
                    }
                ?>
                    <!-- Team -->
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="img-holder position-relative p-3 bg-white box-shadow-2">
                            <img src="assets/images/team/img1.jpg" alt="">
                            <div class="team-des text-center pt-3">
                                <h2 class="ls-title name mb-0 font-weight-bold text-dark">Thomas Muller</h2>
                                <span class="desig xs-title">Project Manager</span>
                            </div>
                        </div>
                    </div>
                    <!-- Team -->
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="img-holder position-relative p-3 bg-white box-shadow-2">
                            <img src="assets/images/team/img2.jpg" alt="">
                            <div class="team-des text-center pt-3">
                                <h2 class="ls-title name mb-0 font-weight-bold text-dark">Thomas Muller</h2>
                                <span class="desig xs-title">Project Manager</span>
                            </div>
                        </div>
                    </div>
                    <!-- Team -->
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="img-holder position-relative p-3 bg-white box-shadow-2">
                            <img src="assets/images/team/img3.jpg" alt="">
                            <div class="team-des text-center pt-3">
                                <h2 class="ls-title name mb-0 font-weight-bold text-dark">Thomas Muller</h2>
                                <span class="desig xs-title">Project Manager</span>
                            </div>
                        </div>
                    </div>
                    <!-- Team -->
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="img-holder position-relative p-3 bg-white box-shadow-2">
                            <img src="assets/images/team/img4.jpg" alt="">
                            <div class="team-des text-center pt-3">
                                <h2 class="ls-title name mb-0 font-weight-bold text-dark">Thomas Muller</h2>
                                <span class="desig ts-title">Co Founder</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team Cat -->
            <div class="team-cat py-5 text-center">
                <h2 class=" font-weight-bold after-border-b-primary text-black d-inline-block mb-4 pb-4 ">Executive Council</h2>
                <div class="row no-gutters">
                    <!-- Team -->
                     <div class="col-lg-3 col-md-6 col-12">
                    <div class="img-holder position-relative p-3 bg-white box-shadow-2">
                        <img src="assets/images/team/img3.jpg" alt="">
                        <div class="team-des text-center pt-3">
                            <h2 class="ls-title name mb-0 font-weight-bold text-dark">Thomas Muller</h2>
                            <span class="desig">Co Founder</span>
                        </div>
                    </div>
                </div>
                <!-- Team -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="img-holder position-relative p-3 bg-white box-shadow-2">
                        <img src="assets/images/team/img4.jpg" alt="">
                        <div class="team-des text-center pt-3">
                            <h2 class="ls-title name mb-0 font-weight-bold text-dark">Thomas Muller</h2>
                            <span class="desig">Co Founder</span>
                        </div>
                    </div>
                </div>
                <!-- Team -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="img-holder position-relative p-3 bg-white box-shadow-2">
                        <img src="assets/images/team/img5.jpg" alt="">
                        <div class="team-des text-center pt-3">
                            <h2 class="ls-title name mb-0 font-weight-bold text-dark">Thomas Muller</h2>
                            <span class="desig">Co Founder</span>
                        </div>
                    </div>
                </div>
                <!-- Team -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="img-holder position-relative p-3 bg-white box-shadow-2">
                        <img src="assets/images/team/img3.jpg" alt="">
                        <div class="team-des text-center pt-3">
                            <h2 class="ls-title name mb-0 font-weight-bold text-dark">Thomas Muller</h2>
                            <span class="desig">Co Founder</span>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Team Section -->
</div>


<?php get_footer(); ?>