<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nihrom995
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('block-white block-shadow mb-4'); ?>>
    <?php if(has_post_thumbnail()):?>
        <div class="post-image">
            <img src="<?php echo get_the_post_thumbnail_url(null, 'medium');?>" width="100%" height="auto" />
        </div>
    <?php endif; ?>
	<header class="entry-header p-3 pb-0">
		<?php the_title( sprintf( '<h3 class="entry-title h4"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta ">
			<?php nihrom995_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary px-3">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer px-3 pb-3">
		<?php nihrom995_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
