<?php
/*
Template Name: Resources
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
        <div class="medium-12 large-8 large-offset-2 cell ss-content">
            <?php the_field( 'top_content' ); ?>
        </div>
    </div>

</div>


<section class="resources faqs bg-greylines">
    <div class="grid-container">

        <div class="grid-x grid-padding-x">
            <div class="small-12 medium-12 large-8 cell">

                <ul class="accordion" data-accordion>


                    <?php if ( have_rows( 'resources' ) ) : ?>
	                <?php while ( have_rows( 'resources' ) ) : the_row(); ?>

                    <li class="accordion-item shadow is-active" data-accordion-item>
                        <!-- Accordion tab title -->
                        <a href="#" class="accordion-title curve"><?php the_sub_field( 'category' ); ?></a>

                        <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
                        <div class="accordion-content" data-tab-content>
                            <?php the_sub_field( 'info' ); ?>
                        </div>
                    </li>

                    <?php endwhile; ?>
                    <?php else : ?>
                    <?php // no rows found ?>
                    <?php endif; ?>

                </ul>
            </div>

            <div class="small-12 medium-6 large-4 cell">
                <div class="home-cta info-cta curve shadow">
                    <h3>Asbestos Surveys</h3>
                    <div class="hcta-img">
                        <img src="<?php bloginfo('template_url')?>/assets/images/icon-surveys.png">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tellus ligula, hendrerit non magna
                        a, aliquet</p>
                    <a class="button" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>




<?php get_footer(); ?>