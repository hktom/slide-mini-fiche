<?php

$this->start_controls_section(
    'float_button',
    [
        'label' => __( 'Float Button', self::$slug ),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
);

$this->add_control(
    'float_button_color',
    [
        'label' => __( 'Color', self::$slug ),
        'type' => \Elementor\Controls_Manager::COLOR,
        'scheme' => [
            'type' => \Elementor\Scheme_Color::get_type(),
            'value' => \Elementor\Scheme_Color::COLOR_1,
        ],
        'selectors' => [
            '{{WRAPPER}} .slideOutTab div' => 'color: {{VALUE}}',
        ],
    ]
);

$this->add_control(
    'float_button_background_color',
    [
        'label' => __( 'Background-color', self::$slug ),
        'type' => \Elementor\Controls_Manager::COLOR,
        'scheme' => [
            'type' => \Elementor\Scheme_Color::get_type(),
            'value' => \Elementor\Scheme_Color::COLOR_1,
        ],
        'selectors' => [
            '{{WRAPPER}} .slideOutTab' => 'background-color: {{VALUE}}',
            '{{WRAPPER}} .slideOutTab div' => 'background-color: {{VALUE}}',
        ],
    ]
);

    

$this->end_controls_section();

?>