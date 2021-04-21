<?php
/**
 * Plugin Name: Mini-fiche slide
 * Description: Extension permettant d'afficher la mini-fiche pour les usecases 
 * Plugin URI:  https://github.com/hktom/elementor-map-listing-post
 * Version:     1.0.0
 * Author:      Tom Hikari
 * Author URI:  https://github.com/hktom/
 * Text Domain: mini-fiche-slide
 */
namespace mini_fiche_slide;
use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// The Widget_Base class is not available immediately after plugins are loaded, so
// we delay the class' use until Elementor widgets are registered
add_action( 'elementor/widgets/widgets_registered', function() {
	require_once('widget.php');
	$mini_fiche_slide =	new mini_fiche_slide();

	// Let Elementor know about our widget
	Plugin::instance()->widgets_manager->register_widget_type($mini_fiche_slide);
});

