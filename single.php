<?php
/**
 * The Template for displaying all single posts.
 * @since WP-Forge 5.5.1.7
 * @version 6.2.3.1
 */
get_header(); ?>
	<div class="content_wrap row">
		<div id="content" class="medium-8 large-8 columns" role="main">
	    	<div>
				<?php yoast_breadcrumb('<nav class="hide-for-small-only" aria-label="You are here:" role="navigation"><ul class="breadcrumbs">','</ul></nav>'); ?>
			</div>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
				<nav class="nav-single">
					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&laquo;', 'Previous post link', 'wp-forge' ) . '</span> %title' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&raquo;', 'Next post link', 'wp-forge' ) . '</span>' ); ?></span>
				</nav><!-- .nav-single -->
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>
