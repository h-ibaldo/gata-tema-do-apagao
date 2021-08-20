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

<a href="#main" class="visually-hidden-focusable"><?php esc_html_e( 'Skip to main content', 'apagao_dos_apps' ); ?></a>

<div id="wrapper">

	<header>
		<nav>
			<div class="container">
				<div class="row">

					<!-- BARRA LATERAL ESQUERDA -->
					<div class="col-xl-2">

						<div class="min-vh-100 py-4 d-flex flex-column">

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

							<div class="d-flex flex-column col justify-content-between mt-5">

								<!-- MENU DE NAVEGACAO -->
								<div >

									<?php
										wp_nav_menu(
											array(
												'theme_location' => 'main-menu',
												'container'      => '',
												'menu_class'     => 'navbar-nav me-auto',
												'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
												'walker'         => new WP_Bootstrap_Navwalker(),
											)
										);
									 ?>

								</div>
								<!-- / MENU DE NAVEGACAO -->


								<!-- ICONES DE REDES SOCIAIS -->
								<div class="h4">

									<p>
										<a href="">
											<i class="fab fa-twitter"></i>
										</a>
									</p>
									<p>
										<a href="">
											<i class="fab fa-instagram"></i>
										</a>
									</p>
									<p>
										<a href="">
											<i class="fab fa-telegram"></i>
										</a>
									</p>
									<p>
										<a href="">
											<i class="fab fa-whatsapp"></i>
										</a>
									</p>

								</div>

								<!-- / ICONES DE REDES SOCIAIS -->
								
							</div>


							

						</div>


					</div>
					<!--/ BARRA LATERAL ESQUERDA -->


					<div class="col">
						body
					</div>

					<div class="col-xl-2">
						<div class="my-4">
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
						
					</div>
				</div>
			</div>

		</nav>
	</header>
			

	<header class="d-none">
		<nav id="header" class="navbar navbar-expand-md <?php echo esc_attr( $navbar_scheme ); if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' fixed-top'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' fixed-bottom'; endif; if ( is_home() || is_front_page() ) : echo ' home'; endif; ?>">
			<div class="container">
				<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php
						$header_logo = get_theme_mod( 'header_logo' ); // Get custom meta-value.

						if ( ! empty( $header_logo ) ) :
					?>
						<img src="<?php echo esc_url( $header_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
					<?php
						else :
							echo esc_attr( get_bloginfo( 'name', 'display' ) );
						endif;
					?>
				</a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'apagao_dos_apps' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div id="navbar" class="collapse navbar-collapse">
					<?php
						// Loading WordPress Custom Menu (theme_location).
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'container'      => '',
								'menu_class'     => 'navbar-nav me-auto',
								'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
								'walker'         => new WP_Bootstrap_Navwalker(),
							)
						);

						if ( '1' === $search_enabled ) :
					?>
							<form class="search-form my-2 my-lg-0" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<div class="input-group">
									<input type="text" name="s" class="form-control" placeholder="<?php esc_attr_e( 'Search', 'apagao_dos_apps' ); ?>" title="<?php esc_attr_e( 'Search', 'apagao_dos_apps' ); ?>" />
									<button type="submit" name="submit" class="btn btn-outline-secondary"><?php esc_html_e( 'Search', 'apagao_dos_apps' ); ?></button>
								</div>
							</form>
					<?php
						endif;
					?>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav><!-- /#header -->
	</header>

	<main id="main" class="container d-none">
		<div class="row">
				<div class="col-md-8 col-sm-12">
