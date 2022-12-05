<?php
/*
Template Name: Contact
*/

get_header(); ?>

<div class="hero-image bg-greylines">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="large-8 cell">
                <div class="home-title curve">
                    <h1>Contact Us</h1>
                    <p>JMP Services Ltd, Brinkleys, Unit 2, Hall St, Long Melford, Suffolk, CO10 9JR</p>
                </div>
            </div>
            <div class="large-4 cell">
                <div class="home-phone og curve">
                    <p>Get in touch with us today</p>
                    <p class="home-tel"><a href="tel:08005878003">0800 5878003</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="contact-content padding-150">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="large-5 cell">
                <div class="contact-form curve shadow">
                    <h2>Contact form</h2>
                    <?php echo do_shortcode('[wpforms id="180" title="false"]'); ?>
                </div>
            </div>
            <div class="large-6 large-offset-1 cell contact-map">
                <p>We’re perfectly situated to cover<br> 
                    West Suffolk,<br> 
                    North Essex<br>
                    and South Norfolk.</p>

                    <img src="<?php bloginfo('template_url') ?>/assets/images/contact-map.png">
            </div>
        </div>
    </div>
</section>

<div id="footerquote" class="contact-bottom og"></div>




<?php get_footer(); ?>