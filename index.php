<?php 
get_header();
?>
<div class="container body-top">
    <div class="row">
        <div class="col-sm-5 p-0">
            <?php if(get_theme_mod('ms_image')): ?>
                <img class="avatar" src="<?= wp_get_attachment_url(get_theme_mod('ms_image')); ?>" />
            <?php endif; ?>
        </div>
        <div class="col-sm p-0 d-flex flex-column">
            <div class="user-info m-4">
                <div class="welcome-box">
                    Olá & Bem-vindo(a)
                </div>
                <div class="welcome-name">
                    Eu sou <span><?php bloginfo('name'); ?></span>
                </div>
                <div class="welcome-desc">
                    <?php bloginfo('description') ?>
                </div>

                <table border="0" width="100%">
                    <?php if(get_theme_mod('ms_age')): ?>
                        <tr>
                            <td width="100" class="bold">Idade:</td>
                            <td><?= get_theme_mod('ms_age') ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if(get_theme_mod('ms_address')): ?>
                        <tr>
                            <td width="100" class="bold">Endereço:</td>
                            <td><?= get_theme_mod('ms_address') ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if(get_theme_mod('ms_email')): ?>
                        <tr>
                            <td width="100" class="bold">E-mail:</td>
                            <td><?= get_theme_mod('ms_email') ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if(get_theme_mod('ms_phone')): ?>
                        <tr>
                            <td width="100" class="bold">Telefone:</td>
                            <td><?= get_theme_mod('ms_phone') ?></td>
                        </tr>
                    <?php endif; ?>
                    <?php if(get_theme_mod('ms_site')): ?>
                        <tr>
                            <td width="100" class="bold">Site:</td>
                            <td><a href="<?= get_theme_mod('ms_site') ?>"><?= get_theme_mod('ms_site') ?></a></td>
                        </tr>
                    <?php endif; ?>
                </table>
            </div>
            <div class="social-area social-area-body">
                    <?php if(get_theme_mod('ms_facebook')): ?>
                        <div class="social-button2">
                                <a href="<?= get_theme_mod('ms_facebook') ?>" target="_blank">
                                    <img src="<?= get_template_directory_uri().'/assets/images/facebook-logo.png'?>" />
                                </a>
                        </div>
                    <?php endif; ?>

                    <?php if(get_theme_mod('ms_twitter')): ?>
                        <div class="social-button2">
                                <a href="<?= get_theme_mod('ms_twitter') ?>" target="_blank">
                                    <img src="<?= get_template_directory_uri().'/assets/images/twitter-logo.png'?>" />
                                </a>
                        </div>
                    <?php endif; ?>

                    <?php if(get_theme_mod('ms_gplus')): ?>
                        <div class="social-button2">
                                <a href="<?= get_theme_mod('ms_gplus') ?>" target="_blank">
                                    <img src="<?= get_template_directory_uri().'/assets/images/google-plus-logo.png'?>" />
                                </a>
                        </div>
                    <?php endif; ?>

                    <?php if(get_theme_mod('ms_blog')): ?>
                        <div class="social-button2">
                                <a href="<?= get_theme_mod('ms_blog') ?>" target="_blank">
                                    <img src="<?= get_template_directory_uri().'/assets/images/wordpress-logo.png'?>" />
                                </a>
                        </div>
                    <?php endif; ?>
                </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>