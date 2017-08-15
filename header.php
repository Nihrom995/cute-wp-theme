<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nihrom995
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Exo+2:300,400,500,600,700&amp;subset=cyrillic" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrap" class="wrap">

    <div class="header-info bg-inverse">
        <div class="container p-0">
            <div class="row no-gutters align-items-center">
                <div class="col col-md-6 col-xl-8 header-info-col">
                    <div class="header-info-block py-2">
                        <a href="tel:+7(4162)51-51-55" class="btn py-1 pl-0"><i class="fa fa-mobile fa-fw fa-lg" aria-hidden="true"></i>+7 (4162) 51-51-55</a>
                    </div>
                    <div class="header-info-block py-2 hidden-md-down">
                        <a href="mailto:otlichnik28center@gmail.com" class="btn py-1"><i class="fa fa-envelope-o fa-fw fa-lg" aria-hidden="true"></i>otlichnik28center@gmail.com</a>
                    </div>
                    <div class="header-info-block py-2 hidden-lg-down">
                        <span class="btn py-1"><i class="fa fa-clock-o fa-fw fa-lg" aria-hidden="true"></i>Ежедневно 09:00–21:00</span>
                    </div>
                </div>
                <div class="col">
                    <div class="header-search float-right">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-navbar sticky-top bg-primary">
        <div class="container">
            <nav class="navbar navbar-toggleable-md navbar-inverse p-0">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php if ( has_custom_logo() ):
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                    ?>
                    <a class="navbar-brand py-md-2" href="/">
                        <img src="<?php echo $image[0];?>"  width="auto" height="auto" />
                    </a>
                <?php endif; ?>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location' => 'header-menu',
                        'depth'             => 1,
                        'container'         => false,
                        'menu_class'        => 'navbar-nav ml-auto mt-sm-2 mt-lg-0',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker()
                    ) ); ?>
                </div>
            </nav>
        </div>

    </div>


	<div id="content" class="site-content">
