<?php
/**
 * General Theme Setup.
 */

namespace Rayhatron\Theme\Setup;

/**
 * Add hooks.
 *
 * @return void
 */
function bootstrap() : void {
	add_action( 'after_setup_theme', __NAMESPACE__ . '\\setup' );
}

/**
 * Setup.
 *
 * @return void
 */
function setup() {
	add_theme_support( 'wp-block-styles' );
}
