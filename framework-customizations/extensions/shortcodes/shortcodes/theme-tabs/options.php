<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'tabs' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Tabs', 'fw' ),
		'popup-title'   => __( 'Add/Edit Tab', 'fw' ),
		'desc'          => __( 'Create your tabs', 'fw' ),
		'template'      => '{{=tab_title}}',
		'popup-options' => array(
			'tab_title' => array(
				'type'  => 'text',
				'label' => __('Title', 'fw')
			),
			'tab_title_icon'=>array(
                'type'  => 'icon-v2',

                /**
                 * small | medium | large | sauron
                 * Yes, sauron. Definitely try it. Great one.
                 */
                'preview_size' => 'medium',

                /**
                 * small | medium | large
                 */
                'modal_size' => 'medium',

                /**
                 * There's no point in configuring value from code here.
                 *
                 * I'll document the result you get in the frontend here:
                 * 'value' => array(
                 *   'type' => 'icon-font', // icon-font | custom-upload
                 *
                 *   // ONLY IF icon-font
                 *   'icon-class' => '',
                 *   'icon-class-without-root' => false,
                 *   'pack-name' => false,
                 *   'pack-css-uri' => false
                 *
                 *   // ONLY IF custom-upload
                 *   // 'attachment-id' => false,
                 *   // 'url' => false
                 * ),
                 */

                'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                'label' => __('Label', '{domain}'),
                'desc'  => __('Description', '{domain}'),
                'help'  => __('Help tip', '{domain}'),
            ),
            'tab_content_title' => array(
                'type'  => 'text',
                'label' => __('Content Title', 'fw')
            ),
			'tab_content' => array(
                'type'  => 'wp-editor',
                'value' => 'default value',
                'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                'size' => 'small', // small, large
                'editor_height' => 400,
                'wpautop' => true,
                'editor_type' => false, // tinymce, html
				'label' => __('Content', 'fw')
			),
            'tab_content_image' => array(
                'label'   => __('Content Image', 'fw'),
                'desc'    => __('Please select the image', 'fw'),
                'type'    => 'background-image',
                'choices' => array(//	in future may will set predefined images
                    'none' => array(
                        'icon' => get_template_directory_uri() . '/images/bg/bg-0.jpg',
                        'css'  => array(
                            'background-image' => 'none'
                        ),
                    ),
                )
            ),
            'tab_content_link_more' => array(
                'type'  => 'text',
                'label' => __('Content Link Read More', 'fw')
            ),
		),
	)
);