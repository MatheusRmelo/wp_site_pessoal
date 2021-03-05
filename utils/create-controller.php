<?php 
function ms_create_customize_control($wp_customize, $name, $label, $section, $setting, $type){
    $controller = new WP_Customize_Control(
        $wp_customize,
        $name,
        array(
            'label'=>$label,
            'section'=>$section,
            'setting'=>$setting,
            'type'=>$type
        )
    );
    return $controller;
}

?>