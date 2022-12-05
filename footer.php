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

	<div class="footer-cta">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="medium-12 cell">
					<div class="getaquote curve og shadow">
						<h2>Get a quote</h2>
						<p>Does your property require an asbestos survey, get a quote</p>
						<div class="quote-form">
							<?php echo do_shortcode('[wpforms id="185" title="false"]'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="footer-top">
			<div class="grid-x grid-padding-x">
				<div class="large-10 large-offset-1 cell">
				<ul class="menu expanded">
				<?php if ( have_rows( 'footer_logos', 'option' ) ) : ?>
				<?php while ( have_rows( 'footer_logos', 'option' ) ) : the_row(); ?>
				<?php if ( get_sub_field( 'logo' ) ) : ?>
				<li>
					<img src="<?php the_sub_field( 'logo' ); ?>" />
				</li>

				<?php endif ?>
				<?php endwhile; ?>
				<?php else : ?>
				<?php // no rows found ?>
				<?php endif; ?>
				</ul>
				</div>
			</div>
	</div>

	<div class="footer-middle">
		<div class="grid-container">

			<div class="grid-x grid-padding-x">

				<div class="medium-12 cell">
					<ul class="menu align-center">
						<li>
							<a href="#">Get in touch with us today</a>
						</li>
						<li>
							<a class="ftel" href="tel:08005878003">0800 5878003</a>
						</li>
						<li>
							<a href="mailto:jmpsuffolk@gmail.com">jmpsuffolk@gmail.com</a>
						</li>
					</ul>
				</div>

			</div>
		</div>
	</div>

	<div class="footer-bottom">


		<div class="grid-container">

			<div class="fb-top grid-x grid-padding-x">

				<div class="medium-12 cell">

					<a href="<?php echo home_url(); ?>"><img width="150"
							src="<?php bloginfo('template_url') ?>/assets/images/jmp-services-logo-white.png"></a>

					<p>JMP Services Ltd,<br>
						Brinkleys, Unit 2,<br>
						Hall St, Long Melford,<br>
						Suffolk, CO10 9JR
						</p>
				</div>
			</div>

			<div class="fb-bottom grid-x grid-padding-x">

				<div class="medium-4 cell">
					<ul class="menu align-left">
						<li>
							<a href="tel:08005878003">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></a>
						</li>
					</ul>
				</div>

				<div class="medium-4 cell">
					<ul class="menu align-center">
						<li>
							<a href="/terms-conditions/">Terms &amp; Conditions</a>
						</li>
						<li>
							<a href="/privacy-policy/">Privacy Policy</a>
						</li>
					</ul>
				</div>

				<div class="medium-4 cell">
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