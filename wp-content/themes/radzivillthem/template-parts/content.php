<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RadzivillThem
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title text-info">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="text-info">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="">
			<?php
			radzivillthem_posted_on();
			radzivillthem_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<?php radzivillthem_post_thumbnail('blog-list'); ?>
	

	<div class="entry-content">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__('<p class="screen-reader-text">Читати далі:  "%s"</p>', 'radzivillthem' ),
							array(
								'p' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'radzivillthem' ),
						'after'  => '</div>',
					) );
					?>
				</div>
				
			</div>
		</div>
		
	</div><!-- .entry-content -->
	<div class="border border-info border-right-0 border-top-0 border-left-0 mt-1 mb-4"></div>

</article><!-- #post-<?php the_ID(); ?> -->
