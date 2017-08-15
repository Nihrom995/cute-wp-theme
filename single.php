<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content', get_post_type() );

                    //the_post_navigation();

                    // If comments are open or we have at least one comment, load up the comment template.
//                    if ( comments_open() || get_comments_number() ) :
//                        comments_template();
//                    endif;

                endwhile; // End of the loop.
                ?>
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
get_footer();
