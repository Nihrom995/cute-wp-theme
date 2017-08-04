<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
    'is_container' => array(
        'label'        => __('Включить контейнер?', 'fw'),
        'type'         => 'switch',
    ),
	'is_fullwidth' => array(
		'label'        => __('Full Width', 'fw'),
		'type'         => 'switch',
	),
    'class' => array(
        'label' => __('Section class', 'fw'),
        'desc'  => __('Insert Section class', 'fw'),
        'type'  => 'text',
    ),
    'id' => array(
        'label' => __('Section id', 'fw'),
        'desc'  => __('Insert section id', 'fw'),
        'type'  => 'text',
    ),
	'background_color' => array(
		'label' => __('Background Color', 'fw'),
		'desc'  => __('Please select the background color', 'fw'),
		'type'  => 'color-picker',
	),
	'background_image' => array(
		'label'   => __('Background Image', 'fw'),
		'desc'    => __('Please select the background image', 'fw'),
		'type'    => 'background-image',
		'choices' => array(//	in future may will set predefined images
		)
	),
	'video' => array(
		'label' => __('Background Video', 'fw'),
		'desc'  => __('Insert Video URL to embed this video', 'fw'),
		'type'  => 'text',
	)
);
