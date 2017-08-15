<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<?php $tabs_id = uniqid('fw-tabs-'); ?>
<?php
/*
 * the `.fw-tabs-container` div also supports
 * a `tabs-justified` class, that strethes the tabs
 * to the width of the whole container
 */
?>
<div class="fw-tabs-container" id="<?php echo esc_attr($tabs_id); ?>">
	<div class="fw-tabs">
        <ul>
        <?php foreach ($atts['tabs'] as $key => $tab) : ?>
            <li><a href="#<?php echo esc_attr($tabs_id . '-' . ($key + 1)); ?>" class="tab-item">
                <i class="<?php echo $tab['tab_title_icon']['icon-class']; ?> fa-3x"></i>
                <div class="tab-item-title"><?php echo $tab['tab_title']; ?></div>
            </a></li>
        <?php endforeach; ?>
        </ul>
	</div>
	<?php foreach ( $atts['tabs'] as $key => $tab ) : ?>
		<div class="fw-tab-content py-4" id="<?php echo esc_attr($tabs_id . '-' . ($key + 1)); ?>">
            <div class="tab-content-title"><?php echo $tab['tab_content_title']; ?></div>


            <?php if($tab['tab_content_image']['data']['icon']): ?>
                <div class="row">
                    <div class="col-md-6">
                        <p><?php echo do_shortcode( $tab['tab_content'] ) ?></p>
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo $tab['tab_content_image']['data']['icon']; ?>">
                    </div>
                </div>
            <?php else: ?>
                <p><?php echo do_shortcode( $tab['tab_content'] ) ?></p>
            <?php endif; ?>
		</div>
	<?php endforeach; ?>
</div>