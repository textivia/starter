<div class="off-canvas-wrapper">
	<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<div class="title-bar hide-for-large">
			<div class="title-bar-left">
				<button type="button" data-open="offCanvasLeft"><span class="genericon genericon-menu"></span></button>
				<span class="title-bar-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Home" rel="home"><?php echo get_theme_mod( 'wpforge_off_canvas_text','Home' ); ?></a></span>
			</div><!-- end title-bar-left -->
		</div><!-- end title-bar -->    
		<div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas>
			<?php wpforge_off_canvas_nav(); ?>
		</div><!-- end off-canvas position -->
		<div class="off-canvas-content" data-off-canvas-content>