<?php
/*
Template Name: About
*/
get_header(); ?>

<div class="hero-image" style="background-image: url('<?php the_field('hero_image')?>');">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="medium-6 large-8 cell">
                <div class="home-title curve">
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_field( 'tagline' ); ?></p>
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

<div class="page-icon">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="medium-12 cell">
                <div class="pi-wrap curve shadow">
                    <img src="<?php the_field( 'icon' ); ?>" />
                </div>
            </div>
        </div>
    </div>
</div>



<div class="grid-container">

    <div class="grid-x grid-padding-x split-section">
        <div class="large-6 cell ss-content">
            <?php the_field( 'top_content' ); ?>
        </div>

        <div class="large-6 cell">
            <?php if ( get_field( 'top_image' ) ) : ?>
            <img src="<?php the_field( 'top_image' ); ?>" />
            <?php endif ?>
        </div>
    </div>

</div>


<section class="team padding-150">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="medium-12 cell text-center">
                <h2>This is us</h2>
            </div>
        </div>
        <div class="grid-x grid-padding-x">
            <div class="medium-6 large-4 large-offset-2 cell text-center team-member">
                <img src="<?php the_field( 'team_image_1' ); ?>" />
                <p><?php the_field( 'team_name_1' ); ?></p>
            </div>
            <div class="medium-6 large-4 cell text-center team-member">
                <img src="<?php the_field( 'team_image_2' ); ?>" />
                <p><?php the_field( 'team_name_2' ); ?></p>
            </div>
        </div>
        <div class="grid-x grid-padding-x team-bottom">
            <div class="medium-12 large-6 large-offset-3 cell">
                <?php the_field( 'team_content' ); ?>
            </div>
        </div>
    </div>
</section>

<section class="about-bottom" style="background-image: url('<?php the_field('bottom_image')?>');">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="medium-12 large-8 large-offset-2 cell text-center">
                <div class="ab-content">
                    <?php the_field( 'bottom_content' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>