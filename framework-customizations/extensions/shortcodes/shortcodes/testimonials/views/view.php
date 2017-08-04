<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$id = uniqid( 'testimonials-' );
?>


<div id="reviews-carousel" class="carousel slide">

    <ol class="carousel-indicators">
    <?php foreach ($atts['testimonials'] as $key => $testimonial): ?>
        <li data-target="#reviews-carousel" data-slide-to="<?php echo $key; ?>" class="<?php echo (!$key) ? 'active': '';?>"></li>
    <?php endforeach; ?>
    </ol>

    <div  class="carousel-inner" role="listbox">
    <?php foreach ($atts['testimonials'] as $key => $testimonial): ?>
        <div class="carousel-item <?php echo (!$key) ? 'active': '';?>">
            <div class="carousel-caption">
                <blockquote class="blockquote">
                    <i class="fa fa-quote-left fa-2x" aria-hidden="true"></i>
                    <p class="mb-0">
                        <?php echo $testimonial['content']; ?>
                    </p>
                    <footer class="blockquote-footer"><?php echo $testimonial['author_name']; ?> <i><?php echo $testimonial['author_date']; ?></i></footer>
                </blockquote>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>


	<div class="fw-testimonials-arrows">
		<a class="prev" id="<?php echo esc_attr($id); ?>-prev" href="#"><i class="fa"></i></a>
		<a class="next" id="<?php echo esc_attr($id); ?>-next" href="#"><i class="fa"></i></a>
	</div>

	<div class="fw-testimonials-pagination" id="<?php echo esc_attr($id); ?>-controls"></div>
</div>