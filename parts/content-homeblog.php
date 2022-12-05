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

<section class="home-blog bg-greylines">

    <div class="grid-container">

        <div class="grid-x grid-padding-x">

            <div class="large-9 cell">
                <img src="<?php the_field( 'hero_image' ); ?>">
            </div>

            <div class="large-3" style="position: relative;">

                <div class="hb-wrap">
                    <div class="hb-inner">
                        <h2><?php the_title(); ?></h2>
                        <p><?php $content = wp_strip_all_tags( get_the_content() ); echo mb_strimwidth($content, 0, 200, '...');?>
                        </p>
                        <div class="grid-x grid-padding-x">
                            <div class="small-12 medium-6 cell">
                                <a class="button " href="<?php the_permalink(); ?>">Read more</a>
                            </div>
                            <div class="medium-6 cell">
                                <a class="button white" href="/blog/">See all</a>
                            </div>
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