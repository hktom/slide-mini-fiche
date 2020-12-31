<?php

$this->start_controls_section(
    'date',
    [
        'label' => __( 'Date', self::$slug ),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
);

$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name' => 'date_style',
        'label' => __( 'Font', 'self::$slug' ),
        'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
        'selector' => '{{WRAPPER}} .date-mini-fiche',
    ]
);

$this->add_control(
    'date_color',
    [
        'label' => __( 'Color', self::$slug ),
        'type' => \Elementor\Controls_Manager::COLOR,
        'scheme' => [
            'type' => \Elementor\Scheme_Color::get_type(),
            'value' => \Elementor\Scheme_Color::COLOR_1,
        ],
        'selectors' => [
            '{{WRAPPER}} .date-mini-fiche' => 'color: {{VALUE}}',
        ],
    ]
    );

$this->end_controls_section();


?>