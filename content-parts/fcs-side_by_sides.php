<?php if ( get_sub_field( 'remove_padding_background' ) == 1 ) :
	$background = 'no-gradient no-padding';
else :
	$background = 'gradient padding';
endif;
if ( have_rows( 'side_by_side' ) ) : $count=0;
	while ( have_rows( 'side_by_side' ) ) : the_row(); $count++;
	endwhile;
endif; ?>
<div class="sbs-section section <?php echo $background; ?>">
	<div class="row collapse">
		<div class="small-12 columns">
			<?php if ( get_sub_field('side_by_side_header') ) : ?>
				<hr>
				<h2><?php the_sub_field( 'side_by_side_header' ); ?>
					<?php if ( get_sub_field('side_by_side_subheader') ) : ?>
						<small><?php the_sub_field( 'side_by_side_subheader' ); ?></small>
					<?php endif; ?>
				</h2>
			<?php endif; ?>
			<?php if ( get_sub_field('side_by_side_content') ) : ?>
				<?php the_sub_field( 'side_by_side_content' ); ?>
			<?php endif; ?>
			<?php if ( have_rows( 'side_by_side' ) ) : ?>
				<div class="small-up-1 medium-up-2 large-up-<?php echo $count; ?> row sbss">
					<?php while ( have_rows( 'side_by_side' ) ) : the_row(); ?>
						<div class="column sbs">
							<div class="sbs-wrapper">
								<h3><?php the_sub_field( 'sbs_header' ); ?>
									<small><?php the_sub_field( 'sbs_subheader' ); ?></small>
								</h3>
								<?php the_sub_field( 'sbs_content' ); ?>
								<?php if (get_sub_field('sbs_button') ) : ?>
									<div><a href="<?php the_sub_field( 'sbs_link' ); ?>" class="button alt"><?php the_sub_field( 'sbs_button' ); ?></a></div>
									<a href="<?php the_sub_field( 'sbs_link' ); ?>" class="full-size-link"> </a>
								<?php endif; ?>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>