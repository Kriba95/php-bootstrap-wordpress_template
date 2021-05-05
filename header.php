<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;0,800;1,300;1,700;1,800&display=swap" rel="stylesheet">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link href="../assets/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="../assets/favicon.ico" rel="icon">

  <title>VaTa Järjestöpalvelu</title>  
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->

	<header>
	<header>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="navbar-collapse">
        <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="./index.html#contact-section-container" title="" class="anchor-link">Contact Us</a></li>
            <li>
                <p>
                    <a href="./components.html" class="btn btn-default navbar-btn" >Components</a>
                </p>
            </li>


        </ul>

      </div>
    </div>
  </nav>
</header>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="navbar-collapse">
        <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="./index.html#contact-section-container" title="" class="anchor-link">Contact Us</a></li>
            <li>
                <p>
                    <a href="./components.html" class="btn btn-default navbar-btn" >Components</a>
                </p>
            </li>


        </ul>

      </div>
    </div>
  </nav>
</header>









		
			
			

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>
		<!-- Nav menu -->

					<nav id="main-nav" class="navbar navbar-expand-md navbar-dark bg-primary" aria-labelledby="main-nav-label">

						<h2 id="main-nav-label" class="sr-only">
							<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
						</h2>

						<?php if ( 'container' === $container ) : ?>
						<div class="container">
						<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>

						<?php
					} else {
						the_custom_logo();
					}
					?>
		
					<!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>
				

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
				
			<?php if ( 'container' === $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->
		

	</div><!-- #wrapper-navbar end -->
