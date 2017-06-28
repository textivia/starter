<div class="full-width-cta-section">
	<div class="row">
		<div class="small-12 columns">
			<?php if ( have_rows( 'full_width_ctas' ) ) : $count=0; ?>
				<?php while ( have_rows( 'full_width_ctas' ) ) : the_row(); $count++; ?>
					<div class="cta fw-cta cta-<?php echo $count; ?>">
						<div class="cta-inner">
							<div class="cta-header">
								<i class="cta-icon <?php the_sub_field( 'fw_cta_image' ); ?>"></i>
								<h3><?php the_sub_field( 'fw_cta_name' ); ?>
									<small><?php the_sub_field( 'fw_cta_subname' ); ?></small>
								</h3>
							</div>
							<?php the_sub_field( 'fw_cta_content' ); ?>
							<div class="full-width"><a href="<?php the_sub_field( 'fw_cta_link' ); ?>" class="button alt"><?php the_sub_field( 'fw_cta_button' ); ?> <i class="fa fa-fw fa-chevron-right"></i></a></div>
							<a href="<?php the_sub_field( 'fw_cta_link' ); ?>" class="full-size-link"> </a>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>