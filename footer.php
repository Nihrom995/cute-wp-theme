<?php
/**
 * Created by PhpStorm.
 * User: Nihrom
 * Date: 10.07.2017
 * Time: 11:58
 */
?>
<footer class="footer bg-inverse">
    <div class="container">
        <div class="row pb-2 pt-2">
            <div class="col-md-6 col-lg-4">
                <?php if ( is_active_sidebar( 'footer-1' ) ) { ?>
                    <div class="widget-column footer-widget-1 my-3">
                        <?php dynamic_sidebar( 'footer-1' ); ?>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-6 col-lg-4">
                <?php if ( is_active_sidebar( 'footer-2' ) ) { ?>
                    <div class="widget-column footer-widget-2 my-3">
                        <?php dynamic_sidebar( 'footer-2' ); ?>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-12 col-lg-4">
                <?php if ( is_active_sidebar( 'footer-3' ) ) { ?>
                    <div class="widget-column footer-widget-3 my-3">
                        <?php dynamic_sidebar( 'footer-3' ); ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="copyright text-center pb-3 pt-3">
        Дизайн и разработка - <a href="http://darkstudio.pro/" target="_blank">Dark Studio</a>. &copy; <?=date('Y');?> Все права защищены.
    </div>
</footer>
<? wp_footer();?>
<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter45367284 = new Ya.Metrika({ id:45367284, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/45367284" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet" type='text/css'>
</body>
</html>
