<?php
/**
 * The template for displaying content in the index.php template.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'col' ); ?> >

	<div>
		<header>
			<h2 class="h1 fw-light mt-2 display-3 mb-4">
				<?php the_title(); ?>
			</h2>

			<div class="w-100 py-2"></div>

			<div>
				<?php
					if ( has_post_thumbnail() ) :
						echo '<div class="post-thumbnail">' . get_the_post_thumbnail( get_the_ID(), 'large' ) . '</div>';
					endif;

					if ( is_search() ) :
						the_excerpt();
					else :
						the_content();
					endif;
				?>
			</div>

		</header>

	</div>

</article><!-- /#post-<?php the_ID(); ?> -->
