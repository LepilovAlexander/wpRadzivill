<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RadzivillThem
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="col-lg-4 col-sm-12 wow bounceInUp" data-wow-delay="1.5s">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>
	

