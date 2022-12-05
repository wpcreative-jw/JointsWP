<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

<div class="hero-image" style="background-image: url('<?php the_field('hero_image')?>');">
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



<section class="blog-content padding-150">

	<div class="grid-container">

		<div class="inner-content grid-x grid-padding-x">

			<main class="main small-12 large-8 large-offset-2 cell" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<h2><?php the_title(); ?></h2>

				<?php the_content(); ?>

				<?php endwhile; else : ?>

				<?php get_template_part( 'parts/content', 'missing' ); ?>

				<?php endif; ?>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

</section>


<section class="blog-related">

	<div class="grid-container">

		<div class="grid-x grid-padding-x">
			<div class="small-12 cell">
				<h2>More posts</h2>
			</div>
		</div>

		<div class="grid-x grid-padding-x">


			<?php

			// WP_Query arguments
			$args = array(
				'posts_per_page'         => '2',
				'post__not_in'           => array(get_the_ID()),
			);

			// The Query
			$query = new WP_Query( $args );

			// The Loop
			if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
			$query->the_post();

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
			<!--BLOG LIST ITEM-->

			<?php
				}
			} else {
				// no posts found
			}

			// Restore original Post Data
			wp_reset_postdata();

			?>

		</div>

</section>

<?php get_footer(); ?>