<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */
?>
<?php
/*
 * `.fw-iconbox` supports 3 styles:
 * `fw-iconbox-1`, `fw-iconbox-2` and `fw-iconbox-3`
 */
?>
<div class="service-block <?php echo esc_attr($atts['style']); ?>">
    <i class="fa fa-fw <?php echo esc_attr($atts['icon']); ?>" aria-hidden="true"></i>
    <h4 class="header-bordered mt-3"><?php echo $atts['title']; ?></h4>
    <p><?php echo $atts['content']; ?></p>
</div>