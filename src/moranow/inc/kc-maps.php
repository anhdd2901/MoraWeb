<?php

$kc = KingComposer::globe();

$shortcode_params['moranow_how_it_works_block'] = array(
    'name' => esc_html__( 'How It Works Block (by Moranow)', 'moranow' ),
    'description' => esc_html__( 'How It Works Block', 'moranow' ),
    'category' => esc_html__( 'Moranow Elements', 'moranow' ),
    'icon' => 'jobhunt-element-icon',
    'title' => esc_html__( 'How It Works Block Settings', 'moranow' ),
    'is_container' => true,
    'params' => array(
        array(
            'name'          => 'section_title',
            'label'         => esc_html__('Section Title', 'moranow'),
            'type'          => 'text',
            'description'   => esc_html__('Enter section title.', 'moranow'),
            'admin_label'   => true
        ),
        array(
            'name'          => 'sub_title',
            'label'         => esc_html__('Enter Subtitle', 'moranow'),
            'type'          => 'textarea',
            'description'   => esc_html__('Enter subtitle', 'moranow'),
            'admin_label'   => true
        ),
        array(
            'name'          => 'type',
            'label'         => esc_html__( 'Select Version', 'moranow' ),
            'type'          => 'select',
            'options'       => array(
                'v1'         => esc_html__( 'v1','moranow'),
                'v2'         => esc_html__( 'v2','moranow'),
                'v3'         => esc_html__( 'v3','moranow'),
                'v4'         => esc_html__( 'v4','moranow'),
            ),
            'admin_label'   => true
        ),
        array(
            'name'          => 'icon_1',
            'label'         => esc_html__('Step 1 Icon', 'moranow'),
            'type'          => 'icon_picker',
            'description'   => esc_html__('Enter step 1 icon class.', 'moranow'),
            'admin_label'   => true
        ),
        array(
            'name'          => 'step_title_1',
            'label'         => esc_html__('Step 1 Title', 'moranow'),
            'type'          => 'text',
            'description'   => esc_html__('Enter step 1 title.', 'moranow'),
            'admin_label'   => true
        ),
        array(
            'name'          => 'step_desc_1',
            'label'         => esc_html__('Step 1 Description', 'moranow'),
            'type'          => 'textarea',
            'description'   => esc_html__('Enter step 1 description.', 'moranow'),
            'admin_label'   => true
        ),
        array(
            'name'          => 'icon_2',
            'label'         => esc_html__('Step 2 Icon', 'moranow'),
            'type'          => 'icon_picker',
            'description'   => esc_html__('Enter step 2 icon class.', 'moranow'),
            'admin_label'   => true
        ),
        array(
            'name'          => 'step_title_2',
            'label'         => esc_html__('Step 2 Title', 'moranow'),
            'type'          => 'text',
            'description'   => esc_html__('Enter step 2 title.', 'moranow'),
            'admin_label'   => true
        ),
        array(
            'name'          => 'step_desc_2',
            'label'         => esc_html__('Step 2 Description', 'moranow'),
            'type'          => 'textarea',
            'description'   => esc_html__('Enter step 2 description.', 'moranow'),
            'admin_label'   => true
        ),
        array(
            'name'          => 'icon_3',
            'label'         => esc_html__('Step 3 Icon', 'moranow'),
            'type'          => 'icon_picker',
            'description'   => esc_html__('Enter step 3 icon class.', 'moranow'),
            'admin_label'   => true
        ),
        array(
            'name'          => 'step_title_3',
            'label'         => esc_html__('Step 3 Title', 'moranow'),
            'type'          => 'text',
            'description'   => esc_html__('Enter step 3 title.', 'moranow'),
            'admin_label'   => true
        ),
        array(
            'name'          => 'step_desc_3',
            'label'         => esc_html__('Step 3 Description', 'moranow'),
            'type'          => 'textarea',
            'description'   => esc_html__('Enter step 3 description.', 'moranow'),
            'admin_label'   => true
        ),
        array(
            'name'          => 'icon_4',
            'label'         => esc_html__('Step 4 Icon', 'moranow'),
            'type'          => 'icon_picker',
            'description'   => esc_html__('Enter step 4 icon class.', 'moranow'),
            'admin_label'   => true
        ),
        array(
            'name'          => 'step_title_4',
            'label'         => esc_html__('Step 4 Title', 'moranow'),
            'type'          => 'text',
            'description'   => esc_html__('Enter step 4 title.', 'moranow'),
            'admin_label'   => true
        ),
        array(
            'name'          => 'step_desc_4',
            'label'         => esc_html__('Step 4 Description', 'moranow'),
            'type'          => 'textarea',
            'description'   => esc_html__('Enter step 4 description.', 'moranow'),
            'admin_label'   => true
        ),
        array(
            'name'          => 'icon_5',
            'label'         => esc_html__('Step 5 Icon', 'moranow'),
            'type'          => 'icon_picker',
            'description'   => esc_html__('Enter step 5 icon class.', 'moranow'),
            'admin_label'   => true
        ),
        array(
            'name'          => 'step_title_5',
            'label'         => esc_html__('Step 5 Title', 'moranow'),
            'type'          => 'text',
            'description'   => esc_html__('Enter step 5 title.', 'moranow'),
            'admin_label'   => true
        ),
        array(
            'name'          => 'step_desc_5',
            'label'         => esc_html__('Step 5 Description', 'moranow'),
            'type'          => 'textarea',
            'description'   => esc_html__('Enter step 5 description.', 'moranow'),
            'admin_label'   => true
        ),
        array(
            'name'          => 'el_class',
            'label'         => esc_html__('Extra class name', 'moranow'),
            'type'          => 'text',
            'description'   => esc_html__('If you wish to style particular content element differently, please add a class name to this field and refer to it in your custom CSS file.', 'moranow')
        )
    ),
);

$kc->add_map( $shortcode_params );