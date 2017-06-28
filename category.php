<?php
/**
 * The template for displaying Category pages.
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
			<?php while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );
			endwhile;
			wpforge_content_nav( 'nav-below' ); ?>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
	</div><!-- #content -->
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>