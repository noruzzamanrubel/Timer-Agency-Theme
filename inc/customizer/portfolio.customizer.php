<?php 

function timer_portfolio_customize_register( WP_Customize_Manager $wp_customize ) {

    // Abort if selective refresh is not available.
    if ( ! isset( $wp_customize->selective_refresh ) ) {
        return;
	}

	Kirki::add_config( 'timer', array(
		'capability'    => 'edit_theme_options',
		'option_type'   => 'theme_mod',
	) );
	Kirki::add_panel( 'timer_portfolio_panel_id', array(
		'priority'    => 10,
		'title'       => esc_html__( 'Portfolio Page', 'timer' ),
		'description' => esc_html__( 'Portfolio page Information', 'timer' ),
	) );
	Kirki::add_section( 'timer_portfolio_section_id', array(
		'title'          => esc_html__( 'Some Of Our Feature Work', 'timer' ),
		'panel'          => 'timer_portfolio_panel_id',
		'priority'       => 160
	) );
	//Title
	Kirki::add_field( 'timer_portfolio_field', array(
		'type'            => 'text',
		'settings'        => 'timer_portfolio_ttl',
		'label'           => esc_html__( 'Title', 'timer' ),
		'section'         => 'timer_portfolio_section_id',
		'default'         => esc_html__( 'Some Of Our Feature Work', 'timer' ),
		'priority'        => 10,
		'partial_refresh'    => array(
			'timer_portfolio_ttls' => array(
				'selector'        => '#portfolio_title',
				'render_callback' => function() {
					return get_theme_mod('timer_portfolio_ttl');
					},
				),
			),
	 ) );
	$wp_customize->selective_refresh->add_partial( 'timer_portfolio_ttls', array(
        'selector'        => '#portfolio_title',
        'settings'        => 'timer_portfolio_field',
        'render_callback' => function() {
            return get_theme_mod('timer_portfolio_ttl');
        },
	 ) );
	//Textarea
	Kirki::add_field( 'timer_portfolio_sub_head', array(
		'type'            => 'textarea',
		'settings'        => 'timer_portfolio_sub_head_tta',
		'label'           => esc_html__( 'Description', 'timer' ),
		'section'         => 'timer_portfolio_section_id',
		'default'         => esc_html__( 'Lorem ipsum dolor sit amet', 'timer' ),
		'priority'        => 11,
		'partial_refresh'    => array(
			'timer_portfolio_sub_head_ttas' => array(
				'selector'        => '#postfolio_sub_title',
				'render_callback' => function() {
					return get_theme_mod('timer_portfolio_sub_head_tta');
					},
				),
			),
	 ) );
	$wp_customize->selective_refresh->add_partial( 'timer_portfolio_sub_head_ttas', array(
        'selector'        => '#postfolio_sub_title',
        'settings'        => 'timer_portfolio_sub_head',
        'render_callback' => function() {
            return get_theme_mod('timer_portfolio_sub_head_tta');
        },
	 ) );


}
add_action( 'customize_register', 'timer_portfolio_customize_register' );