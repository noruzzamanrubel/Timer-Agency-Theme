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