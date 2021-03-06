<?php
/**
 * Expert Negotiators back compat functionality
 *
 * Prevents Expert Negotiators from running on WordPress versions prior to 4.7,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.7.
 *
 * @package WordPress
 * @subpackage Expert Negotiators
 * @since Expert Negotiators 1.0
 */

/**
 * Prevent switching to Expert Negotiators on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Expert Negotiators 1.0
 */
function expertnegotiators_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'expertnegotiators_upgrade_notice' );
}
add_action( 'after_switch_theme', 'expertnegotiators_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Expert Negotiators on WordPress versions prior to 4.7.
 *
 * @since Expert Negotiators 1.0
 *
 * @global string $wp_version WordPress version.
 */
function expertnegotiators_upgrade_notice() {
	/* translators: %s: The current WordPress version. */
	$message = sprintf( __( 'Expert Negotiators requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'expertnegotiators' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.7.
 *
 * @since Expert Negotiators 1.0
 *
 * @global string $wp_version WordPress version.
 */
function expertnegotiators_customize() {
	wp_die(
		/* translators: %s: The current WordPress version. */
		sprintf( __( 'Expert Negotiators requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'expertnegotiators' ), $GLOBALS['wp_version'] ),
		'',
		array(
			'back_link' => true,
		)
	);
}
add_action( 'load-customize.php', 'expertnegotiators_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.7.
 *
 * @since Expert Negotiators 1.0
 *
 * @global string $wp_version WordPress version.
 */
function expertnegotiators_preview() {
	if ( isset( $_GET['preview'] ) ) {
		/* translators: %s: The current WordPress version. */
		wp_die( sprintf( __( 'Expert Negotiators requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'expertnegotiators' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'expertnegotiators_preview' );
