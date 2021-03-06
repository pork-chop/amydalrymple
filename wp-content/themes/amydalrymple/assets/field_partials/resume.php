<?php 
	register_field_group(array (
		'key' => 'group_57fab4e77903bd',
		// 'id' => 'acf_resume',
		'title' => 'Resume Page',
		'fields' => array (
			array (
				'key' => 'field_59b8102611b13',
				'label' => 'Previous Work',
				'name' => 'previous_work',
				'type' => 'repeater',
				'required' => 1,
				'sub_fields' => array (
					array (
						'key' => 'field_59b810f7797c6',
						'label' => 'Project Image',
						'name' => 'project_image',
						'type' => 'image',
						'required' => 1,
						'column_width' => '',
						'save_format' => 'object',
						'preview_size' => 'medium',
						'library' => 'all',
					),
					array (
						'key' => 'field_59b810e6797c5',
						'label' => 'Project Title',
						'name' => 'project_title',
						'type' => 'text',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_59b810e6797c5l',
						'label' => 'Project Link',
						'name' => 'project_link',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_59b81124797c7',
						'label' => 'Date Launched',
						'name' => 'project_launched',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_59b8113c797c8',
						'label' => 'Role',
						'name' => 'project_role',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_59b81150797c9',
						'label' => 'Specifications',
						'name' => 'project_specs',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => 2,
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => 'Add Project',
			),
			array (
				'key' => 'field_59b81172797ca',
				'label' => 'Work History',
				'name' => 'work_history',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_59b8118b797cb',
						'label' => 'Company/Org Name',
						'name' => 'org_name',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_59b811a0797cc',
						'label' => 'Title',
						'name' => 'org_title',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_59b811ae797cd',
						'label' => 'Employment Dates',
						'name' => 'org_employment',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => 2,
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Employer',
			),
			array (
				'key' => 'field_59b811ea797ce',
				'label' => 'Professional Skills',
				'name' => 'professional_skills',
				'type' => 'wysiwyg',
				'toolbar' => 'basic',
				'media_upload' => 0,
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '2',
			),
			array (
				'key' => 'field_59b81230797cf',
				'label' => 'Speaking Engagements',
				'name' => 'speaking_engagements',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_59b8123f797d0',
						'label' => 'Conference/Event Name',
						'name' => 'event_name',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_59b8124f797d1',
						'label' => 'Event Date',
						'name' => 'event_date',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_59b8125e797d2',
						'label' => 'Event Location',
						'name' => 'event_location',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_59b81269797d3',
						'label' => 'Presentation Title',
						'name' => 'event_topic',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
			array (
				'key' => 'field_59b81292797d4',
				'label' => 'Primary Education',
				'name' => 'primary_education',
				'type' => 'wysiwyg',
				'toolbar' => 'basic',
				'media_upload' => 1,
				'default_value' => '',
				'placeholder' => '',
				'rows' => '2',
			),
			array (
				'key' => 'field_59b812a9797d5',
				'label' => 'Continued Education',
				'name' => 'continued_education',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_59b812ba797d6',
						'label' => 'Event Name',
						'name' => 'event_name',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_59b812c3797d7',
						'label' => 'Event Subtitle/Topic',
						'name' => 'event_topic',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_59b812d7797d8',
						'label' => 'Event Date',
						'name' => 'event_date',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_59b812f5797d9',
						'label' => 'Event Location',
						'name' => 'event_location',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page',
					'operator' => '==',
					'value' => '5',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
		'active' => 1,
	));
