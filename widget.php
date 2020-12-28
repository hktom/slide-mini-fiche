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
		
		$this->start_controls_section(
			'mini_fiche',
			[
				'label' => __( 'Mini Fiche', self::$slug ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'fill_color',
			[
				'label' => __( 'Background', 'self::$slug' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'placeholder' => __( '#ffff', 'self::$slug' ),
			]
		);
		
		$this->add_control(
			'language',
			[
				'label' => __( 'Lang', 'self::$slug' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'fr',
				'options' => [
					'fr' => __( 'FR', 'self::$slug' ),
					'en' => __( 'EN', 'self::$slug' ),	
				],
			]
		);

		$this->add_control(
			'mini_fiche_title',
			[
				'label' => __( 'Main Title', self::$slug ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'after',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'main_title',
				'label' => __( 'Font', 'self::$slug' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .mini-fiche-title',
			]
		);

		$this->add_control(
			'main_title_color',
			[
				'label' => __( 'Color', self::$slug ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .mini-fiche-title' => 'color: {{VALUE}}',
				],
			]
			);

			$this->add_control(
				'margin_main_title',
				[
					'label' => __( 'Margin', self::$slug ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .mini-fiche-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

		$this->end_controls_section();


		$this->start_controls_section(
			'icon',
			[
				'label' => __( 'Icon', self::$slug ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'color_icon_1',
			[
				'label' => __( 'Color', self::$slug ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .mini_fiche_color_icon_1' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'bg_color_icon_1',
			[
				'label' => __( 'Background', self::$slug ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .mini_fiche_bgcolor_icon_1' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'style_hover_color_icon_1',
			[
				'label' => __( 'Color on hover', self::$slug ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'after',
			]
		);

		$this->add_control(
			'hover_color_icon_1',
			[
				'label' => __( 'Color', self::$slug ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .mini_fiche_color_icon_1:hover' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'hover_bg_color_icon_1',
			[
				'label' => __( 'Background', self::$slug ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .mini_fiche_bgcolor_icon_1:hover' => 'background: {{VALUE}}',
				],
			]
		);



		$this->add_control(
			'website_icon',
			[
				'label' => __( 'Website Icon', self::$slug ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);

		$this->add_control(
			'size_icon_1',
			[
				'label' => __( 'Size', self::$slug ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'h1',
				'options' => [
					'h1'  => __( 'XX-Large', self::$slug ),
					'h2' => __( 'X-Large', self::$slug ),
					'h3' => __( 'Large', self::$slug ),
					'h4' => __( 'Medium', self::$slug ),
					'h5' => __( 'Small', self::$slug ),
					'h6' => __( 'Very Small', self::$slug ),
					
				],
			]
		);

		$this->add_control(
			'color_icon_2',
			[
				'label' => __( 'Color', self::$slug ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .mini_fiche_color_icon_2' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'bg_color_icon_2',
			[
				'label' => __( 'Background', self::$slug ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .mini_fiche_bgcolor_icon_2' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'style_hover_color_icon_2',
			[
				'label' => __( 'Color on hover', self::$slug ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'after',
			]
		);

		$this->add_control(
			'hover_color_icon_2',
			[
				'label' => __( 'Color', self::$slug ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .mini_fiche_color_icon_2:hover' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'hover_bg_color_icon_2',
			[
				'label' => __( 'Background', self::$slug ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .mini_fiche_bgcolor_icon_2:hover' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'email_icon',
			[
				'label' => __( 'Email Icon', self::$slug ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);

		$this->add_control(
			'size_icon_2',
			[
				'label' => __( 'Size', self::$slug ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'h1',
				'options' => [
					'h1'  => __( 'XX-Large', self::$slug ),
					'h2' => __( 'X-Large', self::$slug ),
					'h3' => __( 'Large', self::$slug ),
					'h4' => __( 'Medium', self::$slug ),
					'h5' => __( 'Small', self::$slug ),
					'h6' => __( 'Very Small', self::$slug ),
					
				],
			]
		);


		$this->add_control(
			'color_icon_3',
			[
				'label' => __( 'Color', self::$slug ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .mini_fiche_color_icon_3' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'bg_color_icon_3',
			[
				'label' => __( 'Background', self::$slug ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .mini_fiche_bgcolor_icon_3' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'style_hover_color_icon_3',
			[
				'label' => __( 'Color on hover', self::$slug ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'after',
			]
		);

		$this->add_control(
			'hover_color_icon_3',
			[
				'label' => __( 'Color', self::$slug ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .mini_fiche_color_icon_3:hover' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'hover_bg_color_icon_3',
			[
				'label' => __( 'Background', self::$slug ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .mini_fiche_bgcolor_icon_3:hover' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'links_icon',
			[
				'label' => __( 'Others Link Icon', self::$slug ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);

		$this->add_control(
			'size_icon_3',
			[
				'label' => __( 'Size', self::$slug ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'h1',
				'options' => [
					'h1'  => __( 'XX-Large', self::$slug ),
					'h2' => __( 'X-Large', self::$slug ),
					'h3' => __( 'Large', self::$slug ),
					'h4' => __( 'Medium', self::$slug ),
					'h5' => __( 'Small', self::$slug ),
					'h6' => __( 'Very Small', self::$slug ),
					
				],
			]
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'title',
			[
				'label' => __( 'Title', self::$slug ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'font',
				'label' => __( 'Font', 'self::$slug' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .mini_fiche_slide_label',
			]
		);

		$this->add_control(
			'color',
			[
				'label' => __( 'Color', self::$slug ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .mini_fiche_slide_label' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'margin_label',
			[
				'label' => __( 'Margin', self::$slug ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .mini_fiche_slide_label' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'content',
			[
				'label' => __( 'Content', self::$slug ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_font',
				'label' => __( 'Font', 'self::$slug' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .mini_fiche_slide_content',
			]
		);

		$this->add_control(
			'content_color',
			[
				'label' => __( 'Color', self::$slug ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .mini_fiche_slide_content' => 'color: {{VALUE}}',
				],
			]
			);

			$this->add_control(
				'margin_content',
				[
					'label' => __( 'Margin', self::$slug ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .mini_fiche_slide_content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);
		

		$this->end_controls_section();

		$this->start_controls_section(
			'others',
			[
				'label' => __( 'Others', self::$slug ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'native_country_icon',
			[
				'label' => __( 'Country', self::$slug ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);

		$this->add_control(
			'terms_icon',
			[
				'label' => __( 'Terms Icon', self::$slug ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);

		$this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		include plugin_dir_path( __FILE__ ) . '/src/index.php';
	}
}