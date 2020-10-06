<?php
function time_customize_register($wp_customize){

    //Icon or text color change 
    $wp_customize->add_section( 'icon_color_section',array(
        'title' => __('Offer Form Icon Color','timer'),
        'priority'=>50
    ) );
    $wp_customize->add_setting('icon_color_setting', array(
        'default' => '#02bdd5',
        'transport'=>'refresh'//postMessage
    ));
    $wp_customize->add_control( 
        new WP_Customize_Color_Control( 
            $wp_customize, 
            'icon_color_control', 
            array(
                'label'      => __( 'Offer Form Icon Color', 'timer' ),
                'section'    => 'icon_color_section',
                'settings'   => 'icon_color_setting',
    ) ) );
    
    //upload media/image
    $wp_customize->add_section( 'upload_media_section',array(
        'title' => __('Upload Media Or Image','timer'),
        'priority'=>60
    ) );
    $wp_customize->add_setting('upload_setting', array(
        'default' => (''),
        'transport'=>'refresh'
    ));
    $wp_customize->add_control( 
        new WP_Customize_Image_Control( 
        $wp_customize, 
        'upload_image_ctl', 
        array(
            'label'      => __( 'Upload Image', 'timer' ),
            'section'    => 'upload_media_section',
            'settings'   => 'upload_setting',
        ) ) 
    );
}
add_action('customize_register','time_customize_register');