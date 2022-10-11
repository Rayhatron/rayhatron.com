<?php
/**
 * Plugin Name: Plugin Loader
 * Description: Loads the MU plugins required to run the site
 * Author: Rayhatron
 * Author URI: http://rayhatron.com/
 * Version: 1.0
 */

// Plugins to be loaded for any site.
$global_mu_plugins = [
	'wp-user-profiles/wp-user-profiles.php',
];

// Load the plugin files.
foreach ( $global_mu_plugins as $file ) {
	// phpcs:disable PHPCS_SecurityAudit.BadFunctions.FilesystemFunctions.WarnFilesystem
	if ( file_exists( WPMU_PLUGIN_DIR . '/' . $file ) ) {
		// phpcs:disable PHPCS_SecurityAudit.Misc.IncludeMismatch.ErrMiscIncludeMismatchNoExt
		require_once WPMU_PLUGIN_DIR . '/' . $file;
		// phpcs:enable
	}
}
