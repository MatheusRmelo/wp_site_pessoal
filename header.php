<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
    <?php wp_head(); ?>

    <style type="text/css">
       .half-bg, .social-area-body, .welcome-box{
            background-color:<?= get_theme_mod('ms_color') ?>;
        }
        .welcome-name span{
            color:<?= get_theme_mod('ms_color') ?>;;
        }
    </style>
</head>
<body <?php body_class();?> >
<div class="half-bg"></div>
<header>
    <div class="container header-height">
        <div class="row">
            <div class="col-sm">
                <h1><?php bloginfo('name'); ?></h1>
                <h3><?php bloginfo('description'); ?></h3>
            </div> 
            <div class="col-sm d-flex justify-content-end align-items-center">
                <div class="social-area">
                    <?php if(get_theme_mod('ms_facebook')): ?>
                        <div class="social-button">
                                <a href="<?= get_theme_mod('ms_facebook') ?>" target="_blank">
                                    <img src="<?= get_template_directory_uri().'/assets/images/facebook-logo.png'?>" />
                                </a>
                        </div>
                    <?php endif; ?>

                    <?php if(get_theme_mod('ms_twitter')): ?>
                        <div class="social-button">
                                <a href="<?= get_theme_mod('ms_twitter') ?>" target="_blank">
                                    <img src="<?= get_template_directory_uri().'/assets/images/twitter-logo.png'?>" />
                                </a>
                        </div>
                    <?php endif; ?>

                    <?php if(get_theme_mod('ms_gplus')): ?>
                        <div class="social-button">
                                <a href="<?= get_theme_mod('ms_gplus') ?>" target="_blank">
                                    <img src="<?= get_template_directory_uri().'/assets/images/google-plus-logo.png'?>" />
                                </a>
                        </div>
                    <?php endif; ?>

                    <?php if(get_theme_mod('ms_blog')): ?>
                        <div class="social-button">
                                <a href="<?= get_theme_mod('ms_blog') ?>" target="_blank">
                                    <img src="<?= get_template_directory_uri().'/assets/images/wordpress-logo.png'?>" />
                                </a>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</header>
