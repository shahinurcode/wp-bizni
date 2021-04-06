<?php
/**
 * bizni functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bizni
 */


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bizni_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'bizni_content_width', 640 );
}
add_action( 'after_setup_theme', 'bizni_content_width', 0 );



// Include themes external required files
require_once( get_template_directory(). '/inc/enqueue-css-js.php');
require_once( get_template_directory(). '/inc/theme-supports.php');
require_once( get_template_directory(). '/inc/walker-nav-menu.php');
require_once( get_template_directory(). '/inc/custom-widgets.php');
require_once( get_template_directory(). '/inc/custom-post-type.php');

// Metabox
require_once( get_template_directory(). '/inc/metabox/init.php');
require_once( get_template_directory(). '/inc/metabox/custom-metabox.php');
// Theme Option
require_once( get_template_directory(). '/inc/theme-option/codestar-framework.php');
require_once( get_template_directory(). '/inc/theme-option/theme-option.php');

// Require Plugins
require_once( get_template_directory(). '/inc/plugins/tgm/class-tgm-activation.php');
require_once( get_template_directory(). '/inc/plugins/tgm/tgm-plugin.config.php');
// shortcode
require_once( get_template_directory(). '/inc/shortcode/custom-shortcode.php');
require_once( get_template_directory(). '/inc/shortcode/vc_element_shortcode.php');


