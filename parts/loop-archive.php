<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<div class="medium-6 cell">

	<div class="blog-list-item curve">
	<article id="post-<?php the_ID(); ?>">

		<div class="blog-list-image" style="background-image: url(<?php the_field( 'hero_image' ); ?>);"></div>

		<div class="blog-list-content" data-equalizer-watch>
			<h3><a href="<?php the_permalink() ?>" rel="bookmark"
				title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

				

				<div class="grid-x">
					<div class="small-12 large-6 cell">
						<?php $content = get_the_content(); echo mb_strimwidth($content, 0, 100, '...');?>
					</div>
					<div class="small-12 large-6 cell align-middle">
						<a class="button" href="<?php the_permalink() ?>">Read More</a>
					</div>
				</div>				
		</div>
		<div class="blog-list-border"></div>
		
	</article> <!-- end article -->
	</div>
</div>
