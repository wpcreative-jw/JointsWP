<?php
/*
Template Name: Info pages
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



<?php get_template_part( 'parts/content', 'splitsections' ); ?>


<?php get_template_part( 'parts/content', 'faqs' ); ?>

<section class="info-buttons">

    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div id="ib1" class="medium-6 large-3 cell">
                <a href="/asbestos-related-diseases/" class="ib-1 shadow">Asbestos related diseases</a>
            </div>
            <div id="ib2" class="medium-6 large-3 cell">
                <a href="/legislation/" class="ib-2 shadow">Legislation</a>
            </div>
            <div id="ib3" class="medium-6 large-3 cell">
                <a href="/uses-of-asbestos/" class="ib-3 shadow">Uses of Asbestos</a>
            </div>
            <div id="ib4" class="medium-6 large-3 cell">
                <a href="/hunt-for-asbestos/" class="ib-4 shadow">Hunt for Asbestos</a>
            </div>
            <div id="ib5" class="medium-6 large-3 cell">
                <a href="/identifying-asbestos/" class="ib-5 shadow">Identifying Asbestos</a>
            </div>
        </div>
    </div>

</section>


<?php get_footer(); ?>