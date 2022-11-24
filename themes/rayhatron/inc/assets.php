<?php
/**
 * Load the custom block assets.
 */

declare( strict_types=1 );

namespace Rayhatron\Theme\Assets;

/**
 * Add hooks.
 */
function bootstrap() : void {
	add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_styles' );
}

/**
 * Enqueue the style.css file.
 *
 * @since 1.0.0
 */
function enqueue_styles() {
	wp_enqueue_style(
		'rayhatron-theme-style',
		get_stylesheet_uri(),
		[],
		wp_get_theme()->get( 'Version' )
	);
}
