<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nihrom995
 */

?>

	</div><!-- #content -->

	<footer class="footer py-6">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-1' ); ?>
                    <?php endif; ?>
                </div>
                <div class="col">
                    <?php if ( is_active_sidebar( 'sidebar-footer-2' ) ) : ?>
                        <?php dynamic_sidebar( 'sidebar-footer-2' ); ?>
                    <?php endif; ?>
                </div>
                <div class="col">
                    <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-3' ); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
	</footer><!-- #colophon -->
    <div class="copyright py-3">
        <div class="text-center">Дизайн и разработка - <a href="//darkstudio.pro" target="_blank">Dark Studio</a></div>
    </div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
