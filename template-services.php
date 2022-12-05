<?php
/*
Template Name: Service pages
*/

get_header(); ?>

<div class="hero-image">
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
        <div class="medium-12 large-6 cell ss-content">
            <?php the_field( 'top_content' ); ?>
        </div>

        <div class="medium-12 large-6 cell">
            <?php if ( get_field( 'top_image' ) ) : ?>
            <img src="<?php the_field( 'top_image' ); ?>" />
            <?php endif ?>
        </div>
    </div>

</div>


<section class="process padding-150">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="medium-12 cell text-center">
                <h2>Our Process</h2>
            </div>
        </div>
        <div class="grid-x grid-padding-x" data-equalizer>
            <?php if ( have_rows( 'process' ) ) : $i==0; ?>
            <?php while ( have_rows( 'process' ) ) : the_row(); $i++; ?>
            <div class="medium-6 large-3 cell">
                <div class="p-wrap curve" data-equalizer-watch>
                    <img height="92" src=" <?php bloginfo('template_url');?>/assets/images/icon-<?php echo $i; ?>.png">
                    <h3><?php the_sub_field( 'title' ); ?></h3>
                    <p><?php the_sub_field( 'text' ); ?></p>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php // no rows found ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="padding-150">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="medium-12 large-8 large-offset-2 cell text-center">
                <?php the_field( 'bottom_content' ); ?>
            </div>
        </div>
    </div>
</section>


<?php get_template_part( 'parts/content', 'faqs' ); ?>

<section class="info-buttons">

    <div class="grid-container">
        <div class="grid-x grid-padding-x align-center">
            <div id="ib6" class="medium-6 large-3 cell">
                <a href="/asbestos-surveys/" class="ib-6 shadow">Asbestos Surveys</a>
            </div>
            <div id="ib7" class="medium-6 large-3 cell">
                <a href="/asbestos-removal/" class="ib-7 shadow">Asbestos Removal</a>
            </div>
            <div id="ib8" class="medium-6 large-3 cell">
                <a href="/asbestos-disposal/" class="ib-8 shadow">Asbestos Disposal</a>
            </div>
            
        </div>
    </div>

</section>


<?php get_footer(); ?>