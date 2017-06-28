<?php
if( have_rows('flexible_content_section') ):
     // loop through the rows of data
    while ( have_rows('flexible_content_section') ) : the_row();
	    switch(get_row_layout()){
		    
		    case 'hero_image' :
				get_template_part( 'content-parts/fcs', 'hero_image');
		    	break;
		    case 'internal_header' :
				get_template_part( 'content-parts/fcs', 'internal_header');
		    	break;
		    case 'internal_header' :
				get_template_part( 'content-parts/fcs', 'tabbed_content_section');
		    	break;
		    case 'full_width_content_section' :
				get_template_part( 'content-parts/fcs', 'full_width_content_section');
		    	break;
		    case 'content_w_left_image' :
				get_template_part( 'content-parts/fcs', 'content_w_left_image');
		    	break;
		    case 'content_w_right_image' :
				get_template_part( 'content-parts/fcs', 'content_w_right_image');
		    	break;
		    case 'ctas' :
				get_template_part( 'content-parts/fcs', 'ctas');
		    	break;
		    case 'full_width_ctas' :
				get_template_part( 'content-parts/fcs', 'full_width_ctas');
		    	break;
		    case 'side_by_sides' :
				get_template_part( 'content-parts/fcs', 'side_by_sides');
		    	break;
		    case 'testimonials_slider' :
				get_template_part( 'content-parts/fcs', 'testimonials_slider');
		    	break;
			default:
				break;		    
	    }
    endwhile;
else :
    // no layouts found
endif;
?>