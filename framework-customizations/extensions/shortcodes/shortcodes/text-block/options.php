<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'class' => array(
        'type'   => 'text',
        'label'  => __( 'Wrap Class', 'fw' ),
        'desc'   => __( 'Enter a class for wrap block', 'fw' )
    ),
	'text' => array(
		'type'   => 'wp-editor',
		'label'  => __( 'Content', 'fw' ),
		'desc'   => __( 'Enter some content for this texblock', 'fw' )
	),
);
