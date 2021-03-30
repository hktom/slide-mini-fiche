<?php

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


$this->add_control(
    'title_icon_size',
    [
        'label' => __( 'Size', self::$slug ),
        'type' => \Elementor\Controls_Manager::SELECT,
        'default' => 'h6',
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
    'title_icon_color',
    [
        'label' => __( 'Color', self::$slug ),
        'type' => \Elementor\Controls_Manager::COLOR,
        'scheme' => [
            'type' => \Elementor\Scheme_Color::get_type(),
            'value' => \Elementor\Scheme_Color::COLOR_1,
        ],
        'selectors' => [
            '{{WRAPPER}} .title_icon' => 'color: {{VALUE}}',
        ],
    ]
    );

$this->end_controls_section();

?>