<?php 
//Includes 
require get_template_directory().'/utils/create-controller.php';
require get_template_directory().'/include/theme-customize/color.php';
require get_template_directory().'/include/theme-customize/social.php';
require get_template_directory().'/include/theme-customize/info.php';

function ms_customize_register($wp_customize){

    ms_social_customize($wp_customize);
    ms_info_customize($wp_customize);
    ms_color_customize($wp_customize);

}
?>