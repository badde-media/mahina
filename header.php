<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_theme_root_uri()?>/assets/images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_theme_root_uri()?>/mahina/assets/images/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_theme_root_uri()?>/mahina/assets/images/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_theme_root_uri()?>/mahina/assets/images/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_theme_root_uri()?>/mahina/assets/images/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_theme_root_uri()?>/mahina/assets/images/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_theme_root_uri()?>/mahina/assets/images/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_theme_root_uri()?>/mahina/assets/images/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_theme_root_uri()?>/mahina/assets/images/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_theme_root_uri()?>/mahina/assets/images/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_theme_root_uri()?>/mahina/assets/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_theme_root_uri()?>/mahina/assets/images/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_theme_root_uri()?>/mahina/assets/images/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_theme_root_uri()?>/mahina/assets/images/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo get_theme_root_uri()?>/mahina/assets/images/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<title><?php echo get_bloginfo( 'name' ); ?></title>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,900;1,900&display=swap" rel="stylesheet"> 
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --> 
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Work+Sans:ital,wght@0,875;0,900;1,900&display=swap');
</style> 
<?php wp_head();?>

</head>

<body <?php body_class(); ?>>
	<header>
	<?php 
		wp_body_open();
		?>
	<?php if(is_front_page() == TRUE) { ?>
			<div id="frontpageHero">
				<div id="logo"><img class="img-responsive glow" src="<?php echo get_theme_root_uri()?>/mahina/assets/images/mahina_journey_logo.svg" alt="Mahina Journey Logo"/></div>

				<img src="<?php echo get_theme_root_uri()?>/mahina/assets/images/hero_image_01.jpg" width="100%" alt="Mahina Journey hero image"/> 
			</div> 
			<div id="headerBG">&nbsp;</div>
		<?php } else { ?>
			
			<div id="headerBG" class="clip">&nbsp;</div>
		<?php } ?>
			
	<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
						<span class="toggle-inner">
							<span class="toggle-icon">
								<?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
							</span>
							<span class="toggle-text"><?php _e( 'Menu', 'twentytwenty' ); ?></span>
						</span>
					</button><!-- .nav-toggle -->
	<!-- end of header -->
			

				<div class="header-navigation-wrapper<?php if(is_front_page() == FALSE) { ?> pullup<?php } ?> <?php if (is_front_page() == TRUE) { ?>frontMenu<?php } ?>">

					<?php
					if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) {
						?>

							<nav class="primary-menu-wrapper" aria-label="<?php esc_attr_e( 'Horizontal', 'twentytwenty' ); ?>" role="navigation">

								<ul class="primary-menu reset-list-style">

								<?php
								if ( has_nav_menu( 'primary' ) ) {

									wp_nav_menu(
										array(
											'container'  => '',
											'items_wrap' => '%3$s',
											'theme_location' => 'primary',
										)
									);

								} elseif ( ! has_nav_menu( 'expanded' ) ) {

									wp_list_pages(
										array(
											'match_menu_classes' => true,
											'show_sub_menu_icons' => true,
											'title_li' => false,
											'walker'   => new TwentyTwenty_Walker_Page(),
										)
									);

								}
								?>

								</ul>

							</nav><!-- .primary-menu-wrapper -->

						<?php
					}

					if ( true === $enable_header_search || has_nav_menu( 'expanded' ) ) {
						?>

						<div class="header-toggles hide-no-js">

						<?php
						if ( has_nav_menu( 'expanded' ) ) {
							?>

							<div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">

								<button class="toggle nav-toggle desktop-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
									<span class="toggle-inner">
										<span class="toggle-text"><?php _e( 'Menu', 'twentytwenty' ); ?></span>
										<span class="toggle-icon">
											<?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
										</span>
									</span>
								</button><!-- .nav-toggle -->

							</div><!-- .nav-toggle-wrapper -->

							<?php
						}

						if ( true === $enable_header_search ) {
							?>

							<div class="toggle-wrapper search-toggle-wrapper">

								<button class="toggle search-toggle desktop-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
									<span class="toggle-inner">
										<?php twentytwenty_the_theme_svg( 'search' ); ?>
										<span class="toggle-text"><?php _e( 'Search', 'twentytwenty' ); ?></span>
									</span>
								</button><!-- .search-toggle -->

							</div>

							<?php
						}
						?>

						</div><!-- .header-toggles -->
						<?php
					}
					?>

				</div><!-- .header-navigation-wrapper -->

			</div><!-- .header-inner -->

			<?php
			// Output the search modal (if it is activated in the customizer).
			if ( true === $enable_header_search ) {
				get_template_part( 'template-parts/modal-search' );
			}
			?>

		</header><!-- #site-header -->

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
	
		 ?>
			</div>
		</div>
	<div class="wrapper<?php if(is_front_page() == FALSE) { ?> pulldown<?php } ?>">
	<?php /*
	<div class="container">
<div class="blog-header">
		?><h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
		<p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p><?php 
	</div>*/?>
