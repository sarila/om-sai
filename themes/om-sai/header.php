<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Om Sai Construction</title>
    <link rel="icon" sizes="16x12 24x24 32x32 48x48 64x44" href="assets/images/logo.png">
   <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="site-wrapper">
        <header class="site-header">
            <div class="header-t py-2 bg-main">
                <div class="container">
                    <div class="row flex-wrap-reverse align-items-center">
                        <div class="col-8">
                            <div class="wrapper d-flex flex-wrap header-contact-info">
                                <!-- Col -->
                                <div class="cols mr-md-4 mr-3">
                                    <?php if(get_theme_mod('omsai_address_handle')) { ?>
                                        <h2 class="xs-title text-white mb-0 pr-3"><i class="fas fa-map-marker-alt mr-2"></i><?php echo get_theme_mod('omsai_address_handle'); ?></h2></i>          
                                    <?php } ?>
                                </div>
                                <div class="cols mr-md-4 mr-3">
                                    <?php if(get_theme_mod('omsai_phone_handle')) { ?>
                                        <a href="tel://<?php echo get_theme_mod('omsai_phone_handle'); ?>" class="xs-title text-white mb-0"><i class="fas fa-phone-alt mr-2"></i>
                                             <?php echo get_theme_mod('omsai_phone_handle'); ?>
                                        </a>
                                    <?php } ?>
                                </div>
                                <div class="cols mr-md-4 mr-3">
                                    <?php if(get_theme_mod('omsai_email_handle')) { ?>
                                        <a href="mailto: <?php echo get_theme_mod('omsai_email_handle'); ?>" class="xs-title text-white mb-0"><i class="far fa-envelope mr-2"></i><?php echo get_theme_mod('omsai_email_handle'); ?></a></i>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!-- End of Left -->
                        <div class="col-4 mb-md-0 mb-3">
                            <div class="wrapper d-flex social-links justify-content-end">
                                <div class="cols mr-2 d-flex">
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
                        </div>
                        <!-- End of Right -->
                    </div>
                </div>
            </div>
            <!-- End of Header-Top -->
            <div class="header-b box-shadow-1">
                <div class="container">
                    <nav class="navbar navbar-expand-xl navbar-light py-0">
                        <div class="wrapper d-flex align-items-center">
                        <!-- Brand -->
                            <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt=""></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                        <!-- Navigation -->
                        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                            <nav class="main-navigaiton">
                                <ul class="navbar-nav font-w-semi">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="<?php echo home_url('/') ?>">Home</a>
                                    </li>
                                     <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="<?php echo site_url('/about'); ?>" id="navbardrop" data-toggle="dropdown">
                                            About
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="<?php echo site_url('/about'); ?>">About Us</a>
                                            <a class="dropdown-item" href="<?php echo site_url('/team'); ?>">Our Team</a>
                                            <a class="dropdown-item" href="<?php echo site_url('/client'); ?>">Our Clients</a>
                                        </div>
                                    </li>
                                    <!-- Dropdown -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                            Our Services
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="service-list.php">All</a>
                                            <a class="dropdown-item" href="service-detail.php">Turf Import</a>
                                            <a class="dropdown-item" href="service-detail.php">Granules production & sales</a>
                                            <a class="dropdown-item" href="service-detail.php">All sports floor construction</a>
                                            <a class="dropdown-item" href="service-detail.php">Hybrid grass import and installation </a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo site_url('/project'); ?>">Projects</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo site_url('/gallery'); ?>">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo site_url('/blog'); ?>">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo site_url('/contact'); ?>">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-cta">
                            <a href="#" class="button-one">Get A Quote</a>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- End of Header-Bottom -->
        </header>
        <!-- End of Site Header -->
