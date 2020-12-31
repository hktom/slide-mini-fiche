<?php
namespace Slide_Mini_Fiche;

use Elementor\Repeater;
use Elementor\Widget_Base;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

//include plugin_dir_path( __FILE__ ) . '/vue_map.php';

class Slide_Mini_Fiche extends Widget_Base {

	public static $slug = 'slide_mini_fiche';

	public function get_name() { return self::$slug; }

	public function get_title() { return __('Slide Mini Fiche', self::$slug); }

	public function get_icon() { return 'fas fa-braille'; }

	public function get_categories() { return [ 'general' ]; }

	protected function _register_controls() {

		include plugin_dir_path( __FILE__ ) . '/controllers/title.php';
		include plugin_dir_path( __FILE__ ) . '/controllers/date.php';
		include plugin_dir_path( __FILE__ ) . '/controllers/icon.php';
		include plugin_dir_path( __FILE__ ) . '/controllers/title_content.php';
		include plugin_dir_path( __FILE__ ) . '/controllers/float_button.php';

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		include plugin_dir_path( __FILE__ ) . '/src/index.php';
	}
}