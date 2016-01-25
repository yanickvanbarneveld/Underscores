<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'label'  => array(
		'label' => __('Button Label', '_s'),
		'desc'  => __('This is the text that appears on your button', '_s'),
		'type'  => 'text',
		'value' => 'Submit'
	),

	'link'   => array(
		'label' => __('Button Link', '_s'),
		'desc'  => __('Where should your button link to', '_s'),
		'type'  => 'text',
		'value' => '#'
	),

	'target' => array(
		'type'  => 'switch',
		'label'   => __('New Window', '_s'),
		'desc'    => __('Select here if you want to open the linked page in a new window', '_s'),
		'right-choice' => array(
			'value' => '_blank',
			'label' => __('Yes', '_s'),
		),
		'left-choice' => array(
			'value' => '_self',
			'label' => __('No', '_s'),
		),
	),

	'color'  => array(
		'label'   => __('Button Color', '_s'),
		'desc'    => __('Choose a color for your button', '_s'),
		'type'    => 'select',
		'choices' => array(
			'btn-default' 	=> __('Default', '_s'),
			'btn-primary' 	=> __('Primary', '_s'),
			'btn-success' 	=> __('Success', '_s'),
			'btn-info'  	=> __('Info', '_s'),
			'btn-warning' 	=> __('Warning', '_s'),
			'btn-danger'   	=> __('Danger', '_s'),
			'btn-link'   	=> __('Link', '_s'),
		)
	),

	'size'  => array(
		'label'   => __('Button Size', '_s'),
		'desc'    => __('Choose the size for your button', '_s'),
		'type'    => 'select',
		'choices' => array(
			'' 			=> __('Default', '_s'),
			'btn-lg' 	=> __('Large', '_s'),
			'btn-sm' 	=> __('Small', '_s'),
			'btn-xs'  	=> __('Extra Small', '_s'),
		)
	),
);