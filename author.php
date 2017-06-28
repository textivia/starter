<?php
/**
 * The template for displaying Author Archive pages.
 * @since WP-Forge 5.5.1.7
 * @version 6.2.3.1
 */
get_header(); ?>
<div class="content_wrap row">
	<div id="content" class="medium-8 large-8 columns" role="main">
    	<div>
			<?php yoast_breadcrumb('<nav class="hide-for-small-only" aria-label="You are here:" role="navigation"><ul class="breadcrumbs">','</ul></nav>'); ?>
		</div>

		<?php if ( have_posts() ) : ?>
			<?php the_post(); ?>
			<?php rewind_posts(); ?>
			<?php
			// If a user has filled out their description, show a bio on their entries.
			if ( get_the_author_meta( 'description' ) ) : ?>
				<div class="author-info small-12 medium-12 large-12 columns">
					<div class="author-avatar small-12 medium-12 large-12 columns">
						<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'wpforge_author_bio_avatar_size', 200 ) ); ?>
					</div><!-- .author-avatar -->
					<div class="author-description small-12 medium-12 large-12 columns">
						<h3><?php printf( __( 'About %s', 'wp-forge' ), get_the_author() ); ?></h3>
						<p><?php the_author_meta( 'description' ); ?></p>
					</div><!-- .author-description -->
				</div><!-- .author-info -->
			<?php endif; ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>
			<?php wpforge_content_nav( 'nav-below' ); ?>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
	</div><!-- #content -->
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>