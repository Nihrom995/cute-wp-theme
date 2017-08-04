<!doctype html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="yandex-verification" content="b27414f139800fc0" />
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div class="header-menu-info bg-inverse">
        <div class="container">
            <div class="row ">
                <span class="contact-info hidden-sm-down"><i class="fa fa-fw fa-lg fa-clock-o" aria-hidden="true"></i> Пн - Пт: 10:00 - 19:00</span>
                <a href="tel:8(800)250-66-49" class="contact-info"><i class="fa fa-volume-control-phone fa-fw fa-lg" aria-hidden="true"></i> 8(800)250-66-49</a>
                <a href="mailto:sales@ooogksm.com" class="contact-info hidden-sm-down"><i class="fa fa-envelope-o fa-fw fa-lg" aria-hidden="true"></i> sales@ooogksm.com</a>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-toggleable-md navbar-light">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>">
                <?php //the_custom_logo()
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                ;?>
                <img src="<?php echo $image[0];?>">
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location' => 'header-menu',
                    'depth'             => 1,
                    'container'         => false,
                    'menu_class'        => 'navbar-nav ml-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker()
                ) ); ?>
            </div>
        </div>
    </nav>
</header>
