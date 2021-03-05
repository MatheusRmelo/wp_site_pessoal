<?php 

function ms_theme_styles(){
    //CSS 
    wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('header_css', get_template_directory_uri().'/assets/css/header.css', array('bootstrap_css'));
    wp_enqueue_style('body_css', get_template_directory_uri().'/assets/css/body.css', array('bootstrap_css'));
    //JS 
    wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array(''), false, true);
}

function ms_after_setup(){
    add_theme_support('title-tag');
}