<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php 
if ( apply_filters( 'astra_header_profile_gmpg_link', true ) ) {
	?>
	 <link rel="profile" href="https://gmpg.org/xfn/11"> 
	 <?php
} 
?>
<?php wp_head(); ?>
<?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
<?php astra_body_top(); ?>
<?php wp_body_open(); ?>

<a
	class="skip-link screen-reader-text"
	href="#content"
	role="link"
	title="<?php echo esc_attr( astra_default_strings( 'string-header-skip-link', false ) ); ?>">
		<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>
</a>

<div
<?php
	echo astra_attr(
		'site',
		array(
			'id'    => 'page',
			'class' => 'hfeed site',
		)
	);
	?>
>
	<?php
	astra_header_before();

	// astra_header(); ?>
	<div class="page-splash-cont" id="page-splash-cont">
		<div class="page-splash">
			<div  class="page-splash-img-cont">
				<img class="page-splash-img" src="<?php echo get_template_directory_uri().'/assets/images/logo-color.png' ?>">
			</div>
		</div>
	</div>
	<header class="header">
		<div class="header-cont">
			<div class="header-desktop">
				<div class="header-desktop-top-cont">
					<div class="header-desktop-top container">
						<div class="header-desktop-top-left">
							<ul class="header-desktop-top-left-menu">
								<?php
									wp_nav_menu(array(
										'menu' => 'top',
										'container' => false,
										'items_wrap' => '%3$s',
									)); 

								?>
						</ul>
						</div>
						<div class="header-desktop-top-right">
							<ul class="header-desktop-top-right-menu">
								<li>
									<?php
										if ( is_user_logged_in() ) {
										echo '<a href="'.site_url().'/my-account">';
											echo wp_get_current_user()->display_name;
										echo '</a>';
										} else {
											echo '<a href="'.site_url().'/login">';
												echo 'Login | Signup';
											echo '</a>';
										}
									?>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="header-desktop-bottom-cont">
					<div class="header-desktop-bottom container">
						<div class="header-desktop-left">
							<a class="header-desktop-site-name-cont textColor" href="<?php echo site_url(); ?>">
								<p class="header-desktop-site-name"><?php echo get_bloginfo('name'); ?></p>
							</a>
						</div>
						<div class="header-desktop-center"></div>
						<div class="header-desktop-right">
							<nav class="header-desktop-navigation-cont">
								<ul class="header-desktop-navigation">
									<?php
										wp_nav_menu(array(
											'menu' => 'primary',
											'container' => false,
											'items_wrap' => '%3$s',
										)); 
									?>
								</ul>
							</nav>
							<div class="header-desktop-checkout-cont">
								<a class="header-desktop-checkout-btn" href="<?php echo site_url().'/shop'; ?>">
									<p  class="header-desktop-checkout-btn-text">Shop</p>
									<div  class="header-desktop-checkout-number-cont">
										<p class="header-desktop-checkout-number"><?php echo WC()->cart->get_cart_contents_count(); ?></p>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-mobile">
				<div class="header-mobile-left">
					<div class="hamburger-menu-cont">
						<div class="hamburger-menu">
							<div class="hamburger-menu-line"></div>
							<div class="hamburger-menu-line"></div>
							<div class="hamburger-menu-line"></div>
						</div>
					</div>
					
				</div>
				<div class="header-mobile-center">
					<a class="header-mobile-site-name-cont" href="<?php echo site_url(); ?>">
						<p class="header-mobile-site-name"><?php echo get_bloginfo('name'); ?></p>
					</a>
				</div>
				<div class="header-mobile-right">
					<a href="#" class="header-mobile-cart-link">
						<div class="header-mobile-cart-number-cont">
							<p class="header-mobile-cart-number"><?php echo WC()->cart->get_cart_contents_count(); ?></p>
						</div>
						<img class="header-mobile-cart-icon" src="<?php echo get_template_directory_uri().'/assets/icon/shoppingBag.svg' ?>">
					</a>
				</div>
			</div>
		</div>
	</header>
	<div class="mobile-navigation-cont">
		<div class="mobile-navigation">
			<ul class="mobile-navigation-list">
				<?php
					wp_nav_menu(array(
						'menu' => 'primary',
						'container' => false,
						'items_wrap' => '%3$s',
					)); 

				?>
				<?php
					wp_nav_menu(array(
						'menu' => 'top',
						'container' => false,
						'items_wrap' => '%3$s',
					)); 

				?>
				<li>
					<?php
						if ( is_user_logged_in() ) {
						echo '<a href="'.wp_logout_url( home_url() ).'">';
							echo 'Logout ('.wp_get_current_user()->display_name.')';
						echo '</a>';
						} else {
							echo '<a href="'.site_url().'/login">';
								echo 'Login / Signup';
							echo '</a>';
						}
					?>
				</li>
			</ul>
		</div>
	</div>


	

	<?php
	astra_header_after();

	astra_content_before();
	?>
	<div id="content" class="site-content">
		<div class="ast-container">
		<?php astra_content_top(); ?>
		
