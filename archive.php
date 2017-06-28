<?php
/**
 * The template for displaying Archive pages.
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
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );
			endwhile;
			wpforge_content_nav( 'nav-below' );
			?>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
		</div><!-- #content -->
		<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>