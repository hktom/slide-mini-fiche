<?php
/**
 * Plugin Name: Slide Mini Fiche
 * Description: Display Slide Mini Fiche
 * Plugin URI:  https://github.com/hktom/elementor-map-listing-post
 * Version:     2.0.1
 * Author:      Tom Hikari
 * Author URI:  https://github.com/hktom/
 * Text Domain: slide-mini-fiche
 */
namespace Slide_Mini_Fiche;
use Elementor\Plugin;
//include(dirname(__FILE__)."/assets.php");

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// The Widget_Base class is not available immediately after plugins are loaded, so
// we delay the class' use until Elementor widgets are registered
add_action( 'elementor/widgets/widgets_registered', function() {
	require_once('widget.php');

	$slide_mini_fiche =	new Slide_mini_fiche();

	// Let Elementor know about our widget
	Plugin::instance()->widgets_manager->register_widget_type($slide_mini_fiche);
});

