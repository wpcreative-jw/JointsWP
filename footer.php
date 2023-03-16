<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>

<footer class="footer" role="contentinfo">

	<div class="footer-top">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">

				<div class="medium-12 cell">
					<h3>Join our newsletter for all the latest updates and offers</h3>	
				</div>

			</div>
		</div>
	</div>

	<div class="footer-middle">
		<div class="grid-container">

			<div class="grid-x grid-padding-x">

				<div class="medium-6 large-3 cell">
					<div class="logo">
						<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url') ?>/assets/images/afs-logo-reversed.png"></a>
					</div>
					<?php get_template_part( 'parts/content', 'socialicons' ); ?>
				</div>
				<div class="large-3 cell"></div>
				<div class="medium-2 cell">
					<h4>Shop</h4>
					<?php joints_footer_one(); ?>
				</div>
				<div class="medium-2 cell">
					<h4>About</h4>
					<?php joints_footer_two(); ?>
				</div>
				<div class="medium-2 cell">
					<h4>Help</h4>
					<?php joints_footer_three(); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-bottom">

		<div class="grid-container">

			<div class="grid-x grid-padding-x">

				<div class="medium-6 cell">
					<ul class="menu">
						<li>
							<a href="/terms-conditions/">Terms &amp; Conditions</a>
						</li>
						<li>
							<a href="/privacy-policy/">Privacy Policy</a>
						</li>
					</ul>
				</div>

				<div class="medium-6 cell">
					<ul class="menu align-right">
						<li>
							<a href="https://wpcreative.uk/">Website by WP Creative</a>
						</li>
					</ul>
				</div>
			</div>


		</div>

	</div>


</footer> <!-- end .footer -->

</div> <!-- end .off-canvas-content -->

</div> <!-- end .off-canvas-wrapper -->


<?php wp_footer(); ?>

</body>

</html> <!-- end page -->