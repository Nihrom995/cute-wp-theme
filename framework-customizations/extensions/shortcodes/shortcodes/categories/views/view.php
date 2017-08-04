<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */

?>
<div class="cat" style="background-image: url(<?php echo esc_attr($atts['image']['data']['icon']); ?>)">
    <div class="cat-overlay">
        <div class="cat-content">
            <div class="cat-content-title"><?php echo esc_attr($atts['title']); ?></div>
            <p class="cat-content-text"><i><?php echo esc_attr($atts['text']); ?></i></p>
            <?php if($atts['enable_button']): ?>
                <a href="<?php echo $atts['button_link']; ?>" target="_blank" rel="nofollow" class="btn btn-outline-secondary btn-border-big"><?php echo $atts['button_text']; ?></a>
            <?php endif; ?>
        </div>
    </div>
</div>
