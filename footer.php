<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->
<?php 
	astra_content_after();
		
	astra_footer_before();
		
	//astra_footer();
	?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="site-info-container container">
				<div class="site-info-top">
					<div class="site-info-top-left-cont">
						<ul class="site-info-top-left-menu-list">
							<?php
								wp_nav_menu(array(
									'menu' => 'footer',
									'container' => false,
									'items_wrap' => '%3$s',
								)); 

							?>
						</ul>
					</div>
					<div class="site-info-top-right-cont">
						<div class="site-info-top-right-social-media-cont">
							<a class="social-media-link" href="https://www.facebook.com/dormi.arts" target="_blank">
								<div class="social-media-icon-cont">
									<img class="social-media-icon" src="<?php echo get_template_directory_uri().'/assets/icon/social/facebook_f.svg' ?>">
								</div>
							</a>
							<a class="social-media-link" href="https://www.instagram.com/dormiarts/" target="_blank">
								<div class="social-media-icon-cont">
									<img class="social-media-icon" src="<?php echo get_template_directory_uri().'/assets/icon/social/instagram.svg' ?>">
								</div>
							</a>
							<a class="social-media-link" href="https://www.linkedin.com/company/dormi-arts/" target="_blank">
								<div class="social-media-icon-cont">
									<img class="social-media-icon" src="<?php echo get_template_directory_uri().'/assets/icon/social/linkedin.svg' ?>">
								</div>
							</a>
							<a class="social-media-link" href="https://twitter.com/DormiArtsOnX" target="_blank">
								<div class="social-media-icon-cont">
									<img class="social-media-icon" src="<?php echo get_template_directory_uri().'/assets/icon/social/x.svg' ?>">
								</div>
							</a>
							<a class="social-media-link" href="https://www.tiktok.com/@dormi.arts?_t=8jiDCSjTRyf&_r=1" target="_blank">
								<div class="social-media-icon-cont">
									<img class="social-media-icon" src="<?php echo get_template_directory_uri().'/assets/icon/social/tiktok.svg' ?>">
								</div>
							</a>
							<a class="social-media-link" href="https://www.youtube.com/@DormiArts" target="_blank">
								<div class="social-media-icon-cont">
									<img class="social-media-icon" src="<?php echo get_template_directory_uri().'/assets/icon/social/youtube.svg' ?>">
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="site-info-bottom">
					<div class="site-info-bottom-left-cont">
						<form class="site-info-bottom-left-form">
							<p class="site-info-bottom-left-title">Subscribe to our newsletter and receive exclusive content about our auctions, exhibitions, and special events.</p>
							<p class="site-info-bottom-left-info"></p>
							<input class="site-info-bottom-left-input" type="email" placeholder="Enter Your Email">
							<button class="site-info-bottom-left-btn">Submit</button>
						</form>
					</div>
					<div class="site-info-bottom-right-cont">
						<p class="site-info-bottom-right-text">&copy; <?php echo date("Y"); ?> Dormi Arts</p>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer>

	<?php
	astra_footer_after(); 
?>
	</div><!-- #page -->
<?php 
	astra_body_bottom();    
	wp_footer(); 
?>
	</body>
</html>
