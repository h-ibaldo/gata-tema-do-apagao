<?php
/**
 * The template for displaying Comments.
 */

/**
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<div id="comments" class="mb-5">

	<div class="w-100 border-bottom pt-2 mt-5 mb-4"></div>

	<?php
		if ( comments_open() && ! have_comments() ) :
	?>

		<h2 id="comments-title" class="h5 text-secondary pt-2">
			<?php
				esc_html_e( 'Nenhum comentário ainda...', 'apagao_dos_apps' );
			?>
		</h2>
	<?php
		endif;

		if ( have_comments() ) :
	?>
		<h2 id="comments-title" class="h5 pt-2">
			<?php
				$comments_number = get_comments_number();
				if ( '1' === $comments_number ) {
					printf( _x( 'Uma resposta para &ldquo;%s&rdquo;', 'comments title', 'apagao_dos_apps' ), get_the_title() );
				} else {
					printf(
						/* translators: 1: number of comments, 2: post title */
						_nx(
							'%1$s Responder &ldquo;%2$s&rdquo;',
							'%1$s Respostas para &ldquo;%2$s&rdquo;',
							$comments_number,
							'comments title',
							'apagao_dos_apps'
						),
						number_format_i18n( $comments_number ),
						get_the_title()
					);
				}
			?>
		</h2>
		<?php
			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>
		<nav id="comment-nav-above">
			<h1 class="assistive-text"><?php esc_html_e( 'Navegação pelos comentários', 'apagao_dos_apps' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Comentários antigos', 'apagao_dos_apps' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Comentários recentes &rarr;', 'apagao_dos_apps' ) ); ?></div>
		</nav>
		<?php
			endif;
		?>
		<ol class="commentlis t apg-comentarios small ps-3">
			<?php
				/**
				 * Loop through and list the comments. Tell wp_list_comments()
				 * to use theme_comment() to format the comments.
				 * If you want to overload this in a child theme then you can
				 * define theme_comment() and that will be used instead.
				 * See theme_comment() in my-theme/functions.php for more.
				 */
				wp_list_comments( array( 'callback' => 'apagao_dos_apps_comment' ) );
			?>
		</ol>
		<?php
			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>
		<nav id="comment-nav-below">
			<h1 class="assistive-text"><?php esc_html_e( 'Navegação pelos comentários', 'apagao_dos_apps' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Comentários antigos', 'apagao_dos_apps' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Comentários recentes &rarr;', 'apagao_dos_apps' ) ); ?></div>
		</nav>
		<?php
			endif;

		/**
		 * If there are no comments and comments are closed, let's leave a little note, shall we?
		 * But we don't want the note on pages or post types that do not support comments.
		 */
		elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<h2 id="comments-title" class="nocomments"><?php esc_html_e( 'Fechado para comentários.', 'apagao_dos_apps' ); ?></h2>
	<?php
		endif;

		// Show Comment Form (customized in functions.php).
		comment_form();
	?>
</div><!-- /#comments -->
