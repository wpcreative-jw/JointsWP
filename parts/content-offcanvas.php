<?php
/**
 * The template part for displaying offcanvas content
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="off-canvas position-right" id="off-canvas" data-off-canvas>

	<img class="mm-logo" src="<?php bloginfo('template_url') ?>/assets/images/jmp-services-logo-white.png">

	<?php joints_off_canvas_nav(); ?>

	<ul class="menu">
		<li class="mm-email">
			<a class="header-email" href="mailto:jmpsuffolk@gmail.com">jmpsuffolk@gmail.com</a>
		</li>
		<li class="mm-tel">
			<a href="tel:08005878003">0800 5878003</a>
		</li>
	</ul>

	<ul class="header-social menu hide">
		<li class="social-icon hide"><a href="https://www.facebook.com/Wayne-mills-construction-118364269959285/"
				target="_blank"><img
					src="<?php bloginfo('template_url') ?>/assets/images/social/social-facebook-blue.png"></a>
		</li>
		<li class="social-icon"><a href="https://www.linkedin.com/company/d-w-surfacing-eastern-ltd/"
			target="_blank"><img
				src="<?php bloginfo('template_url') ?>/assets/images/social/social-linkedin-blue.png"></a>
		 </li>
		<li class="social-icon"><a href="https://www.instagram.com/dws_eastern/"
				target="_blank"><img
					src="<?php bloginfo('template_url') ?>/assets/images/social/social-instagram-blue.png"></a>
		</li>
		
	</ul>

	<?php if ( is_active_sidebar( 'offcanvas' ) ) : ?>

		<?php dynamic_sidebar( 'offcanvas' ); ?>

	<?php endif; ?>

</div>
