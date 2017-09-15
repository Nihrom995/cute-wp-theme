<?php the_content(); ?>

<div class="container">
        <div class="block-heading fw-heading-h2  text-center">
            <h2 class="special-title ">Новости</h2>
            <div class="special-subtitle ">
                <p>Следите за последними событиями нашего учебного центра!</p>
            </div>
        </div>
        <div class="row">
            <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                <div class="col-md-4 col-lg-4 py-2">
                    <div  class="block-primary post card  h-100">
                        <?php if(has_post_thumbnail()):?>
                            <div class="post-image">
                                <?php the_post_thumbnail('medium'); ?>
                            </div>
                        <?php endif; ?>
                        <header class="entry-header px-3 pt-2">
                            <h2 class="entry-title h2"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                            <?php if ( 'post' === get_post_type() ) : ?>
                                <div class="entry-meta">
                                    <?php nihrom995_posted_on(); ?>
                                </div><!-- .entry-meta -->
                                <?php
                            endif; ?>

                        </header><!-- .entry-header -->

                        <div class="entry-content p-3">
                            <?php the_excerpt(__('(Подробнее)')); ?>
                        </div><!-- .entry-content -->

                    </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>

<section id="map" class="fw-main-row  ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <a class="dg-widget-link" href="http://2gis.ru/blagoveshensk/firm/70000001025620493/center/127.5302839279175,50.27029288914771/zoom/16?utm_medium=widget-source&amp;utm_campaign=firmsonmap&amp;utm_source=bigMap">Посмотреть на карте Благовещенска</a>
                <div class="dg-widget-link"><a href="http://2gis.ru/blagoveshensk/firm/70000001025620493/photos/70000001025620493/center/127.5302839279175,50.27029288914771/zoom/17?utm_medium=widget-source&amp;utm_campaign=firmsonmap&amp;utm_source=photos">Фотографии компании</a></div>
                <div class="dg-widget-link"><a href="http://2gis.ru/blagoveshensk/center/127.530309,50.268696/zoom/16/routeTab/rsType/bus/to/127.530309,50.268696╎Отличник, центр подготовки к ЕГЭ?utm_medium=widget-source&amp;utm_campaign=firmsonmap&amp;utm_source=route">Найти проезд до Отличник, центр подготовки к ЕГЭ</a></div>
                <script charset="utf-8" src="http://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":640,"height":400,"borderColor":"#a3a3a3","pos":{"lat":50.27029288914771,"lon":127.5302839279175,"zoom":16},"opt":{"city":"blagoveshensk"},"org":[{"id":"70000001025620493"}]});</script><noscript style="color: #c00; font-size: 16px; font-weight: bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
            </div>
        </div>
    </div>
</section>
