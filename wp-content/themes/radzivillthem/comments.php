<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RadzivillThem
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */

if ( post_password_required() ) {
	return;
}
?>
<div class="container">
	<div class="row">
		<div id="comments" class="comments-area col-12">

			<?php
	// You can start editing here -- including this comment!
			if ( have_comments() ) : ?>
			<h3 class="comments-title pt-1 pb-2 text-info">
				<?php
				$comment_count = get_comments_number();
				if ( '1' === $comment_count ) {
					printf(
						/* translators: 1: title. */
						esc_html__( 'Залишен перший коментар на статтю &ldquo;%1$s&rdquo;!', 'radzivillthem' ),
						'<span>' . get_the_title() . '</span>'
					);
				} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s  &ldquo;%2$s&rdquo;', 'Залишено коментарів: %1$s на статтю &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'radzivillthem' ) ),
					number_format_i18n( $comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h3><!-- .comments-title -->

		<?php the_comments_navigation(); ?>
		<div class="container">
			<div class="row">
				<ol class="comment-list list-group pb-3 col-12">
					<?php
					wp_list_comments( array(
						'style'      => 'ol ',
						'short_ping' => true,
						'callback' => 'radzivilltheme_list_comment'
					) );
					?>
				</ol>
			</div>
		</div>
		<!-- .comment-list -->
		<?php
    // Are there comments to navigate through?
		if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
			?>
			<nav class="navigation comment-navigation" role="navigation">
				<h3 class="screen-reader-text section-heading"><?php esc_html_e( 'Comment navigation', 'radzivillthem' ); ?></h3>
				<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'radzivillthem' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'radzivillthem' ) ); ?></div>
			</nav><!-- .comment-navigation -->
		<?php endif; // Check for comment navigation ?>
		<?php the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Коментарі закриті', 'radzivillthem' ); ?></p>
		<?php
	endif;

	endif; // Check for have_comments().
	?>
	<div class="col-12 pt-3">
		<?php
		$aria_req = ($req) ? " aria-required='true'" : '' ;
		$comments_args = array(
			'fields' => array(
				'author' => '<div class="comment-form-author input-group mb-3">' . '<div for="author" class="input-group-prepend">' . '</div> ' . ( $req ? '<span class="required input-group-text mr-1 text-info" >*</span>' : '' ) .'<input id="author" placeholder="Ваше ім&rsquo;я" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '"' . $aria_req . ' /></div>',
				'email'  => '<div class="comment-form-email input-group mb-3"><div class="input-group-prepend" for="email">' . '</div> ' . ( $req ? '<span class="required input-group-text mr-1 text-info">*</span>' : '' ) .
				'<input id="email" class="form-control" placeholder="Ваш email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '"' . $aria_req . ' /></div>',
				'url'    => '<div class="comment-form-url input-group mb-3"><div class="input-group-prepend" for="url">' . '</div>' .
				'<input id="url" class="form-control" placeholder="Адресса вашого сайту (поле не обов&rsquo;язкове для заповнення)" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '"/></div>'
			),
			'class_submit' => 'btn btn-success',
			'submit_field' => '<div class="form-submit pb-3">%1$s %2$s</div>',
			'comment_field' => '<div class="comment-form-comment input-group pb-3"><div class="input-group-prepend"><span class="input-group-text text-info pr-2" for="comment">' . esc_html_x( 'Comment', 'noun' ) . '</span></div><textarea id="comment" name="comment" rows="3" aria-required="true" aria-label="With textarea" class="form-control"></textarea></div>'
		);

		comment_form($comments_args);
		?>
	</div>
</div><!-- #comments -->
</div>
</div>