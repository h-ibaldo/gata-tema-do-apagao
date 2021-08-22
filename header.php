<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- fontawesome: -->
	<script src="https://kit.fontawesome.com/046688162f.js" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>

<?php
	$navbar_scheme   = get_theme_mod( 'navbar_scheme', 'navbar-light bg-light' ); // Get custom meta-value.
	$navbar_position = get_theme_mod( 'navbar_position', 'static' ); // Get custom meta-value.

	$search_enabled  = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
?>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a href="#main" class="visually-hidden-focusable"><?php esc_html_e( 'Voltar ao conteúdo principal', 'apagao_dos_apps' ); ?></a>

<div id="wrapper">

	<div class="container">
		<div class="row justify-content-between">

			<!-- BARRA LATERAL ESQUERDA -->
			<div class="col-12 col-lg-3 col-xl-2 sticky-lg-top vh-lg-100 overflow-auto">

				<header>
					<nav>

						<div class="min-vh-lg-100 py-4 d-flex flex-wrap flex-lg-column navbar-expand-lg">

							<div class="d-flex justify-content-between col-12 align-items-center">

								<div class="ps-5 pe-2 d-none"></div>

								<!-- LOGO -->
								<a class="apg-nav-logo" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
									
									<?php
										
										$titulo_em_texto  = get_theme_mod( 'titulo_em_texto', '0' ); // Get custom meta-value.

										if ( '1' === $titulo_em_texto ) :
											echo esc_attr( get_bloginfo( 'name', 'display' ) );

										else:
									?>

										<?php

											$header_logo = get_theme_mod( 'header_logo' ); // Get custom meta-value.

											if ( ! empty( $header_logo ) ) :
										?>

											<img src="<?php echo esc_url( $header_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />


										<?php else: ?>

											<img src="/wp-content/themes/gata-tema-do-apagao/assets/img/lettering-apagao.jpg">

										<?php endif; ?>
									
										
									<?php endif; ?>
								</a>
								<!--/ LOGO -->

								<!-- BOTAO DO MENU -->
								<button class="btn btn-menu btn-sm collapsed d-block d-lg-none border-primary text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Abrir menu">
							    	<small>MENU</small>
							    </button>
								<!--/ BOTAO DO MENU -->
								
							</div>

							<div class="collapse navbar-collapse flex-column justify-content-between col align-items-start" id="navbarToggleExternalContent">
								<!-- MENU DE NAVEGACAO -->
								<div class="apg-nav small pt-4 pt-lg-5">

									<?php
										wp_nav_menu(
											array(
												'theme_location' => 'main-menu',
												'container'      => '',
												'menu_class'     => 'list-unstyled',
												'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
												'walker'         => new WP_Bootstrap_Navwalker(),
											)
										);
									 ?>

								</div>
								<!-- / MENU DE NAVEGACAO -->


								<!-- BUSCA - MOBILE -->
								<div class="my-4 d-block d-lg-none">
									<?php
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
								<!-- / BUSCA - MOBILE -->
							</div>

						</div>
			
					</nav>
				</header>

			</div>
			<!--/ BARRA LATERAL ESQUERDA -->



			<!-- CONTEUDO PRINCIPAL -->
			<div class="col-12 col-lg-7 col-xl-6 pt-lg-4">


			

