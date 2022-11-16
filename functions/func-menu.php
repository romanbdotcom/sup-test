<?php
/**
 * Menu functions
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

/**
 * Register nav menus
 */
function gulp_wp_register_menus() {
	register_nav_menus(
		array(
			'primary' => __( 'Primary' ),
		)
	);
}
add_action( 'init', 'gulp_wp_register_menus' );

/**
 * Additional classes for main nav
 */
function extra_classes($classes, $item, $args)
{
    if ($args->theme_location == 'primary') {
        $classes[] = 'list-inline-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'extra_classes', 1, 3);
