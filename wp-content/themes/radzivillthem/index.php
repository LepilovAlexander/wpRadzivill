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
									<!-- Facebook Pixel Code -->
									<script>
										!function(f,b,e,v,n,t,s)
										{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
											n.callMethod.apply(n,arguments):n.queue.push(arguments)};
											if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
											n.queue=[];t=b.createElement(e);t.async=!0;
											t.src=v;s=b.getElementsByTagName(e)[0];
											s.parentNode.insertBefore(t,s)}(window,document,'script',
												'https://connect.facebook.net/en_US/fbevents.js');
											fbq('init', '1684248644956460'); 
											fbq('track', 'PageView');
										</script>
										<noscript>
											<img height="1" width="1" 
											src="https://www.facebook.com/tr?id=1684248644956460&ev=PageView
											&noscript=1"/>
										</noscript>
										<!-- End Facebook Pixel Code --><?php single_post_title(); ?>
										
									</h1>
								</div>
							</div>
						</div>
					</header>
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

			endif;

			?>


		</div>
		<?php get_sidebar();?>
	</div>
</div>

<?php endif;?>


</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
