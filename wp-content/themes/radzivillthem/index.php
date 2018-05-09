<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package radzivill
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<div class="bg-info wow bounceInRight" data-wow-delay="1.3s">
						<div class="container justify-content-center text-white">
							<div class="row">
								<h1 class="page-title screen-reader-text">
									<?php single_post_title(); ?>

								</h1>
								
							</div>
						</div>
					</div>
					
				</header>
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
						<div class="col-lg-8 col-sm-12 wow bounceInLeft" data-wow-delay="1.3s">
							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_type() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

				endif; ?>


			</div>
			<?php get_sidebar();?>
		</div>
	</div>

<?php endif;?>


</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();?>
