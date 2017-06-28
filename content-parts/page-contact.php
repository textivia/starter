<?php get_header(); /* Template Name: Contact */ ?>
	
	<div class="internal-header">
		<div class="content_wrap row">
			<div class="small-12 columns">
				<?php yoast_breadcrumb('<nav aria-label="You are here:" role="navigation"> <ul class="breadcrumbs">','</ul>'); ?>
			</div>
		</div>
	</div>

	<?php get_template_part( '/content-parts/content', 'flexible-content' ); ?>	

	<div class="content_wrap row contact-page">
		<div class="small-12 medium-8 large-8 columns left-form">
			<h2>Send us a message</h2>
			<?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true]'); ?>
		</div>
		<div class="small-12 medium-4 large-4 columns right-contact">
			<h2>Contact Blackhawk Arborist Services</h2>
			<p><?php echo do_shortcode('[address]'); ?></p>
			<p>P: <?php echo do_shortcode('[phone]'); ?><br>
			E: <a href="mailto:blackhawkarborist@gmail.com" target="_blank">blackhawkarborist@gmail.com</a></p>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6157.7757042182075!2d-78.79071061878604!3d35.78685410400484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89acf3aeb11be361%3A0xefc6f2741d4f593d!2sBlackhawk+Tree+Inc!5e0!3m2!1sen!2sus!4v1487880918806" height="300" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
		</div>
	</div>

<?php get_footer(); ?>
