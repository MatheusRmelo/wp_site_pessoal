<?php 
function ms_info_customize($wp_customize){
    //Settings
    $wp_customize->add_setting('ms_age', array('default'=>''));
    $wp_customize->add_setting('ms_address', array('default'=>''));
    $wp_customize->add_setting('ms_email', array('default'=>''));
    $wp_customize->add_setting('ms_phone', array('default'=>''));
    $wp_customize->add_setting('ms_site', array('default'=>''));
    
    //Sections 
    $wp_customize->add_section('ms_info_section', array(
        'title' => 'Informações pessoais',
        'priority'=>2
    ));

    //Controllers
    $age = ms_create_customize_control($wp_customize, 'ms_age','Sua idade', 'ms_info_section', 'ms_age', 'number');
    $address = ms_create_customize_control($wp_customize, 'ms_address','Seu endereço', 'ms_info_section', 'ms_address', 'text');
    $email = ms_create_customize_control($wp_customize, 'ms_email','Seu e-mail', 'ms_info_section', 'ms_email', 'text');
    $phone = ms_create_customize_control($wp_customize, 'ms_phone','Seu número de telefone', 'ms_info_section', 'ms_phone', 'text');
    $site = ms_create_customize_control($wp_customize, 'ms_site','Seu site', 'ms_info_section', 'ms_site', 'text');

    $wp_customize->add_control($age);
    $wp_customize->add_control($address);
    $wp_customize->add_control($email);
    $wp_customize->add_control($phone);
    $wp_customize->add_control($site);

}


?>