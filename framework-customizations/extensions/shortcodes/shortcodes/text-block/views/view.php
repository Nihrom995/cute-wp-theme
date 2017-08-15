<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<div class="<?php echo($atts['class']) ? 'text-wrap '.esc_attr($atts['class']) : 'text-wrap' ;?>">
    <?php echo do_shortcode( $atts['text'] ); ?>
</div>
