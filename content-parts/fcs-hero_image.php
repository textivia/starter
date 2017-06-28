<div class="hero-image cover-bg" style="background-image: url('<?php the_sub_field( 'hero_image_background' ); ?>');">
	<div class="row">
		<div class="header-inner">
			<div class="hero-title text-center">
				<div><?php the_sub_field( 'hero_image_title' ); ?></div>
				<?php if ( get_sub_field('hero_image_subtitle') ) : ?>
					<small>
						<?php the_sub_field( 'hero_image_subtitle' ); ?>
					</small>
				<?php endif; ?>
			</div>
			<?php if ( get_sub_field('hero_image_content') ) : ?>
				<?php the_sub_field( 'hero_image_content' ); ?>
			<?php endif; ?>
			<div class="inline-buttons text-center">
				<?php if ( have_rows( 'section_buttons' ) ) : ?>
					<?php while ( have_rows( 'section_buttons' ) ) : the_row(); ?>
						<?php if ( get_sub_field( 'open_link_in_new_tab' ) == 1 ) { 
						 $target = "_blank"; 
						} else { 
						 $target = "self";
						} ?>
						<a href="<?php the_sub_field( 'section_button_link' ); ?>" class="button" target="<?php echo $target; ?>"><?php the_sub_field( 'section_button_text' ); ?> <i class="fa fa-fw fa-chevron-right"></i></a>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="hero-mark">
		<a class="go-down" href="#">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/essential-weight-loss-mark.png" alt="Essential Weight Loss Icon" />
		</a>
	</div>
</div>