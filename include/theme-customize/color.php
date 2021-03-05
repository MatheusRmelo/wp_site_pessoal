<?php 
function ms_color_customize($wp_customize){
    //Settings
    $wp_customize->add_setting('ms_color', array('default'=>'#CCCCCC'));
    $wp_customize->add_setting('ms_image', array('default'=>''));

    //Sections 
    $wp_customize->add_section('ms_color_section', array(
        'title' => 'Cor e imagem padrão',
        'priority'=>3
    ));
    //Controllers
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'ms_color',
            array(
                'label'=>'Cor padrão do tema',
                'section'=>'ms_color_section',
                'settings'=>'ms_color'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'ms_image',
            array(
                'label'=>'Imagem padrão do tema',
                'section'=>'ms_color_section',
                'settings'=>'ms_image',
                'width' => 500,
                'height'=> 500
            )
        )
    );
}

?>