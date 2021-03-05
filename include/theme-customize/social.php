<?php 
function ms_social_customize($wp_customize){
    //Settings
    $wp_customize->add_setting('ms_facebook', array('default'=>''));
    $wp_customize->add_setting('ms_twitter', array('default'=>''));
    $wp_customize->add_setting('ms_gplus', array('default'=>''));
    $wp_customize->add_setting('ms_blog', array('default'=>''));

    //Sections 
    $wp_customize->add_section('ms_social_section', array(
        'title' => 'Redes Sociais',
        'priority' => 1
    ));
    //Controllers
    $facebook = ms_create_customize_control($wp_customize, 'ms_facebook','Link do facebook', 'ms_social_section', 'ms_facebook', 'text');
    $twitter = ms_create_customize_control($wp_customize, 'ms_twitter','Link do twitter', 'ms_social_section', 'ms_twitter', 'text');
    $gplus = ms_create_customize_control($wp_customize, 'ms_gplus','Link do Google Plus', 'ms_social_section', 'ms_gplus', 'text');
    $blog = ms_create_customize_control($wp_customize, 'ms_blog','Link do blog', 'ms_social_section', 'ms_blog', 'text');

    $wp_customize->add_control($facebook);
    $wp_customize->add_control($twitter);
    $wp_customize->add_control($gplus);
    $wp_customize->add_control($blog);
}

?>