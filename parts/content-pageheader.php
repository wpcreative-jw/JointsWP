<?php
/**
 * The template part for displaying the page header
 */
?>

<div class="page-header">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="small-12 cell">

                <h2><?php single_post_title(); ?></h2>
              
              
              <?php

                $post_id = false;
                
                if( is_home() )
                {
                    $post_id = 31; // specif ID of home page
                }
                
                ?>

                <?php if ( get_field( 'page_icon', $post_id ) ) : ?>
                    <img src="<?php the_field( 'page_icon', $post_id ); ?>" />
                <?php endif ?>

            </div>
        </div>
    </div>
</div>