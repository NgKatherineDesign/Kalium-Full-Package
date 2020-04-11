<?php
/**
 *	Kalium WordPress Theme
 *
 *	Core Actions and Filters
 *	
 *	Laborator.co
 *	www.laborator.co 
 */

/**
 * Handle endless pagination (global)
 */
add_action( 'wp_ajax_kalium_endless_pagination_get_paged_items', 'kalium_endless_pagination_get_paged_items', 10 );
add_action( 'wp_ajax_nopriv_kalium_endless_pagination_get_paged_items', 'kalium_endless_pagination_get_paged_items', 10 );

/**
 * Map WPBakery Page Builder shortcodes for blog entries on AJAX pagination
 */
add_action( 'kalium_endless_pagination_pre_get_paged_items', 'kalium_endless_pagination_ajax_map_wpb_shortcodes', 10 );

/**
 * Register widgets
 */
add_action( 'widgets_init', 'kalium_widgets_init', 10 );

/**
 * Sidebar skin
 */
add_filter( 'kalium_widget_area_classes', 'kalium_set_widgets_classes', 10 );

/**
 * Custom sidebars plugin args
 */
add_filter( 'cs_sidebar_params', 'kalium_custom_sidebars_params', 10 );

/**
 * Password protected post form
 */
add_filter( 'the_password_form', 'kalium_the_password_form', 10 );

/**
 * Default excerpt length and more dots
 */
add_filter( 'excerpt_length', 'kalium_get_default_excerpt_length', 10 );
add_filter( 'excerpt_more', 'kalium_get_default_excerpt_more', 100 );

/**
 * Footer classes
 */
add_filter( 'kalium_footer_class', 'kalium_get_footer_classes', 10 );

/**
 * Image placeholder set style
 */
add_action( 'template_redirect', 'kalium_image_placeholder_set_style', 10 );

/**
 * Version upgrade hooks
 */
add_action( 'version_upgrade_2_3', array( 'Kalium_Version_Upgrades', 'version_upgrade_2_3' ), 10 );

/**
 * JavaScript assets enqueue mapping
 */
add_action( 'wp_footer', 'kalium_js_assets_enqueue_mapping', 10 );

/**
 * Map WPBakery Shortcodes for Product Filter AJAX request.
 */
add_action( 'wp_ajax_prdctfltr_respond_550', 'WPBMap::addAllMappedShortcodes', 5 );
add_action( 'wp_ajax_nopriv_prdctfltr_respond_550', 'WPBMap::addAllMappedShortcodes', 5 );

/**
 * Set WPBakery Page Builder as theme.
 */
add_action( 'vc_before_init', 'vc_set_as_theme' );

/**
 * Temporary fix for WooCommerce Product Filter.
 */
function kalium_fix_key_svx_plugins_settings( $settings ) {
	$settings['key'] = "false";
	return $settings;
}

add_filter( 'svx_plugins_settings', 'kalium_fix_key_svx_plugins_settings' );