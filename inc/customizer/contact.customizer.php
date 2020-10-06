<?php 

function timer_contactpages_customize_register( WP_Customize_Manager $wp_customize ) {

    // Abort if selective refresh is not available.
    if ( ! isset( $wp_customize->selective_refresh ) ) {
        return;
	}

	Kirki::add_config( 'timer', array(
		'capability'    => 'edit_theme_options',
		'option_type'   => 'theme_mod',
	) );
	Kirki::add_panel( 'timer_Contact_panel_id', array(
		'priority'    => 10,
		'title'       => esc_html__( 'Contact Page', 'timer' ),
	) );
	Kirki::add_section( 'timer_contact_section_id', array(
		'title'          => esc_html__( 'Contact With Me', 'timer' ),
		'panel'          => 'timer_Contact_panel_id',
		'priority'       => 160
	) );
		//Title
		Kirki::add_field( 'timer_contact_field', array(
			'type'            => 'text',
			'settings'        => 'timer_contact_setting',
			'label'           => esc_html__( 'Title', 'timer' ),
			'section'         => 'timer_contact_section_id',
			'default'         => esc_html__( 'CONTACT WITH ME', 'timer' ),
			'priority'        => 10,
			'partial_refresh'    => array(
				'timer_contact_title' => array(
					'selector'        => '#contact_ttl',
					'render_callback' => function() {
						return get_theme_mod('timer_contact_setting');
						},
					),
				),
		 ) );
		$wp_customize->selective_refresh->add_partial( 'timer_contact_title', array(
			'selector'        => '#contact_ttl',
			'settings'        => 'timer_contact_field',
			'render_callback' => function() {
				return get_theme_mod('timer_contact_setting');
			},
		 ) );
		//Textarea
		 Kirki::add_field( 'timer_contact_field_textarea', array(
			'type'            => 'textarea',
			'settings'        => 'timer_contact_setting_textarea',
			'label'           => esc_html__( 'Description', 'timer' ),
			'section'         => 'timer_contact_section_id',
			'default'         => esc_html__( 'Lorem ipsum dolor sit amet', 'timer' ),
			'priority'        => 11,
			'partial_refresh'    => array(
				'timer_contact_title_textarea' => array(
					'selector'        => '#contact_dsc',
					'render_callback' => function() {
						return get_theme_mod('timer_contact_setting_textarea');
						},
					),
				),
		 ) );
		$wp_customize->selective_refresh->add_partial( 'timer_contact_title_textarea', array(
			'selector'        => '#contact_dsc',
			'settings'        => 'timer_contact_field_textarea',
			'render_callback' => function() {
				return get_theme_mod('timer_contact_setting_textarea');
			},
		 ) );

		Kirki::add_section( 'timer_contact_find_section', array(
		'title'          => esc_html__( 'Find Us', 'timer' ),
		'panel'          => 'timer_Contact_panel_id',
		'priority'       => 160
	) );
			//Title
			Kirki::add_field( 'timer_contact_find_field', array(
				'type'            => 'text',
				'settings'        => 'timer_contact_find_setting',
				'label'           => esc_html__( 'Title', 'timer' ),
				'section'         => 'timer_contact_find_section',
				'default'         => esc_html__( 'FIND US', 'timer' ),
				'priority'        => 10,
				'partial_refresh'    => array(
					'timer_contact_find_title' => array(
						'selector'        => '#find_us',
						'render_callback' => function() {
							return get_theme_mod('timer_contact_find_setting');
							},
						),
					),
			 ) );
			$wp_customize->selective_refresh->add_partial( 'timer_contact_find_title', array(
				'selector'        => '#find_us',
				'settings'        => 'timer_contact_find_field',
				'render_callback' => function() {
					return get_theme_mod('timer_contact_find_setting');
				},
			 ) );
			//Textarea
			 Kirki::add_field( 'timer_contact_find_field_textarea', array(
				'type'            => 'textarea',
				'settings'        => 'timer_contact_find_setting_textarea',
				'label'           => esc_html__( 'Description', 'timer' ),
				'section'         => 'timer_contact_find_section',
				'default'         => esc_html__( 'Lorem ipsum dolor sit amet', 'timer' ),
				'priority'        => 11,
				'partial_refresh'    => array(
					'timer_contact_find_title_textarea' => array(
						'selector'        => '#find_us_area',
						'render_callback' => function() {
							return get_theme_mod('timer_contact_find_setting_textarea');
							},
						),
					),
			 ) );
			$wp_customize->selective_refresh->add_partial( 'timer_contact_find_title_textarea', array(
				'selector'        => '#find_us_area',
				'settings'        => 'timer_contact_find_field_textarea',
				'render_callback' => function() {
					return get_theme_mod('timer_contact_find_setting_textarea');
				},
			 ) );
		Kirki::add_section( 'timer_contact_address_section', array(
		'title'          => esc_html__( 'Address, Email and Phone Number', 'timer' ),
		'panel'          => 'timer_Contact_panel_id',
		'priority'       => 160
	) );
			//Textarea
			Kirki::add_field( 'timer_contact_address_ones', array(
			'type'            => 'textarea',
			'settings'        => 'timer_contact_address_one',
			'label'           => esc_html__( 'Write Your Address', 'timer' ),
			'section'         => 'timer_contact_address_section',
			'default'         => esc_html__( '125 , Kings Street,Melbourne United Kingdom,600562', 'timer' ),
			'priority'        => 12,
			'partial_refresh'    => array(
				'timer_contact_address_tex' => array(
					'selector'        => '#address_one',
					'render_callback' => function() {
						return get_theme_mod('timer_contact_address_one');
						},
					),
				),
			) );
			$wp_customize->selective_refresh->add_partial( 'timer_contact_address_tex', array(
				'selector'        => '#address_one',
				'settings'        => 'timer_contact_address_ones',
				'render_callback' => function() {
					return get_theme_mod('timer_contact_address_one');
				},
				) );
			//Textarea
			Kirki::add_field( 'timer_contact_address_tows', array(
				'type'            => 'textarea',
				'settings'        => 'timer_contact_address_two',
				'label'           => esc_html__( 'Write Your Address', 'timer' ),
				'section'         => 'timer_contact_address_section',
				'default'         => esc_html__( '125 , Kings Street,Melbourne United Kingdom,600562', 'timer' ),
				'priority'        => 13,
				'partial_refresh'    => array(
					'timer_contact_address_text' => array(
						'selector'        => '#address_two',
						'render_callback' => function() {
							return get_theme_mod('timer_contact_address_two');
							},
						),
					),
				) );
			$wp_customize->selective_refresh->add_partial( 'timer_contact_address_text', array(
				'selector'        => '#address_two',
				'settings'        => 'timer_contact_address_tows',
				'render_callback' => function() {
					return get_theme_mod('timer_contact_address_two');
				},
				) );
			//Textarea
			Kirki::add_field( 'timer_contact_address_emails', array(
				'type'            => 'textarea',
				'settings'        => 'timer_contact_email',
				'label'           => esc_html__( 'Write Your Email Address', 'timer' ),
				'section'         => 'timer_contact_address_section',
				'default'         => esc_html__( 'noruzzamanrubel@gmail.com', 'timer' ),
				'priority'        => 14,
				'partial_refresh'    => array(
					'timer_contact_email_tex' => array(
						'selector'        => '#address_email',
						'render_callback' => function() {
							return get_theme_mod('timer_contact_email');
							},
						),
					),
				) );
			$wp_customize->selective_refresh->add_partial( 'timer_contact_email_tex', array(
				'selector'        => '#address_email',
				'settings'        => 'timer_contact_address_emails',
				'render_callback' => function() {
					return get_theme_mod('timer_contact_email');
				},
				) );
			//Textarea
			Kirki::add_field( 'timer_contact_phones', array(
				'type'            => 'textarea',
				'settings'        => 'timer_contact_phone',
				'label'           => esc_html__( 'Write Your Phone Number', 'timer' ),
				'section'         => 'timer_contact_address_section',
				'default'         => esc_html__( '+880 1737 779430', 'timer' ),
				'priority'        => 15,
				'partial_refresh'    => array(
					'timer_contact_phone_tex' => array(
						'selector'        => '#address_phone',
						'render_callback' => function() {
							return get_theme_mod('timer_contact_phone');
							},
						),
					),
				) );
			$wp_customize->selective_refresh->add_partial( 'timer_contact_phone_tex', array(
				'selector'        => '#address_phone',
				'settings'        => 'timer_contact_phones',
				'render_callback' => function() {
					return get_theme_mod('timer_contact_phone');
				},
				) );
		Kirki::add_section( 'timer_footer_top_section_id', array(
			'title'          => esc_html__( 'Footer Top Section', 'timer' ),
			'panel'          => 'timer_Contact_panel_id',
			'priority'       => 160
		) );
			//footer Top Title 
			Kirki::add_field( 'timer_footer_top_Head', array(
				'type'            => 'text',
				'settings'        => 'timer_footer_top_Heading',
				'label'           => esc_html__( 'Title', 'timer' ),
				'section'         => 'timer_footer_top_section_id',
				'default'         => esc_html__( 'SO WHAT YOU THINK ?', 'timer' ),
				'priority'        => 9,
				'partial_refresh'    => array(
					'timer_footer_top_title' => array(
						'selector'        => '#footer_top_title',
						'render_callback' => function() {
							return get_theme_mod('timer_footer_top_Heading');
							},
						),
					),
			 ) );
			$wp_customize->selective_refresh->add_partial( 'timer_footer_top_title', array(
				'selector'        => '#footer_top_title',
				'settings'        => 'timer_footer_top_Head',
				'render_callback' => function() {
					return get_theme_mod('timer_footer_top_Heading');
				},
			 ) );
			//Footer Top Textarea
			Kirki::add_field( 'timer_footer_top_content', array(
				'type'            => 'textarea',
				'settings'        => 'timer_footer_top_textarea',
				'label'           => esc_html__( 'Description', 'timer' ),
				'section'         => 'timer_footer_top_section_id',
				'default'         => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis', 'timer' ),
				'priority'        => 10,
				'partial_refresh'    => array(
					'timer_footer_top_tex' => array(
						'selector'        => '#footer_top_des',
						'render_callback' => function() {
							return get_theme_mod('timer_footer_top_textarea');
							},
						),
					),
				) );
			$wp_customize->selective_refresh->add_partial( 'timer_footer_top_tex', array(
				'selector'        => '#footer_top_des',
				'settings'        => 'timer_footer_top_content',
				'render_callback' => function() {
					return get_theme_mod('timer_footer_top_textarea');
				},
				) );
			//footer Top Button
			Kirki::add_field( 'timer_footer_top_buttons', array(
				'type'            => 'text',
				'settings'        => 'timer_footer_top_button',
				'label'           => esc_html__( 'Button', 'timer' ),
				'section'         => 'timer_footer_top_section_id',
				'default'         => esc_html__( 'Contact with Me', 'timer' ),
				'priority'        => 11,
				'partial_refresh'    => array(
					'timer_footer_top_but' => array(
						'selector'        => '#footer_top_btn',
						'render_callback' => function() {
							return get_theme_mod('timer_footer_top_button');
							},
						),
					),
			 ) );
			$wp_customize->selective_refresh->add_partial( 'timer_footer_top_but', array(
				'selector'        => '#footer_top_btn',
				'settings'        => 'timer_footer_top_buttons',
				'render_callback' => function() {
					return get_theme_mod('timer_footer_top_button');
				},
			 ) );
			Kirki::add_panel( 'timer_footer_panel', array(
			'priority'    => 150,
			'title'       => esc_html__( 'footer Section', 'timer' ),
			) );
			Kirki::add_section( 'timer_contact_section_ids', array(
			'title'          => esc_html__( 'Footer Cpoy Right', 'timer' ),
			'panel'          => 'timer_footer_panel',
			'priority'       => 161
			) );
			//Footer Top Textarea
			Kirki::add_field( 'timer_footer_copyrights', array(
				'type'            => 'textarea',
				'settings'        => 'timer_footer_copyright',
				'label'           => esc_html__( 'Copy Right', 'timer' ),
				'section'         => 'timer_contact_section_ids',
				'default'         => esc_html__( 'Design and Developed By', 'timer' ),
				'priority'        => 30,
				'partial_refresh'    => array(
					'timer_footer_copy' => array(
						'selector'        => '#copyrights',
						'render_callback' => function() {
							return get_theme_mod('timer_footer_copyright');
							},
						),
					),
				) );
			$wp_customize->selective_refresh->add_partial( 'timer_footer_copy', array(
				'selector'        => '#copyrights',
				'settings'        => 'timer_footer_copyrights',
				'render_callback' => function() {
					return get_theme_mod('timer_footer_copyright');
				},
				) );

}
add_action( 'customize_register', 'timer_contactpages_customize_register' );