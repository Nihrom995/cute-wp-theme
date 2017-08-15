<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nihrom995
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('block-white block-shadow mb-3'); ?>>
    <?php if(has_post_thumbnail()):?>
        <div class="post-image">
            <img src="<?php echo get_the_post_thumbnail_url();?>" width="100%" height="auto" />
        </div>
    <?php endif; ?>

	<header class="entry-header p-3 pb-0">
		<?php the_title( '<h1 class="entry-title h2">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content p-3">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nihrom995' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer px-3 pb-3">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'nihrom995' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
