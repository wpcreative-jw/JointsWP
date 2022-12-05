<?php
/**
 * Displays archive pages if a speicifc template is not set. 
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>
<div class="projects-wrap">

    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="medium-4 cell">
                <h1><span class="heading-border">Projects</span></h1>
            </div>
        </div>
    </div>


<?php get_template_part( 'parts/content', 'projectfilters' ); ?>


<section class="projects">

    <div class="grid-container">

        <div class="grid-x grid-padding-x">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


            <div class="medium-6 cell">

                <div class="project-item-wrap">
                <article id="post-<?php the_ID(); ?>" role="article" class="project-item"
                    style="background-image: url(<?php the_field( 'after' ); ?>);">
                    <a href="<?php the_permalink() ?>" rel="bookmark"
                        title="<?php the_title_attribute(); ?>"></a>
                    <header class="article-header">
                        <h3 class="pointy-title"><?php the_title(); ?></h3>
                    </header> <!-- end article header -->

                </article> <!-- end article -->
                </div>

            </div>


            <?php endwhile; ?>


        </div>

        <?php joints_page_navi(); ?>

        <?php else : ?>

        <?php get_template_part( 'parts/content', 'missing' ); ?>

        <?php endif; ?>

    </div>
</section>

</div>
<?php get_footer(); ?>