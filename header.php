<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package IWU_Scores
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'iwu' ); ?></a>

	<header id="masthead" class="site-header">
	
			<div class="info-bar" style="">
				<div>
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/iwu-logo-info-bar.png' ); ?>" />
				</div>	
				<form action="#">
					<select name="languages" id="lang">
					<option value="javascript">IWU.edu</option>
						<option value="javascript">Admissions</option>
						<option value="php">Giving</option>
						<option value="java">Athletics</option>
						<option value="golang">Alumni</option>
						<option value="python">Student Life</option>
					</select>
				</form>
			</div>
		
		<div class="site-branding" >
			<div class="wrapper-site-branding">
				<?php
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$iwu_description = get_bloginfo( 'description', 'display' );
					if ( $iwu_description || is_customize_preview() ) :
						?>
					<p class="site-description"><?php echo $iwu_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
				<nav id="site-navigation" class="main-navigation">
				<div class="wrapper-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '&#x2630;', 'iwu' ); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
				</div>
			</nav><!-- #site-navigation -->
			</div><!-- .wrapper-site-branding -->
			
		</div><!-- .site-branding -->
		<div class="custom-logo">
			
				<?php
				the_custom_logo();
				?>
			
		
		</div>
		
		
	</header><!-- #masthead -->
