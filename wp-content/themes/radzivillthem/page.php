<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RadzivillThem
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<!-- breadcrumb -->
		<div class="container pt-3 wow bounceInUp" data-wow-delay="0.6s">
			<div class="row">
				<div class="col-12">
					<nav aria-label="breadcrumb">
						<ol>
							<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
						</ol>
					</nav>
				</div>
			</div>
		</div><!-- breadcrumb end-->
		<div class="container justify-content-center pt-3 pb-3">
			<div class="row">

				<div class="col-sm-12 wow bounceInLeft" data-wow-delay="1.3s">
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

			endwhile; // End of the loop.
			?>
		</div>
	</div>
</div>
</main><!-- #main -->
</div><!-- #primary -->

<?php
	// get_sidebar();
get_footer();
?>