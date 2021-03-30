<?php

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


?>