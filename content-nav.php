<div class="nav_container norm">
	<div class="nav_wrap row show-for-large">
		<div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
			<button type="button" data-toggle><span class="genericon genericon-menu"></span></button>
			<div class="title-bar-title">
				<a class="hmn" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php echo esc_attr(get_theme_mod('wpforge_nav_text','Home')); ?>
				</a>
			</div>
		</div><!-- end title-bar -->
		<div class="top-bar" id="main-menu">
			<div class="top-bar-left">
				<?php 
					wp_nav_menu(array(
					 	'theme_location' => 'primary',
				        'container' => false,
				        'depth' => 0,
				        'items_wrap' => '<ul class="menu vertical medium-horizontal" data-responsive-menu="drilldown medium-dropdown" data-parent-link="true">%3$s</ul>',
				        'fallback_cb' => '',
				        'walker' => new Topbar_Menu_Walker()
				    ));
				?>
			</div><!-- second end top-bar -->
		</div><!-- end top-bar -->
	</div><!-- .row -->
</div><!-- end nav_container -->