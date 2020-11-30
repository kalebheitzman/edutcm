<?php
/**
 * Components functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Components
 */

remove_action( 'template_redirect', 'wp_old_slug_redirect' );

// define template directory var to avoid calling function multiple times.
$template_directory = get_template_directory();

/**
 * Add admin tweaks.
 */
require $template_directory . '/inc/admin-tweaks.php';

/**
 * Register custom post types.
 */
require $template_directory . '/inc/post-types/people.php';
require $template_directory . '/inc/post-types/resources.php';

/**
 * Register custom taxonomies.
 */
require $template_directory . '/inc/taxonomies/person-category.php';
require $template_directory . '/inc/taxonomies/resource-category.php';

/**
 * Register shortcodes.
 */
require $template_directory . '/inc/shortcodes/resources.php';

/**
 * Get Component Function that this theme is primarily built on.
 */
require $template_directory . '/inc/get-component.php';

/**
 * Get Blocks.
 */
require $template_directory . '/inc/blocks.php';

/**
 * Add theme support.
 */
require $template_directory . '/inc/theme-support.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Customizer tweaks.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Register Nav Menus and include custom nav walkers.
 */
require $template_directory . '/inc/register-nav-menus.php';
require $template_directory . '/ui/site-navigation/class-components-menu-walker.php';
require $template_directory . '/ui/social-menu/class-social-menu-walker.php';

/**
 * Register Widget Areas.
 */
require $template_directory . '/inc/register-widgets.php';

/**
 * Enqueue scripts and styles.
 */
require $template_directory . '/inc/enqueue-scripts.php';

/**
 * Custom template tags for this theme.
 */
require $template_directory . '/inc/template-tags.php';

/**
 * Custom template functions for this theme.
 */
require $template_directory . '/inc/template-functions.php';
