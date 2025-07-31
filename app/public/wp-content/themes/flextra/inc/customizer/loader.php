<?php
/**
* loads every component associated with the customizer. 
*
* @since Flextra 1.0.0
*/

function flextra_modify_default_settings( $wp_customize ){

	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

}
add_action( 'customize_register', 'flextra_modify_default_settings' );