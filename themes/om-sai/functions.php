<?php
	include(get_theme_file_path('/front/enqueue.php'));
	include(get_theme_file_path('/front/setup.php'));

	// for customizer
	include (get_template_directory(). '/customizer/theme-customizer.php');
   	include (get_template_directory(). '/customizer/contact.php');





	add_action('wp_enqueue_scripts', 'omsai_styles');
	add_action('customize_register', 'omsai_customizer_register');
 ?>