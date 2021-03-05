<?php 
//Includes 
include get_template_directory().'/include/setup.php';


//Hooks 
add_action('wp_enqueue_scripts', 'ms_theme_styles');
add_action('after_setup_theme', 'ms_after_setup');


?>