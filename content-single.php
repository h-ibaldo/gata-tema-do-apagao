<?php
/**
 * The template for displaying content in the single.php template.
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<?php 

			if ( has_post_thumbnail() ) :
				echo '<div class="mt-n4 pb-2">' . get_the_post_thumbnail( get_the_ID(), 'large' ) . '</div>';
			endif;

		?>


		<h1 class="entry-title display-3 mt-2 mt-lg-4 fw-light mb-4 pb-1 pb-lg-0 mb-lg-5"><?php the_title(); ?></h1>
		<?php
			if ( 'post' === get_post_type() ) :
		?>
			<div class="entry-meta border-1 border-top border-bottom py-3">
				<?php apagao_dos_apps_article_posted_on(); ?>
			</div><!-- /.entry-meta -->
		<?php
			endif;
		?>
	</header><!-- /.entry-header -->

	<div class="w-100 d-block pt-2" aria-hidden="true"></div>

	<div class="entry-content">
		<?php

			the_content();

			wp_link_pages( array( 'before' => '<div class="page-link"><span>' . esc_html__( 'Pages:', 'apagao_dos_apps' ) . '</span>', 'after' => '</div>' ) );
		?>
	</div><!-- /.entry-content -->

	<?php
		edit_post_link( __( 'Edit', 'apagao_dos_apps' ), '<span class="edit-link">', '</span>' );
	?>

	<footer class="entry-meta d-none">
		<hr>
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'apagao_dos_apps' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'apagao_dos_apps' ) );
			if ( '' != $tag_list ) :
				$utility_text = __( 'This entry was posted in %1$s and tagged %2$s by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'apagao_dos_apps' );
			elseif ( '' != $category_list ) :
				$utility_text = __( 'This entry was posted in %1$s by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'apagao_dos_apps' );
			else :
				$utility_text = __( 'This entry was posted by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'apagao_dos_apps' );
			endif;

			printf(
				$utility_text,
				$category_list,
				$tag_list,
				esc_url( get_the_permalink() ),
				the_title_attribute( 'echo=0' ),
				get_the_author(),
				esc_url( get_author_posts_url( (int) get_the_author_meta( 'ID' ) ) )
			);
		?>
		<hr>
		<?php
			get_template_part( 'author', 'bio' );
		?>
	</footer><!-- /.entry-meta -->
</article><!-- /#post-<?php the_ID(); ?> -->
