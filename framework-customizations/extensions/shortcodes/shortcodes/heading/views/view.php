<?php if (!defined('FW')) die( 'Forbidden' );
/**
 * @var $atts
 */
?>

<div class="header-block <?php echo $atts['block_class']; ?>">
    <h2 class="<?php echo $atts['title_class']; ?>"><?php echo $atts['title']; ?></h2>
    <p class="text-center <?php echo $atts['subtitle_class']; ?>">
        <?php if($atts['subtitle_as_link']):?>
            <a href="<?php echo $atts['subtitle_link']; ?>" target="_blank" class="text-uppercase font-weight-bold"><?php echo $atts['subtitle']; ?></a>
        <?php else: ?>
            <?php echo $atts['subtitle']; ?>
        <?php endif; ?>

    </p>
</div>


