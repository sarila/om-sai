<?php get_header(); ?>
<!-- Banner Slider Section -->
<section class="slider-section">
	<div class="slider-holder owl-carousel position-relative">
		<?php
            $args = array(
                'post_type'  => 'sliders',
                'post_per_page'  => 3,
                'orderby' => 'title',
                'order' => 'ASC'
            );
            $sliders = new WP_Query($args);
            while ($sliders->have_posts()) : $sliders->the_post();
        ?>
			<div class="slider-item">
				<img data-src="<?php echo the_post_thumbnail_url(); ?>" alt="">
				<div class="slider-content text-white w-75">
					<h2 class="xs-title text-white mb-3 pb-3 border-b-white d-inline-block">We Are The</h2>
					<h3 class="xl-title  text-white text-capitalize mb-3"><?php echo the_title(); ?></h3>
					<p><?php echo the_content(); ?></p>
					<a href="#" class="button-four xs-title">Discover More</a>
				</div>
			</div>
		<?php endwhile;
        wp_reset_postdata(); ?>
	</div>
</section>
<!-- End of Banner Slider Section -->
<!-- About Section -->
<section class="about-section py-80">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-12">
				<?php
		            $data = get_page_by_title('About');
		            $image = apply_filters(the_post_thumbnail_url(), $data->image);
		            $image_front = wp_get_attachment_image_src($image, 'about');
		        ?>

				<div class="img-holder position-relative">
					<img data-src="<?php echo image_front[0]; ?>" alt="">
					<!-- Left Image -->
					<div class="content box-shadow-3 p-lg-3">
						<h2 class="xs-title left-border text-uppercase d-inline-block text-dark"><?php echo the_title(); ?> </h2>
						<h3 class="md-title mb-4 text-black">We Are Ready To Build Your Dream & Grow Up Your Business.</h3>
						<p><?php echo the_content();  ?></p>
						<div class="button-wrap text-right">
							<a href="<?php site_url('/about'); ?>" class="button-one">More About Us <i class="fas fa-long-arrow-alt-right ml-2"></i></a>
						</div>	
					</div>
					<!-- End of Content -->
				</div>
				<?php wp_reset_postdata(); ?>
			</div>
			<!-- col-6 -->
		</div>
	</div>			
</section>
<!-- End of About Section -->
<!-- Service Seciton -->
<section class="service-section py-5 bg-section">
	<div class="container">
		<header class="section-header text-left mb-3 text-center pb-4">
			<h3 class="md-title section-title text-black after-border-b-primary">Our Services</h3>
		</header>
		<div class="wrapper">
			<div class="row">
				<!-- col -->
				<div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
					<div class="holder position-relative bg-white">
						<div class="meta-icon bg-main text-white d-inline-block">
							<i class="fas fa-expand"></i>
						</div>
						<img src="assets/images/logo.png" data-src="assets/images/services/img-1.jpg" alt="">
						<div class="text position-absolute">
							<img src="assets/images/logo.png" data-src="assets/images/services/import.png" alt="">
							<div class="content">
								<a href="service-detail.php" class="d-block title ls-title text-capitalize text-white mb-2">CONSTRUCTION</a>
								<a href="service-detail.php" class="xs-title button text-white">View Service <i class="fas fa-arrow-right ml-2"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- col -->
				<div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
					<div class="holder position-relative bg-white">
						<div class="meta-icon bg-main text-white d-inline-block">
							<i class="fas fa-expand"></i>
						</div>
						<img src="assets/images/logo.png" data-src="assets/images/services/img-2.jpg" alt="">
						<div class="text position-absolute">
							<img src="assets/images/logo.png" data-src="assets/images/services/engineer.png" alt="">
							<div class="content">
								<a href="service-detail.php" class="d-block title ls-title text-capitalize text-white mb-2">MATERIAL SUPPLY</a>
								<a href="service-detail.php" class="xs-title button text-white">View Service <i class="fas fa-arrow-right ml-2"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- col -->
				<div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
					<div class="holder position-relative bg-white">
						<div class="meta-icon bg-main text-white d-inline-block">
							<i class="fas fa-expand"></i>
						</div>
						<img src="assets/images/logo.png" data-src="assets/images/services/img-3.jpg" alt="">
						<div class="text position-absolute">
							<img src="assets/images/logo.png" data-src="assets/images/services/contruction.png" alt="">
							<div class="content">
								<a href="service-detail.php" class="d-block title ls-title text-capitalize text-white mb-2">Mechanical Engineering</a>
								<a href="service-detail.php" class="xs-title button text-white">View Service <i class="fas fa-arrow-right ml-2"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- col -->
				<div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
					<div class="holder position-relative bg-white">
						<div class="meta-icon bg-main text-white d-inline-block">
							<i class="fas fa-expand"></i>
						</div>
						<img src="assets/images/logo.png" data-src="assets/images/services/img-4.jpg" alt="">
						<div class="text position-absolute">
							<img src="assets/images/logo.png" data-src="assets/images/services/2516720.png" alt="">
							<div class="content">
								<a href="service-detail.php" class="d-block title ls-title text-capitalize text-white mb-2">Industrial Ecology</a>
								<a href="service-detail.php" class="xs-title button text-white">View Service <i class="fas fa-arrow-right ml-2"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- col -->
				<div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
					<div class="holder position-relative bg-white">
						<div class="meta-icon bg-main text-white d-inline-block">
							<i class="fas fa-expand"></i>
						</div>
						<img src="assets/images/logo.png" data-src="assets/images/services/img-1.jpg" alt="">
						<div class="text position-absolute">
							<img src="assets/images/logo.png" data-src="assets/images/services/import.png" alt="">
							<div class="content">
								<a href="service-detail.php" class="d-block title ls-title text-capitalize text-white mb-2">CONSTRUCTION</a>
								<a href="service-detail.php" class="xs-title button text-white">View Service <i class="fas fa-arrow-right ml-2"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- col -->
				<div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
					<div class="holder position-relative bg-white">
						<div class="meta-icon bg-main text-white d-inline-block">
							<i class="fas fa-expand"></i>
						</div>
						<img src="assets/images/logo.png" data-src="assets/images/services/img-1.jpg" alt="">
						<div class="text position-absolute">
							<img src="assets/images/logo.png" data-src="assets/images/services/import.png" alt="">
							<div class="content">
								<a href="service-detail.php" class="d-block title ls-title text-capitalize text-white mb-2">CONSTRUCTION</a>
								<a href="service-detail.php" class="xs-title button text-white">View Service <i class="fas fa-arrow-right ml-2"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- col -->
				<div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
					<div class="holder position-relative bg-white">
						<div class="meta-icon bg-main text-white d-inline-block">
							<i class="fas fa-expand"></i>
						</div>
						<img src="assets/images/logo.png" data-src="assets/images/services/img-1.jpg" alt="">
						<div class="text position-absolute">
							<img src="assets/images/logo.png" data-src="assets/images/services/import.png" alt="">
							<div class="content">
								<a href="service-detail.php" class="d-block title ls-title text-capitalize text-white mb-2">CONSTRUCTION</a>
								<a href="service-detail.php" class="xs-title button text-white">View Service <i class="fas fa-arrow-right ml-2"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- col -->
				<div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
					<div class="holder position-relative bg-white">
						<div class="meta-icon bg-main text-white d-inline-block">
							<i class="fas fa-expand"></i>
						</div>
						<img src="assets/images/logo.png" data-src="assets/images/services/img-1.jpg" alt="">
						<div class="text position-absolute">
							<img src="assets/images/logo.png" data-src="assets/images/services/import.png" alt="">
							<div class="content">
								<a href="service-detail.php" class="d-block title ls-title text-capitalize text-white mb-2">CONSTRUCTION</a>
								<a href="service-detail.php" class="xs-title button text-white">View Service <i class="fas fa-arrow-right ml-2"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="btn-wrapper text-center mt-4">
				<a href="service-list.php" class="d-inline-block button-one">View all</a>
			</div>
		</div>
	</div>
</section>
<!-- End of Service Section -->
<!-- Portfolio Section -->
<section class="portfolio-section py-4">
	<div class="container">
		<header class="section-header text-center mb-4">
			<h2 class="section-title font-weight-bold xs-title text-uppercase left-border d-inline-block">OUR latest work</h2>
			<h3 class="lg-title text-black">Portfolio</h3>
		</header>
		<div class="row">
	        <div class="col-12 text-center mb-5">
	            <ul class="portfolio-filter list-none">
	                <li class="button-two mb-2 xs-title active" data-filter="*">All Projects</li>
	                <li class="button-two mb-2 xs-title" data-filter=".design">Design</li>
	                <li class="button-two mb-2 xs-title" data-filter=".market">Marketing</li>
	                <li class="button-two mb-2 xs-title" data-filter=".develop">Development</li>
	                <li class="button-two mb-2 xs-title" data-filter=".brand">Branding</li>
	            </ul>
	        </div>
	        <div class="col-12">
	            <div id="porfolio" class="row portfolio-holder">
	                <div class="col-lg-4 col-sm-6 mb-4 portfolio-item design">
	                    <div class="portfolio-single">
	                        <div class="img"><img src="assets/images/logo.png" data-src="assets/images/portfolios/port-3.jpg" alt=""></div>
	                        <div class="portfolio-content">
	                            <div class="portfolio-text">
	                                <a href="projects-detail.php">
	                                    <h2 class="ls-title mb-0">Artboard Focus</h2>
	                                </a>
	                                <h3 class="p-cat xs-title">Design</h3>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-lg-4 col-sm-6 mb-4 portfolio-item brand market">
	                    <div class="portfolio-single">
	                        <div class="img"><img src="assets/images/logo.png" data-src="assets/images/portfolios/port-1.jpg" alt=""></div>
	                        <div class="portfolio-content">
	                            <div class="portfolio-text">
	                                <a href="projects-detail.php">
	                                    <h2 class="ls-title mb-0">Jonas Blue Alerm</h2>
	                                </a>
	                                <h3 class="p-cat xs-title">Development</h3>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-lg-4 col-sm-6 mb-4 portfolio-item design">
	                    <div class="portfolio-single">
	                        <div class="img"><img src="assets/images/logo.png" data-src="assets/images/portfolios/port-2.jpg" alt=""></div>
	                        <div class="portfolio-content">
	                            <div class="portfolio-text">
	                                <a href="projects-detail.php">
	                                    <h2 class="ls-title mb-0">Mincaup Juice</h2>
	                                </a>
	                                <h3 class="p-cat xs-title">Branding</h3>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-lg-4 col-sm-6 mb-4 portfolio-item brand market">
	                    <div class="portfolio-single">
	                        <div class="img"><img src="assets/images/logo.png" data-src="assets/images/portfolios/port-4.jpg" alt=""></div>
	                        <div class="portfolio-content">
	                            <div class="portfolio-text">
	                                <a href="projects-detail.php">
	                                    <h2 class="ls-title mb-0">Ledana Mazda</h2>
	                                </a>
	                                <h3 class="p-cat xs-title">Design</h3>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-lg-4 col-sm-6 mb-4 portfolio-item develop brand">
	                    <div class="portfolio-single">
	                        <div class="img"><img src="assets/images/logo.png" data-src="assets/images/portfolios/port-5.jpg" alt=""></div>
	                        <div class="portfolio-content">
	                            <div class="portfolio-text">
	                                <a href="projects-detail.php">
	                                    <h2 class="ls-title mb-0">Roboto bluren</h2>
	                                </a>
	                                <h3 class="p-cat xs-title">Development</h3>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-lg-4 col-sm-6 mb-4 portfolio-item market">
	                    <div class="portfolio-single">
	                        <div class="img"><img src="assets/images/logo.png" data-src="assets/images/portfolios/port-6.jpg" alt=""></div>
	                        <div class="portfolio-content">
	                            <div class="portfolio-text">
	                                <a href="projects-detail.php">
	                                    <h2 class="ls-title mb-0">Under waterden</h2>
	                                </a>
	                                <h3 class="p-cat xs-title">Branding</h3>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-lg-4 col-sm-6 mb-4 portfolio-item design">
	                    <div class="portfolio-single">
	                        <div class="img"><img src="assets/images/logo.png" data-src="assets/images/portfolios/port-3.jpg" alt=""></div>
	                        <div class="portfolio-content">
	                            <div class="portfolio-text">
	                                <a href="projects-detail.php">
	                                    <h2 class="ls-title mb-0">Dignissimos wisi</h2>
	                                </a>
	                                <h3 class="p-cat xs-title">Design</h3>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-lg-4 col-sm-6 mb-4 portfolio-item brand market">
	                    <div class="portfolio-single">
	                        <div class="img"><img src="assets/images/logo.png" data-src="assets/images/portfolios/port-5.jpg" alt=""></div>
	                        <div class="portfolio-content">
	                            <div class="portfolio-text">
	                                <a href="projects-detail.php">
	                                    <h2 class="ls-title mb-0">Kildren Parpest</h2>
	                                </a>
	                                <h3 class="p-cat xs-title">Marketing</h3>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-lg-4 col-sm-6 mb-4 portfolio-item brand">
	                    <div class="portfolio-single">
	                        <div class="img"><img src="assets/images/logo.png" data-src="assets/images/portfolios/port-2.jpg" alt=""></div>
	                        <div class="portfolio-content">
	                            <div class="portfolio-text">
	                                <a href="projects-detail.php">
	                                    <h2 class="ls-title mb-0">Giminy Braveran</h2>
	                                </a>
	                                <h3 class="p-cat xs-title">Branding</h3>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</section>
<!-- End of Portfolio Section -->
<!-- Testimonial Section -->
<section class="testimonial-section py-4">
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
					<!-- slider Item -->
					<div class="slider-item text-white">
						<div class="client-img mb-3 text-center">
							<img src="assets/images/logo.png" data-src="assets/images/testimonials/avatar-3.jpg" alt="">
						</div>
						<div class="qoute">
							<i class="fas fa-quote-right text-white md-title"></i>
						</div>
						<div class="content xs-title mb-2 text-white text-center">
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque fugiat quos, omnis sapiente, ipsum qui praesentium quia fuga, hic dolorem, quidem! Quas deleniti sit libero ut repellat ab nostrum magnam?</p>
							<div class="client">
								<h2 class="ls-title text-sec text-capitalize">Thomas Muller</h2>
								<h3 class="desig ts-title text-white">CEO of Tech Coderz</h3>
							</div>
						</div>
					</div>
					<!-- slider Item -->
					<div class="slider-item text-white">
						<div class="client-img mb-3 text-center">
							<img src="assets/images/logo.png" data-src="assets/images/testimonials/avatar-4.jpg" alt="">
						</div>
						<div class="qoute">
							<i class="fas fa-quote-right text-white md-title"></i>
						</div>
						<div class="content xs-title mb-2 text-white text-center">
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque fugiat quos, omnis sapiente, ipsum qui praesentium quia fuga, hic dolorem, quidem! Quas deleniti sit libero ut repellat ab nostrum magnam?</p>
							<div class="client">
								<h2 class="ls-title text-sec text-capitalize">Lionela Messi</h2>
								<h3 class="desig ts-title text-white">CEO of Tech Coderz</h3>
							</div>
						</div>
					</div>
					<!-- slider Item -->
					<div class="slider-item text-white">
						<div class="client-img mb-3 text-center">
							<img src="assets/images/logo.png" data-src="assets/images/testimonials/avatar-4.jpg" alt="">
						</div>
						<div class="qoute">
							<i class="fas fa-quote-right text-white md-title"></i>
						</div>
						<div class="content xs-title mb-2 text-white text-center">
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque fugiat quos, omnis sapiente, ipsum qui praesentium quia fuga, hic dolorem, quidem! Quas deleniti sit libero ut repellat ab nostrum magnam?</p>
							<div class="client">
								<h2 class="ls-title text-sec text-capitalize">Lionela Messi</h2>
								<h3 class="desig ts-title text-white">CEO of Tech Coderz</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End of Testimonial -->



<?php get_footer(); ?>