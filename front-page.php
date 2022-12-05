<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
 


<section class="home-top" style="background-image: url('<?php the_field('hero_image')?>');">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="medium-7 large-8 cell">
                <div class="home-title curve">
                    <h1>JMP, Asbestos Specialists</h1>
                    <p>We provide Asbestos services throughout Suffolk, Essex &amp; Norfolk</p>
                </div>
            </div>
            <div class="medium-5 large-4 cell">
                <div class="home-phone og curve">
                    <p>Get in touch with us today</p>
                    <p class="home-tel"><a href="tel:08005878003">0800 5878003</a></p>
                </div>
            </div>
        </div>
        <div class="grid-x grid-padding-x">
            <div class="large-4 cell">
                <div class="home-cta curve shadow">
                    <h3>Asbestos Surveys</h3>
                    <div class="hcta-img">
                        <img src="<?php bloginfo('template_url')?>/assets/images/icon-surveys.png">
                    </div>
                    <p>Asbestos surveys are conducted to identify the presence of asbestos in buildings. Do you need an asbestos survey?</p>
                    <a class="button" href="/asbestos-surveys/">Read More</a>
                </div>
            </div>
            <div class="large-4 cell">
                <div class="home-cta curve shadow">
                    <h3>About Us</h3>
                    <div class="hcta-img">
                        <img src="<?php bloginfo('template_url')?>/assets/images/icon-about.png">
                    </div>
                    <p>JMP Services is a family business that has been trading for over 20 years. We specialise in asbestos removal and asbestos surveys, and our team of experts are here to help you with all your asbestos needs.</p>
                        <a class="button" href="/about-us/">Read More</a>
                </div>
            </div>
            <div class="large-4 cell">
                <div class="home-cta curve shadow">
                    <h3>Asbestos Resources</h3>
                    <div class="hcta-img">
                        <img src="<?php bloginfo('template_url')?>/assets/images/icon-resources.png">
                    </div>
                    <p>Here you'll find all the information you need regarding asbestos in your home or business.</p>
                    <a class="button" href="/resources/">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-intro padding-150">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="medium-5 large-5 large-offset-1 cell">
                <?php if ( get_field( 'intro_image' ) ) : ?>
                <img class="shadow" src="<?php the_field( 'intro_image' ); ?>" />
                <?php endif ?>
            </div>
            <div class="medium-7 large-5 cell text-center">
                <?php the_field( 'intro' ); ?>
                <a href="#" class="button">Read More</a>
            </div>
        </div>
    </div>
</section>

<section class="home-hazard">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="medium-2 large-2 cell">
                <img src="<?php bloginfo('template_url')?>/assets/images/icon-hazard.png">
            </div>
            <div class="medium-8 large-8 cell text-center">
                <p>Asbestos contains dangerous fibres, which can lead to terminal diseases.</p>
                <p><a href="#" class="button">Read More</a></p>
            </div>
            <div class="medium-2 large-2 cell show-for-medium">
                <img src="<?php bloginfo('template_url')?>/assets/images/icon-disease.png">
            </div>
        </div>
    </div>
</section>


<section class="home-identifying padding-150">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="large-8 large-offset-2 cell">
                <div class="hi-content">
                    <img width="130" src="<?php bloginfo('template_url')?>/assets/images/icon-identifying.png">
                    <?php the_field( 'identifying_asbestos' ); ?>
                    <p style="margin-bottom: 0;"><a href="#" class="button">Read More</a></p>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_template_part( 'parts/content', 'homeblog' ); ?>

<?php get_footer(); ?>