<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<div class="card">
	<img class="card-img-top" src="<?php echo esc_attr($atts['image']['data']['icon']); ?>">
	<div class="card-block">
		<h4 class="card-title"><?php echo esc_attr($atts['title']); ?></h4>
		<p class="card-text"><?php echo esc_attr($atts['text']); ?></p>
        <div class="card-footer">
            <?php if($atts['enable_button']): ?>
                <a href="<?php echo $atts['button_link']; ?>" class="btn btn-link card-btn"><?php echo $atts['button_text']; ?></a>
            <?php endif; ?>
            <?php if($atts['price']): ?>
                <span class="card-footer-price">от <?php echo $atts['price']; ?> руб.</span>
            <?php endif; ?>
        </div>

	</div>
</div>
