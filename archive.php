<?php
/**
 * Displays archive pages if a speicifc template is not set. 
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>
			

<?php get_template_part( 'parts/content', 'blogfilters' ); ?>

<section class="blogs">
	<div class="grid-container">
	
		<div class="grid-x grid-padding-x">
	

			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive' ); ?>
				    
				<?php endwhile; ?>	

					<?php joints_page_navi(); ?>
					
				<?php else : ?>
											
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php endif; ?>
																								

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

</section>

<?php get_footer(); ?>