<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'label'  => array(
		'label' => __('Heading Label', '_s'),
		'desc'  => __('This is the text that appears on your heading', '_s'),
		'type'  => 'text',
		'value' => 'Heading'
	),

	'secondary'  => array(
		'label' => __('Secondary Heading', '_s'),
		'desc'  => __('Use this for the small secondary heading text', '_s'),
		'type'  => 'text',
	),

	'size'  => array(
		'label'   => __('Heading Size', '_s'),
		'desc'    => __('Choose the size for your heading', '_s'),
		'type'    => 'select',
		'choices' => array(
			'h1' 		=> __('Heading 1', '_s'),
			'h2' 		=> __('Heading 2', '_s'),
			'h3' 		=> __('Heading 3', '_s'),
			'h4' 		=> __('Heading 4', '_s'),
			'h5' 		=> __('Heading 5', '_s'),
			'h6' 		=> __('Heading 6', '_s'),
		)
	),
);