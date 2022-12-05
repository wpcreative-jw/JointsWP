<?php get_header(); ?>

<section class="project-top">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="small-12 cell">
				<h1><span class="heading-border"><?php the_title(); ?></span></h1>
			</div>
		</div>
		<div class="grid-x grid-padding-x">
			<div class="small-12 medium-6 cell" style="position:relative;">
				<?php if ( get_field( 'before' ) ) : ?>
				<img src="<?php the_field( 'before' ); ?>" />
				<?php endif ?>
				<h3 class="pointy-title">Before</h3>
			</div>
			<div class="small-12 medium-6 cell" style="position:relative;">
				<?php if ( get_field( 'after' ) ) : ?>
				<img src="<?php the_field( 'after' ); ?>" />
				<?php endif ?>
				<h3 class="pointy-title">After</h3>
			</div>
		</div>
	</div>
</section>

<section class="project-spec">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="medium-12 cell">
				<h3>Project Spec</h3>
			</div>
		</div>
		<div class="grid-x grid-padding-x">
			<div class="medium-4 cell">
				<h4>Services Used</h4>
				<ul class="menu vertical services-used">
					<?php $services = get_field( 'services' ); ?>
					<?php if ( $services ) : ?>
					<?php foreach ( $services as $post ) :  ?>
					<li class="<?php global $post; echo $post->post_name; ?>">
						<?php setup_postdata( $post ); ?>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</li>
					<?php endforeach; ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
				</ul>
			</div>
			<div class="medium-4 cell">
				<h4>Sector</h4>
				<ul class="menu vertical">
					<?php $sectors = get_field( 'sectors' ); ?>
					<?php if ( $sectors ) : ?>
					<?php foreach ( $sectors as $post ) :  ?>
					<?php setup_postdata( $post ); ?>
					<li>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</li>
					<?php endforeach; ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
				</ul>
			</div>
			<div class="medium-4 cell">
				<h4>Location</h4>
				<ul class="menu vertical">
					<li>
						<a href="#"><?php the_field( 'where' ); ?></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<div class="grid-container">
	<div class="grid-x grid-padding-x">
		<div class="small-12 cell">
			<div class="project-spec-border"></div>
		</div>
	</div>
</div>

<section class="project-content">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="medium-12">
				<?php the_content();?>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>