<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RadzivillThem
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<div class="container pt-5 pb-5 ">
						<div class="row justify-content-center" >
							<h1 class="page-title w-100 p-5 text-center text-info wow bounceInRight" data-wow-delay="0.6s"><?php esc_html_e( 'Вибачте, але, цієї сторінки не існує!', 'radzivillthem' ); ?></h1>
							<p class="h2 p-5 pt-0 w-100 text-center text-info wow bounceInRight" data-wow-delay="0.6s">Помилка 404.</p>
						</div>
					</div>
					
				</header><!-- .page-header -->


			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
