<div class="cta-section">
	<div class="row">
		<div class="small-12 columns">
			<div class="small-up-1 medium-up-2 large-up-3 row ctas">
				<?php if ( have_rows( 'ctas' ) ) : $count=0; ?>
					<?php while ( have_rows( 'ctas' ) ) : the_row(); $count++; ?>
						<div class="column cta cta-<?php echo $count; ?>">
							<div class="cta-inner">
								<i class="cta-icon <?php the_sub_field( 'cta_image' ); ?>"></i>
								<h3><?php the_sub_field( 'cta_name' ); ?>
									<small><?php the_sub_field( 'cta_name_subheader' ); ?></small>
								</h3>
								<?php the_sub_field( 'cta_content' ); ?>
								<?php if ( get_sub_field('cta_button') ) : ?>
									<div class="full-width"><a href="<?php the_sub_field( 'cta_link' ); ?>" class="button"><?php the_sub_field( 'cta_button' ); ?> <i class="fa fa-fw fa-chevron-right"></i></a></div>
									<a href="<?php the_sub_field( 'cta_link' ); ?>" class="full-size-link"> </a>
								<?php endif; ?>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>