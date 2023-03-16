<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>



<div class="site-header show-for-large">

	<div class="header-top">

		<div class="grid-container">

			<div class="grid-x grid-padding-x">

				<div class="medium-6 cell">

					<ul class="menu seller-nav">
						<li>
							<a href="/sell/">Become a Seller</a>
						</li>
						<li>
							<a href="/my-account/">Login</a>
						</li>
					</ul>

				</div>

				<div class="medium-6 cell">
					<ul class="menu align-right top-nav">
						<li>
							<a href="/about-us/">About Us</a>
						</li>
						<li>
							<a href="/contact-us/">Contact Us</a>
						</li>
						<li>
							<a href="/basket/">Basket</a>
						</li>
					</ul>
				</div>

			</div>
		</div>
	</div>
	<!--Header top-->

	<div class="header-bottom">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">

				<div class="medium-6 large-3 cell">
					<div class="logo">
						<a href="<?php echo home_url(); ?>"><img
								src="<?php bloginfo('template_url') ?>/assets/images/afs-logo.png"></a>
					</div>
				</div>

				<div class="medium-6 large-9 cell">
					<?php joints_top_nav(); ?>
				</div>

			</div>
		</div>
	</div>
	<!--Header bottom-->
</div>
<!--Site header-->


<div class="mob-header hide-for-large">
	<div class="grid-x">
		<div class="medium-12 cell" style="position: relative;">
			<div class="logo">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php bloginfo('template_url') ?>/assets/images/afs-logo.png">
				</a>
			</div>
			<button class="menu-icon" type="button" data-toggle="off-canvas"></button>
		</div>
	</div>
</div>

<!--Mob header-->