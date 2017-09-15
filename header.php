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
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&amp;subset=cyrillic" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrap" class="wrap">

    <div class="header bg-secondary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <?php if ( has_custom_logo() ):
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                        ?>
                        <a class="navbar-brand py-md-2" href="/">
                            <img src="<?php echo $image[0];?>"  width="100%" height="auto" />
                        </a>
                    <?php endif; ?>
                </div>
                <div class="col-lg-9 row">
                    <div class="header-info-block">
                        <div>E-mail</div>
                        <a href="mailto:otlichnik28center@gmail.com" class="btn py-1"><i class="fa fa-envelope-o fa-fw fa-lg" aria-hidden="true"></i>otlichnik28center@gmail.com</a>
                    </div>
                    <div class="header-info-block">
                        <div>Часы работы</div>
                        <span><i class="fa fa-clock-o fa-fw fa-lg" aria-hidden="true"></i>Ежедневно 09:00–21:00</span>
                    </div>
                    <div class="header-info-block phone">
                        <div>Звоните Нам</div>
                        <a href="tel:+7(4162)51-51-55" class="btn py-1 pl-0"><i class="fa fa-mobile fa-fw fa-lg" aria-hidden="true"></i>+7 (4162) 51-51-55</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-inverse navbar-dark">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <?php wp_nav_menu( array(
                            'menu'              => 'primary',
                            'theme_location' => 'header-menu',
                            'depth'             => 1,
                            'container'         => false,
                            'menu_class'        => 'navbar-nav',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker()
                        ) ); ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>



	<div id="content" class="site-content">
