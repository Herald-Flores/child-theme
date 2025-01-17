<?php

if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_63546890709b0',
		'title' => 'Testimonials-card',
		'fields' => array(
			array(
				'key' => 'field_635468c72b4e6',
				'label' => 'Testimonials',
				'name' => 'testimonials',
				'aria-label' => '',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'layout' => 'block',
				'pagination' => 0,
				'min' => 0,
				'max' => 3,
				'collapsed' => '',
				'button_label' => 'Add Testimonial',
				'rows_per_page' => 20,
				'sub_fields' => array(
					array(
						'key' => 'field_6354693b2b4ea',
						'label' => 'Testimonials',
						'name' => '',
						'aria-label' => '',
						'type' => 'tab',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'placement' => 'top',
						'endpoint' => 0,
						'parent_repeater' => 'field_635468c72b4e6',
					),
					array(
						'key' => 'field_635469072b4e7',
						'label' => 'Testomonial Text',
						'name' => 'testomonial_text',
						'aria-label' => '',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'maxlength' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'parent_repeater' => 'field_635468c72b4e6',
					),
					array(
						'key' => 'field_635469202b4e8',
						'label' => 'Author Name',
						'name' => 'author_name',
						'aria-label' => '',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'maxlength' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'parent_repeater' => 'field_635468c72b4e6',
					),
					array(
						'key' => 'field_6354692c2b4e9',
						'label' => 'Author Role',
						'name' => 'author_role',
						'aria-label' => '',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'maxlength' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'parent_repeater' => 'field_635468c72b4e6',
					),
					array(
						'key' => 'field_63546bdba58d2',
						'label' => 'Author Image',
						'name' => 'author_image',
						'aria-label' => '',
						'type' => 'image',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'array',
						'library' => 'all',
						'min_width' => '',
						'min_height' => '',
						'min_size' => '',
						'max_width' => '',
						'max_height' => '',
						'max_size' => '',
						'mime_types' => '',
						'preview_size' => 'medium',
						'parent_repeater' => 'field_635468c72b4e6',
					),
					array(
						'key' => 'field_635469592b4eb',
						'label' => 'Config',
						'name' => '',
						'aria-label' => '',
						'type' => 'tab',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'placement' => 'top',
						'endpoint' => 0,
						'parent_repeater' => 'field_635468c72b4e6',
					),
					array(
						'key' => 'field_635469722b4ec',
						'label' => 'Mode',
						'name' => 'mode',
						'aria-label' => '',
						'type' => 'button_group',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							'Dark' => 'Dark',
							'Light' => 'Light',
						),
						'default_value' => 'Dark',
						'return_format' => 'value',
						'allow_null' => 0,
						'layout' => 'horizontal',
						'parent_repeater' => 'field_635468c72b4e6',
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/testimonials',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));
	
	endif;		