<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>

<div class="hero-image" style="background-image: url('<?php the_field('hero_image')?>');">
    <div class="grid-container">
        <div class="grid-x sector-top-content">
            <div class="medium-12 cell">
                <h1 class="pointy-title"><span class="heading-border"><?php the_title(); ?></span></h1>
            </div>
        </div>
    </div>
</div>

	
<div class="grid-container">
	<div class="grid-x grid-padding-x">
		<div class="medium-12 cell">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php the_content(); ?>
			
			<?php endwhile; endif; ?>	
		</div>
	</div>
</div>
								

<?php get_footer(); ?>