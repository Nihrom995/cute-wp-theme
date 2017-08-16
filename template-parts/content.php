<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nihrom995
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('block-white block-shadow card h-100'); ?>>
    <?php if(has_post_thumbnail()):?>
    <div class="post-image">
        <a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">
            <img src="<?php echo get_the_post_thumbnail_url();?>" width="100%" height="auto" />
        </a>
    </div>
    <?php endif; ?>
	<header class="entry-header p-3 pb-0">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php nihrom995_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content px-3 py-0">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Подробнее...', 'nihrom995' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nihrom995' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer ">
		<?php nihrom995_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
