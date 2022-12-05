<?php
/**
 * The template part for displaying the latest project
 */
?>


<?php

// WP_Query arguments
$args = array(
    'post_type'              => array( 'projects' ),
    'posts_per_page'         => '1',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
        $query->the_post(); ?>

<section class="home-project">

    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="medium-12 cell">
                <h2>Latest Project</h2>
            </div>
        </div>

        <div class="grid-x grid-padding-x">
            <div class="medium-12 large-8 large-offset-2 cell">
                <h3><?php the_title();?></h3>
                <p><?php $content = wp_strip_all_tags( get_the_content() ); echo mb_strimwidth($content, 0, 350, '...');?>
                    <div class="spacer" style="height:105px"></div>
            </div>
        </div>

        <div class="grid-x grid-padding-x">
            <div class="medium-6 cell" style="position:relative;">
                <img src="<?php the_field('before'); ?>">
                <h3 class="pointy-title">Before</h3>
            </div>
            <div class="medium-6 cell" style="position:relative;">
                <img src="<?php the_field('after'); ?>">
                <h3 class="pointy-title">After</h3>
            </div>
        </div>

        <div class="spacer" style="height:60px"></div>

        <div class="grid-x grid-padding-x">
            <div class="small-6 medium-6 cell medium-text-right">
                <a href="<?php the_permalink(''); ?>" class="button white" href="#">View Project</a>
            </div>
            <div class="small-6 medium-6 cell">
                <a href="/projects/" class="button white" href="#">All Projects</a>
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