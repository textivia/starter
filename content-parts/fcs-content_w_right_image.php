<div class="right-image-content section">
	<div class="content_wrap row center-align">
		<div class="small-12 medium-6 large-7 columns">
			<<?php the_sub_field( 'header_tag' ); ?>>
				<?php the_sub_field( 'header' ); ?>
				<?php if ( get_sub_field('subheader') ) : ?>
					<small><?php the_sub_field( 'subheader' ); ?></small>
				<?php endif; ?>
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
		<div class="small-12 medium-6 large-5 columns text-center right-images">
			<?php $right_images_images = get_sub_field( 'right_images' ); ?>
			<?php if ( $right_images_images ) :  ?>
				<?php foreach ( $right_images_images as $right_images_image ): ?>
					<img src="<?php echo $right_images_image['sizes']['medium-square']; ?>" alt="<?php echo $right_images_image['alt']; ?>" />
				<?php endforeach; ?>
			<?php else: ?>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/eh-well-placeholder.png" alt="Essential Weight Loss" />
			<?php endif; ?>
		</div>
	</div>
</div>