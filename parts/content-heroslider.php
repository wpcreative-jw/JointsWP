<?php
/**
 * The template part for displaying a hero slider
 */
?>



<section class="hero-slider">
    <div class="hs-wrap">
        <?php if ( have_rows( 'slider' ) ) : ?>
        <?php while ( have_rows( 'slider' ) ) : the_row(); ?>
        <div class="hs-slide" style="background-image: url(<?php the_sub_field( 'image' ); ?>);">
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    <div class="medium-7 cell">
                        <div class="slide-content">
                            <h1>
                                <span class="heading-border"><?php the_sub_field( 'title' ); ?></span>
                            </h1>
                            <p><?php the_sub_field( 'text' ); ?></p>
                            <?php $link = get_sub_field( 'link' ); ?>
                            <?php if ( $link ) : ?>
                            <p><a href="<?php echo esc_url( $link); ?>" class="button">Read more</a></p>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php else : ?>
        <?php // no rows found ?>
        <?php endif; ?>
    </div>

</section>