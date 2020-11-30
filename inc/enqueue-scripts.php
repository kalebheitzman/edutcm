<?php
/**
 * Enqueue Scripts and Styles
 *
 * @package Components
 * @since 1.0.0
 */

/**
 * Enqueue scripts and styles.
 */
function components_scripts() {

	wp_enqueue_style( 'dashicons' );

	wp_enqueue_style(
		'components-style',
		get_template_directory_uri() . '/css/style.css',
		null,
		'1.0.0'
	);

	wp_enqueue_style(
		'load-fa',
		'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
		null,
		'4.7.0'
	);

	wp_enqueue_style(
		'load-fab',
		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/brands.min.css',
		null,
		'5.11.2'
	);

	wp_enqueue_script(
		'typography_js',
		get_template_directory_uri() . '/js/typography.js',
		null,
		'1.0.0',
		true
	);

}
add_action( 'wp_enqueue_scripts', 'components_scripts' );

function components_enqueue_editor_styles() {
  add_editor_style( get_template_directory_uri() . '/css/style-editor.css' );
}
add_action( 'admin_init', 'components_enqueue_editor_styles' );
