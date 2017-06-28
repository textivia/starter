<div class="testimonials-section section cover-bg" style="background-image:url('<?php the_sub_field( 'testimonials_slider_background' ); ?>'">
	<div class="content_wrap row">
		<div class="small-12 testimonials-header columns text-center">
			<h2><?php the_sub_field( 'testimoinals_header' ); ?>
				<small><?php the_sub_field( 'testimoinals_subheader' ); ?></small>
			</h2>
			<?php the_sub_field( 'testimonials_content' ); ?>
		</div>
		<div class="small-12 columns">
			<?php query_posts('post_type=testimonial&posts_per_page=3&orderby=date&order=DESC'); ?>
				<div class="small-up-1 medium-up-1 large-up-3 row ctas testimonials">
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="column cta">
							<div class="cta-inner testimonial">
								<div class="cta-image">
									<?php if ( has_post_thumbnail() ) : ?>
										<figure>
											<?php the_post_thumbnail('thumbnail'); ?>
										</figure>
									<?php else: ?>
										<div class="quote-mark">
											<i class="fa fa-fw fa-quote-right"></i>
										</div>
									<?php endif; ?>
								</div>
								<h4><?php the_field( 'short_description' ); ?></h4>
								<?php the_excerpt(5); ?>
								<div><a href="<?php the_permalink(); ?>" class="button"><?php the_field( 'button_text' ); ?> <i class="fa fa-fw fa-chevron-right"></i></a></div>
								<a href="<?php the_permalink(); ?>" class="full-size-link"> </a>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			<?php wp_reset_query(); ?>
		</div>
	</div>
</div>