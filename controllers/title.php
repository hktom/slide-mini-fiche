<?php

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

?>