<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nihrom995
 */

if ( ! is_active_sidebar( 'sidebar-right' ) ) {
	return;
}
?>

<aside id="sidebar" class="widget-area block-shadow py-3 px-4">
	<?php dynamic_sidebar( 'sidebar-right' ); ?>
</aside><!-- #secondary -->
