<?php 
	$url = '';
	if ( get_sub_field('internal_header_background') ) :
		$url = get_sub_field('internal_header_background');
	else: 
		$url = get_field('default_header_image', 'options');
	endif;	
?>
<div id="internal-header" style="background-image: url('<?php echo $url; ?>');" class="cover-bg">
	<div class="collpse row">
		<div class="small-12 columns text-center">
			<div class="internal-title">
				<span><?php the_sub_field( 'internal_header' ); ?></span>
			</div>
		</div>
	</div>
</div>
<div class="breadcrumb-wrapper">
	<div class="content_wrap row">
		<div class="small-12 columns">
			<?php yoast_breadcrumb('<nav aria-label="You are here:" role="navigation"><ul class="breadcrumbs">','</ul></nav>'); ?>
		</div>
	</div>
</div>