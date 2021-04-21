<?php
namespace mini_fiche_slide;
use Elementor\Repeater;
use Elementor\Widget_Base;
require_once('function.php');
//include plugin_dir_path( __FILE__ ) . '/function.php';
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

<link href="<?php echo plugin_dir_url( __DIR__ ).'slide-mini-fiche/css/main.css';?>" rel="stylesheet">

<?php

class mini_fiche_slide extends Widget_Base {

	public static $slug = 'slide_mini_fiche';

	public function get_name() { return self::$slug; }

	public function get_title() { return __('Slide Mini Fiche', self::$slug); }

	public function get_icon() { return 'fas fa-braille'; }

	public function get_categories() { return [ 'general' ]; }

	protected function _register_controls() {

		require_once('controllers/title.php');
		require_once('controllers/date.php');
		require_once('controllers/icon.php');
		require_once('controllers/title_content.php');
		require_once('controllers/float_button.php');

	}

	protected function render() {

		if(isset(get_field("lien_de_la_mini_fiche")[0])){
			$settings = $this->get_settings_for_display();
			require_once('int.php');
			$data=get_data_slide_mini_fiche(['post_type'=>'mini_fiche', 'post_in'=>array(get_field("lien_de_la_mini_fiche")[0])]);
			require_once('src/component.php');
		    require_once('src/bs-slide.php');
		}
	}
}