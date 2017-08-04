<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'title' => array(
        'type'  => 'text',
        'label' => __('Заголовок', 'fw'),
    ),
    'text' => array(
        'type'  => 'textarea',
        'label' => __('Текст', 'fw'),
    ),
    'image' => array(
        'label'   => __('Изображение', 'fw'),
        'type'    => 'background-image',
        'choices' => array(//	in future may will set predefined images
            'default' => array(
                'icon' => get_template_directory_uri() . '/images/thumb.jpg',
                'css'  => array(
                    'background-image' => 'none'
                ),
            ),
        )
    ),
    'enable_button'=>[
        'type'  => 'switch',
        'value' => true,
        'label' => __('Показывать кнопку?', 'fw'),
    ],
    'button_text' => array(
        'type'  => 'text',
        'label' => __('Текст кнопки', 'fw'),
        'value' => 'Подробнее...',
    ),
    'button_link' => array(
        'type'  => 'text',
        'label' => __('Ссылка кнопки', 'fw'),
    ),
);
