<?php
/**
 * Template Name: Page (Default)
 * Description: Page template with Sidebar on the left side.
 *
 */

get_header();

the_post();
?>

	<div id="post-<?php the_ID(); ?>" <?php post_class( 'content' ); ?>>
		<h1 class="entry-title fw-light display-3 mt-2 mt-lg-4 mb-5">
			<?php the_title(); ?>
		</h1>


		<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'apagao_dos_apps' ),
					'after'  => '</div>',
				)
			);
			edit_post_link( esc_html__( 'Edit', 'apagao_dos_apps' ), '<span class="edit-link">', '</span>' );
		?>
	</div><!-- /#post-<?php the_ID(); ?> -->
	<?php
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
	?>

<?php
get_footer();
