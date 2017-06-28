<div class="left-image-content section">
	<div class="content_wrap row center-align">
		<div class="small-12 medium-6 large-4 columns text-center">
			<?php if ( get_sub_field( 'left_images') ) : ?>
				<img src="<?php the_sub_field( 'left_images' ); ?>" />
			<?php else: ?>
				<img src="http://placehold.it/500x350">
			<?php endif; ?>
		</div>
		<div class="small-12 medium-6 large-8 columns">
			<<?php the_sub_field( 'header_tag' ); ?>>
				<?php if ( get_sub_field('subheader') ) : ?>
					<small><?php the_sub_field( 'subheader' ); ?></small>
				<?php endif;
				the_sub_field( 'header' ); ?>
			</<?php the_sub_field( 'header_tag' ); ?>>
			<div class="white">
				<?php the_sub_field( 'content_area' ); ?>
			</div>
			<?php if ( have_rows( 'section_buttons' ) ) : ?>
				<div class="inline-buttons">
					<?php while ( have_rows( 'section_buttons' ) ) : the_row(); ?>
						<?php if ( get_sub_field( 'open_link_in_new_tab' ) == 1 ) { 
						 $target = "_blank"; 
						} else { 
						 $target = "self";
						} ?>
						<a href="<?php the_sub_field( 'section_button_link' ); ?>" class="button" target="<?php echo $target; ?>"><?php the_sub_field( 'section_button_text' ); ?></a>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>