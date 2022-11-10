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
	<div class="info-bar" style="padding:0.3% 4%; width:100%; background-color:#004E42; height:auto; display:flex; justify-content:space-between; align-items:center">
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
		<div class="site-branding" style="display:flex;">
			<?php
			the_custom_logo();
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
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'iwu' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
