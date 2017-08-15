<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nihrom995
 */

get_header(); ?>

	<div id="primary" class="content-area">
        <?php if( function_exists('fw_ext_breadcrumbs') ) { fw_ext_breadcrumbs(); } ?>
		<main id="main" class="site-main container">
            <?php if( is_active_sidebar( 'sidebar-right' ) ):?>
            <div class="row">
                <div class="col col-lg-8">
            <?php endif; ?>
                <?php
                if ( have_posts() ) : ?>

                    <!--<header class="page-header">
                        <?php
                            the_archive_title( '<h1 class="page-title">', '</h1>' );
                            the_archive_description( '<div class="archive-description">', '</div>' );
                        ?>
                    </header> .page-header -->
                    <div class="row">

                    <?php
                    /* Start the Loop */
                    while ( have_posts() ) : the_post();
                     ?>
                        <div class="col-12 col-lg-6 mb-4">
                        <?
                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'template-parts/content', get_post_format() );
                        ?>
                        </div>
                    <?php

                    endwhile;

                    ?>

                    </div>
                    <?
                    the_posts_navigation();

                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif; ?>
        <?php if( is_active_sidebar( 'sidebar-right' ) ):?>
                </div>
                <div class="col col-lg-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        <?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
