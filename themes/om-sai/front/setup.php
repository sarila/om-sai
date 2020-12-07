<?php
   function omsai_setup_theme(){
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
        add_theme_support('post-thumbnails');

        add_image_size('about_1', 640,800, true);
        add_image_size('about_2', 640,853, true);
        add_image_size('service', 340,255, true);



   }
   add_action('after_setup_theme', 'omsai_setup_theme');



  
 ?>
