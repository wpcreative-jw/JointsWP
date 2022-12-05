<?php
/**
 * The template part for displaying faqs
 */
?>


<section class="faqs bg-greylines">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="small-12 cell">
                <h2><?php the_title(); ?> FAQs</h2>
            </div>
        </div>
        <div class="grid-x grid-padding-x">
            <div class="small-12 large-8 cell">

                <ul class="accordion" data-accordion>


                    <?php if ( have_rows( 'faqs' ) ) : ?>
                    <?php while ( have_rows( 'faqs' ) ) : the_row(); ?>

                    <li class="accordion-item shadow" data-accordion-item>
                        <!-- Accordion tab title -->
                        <a href="#" class="accordion-title curve"><?php the_sub_field( 'question' ); ?></a>

                        <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
                        <div class="accordion-content" data-tab-content>
                            <?php the_sub_field( 'answer' ); ?>
                        </div>
                    </li>

                    <?php endwhile; ?>
                    <?php else : ?>
                    <?php // no rows found ?>
                    <?php endif; ?>

                </ul>
            </div>

            <div class="small-12 medium-6 large-4 cell">
                <div class="home-cta info-cta hide curve shadow">
                    <h3>Asbestos Surveys</h3>
                    <div class="hcta-img">
                        <img src="<?php bloginfo('template_url')?>/assets/images/icon-surveys.png">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tellus ligula, hendrerit non magna
                        a, aliquet</p>
                    <a class="button" href="#">Read More</a>
                </div>
                <div class="home-cta service-cta hide curve">
                    <h3>Why use us</h3>
                    <div class="hcta-img">
                        <img src="<?php bloginfo('template_url')?>/assets/images/icon-about.png">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tellus ligula, hendrerit non magna
                        a, aliquet</p>
                    <a class="button" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>