<?php
/**
 * Flextra Theme Customizer
 *
 * @package Flextra
 */

/**
 * Provide postMessage support for the Theme Customizer's site title and description.
 */
function flextra_customize_register( $wp_customize ) {
	
	// Header Option
	$wp_customize->add_section(
		'flextra_header_section',
		array(
			'title' => esc_html__( 'Header Option', 'flextra' ),
		)
	);

	// Setting for Button URL
	$wp_customize->add_setting(
		'flextra_button_url',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'flextra_button_url',
		array(
			'label'    => esc_html__( 'Button URL', 'flextra' ),
			'section'  => 'flextra_header_section',
			'settings' => 'flextra_button_url',
			'type'     => 'text',
		)
	);

	// Setting for Button Text
	$wp_customize->add_setting(
		'flextra_button_txt',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'flextra_button_txt',
		array(
			'label'    => esc_html__( 'Button Text', 'flextra' ),
			'section'  => 'flextra_header_section',
			'settings' => 'flextra_button_txt',
			'type'     => 'text',
		)
	);


	// Banner Option

	$wp_customize->add_section(
		'flextra_banner_section',
		array(
			'title'    => esc_html__( 'Banner Option', 'flextra' ),
		)
	);

	$wp_customize->add_setting(
		'flextra_banner_heading',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'flextra_banner_heading',
		array(
			'label'           => sprintf( esc_html__( 'Banner Heading', 'flextra' ), ),
			'section'         => 'flextra_banner_section',
			'settings'        => 'flextra_banner_heading' ,
			'type'            => 'text',
		)
	);

	$wp_customize->add_setting(
		'flextra_banner_text',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'flextra_banner_text',
		array(
			'label'           => sprintf( esc_html__( 'Banner Content', 'flextra' ), ),
			'section'         => 'flextra_banner_section',
			'settings'        => 'flextra_banner_text' ,
			'type'            => 'text',
		)
	);

	$wp_customize->add_setting(
		'flextra_banner_button_link',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'flextra_banner_button_link',
		array(
			'label'           => sprintf( esc_html__( 'Banner Button Link', 'flextra' ), ),
			'section'         => 'flextra_banner_section',
			'settings'        => 'flextra_banner_button_link' ,
			'type'            => 'url',
		)
	);

	$wp_customize->add_setting(
		'flextra_banner_image',
		array(
        	'default'           => '',
        	'sanitize_callback' => 'flextra_sanitize_image',

    	)
    );
    
    $wp_customize->add_control(
     	new WP_Customize_Image_Control(
    		$wp_customize, 'flextra_banner_image', 
    		array(
    			'label'           => sprintf( esc_html__( 'Banner Image', 'flextra' ), ),
		        'settings'  => 'flextra_banner_image',
		        'section'   => 'flextra_banner_section'
    		) 
    	)
    );

    // About Us Option

	$wp_customize->add_section(
		'flextra_about_section',
		array(
			'title'    => esc_html__( 'About Us Option', 'flextra' ),
		)
	);

	$wp_customize->add_setting(
		'flextra_about_image_big',
		array(
        	'default'           => '',
        	'sanitize_callback' => 'flextra_sanitize_image',
    	)
    );
    
    $wp_customize->add_control(
     	new WP_Customize_Image_Control(
    		$wp_customize, 'flextra_about_image_big', 
    		array(
    			'label'           => sprintf( esc_html__( 'About Big Image', 'flextra' ), ),
		        'settings'  => 'flextra_about_image_big',
		        'section'   => 'flextra_about_section'
    		) 
    	)
    );

    $wp_customize->add_setting(
		'flextra_about_image_small',
		array(
        	'default'           => '',
        	'sanitize_callback' => 'flextra_sanitize_image',
    	)
    );
    
    $wp_customize->add_control(
     	new WP_Customize_Image_Control(
    		$wp_customize, 'flextra_about_image_small', 
    		array(
    			'label'           => sprintf( esc_html__( 'About Small Image', 'flextra' ), ),
		        'settings'  => 'flextra_about_image_small',
		        'section'   => 'flextra_about_section'
    		) 
    	)
    );

	$wp_customize->add_setting(
		'flextra_about_short_heading',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'flextra_about_short_heading',
		array(
			'label'           => sprintf( esc_html__( 'About Short Heading', 'flextra' ), ),
			'section'         => 'flextra_about_section',
			'settings'        => 'flextra_about_short_heading' ,
			'type'            => 'text',
		)
	);

	$wp_customize->add_setting(
		'flextra_about_heading',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'flextra_about_heading',
		array(
			'label'           => sprintf( esc_html__( 'About Heading', 'flextra' ), ),
			'section'         => 'flextra_about_section',
			'settings'        => 'flextra_about_heading' ,
			'type'            => 'text',
		)
	);

	$wp_customize->add_setting(
		'flextra_about_content',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'flextra_about_content',
		array(
			'label'           => sprintf( esc_html__( 'About Content', 'flextra' ), ),
			'section'         => 'flextra_about_section',
			'settings'        => 'flextra_about_content' ,
			'type'            => 'text',
		)
	);

	$wp_customize->add_setting(
		'flextra_about_list1',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_setting(
		'flextra_about_button_link',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'flextra_about_button_link',
		array(
			'label'           => sprintf( esc_html__( 'About Button Link', 'flextra' ), ),
			'section'         => 'flextra_about_section',
			'settings'        => 'flextra_about_button_link' ,
			'type'            => 'url',
		)
	);

}
add_action( 'customize_register', 'flextra_customize_register' );

/**
 * Create the site title for the partial selective refresh.
 *
 * @return void
 */
function flextra_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Create the website's slogan for the partial selective refresh.
 *
 * @return void
 */
function flextra_customize_partial_blogdescription() {
	bloginfo( 'description' );
}