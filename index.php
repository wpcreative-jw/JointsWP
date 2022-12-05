<?php
/**
 * Displays archive pages if a speicifc template is not set. 
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>


<div class="hero-image bg-greylines">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="medium-6 large-8 cell">
                <div class="home-title curve">
                    <h1>Blog</h1>
                    <p>Our blog will consist of news, updates and anything else that will be useful for you.</p>
                </div>
            </div>
            <div class="medium-6 large-4 cell">
                <div class="home-phone og curve">
                    <p>Get in touch with us today</p>
                    <p class="home-tel"><a href="tel:08005878003">0800 5878003</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="blogs">
	<div class="grid-container">
	
		<div class="grid-x grid-padding-x" data-equalizer>
	

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