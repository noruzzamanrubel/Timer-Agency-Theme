<?php 

function timer_homepage_customize_register( WP_Customize_Manager $wp_customize ) {

    // Abort if selective refresh is not available.
    if ( ! isset( $wp_customize->selective_refresh ) ) {
        return;
	}

	Kirki::add_config( 'timer', array(
		'capability'    => 'edit_theme_options',
		'option_type'   => 'theme_mod',
	) );
	Kirki::add_panel( 'timer_home_panel_id', array(
		'priority'    => 10,
		'title'       => esc_html__( 'Home Page', 'timer' ),
		'description' => esc_html__( 'Home page Information', 'timer' ),
	) );
	Kirki::add_section( 'timer_about_me_section_id', array(
		'title'          => esc_html__( 'About Me', 'timer' ),
		'panel'          => 'timer_home_panel_id',
		'priority'       => 160
	) );
	//Title
	Kirki::add_field( 'timer_aboutme_field', array(
		'type'            => 'text',
		'settings'        => 'timer_aboutme',
		'label'           => esc_html__( 'Title', 'timer' ),
		'section'         => 'timer_about_me_section_id',
		'default'         => esc_html__( 'About Me', 'timer' ),
		'priority'        => 9,
		'partial_refresh'    => array(
			'timer_aboutme_ttl' => array(
				'selector'        => '#about_se',
				'render_callback' => function() {
					return get_theme_mod('timer_aboutme');
					},
				),
			),
	 ) );
	$wp_customize->selective_refresh->add_partial( 'timer_aboutme_ttl', array(
        'selector'        => '#about_se',
        'settings'        => 'timer_aboutme',
        'render_callback' => function() {
            return get_theme_mod('timer_aboutme');
        },
	 ) );
	//Textarea
	Kirki::add_field( 'timer_about_me_textarea', array(
		'type'            => 'textarea',
		'settings'        => 'timer_about_me_tta',
		'label'           => esc_html__( 'Description', 'timer' ),
		'section'         => 'timer_about_me_section_id',
		'default'         => esc_html__( 'Lorem ipsum dolor sit amet', 'timer' ),
		'priority'        => 10,
		'partial_refresh'    => array(
			'timer_about_textarea' => array(
				'selector'        => '#about_p',
				'render_callback' => function() {
					return get_theme_mod('timer_about_me_tta');
					},
				),
			),
	 ) );
	$wp_customize->selective_refresh->add_partial( 'timer_about_textarea', array(
        'selector'        => '#about_p',
        'settings'        => 'timer_about_me_textarea',
        'render_callback' => function() {
            return get_theme_mod('timer_about_me_tta');
        },
	 ) );
	 Kirki::add_field( 'timer_about_me_image', array(
		'type'            => 'image',
		'settings'        => 'timer_about_me_img',
		'label'           => esc_html__( 'Upload Image', 'timer' ),
		'section'         => 'timer_about_me_section_id',
		'default'         => '',
		'priority'        => 11,
	 ) );
	 
	//Latest work
	Kirki::add_section( 'timer_latest_section_id', array(
		'title'          => esc_html__( 'Latest Work', 'timer' ),
		'panel'          => 'timer_home_panel_id',
		'priority'       => 160
	) );
	//Title
	Kirki::add_field( 'timer_Latest_work_field', array(
		'type'            => 'text',
		'settings'        => 'timer_Latest_work',
		'label'           => esc_html__( 'Title', 'timer' ),
		'section'         => 'timer_latest_section_id',
		'default'         => esc_html__( 'Latest Work', 'timer' ),
		'priority'        => 10,
		'partial_refresh'    => array(
			'timer_Latest_works' => array(
				'selector'        => '#latest_head',
				'render_callback' => function() {
					return get_theme_mod('timer_Latest_work');
					},
				),
			),
	 ) );
	$wp_customize->selective_refresh->add_partial( 'timer_Latest_works', array(
        'selector'        => '#latest_head',
        'settings'        => 'timer_Latest_work_field',
        'render_callback' => function() {
            return get_theme_mod('timer_Latest_work');
        },
	 ) );
	//Textarea
	 Kirki::add_field( 'timer_Latest_work_field_tta', array(
		'type'            => 'textarea',
		'settings'        => 'timer_Latest_work_tta',
		'label'           => esc_html__( 'Description', 'timer' ),
		'section'         => 'timer_latest_section_id',
		'default'         => esc_html__( 'Lorem ipsum dolor sit amet', 'timer' ),
		'priority'        => 11,
		'partial_refresh'    => array(
			'timer_Latest_work_tt' => array(
				'selector'        => '#latest_p',
				'render_callback' => function() {
					return get_theme_mod('timer_Latest_work_tta');
					},
				),
			),
	 ) );
	$wp_customize->selective_refresh->add_partial( 'timer_Latest_work_tt', array(
        'selector'        => '#latest_p',
        'settings'        => 'timer_Latest_work_field_tta',
        'render_callback' => function() {
            return get_theme_mod('timer_Latest_work_tta');
        },
	 ) );	

	//Offer From Me Section

	Kirki::add_section( 'timer_offer_form_me_section_id', array(
		'title'          => esc_html__( 'Offer From Me', 'timer' ),
		'panel'          => 'timer_home_panel_id',
		'priority'       => 160
	) );
	//Title
	Kirki::add_field( 'timer_offer_field', array(
		'type'            => 'text',
		'settings'        => 'timer_offer_setting',
		'label'           => esc_html__( 'Title', 'timer' ),
		'section'         => 'timer_offer_form_me_section_id',
		'default'         => esc_html__( 'OFFER FROM ME', 'timer' ),
		'priority'        => 10,
		'partial_refresh'    => array(
			'timer_offer_title' => array(
				'selector'        => '#titlewow',
				'render_callback' => function() {
					return get_theme_mod('timer_offer_setting');
					},
				),
			),
	 ) );
	$wp_customize->selective_refresh->add_partial( 'timer_offer_title', array(
        'selector'        => '#titlewow',
        'settings'        => 'timer_offer_field',
        'render_callback' => function() {
            return get_theme_mod('timer_offer_setting');
        },
	 ) );
	//Textarea
	 Kirki::add_field( 'timer_offer_field_textarea', array(
		'type'            => 'textarea',
		'settings'        => 'timer_offer_setting_textarea',
		'label'           => esc_html__( 'Description', 'timer' ),
		'section'         => 'timer_offer_form_me_section_id',
		'default'         => esc_html__( 'Lorem ipsum dolor sit amet', 'timer' ),
		'priority'        => 11,
		'partial_refresh'    => array(
			'timer_offer_title_textarea' => array(
				'selector'        => '#titlewows',
				'render_callback' => function() {
					return get_theme_mod('timer_offer_setting_textarea');
					},
				),
			),
	 ) );
	$wp_customize->selective_refresh->add_partial( 'timer_offer_title_textarea', array(
        'selector'        => '#titlewows',
        'settings'        => 'timer_offer_field_textarea',
        'render_callback' => function() {
            return get_theme_mod('timer_offer_setting_textarea');
        },
	 ) );

}
add_action( 'customize_register', 'timer_homepage_customize_register' );