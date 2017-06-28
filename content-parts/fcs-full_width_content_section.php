<div class="full-width-content section" id="main-content">
	<div class="content_wrap row">
		<div class="small-12 columns text-<?php the_sub_field( 'text_alignment' ); ?>">
			<?php if ( get_sub_field('section_header') ) : ?>
				<<?php the_sub_field( 'header_tag' ); ?>>
					<?php the_sub_field( 'section_header' ); ?>
					<?php if ( get_sub_field('section_subheader') ) : ?>
						<small><?php the_sub_field( 'section_subheader' ); ?></small>
					<?php endif; ?>
				</<?php the_sub_field( 'header_tag' ); ?>>
			<?php endif; ?>
			<?php the_sub_field( 'section_content' ); ?>
			<?php if ( have_rows( 'section_buttons' ) ) : ?>
				<div class="inline-buttons">
					<?php while ( have_rows( 'section_buttons' ) ) : the_row(); ?>
						<a href="<?php the_sub_field( 'section_button_link' ); ?>" class="button"><?php the_sub_field( 'section_button_text' ); ?></a>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>