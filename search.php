<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package nihrom995
 */

get_header(); ?>

	<section id="primary" class="content-area">
        <?php if( function_exists('fw_ext_breadcrumbs') ) { fw_ext_breadcrumbs(); } ?>
		<main id="main" class="site-main container">
            <?php if( is_active_sidebar( 'sidebar-right' ) ):?>
            <div class="row">
                <div class="col col-12 col-lg-8">
            <?php endif; ?>

                <?php
                if ( have_posts() ) : ?>

                    <!--<header class="page-header">
                        <h1 class="page-title"><?php
                            /* translators: %s: search query. */
                            printf( esc_html__( 'Search Results for: %s', 'nihrom995' ), '<span>' . get_search_query() . '</span>' );
                        ?></h1>
                    </header> .page-header -->
                    <div class="row">

                        <?php
                        /* Start the Loop */
                        while ( have_posts() ) : the_post();
                        ?>
                            <div class="col-12 col-sm-6 col-md-6">
                            <?php  /**
                             * Run the loop for the search to output the results.
                             * If you want to overload this in a child theme then include a file
                             * called content-search.php and that will be used instead.
                             */
                            get_template_part( 'template-parts/content', 'search' );
                            ?>
                            </div>
                        <?php endwhile; ?>

                    </div>
                    <?php
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
	</section><!-- #primary -->

<?php

get_footer();
