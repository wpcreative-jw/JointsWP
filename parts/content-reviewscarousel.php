<?php
/**
 * The template part for displaying the latest blog
 */
?>


<?php

// WP_Query arguments
$args = array(
    'post_type'              => array( 'post' ),
    'posts_per_page'         => '1',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
        $query->the_post(); ?>

<section class="home-blog">

    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell hb-top" style="position: relative;">
                <div class="hb-triangle"><img src="<?php bloginfo('template_url') ?>/assets/images/arrow-down.png">
                </div>
                <h2>Blog</h2>
                <img src="<?php the_field( 'hero_image' ); ?>">
            </div>
        </div>

        <div class="grid-x grid-padding-x">
            <div class="large-6 large-offset-5 cell">
                <div class="hb-wrap">
                    <h2><?php the_title(); ?></h2>
                    <p><?php $content = wp_strip_all_tags( get_the_content() ); echo mb_strimwidth($content, 0, 200, '...');?>
                    </p>
                    <div class="grid-x grid-padding-x">
                        <div class="small-12 medium-6 cell">
                            <a class="button dark" href="<?php the_permalink(); ?>">Read more</a>
                        </div>
                        <div class="medium-6 cell show-for-medium">
                            <a class="button dark" href="/blog/">See all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?php
        
    }
} else {
    // no posts found
}

// Restore original Post Data
wp_reset_postdata();

?>