				<?php if ( get_field( 'click_to_remove_the_contact_bar_in_the_footer' ) == 1 ) { 
				} else { ?>
					<div id="contact-bar" style="background-image:url('<?php the_field( 'contact_bar_background', 'options' ); ?>');" class="cover-bg">
						<div class="content_wrap row">
							<h3 class="text-center"><?php the_field( 'contact_bar_title', 'options' ); ?></h3>
							<?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true]'); ?> 
						</div>
					</div>
				<?php } ?>
			
			    <div class="footer_container">
			    	<footer id="footer" class="footer_wrap row">
			            <div class="small-12 small-text-center medium-6 large-4 columns column-1">
			            	<div class="text-center">
				            	<a href="<?php bloginfo('url'); ?>">
				            		<img src="<?php the_field( 'footer_logo', 'options' ); ?>" alt="<?php echo esc_attr( get_bloginfo('name', 'display') ); ?>" />
				            	</a>
			            	</div>
			            	<p class="text-center">
			            		<?php echo do_shortcode('[address]'); ?>
			            	</p>
			            	<p class="text-center">
			            		<?php echo do_shortcode('[phone]'); ?>
			            	</p>
			            	<div class="social_wrap medium-12 large-12 columns">
								<ul class="menu table">
									<li><?php echo do_shortcode('[facebook]'); ?></li>
				                	<li><?php echo do_shortcode('[twitter]'); ?></li>
				                	<li><?php echo do_shortcode('[instagram]'); ?></li>
				                	<li><?php echo do_shortcode('[pinterest]'); ?></li>
				                	<li><?php echo do_shortcode('[youtube]'); ?></li>
				                </ul>
							</div><!-- .social_wrap -->
			            </div>
			            <div class="small-12 small-text-center medium-6 medium-text-left large-4 columns">
			               <?php wp_nav_menu( array(
			                    'theme_location' => 'secondary',
			                    'menu_class' => 'menu vertical',
			                    'fallback_cb' => false
			                ) ); ?>
			            </div>
			            <div class="small-12 small-text-center medium-12 medium-text-left large-4 columns">
			            	<h4>
			            		<?php the_field( 'footer_about_title', 'options' ); ?>
			            	</h4>
			            	<?php the_field( 'footer_about_text', 'options' ); ?>
			            	<div class="text-center footer-about-button">
			            		<a href="<?php bloginfo('url'); ?>/schedule-a-consultation/" class="button">Schedule a Consultation</a>
			            	</div>
			            </div>
			    	</footer><!-- .row -->
			    	<div id="copyright">
			    		<div class="footer_wrap row">
				    		<div class="small-12 text-center medium-6 medium-text-left columns">
		    					<p>Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?><br>
		    					All Rights Reserved. <a href="<?php bloginfo('url'); ?>/privacy-policy">Privacy Policy</a></p>
		    				</div>
		    				<div class="small-12 text-center medium-6 medium-text-right columns">
		    					<div class="textivias-linking">
		    						<div class="textivias-links">
		    							<a href="https://www.textivia.com/web-design-raleigh/" target="_blank">Web Design Raleigh</a>
		    							<a href="https://www.textivia.com/seo-raleigh/" target="_blank">SEO Raleigh</a>
		    							<a href="https://www.textivia.com/internet-marketing-raleigh/" target="_blank">Internet Marketing Raleigh</a>
		    						</div>
		    						<div class="textivias-logo">
		    							<a href="http://www.textivia.com/" target="_blank">
		    								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/textivia-footer-logo-light.png" alt="Textivia, Inc." />
		    							</a>
		    						</div>
		    					</div>
		    				</div>
		    			</div>
			    	</div>
			    </div><!-- end #footer_container -->
	        </div><!-- end off-canvas-content -->
	    </div><!-- end off-canvas-wrapper-inner -->
	</div>
    <div id="backtotop" class="hvr-fade">
        <span class="genericon genericon-collapse"></span>
    </div><!-- #backtotop -->
<?php wp_footer(); ?>
</body>
</html>
