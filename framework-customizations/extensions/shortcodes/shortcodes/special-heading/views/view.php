<?php if (!defined('FW')) die( 'Forbidden' );
/**
 * @var $atts
 */
?>
<div class="block-heading fw-heading-<?php echo esc_attr($atts['heading']); ?> <?php echo esc_attr($atts['block_class']); ?> <?php echo !empty($atts['centered']) ? 'text-center' : ''; ?>">
	<?php $heading = "<{$atts['heading']} class='special-title {$atts['title_class']}'>{$atts['title']}</{$atts['heading']}>"; ?>
	<?php echo $heading; ?>
	<?php if (!empty($atts['subtitle'])): ?>
		<div class="special-subtitle <?php echo $atts['subtitle_class']; ?>"><?php echo $atts['subtitle']; ?></div>
	<?php endif; ?>
</div>