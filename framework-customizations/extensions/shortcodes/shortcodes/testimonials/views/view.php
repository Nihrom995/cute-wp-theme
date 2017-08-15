<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$id = uniqid( 'testimonials-' );
?>


<div id="reviews-carousel" class="carousel slide">
    <div  class="carousel-inner" role="listbox">
    <?php foreach ($atts['testimonials'] as $key => $testimonial): ?>
        <div class="carousel-item <?php echo (!$key) ? 'active': '';?> clearfix">
            <div class="carousel-caption d-block">
                <div class="avatar">
                    <?php
                    $author_image_url = !empty($testimonial['author_avatar']['url'])
                        ? $testimonial['author_avatar']['url']
                        : fw_get_framework_directory_uri('/static/img/no-image.png');
                    ?>
                    <img src="<?php echo esc_attr($author_image_url); ?>" alt="<?php echo esc_attr($testimonial['author_name']); ?>" class="rounded-circle" />
                </div>
                <div class="author"><?php echo $testimonial['author_name']; ?></div>
                <div class="date"><?php echo $testimonial['author_date']; ?></div>
                <div class="devider"></div>
                <p class="text mb-0">
                    <?php echo $testimonial['content']; ?>
                </p>
            </div>
        </div>
    <?php endforeach; ?>
    </div>

    <a class="carousel-control-prev" href="#reviews-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#reviews-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        <span class="sr-only">Next</span>
    </a>
</div>
