<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>



<div class="site-header show-for-large">

	<div class="header-top">
		<div class="grid-x grid-padding-x">

			<div class="medium-4 cell">
				<a class="header-email" href="mailto:jmpsuffolk@gmail.com">jmpsuffolk@gmail.com</a>
			</div>

			<div class="medium-4 cell text-center" style="position: relative;">

				<div class="logo align-center">
					<a href="<?php echo home_url(); ?>"><img
							src="<?php bloginfo('template_url') ?>/assets/images/jmp-services-logo.png"></a>
				</div>

			</div>

			<div class="medium-4 cell text-right">
				<a class="header-tel" href="tel:08005878003">0800 5878003</a>
			</div>

		</div>
	</div>
	<!--Header top-->

	<div class="header-bottom">
		<div class="grid-x grid-padding-x">

			<div class="medium-6 cell">
				<?php joints_top_nav(); ?>
			</div>

			<div class="medium-6 cell">
				<ul class="menu align-right">
					<li>
						<a href="/resources/">Resources</a>
					</li>
					<li>
						<a href="/blog/">Blog</a>
					</li>
					<li>
						<a class="contact-btn" href="/contact-us/">Contact Us</a>
					</li>
					<li>
						<a class="contact-btn og" href="/contact-us/#footerquote">Get Quote</a>
					</li>
				</ul>
			</div>

		</div>
	</div>
</div>

<div class="mob-header hide-for-large">
	<div class="grid-x">
		<div class="medium-12 cell" style="position: relative;">
			<div class="logo">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php bloginfo('template_url') ?>/assets/images/jmp-services-logo.png">
				</a>
			</div>
			<button class="menu-icon" type="button" data-toggle="off-canvas"></button>
		</div>
	</div>
</div>