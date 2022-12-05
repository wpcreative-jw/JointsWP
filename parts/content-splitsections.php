<?php
/**
 * The template part for displaying split sections
 */
?>


<div class="grid-container">

<?php if ( have_rows( 'split_sections' ) ) : ?>
	<?php while ( have_rows( 'split_sections' ) ) : the_row(); ?>

    
        <div class="grid-x grid-padding-x split-section">
            <div class="large-6 cell ss-content">
                <?php the_sub_field( 'text' ); ?>
            </div>

            <div class="large-6 cell">
                <?php if ( get_sub_field( 'image' ) ) : ?>
                    <img src="<?php the_sub_field( 'image' ); ?>" />
                <?php endif ?>
            </div>
        </div>
    

	<?php endwhile; ?>

<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>

</div>