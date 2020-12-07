    <!-- Footer -->
    <footer class="site-footer">
        <!-- Footer Top -->
        <div class="footer-t py-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mb-3 xs-title text-white mb-4">
                        <a href="<?php echo home_url('/'); ?>" class="d-inline-block p-1 bg-white mb-3"><img src="<?php echo get_theme_mod('omsai_image_setting'); ?>" alt=""></a>
                        <p><?php echo get_theme_mod('omsai_footertext_handle') ?></p>
                        <div class="social-links">
                            <ul class="list-none d-flex">
                              <?php if(get_theme_mod('omsai_facebook_handle')) { ?>
                              <li class="mr-3"><a href="<?php echo get_theme_mod('omsai_facebook_handle') ?>"><i class="fab fa-facebook-f"></i></a></li>
                              <?php } else { ?>
                                <li class="mr-3"><a href="javascript:"><i class="fab fa-facebook-f"></i></a></li>
                              <?php } ?>

                                <?php if(get_theme_mod('omsai_instagram_handle')) { ?>
                                <li class="mr-3"><a href="<?php echo get_theme_mod('omsai_instagram_handle') ?>"><i class="fab fa-instagram"></i></a></li>
                              <?php } else { ?>
                                <li class="mr-3"><a href="javascript:"><i class="fab fa-instagram"></i></a></li>
                              <?php } ?>

                                <?php if(get_theme_mod('omsai_twitter_handle')) { ?>
                                <li class="mr-3"><a href="<?php echo get_theme_mod('omsai_twitter_handle') ?>"><i class="fab fa-twitter"></i></a></li>
                              <?php } else { ?>
                                <li class="mr-3"><a href="javascript:"><i class="fab fa-twitter"></i></a></li>
                              <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <!-- Cols -->
                    <div class="col-lg-4 col-md-6 col-12 mb-3 xs-title text-white mb-4">
                        <h2 class="sm-title text-white d-inline-block after-border-b-secondary mb-4">Quick Links</h2>
                        <ul class="list-none">
                            <li><a href="<?php echo home_url('/'); ?>" class="xs-title text-white mb-3 d-block">Home</a></li>
                            <li><a href="<?php echo site_url('/project'); ?>" class="xs-title text-white mb-3 d-block">Our Projects</a></li>
                            <li><a href="<?php echo site_url('/service'); ?>" class="xs-title text-white mb-3 d-block">Services</a></li>
                            <li><a href="<?php echo site_url('/contact'); ?>" class="xs-title text-white mb-3 d-block">Contact Us</a></li>
                        </ul>
                    </div>
                    <!-- Col -->
                    <div class="col-lg-4 col-md-6 col-12 mb-3 xs-title text-white mb-4">
                        
                        <h2 class="sm-title text-white d-inline-block after-border-b-secondary mb-4">Contact info</h2>
                        <?php if(get_theme_mod('omsai_address_handle')) { ?>
                            <h3 class="xs-title text-white pb-3 "><i class="fas fa-map-marker-alt mr-3"></i><?php echo get_theme_mod('omsai_address_handle'); ?></h3>          
                        <?php } ?>
                        
                        <?php if(get_theme_mod('omsai_address_handle')) { ?>
                            <a href="#" class="xs-title text-white pb-3  d-block"><i class="fas fa-phone-alt mr-2"></i><?php echo get_theme_mod('omsai_phone_handle'); ?></a>         
                        <?php } ?>
                        
                        <?php if(get_theme_mod('omsai_address_handle')) { ?>
                            <a href="mailto: " class="xs-title text-white mb-0"><i class="far fa-envelope mr-2"></i><?php echo get_theme_mod('omsai_email_handle'); ?></a>         
                        <?php } ?>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="footer-b text-center text-white py-2 border-top xs-title">
            <div class="container">
                <p>© Copyright <a href="index.php" class="d-inline-block text-white">TechCoderz</a><?php echo date('Y');  ?> . All Rights Reserved Om Sai Construction PVT LTD.</p>
            </div>
        </div>
    </footer>
    <!-- End of footer -->
</div>

</div>
<?php wp_footer(); ?>
</body>

</html>