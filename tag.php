<?php
/**
 * The template for displaying Tag pages.
 * @since WP-Forge 5.5.1.7
 * @version 6.2.3.1
 */
get_header(); ?>
	<div id="content" class="medium-8 large-8 columns" role="main">
    	<div>
			<?php yoast_breadcrumb('<nav class="hide-for-small-only" aria-label="You are here:" role="navigation"><ul class="breadcrumbs">','</ul></nav>'); ?>
		</div>
		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h4 class="archive-title"><?php printf( __( 'Tag Archives: %s', 'wp-forge' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></h4>
			<?php if ( tag_description() ) : // Show an optional tag description ?>
				<div class="archive-meta"><?php echo tag_description(); ?></div>
			<?php endif; ?>
			</header><!-- .archive-header -->
			<?php while ( have_posts() ) : the_post(); get_template_part( 'content', get_post_format() );
			endwhile;
			wpforge_content_nav( 'nav-below' );?>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
	</div><!-- #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
