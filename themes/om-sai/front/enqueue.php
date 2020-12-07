<?php
    function omsai_styles(){
        //CSS
        wp_register_style('google_font', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800&family=Roboto&display=swap');
        wp_register_style('boostrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
        wp_register_style('owl_css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
        wp_register_style('theme_css', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
        wp_register_style('fancybox_css', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css');
        wp_register_style('style_css', get_template_directory_uri() . '/assets/css/style.css');
        wp_register_style('custom_css', get_template_directory_uri() . '/style.css');

        wp_enqueue_style('google_font');
        wp_enqueue_style('boostrap_css');
        wp_enqueue_style('owl_css');
        wp_enqueue_style('theme_css');
        wp_enqueue_style('fancybox_css');
        wp_enqueue_style('style_css');
        wp_enqueue_style('custom_css');


        // JS
        wp_register_script('bootstrap_js', get_template_directory_uri() .  '/assets/js/bootstrap.min.js', array('jquery'), false, false);
        wp_register_script('popper_js', get_template_directory_uri() .  '/assets/js/popper.js', array('jquery'), false, false);
        wp_register_script('carousel_js', get_template_directory_uri() .  '/assets/js/owl.carousel.min.js', array('jquery'), false, false);
        wp_register_script('isotope', get_template_directory_uri() .  '/assets/js/isotope-min.js', array('jquery'), false, false);
        wp_register_script('fancybox', get_template_directory_uri() .  '/assets/js/jquery.fancybox.min.js', array('jquery'), false, false);
        wp_register_script('unveil', get_template_directory_uri() .  '/assets/js/jquery.unveil.js', array('jquery'), false, false);
        wp_register_script('all', get_template_directory_uri() .  '/assets/js/all.min.js', array('jquery'), false, false);
        wp_register_script('custom', get_template_directory_uri() .  '/assets/js/custom.js', array('jquery'), false, false);

        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrap_js');
        wp_enqueue_script('carousel_js');
        wp_enqueue_script('isotope');
        wp_enqueue_script('fancybox');
        wp_enqueue_script('unveil');
        wp_enqueue_script('all');
        wp_enqueue_script('custom');
    }

    add_action('wp_enqueue_scripts', 'omsai_styles');
    ?>



