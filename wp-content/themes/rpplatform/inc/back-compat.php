<?php
/**
 * RPplatform back compat functionality
 */

/**
 * Prevent switching to RPplatform on old versions of WordPress.
 */
function rpplatform_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );

	unset( $_GET['activated'] );

	add_action( 'admin_notices', 'rpplatform_upgrade_notice' );
}
add_action( 'after_switch_theme', 'rpplatform_switch_theme' );


/**
 * Adds a message for unsuccessful theme switch.
 */
function rpplatform_upgrade_notice() {
	$message = sprintf( __( 'RPplatform requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'rpplatform' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}


/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.4.
 */
function rpplatform_customize() {
	wp_die( sprintf( __( 'RPplatform requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'rpplatform' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'rpplatform_customize' );


/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.4.
 */
function rpplatform_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'RPplatform requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'rpplatform' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'rpplatform_preview' );
