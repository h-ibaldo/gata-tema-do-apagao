			</div>
			<!-- / CONTEUDO PRINCIPAL -->


			<div class="col-12 col-lg-2 sticky-top vh-lg-100">

				<footer id="footer">

					<div class="d-flex flex-column min-vh-lg-100 justify-content-between py-4">
						<!-- BUSCA - DESKTOP -->
						<div class="d-none d-lg-block">
							<?php
							$search_enabled  = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
							if ( '1' === $search_enabled ) :
							?>
									<form class="search-form my-2 my-lg-0" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
										<div class="input-group">
											<input type="text" name="s" class="form-control" placeholder="<?php esc_attr_e( 'Busca', 'apagao_dos_apps' ); ?>" title="<?php esc_attr_e( 'Busca', 'apagao_dos_apps' ); ?>" />
										</div>
									</form>
							<?php
								endif;
							?>
						</div>
						<!-- / BUSCA - DESKTOP -->

						<!-- ICONES DE REDES SOCIAIS -->
						<div class="h4 d-flex flex-row flex-lg-column mt-4 mb-lg-5 align-items-lg-end">
							<div class="mb-3 ms-">
								<a href="https://twitter.com/galodeluta">
									<i class="fab fa-twitter"></i>
								</a>
							</div>
							<div class="mb-3 ms-4">
								<a href="https://www.instagram.com/galodelutaoficial/">
									<i class="fab fa-instagram"></i>
								</a>
							</div>
							<div class="mb-3 ms-4">
								<a href="">
									<i class="fab fa-telegram"></i>
								</a>
							</div>
							<div class="mb-3 ms-4">
								<a href="">
									<i class="fab fa-whatsapp"></i>
								</a>
							</div>
						</div>
						<!-- / ICONES DE REDES SOCIAIS -->

						<!-- CREDITOS -->
						<div class="text-end lh-sm text-secondary" style="font-size: 0.6rem;">
							🐈‍⬛
							<br>
							Site por: gata
							<br>
							Grupo de Ativismo
							<br>
							Tecnológico Autônomo
						</div>
						<!-- / CREDITOS -->


					</div>
				</footer>
					
			</div>

	</div><!-- / container -->
</div><!-- / wrapper -->

<?php
	wp_footer();
?>

</body>
</html>
