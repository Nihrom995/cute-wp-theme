<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package specmir
 */

get_header(); ?>

	<div id="primary" class="content-area">
        <div class="breadcrumb">
            <div class="container">
                <?php if( function_exists('fw_ext_breadcrumbs') ) { fw_ext_breadcrumbs(); } ?>
            </div>
        </div>
		<main id="main" class="site-main container">

			<section class="error-404 not-found text-center pt-4 pb-4">
				<header class="page-header">
					<h1 class="page-title">Упс! Просим прощения, но страница не найдена.</h1>
				</header><!-- .page-header -->

				<div class="page-content">
                    <p>
                        Возможно вы ошиблись при вводе адреса, или страница был удалена. Но если вы ищите запчасти для спец техники, то вы попали куда нужно. Переходите на главную страницу и узнайте больше!
                    </p>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
