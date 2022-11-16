<?php
/**
 * Style functions
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

/**
 * Enqueue theme styles.
 */
function gulp_wp_theme_styles() {

	/**
	 * Set a script handle prefix based on theme name.
	 * Note that this should be the same as the `themePrefix` var set in your Gulpfile.js.
	 */
	$theme_handle_prefix = THEME_NAME;
	$theme_version = THEME_VER;

	$fonts = 'https: //fonts.googleapis.com/css2?family=Lora:wght@400;600&family=Montserrat&display=swap
';

	wp_enqueue_style( $theme_handle_prefix . '-styles', get_template_directory_uri() . '/assets/css/' . $theme_handle_prefix .'.min.css', array(), $theme_version, 'all' );
	wp_enqueue_style( 'fonts', $fonts, array(), $theme_version, 'all' );
}
add_action( 'wp_enqueue_scripts', 'gulp_wp_theme_styles' );

/**
 * Add necessary Google API files for Google Font
 */
add_action('wp_head', function () {?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php
}, 2);