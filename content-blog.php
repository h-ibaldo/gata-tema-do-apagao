<?php
/**
 * The template for displaying content in the index.php template.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'col-12' ); ?> >


	<div class="rounded-3 overflow-hidden shadow mb-4">

		<?php if( has_post_thumbnail() ) : ?>
			<a href="<?php echo get_the_permalink(); ?>">
				<div 
					class="img-cover-preview" 
					style="background-image: url(' <?php echo get_the_post_thumbnail_url() ?>')" 
				></div>				
			</a>
			<?php endif; ?>


		<div class="p-4">

			<header>
				<h2 class="h2 mb-3">
					<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'apagao_dos_apps' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h2>				
			</header>
			
			<div class="border-bottom">
				<?php the_excerpt(); ?>
			</div>

			<footer>
				<div class="d-flex flex-wrap justify-content-between align-items-center mt-1">
				
					<div class="small mt-3 me-3">

						<?php 
							if (get_post_type() === 'post') :
						?>
						
							<?php
								if ( 'post' === get_post_type() ) :
							?>
								<div class="">

									<span>Por: </span>

									<?php echo get_the_author_link() ?>

									<span> , </span>

									<?php echo get_the_date() ?>

								</div><!-- /.entry-meta -->

							<?php endif; ?>

						<?php elseif (!get_post_type() === 'page') : ?>

							<div>Fonte: </div> 

						<?php endif; ?>

					</div>
					
					<div class="mt-3">
						<a href="<?php echo get_the_permalink(); ?>" class="fw-bold">
							<?php esc_html_e( 'Ler mais...', 'apagao_dos_apps' ); ?>
						</a>
					</div>

				</div>
			</footer>
		</div>
		
	</div>


</article><!-- /#post-<?php the_ID(); ?> -->
