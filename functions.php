<?php
/**
 * protez functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package protez
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
require_once  get_template_directory() . '/inc/protez-theme-setup.php';


/**
 * carbonfields
 */

require_once  get_template_directory() . '/inc/carbonfields/carbonfields-init.php';
require_once  get_template_directory() . '/inc/carbonfields/carbonfields-theme-options.php';
require_once  get_template_directory() . '/inc/carbonfields/carbonfields-metabox.php';


/**
 * search ajax handler
 */
require_once  get_template_directory() . '/inc/protez-search-ajax.php';



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
require_once  get_template_directory() . '/inc/protez-init-widget.php';


/**
 * init menu
 */
require_once  get_template_directory() . '/inc/protez-init-menu.php';


/**
 * Enqueue scripts and styles.
 */
require_once  get_template_directory() . '/inc/protez-style-script.php';


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

