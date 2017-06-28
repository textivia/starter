<?php

/********************************************************************************************
 *
 * Function:	wpse_edit_footer
 * Parameters:	none
 * Purpose:		Adds Textivia to footer of Dashboard
 *
 ********************************************************************************************/
 
 function wpse_edit_footer()
{
    add_filter( 'admin_footer_text', 'wpse_edit_text', 10 );
}

function wpse_edit_text($content) {
    return 'Thank you for using <strong><em><a href="https://www.textivia.com" target="_blank">Textivia</a></em></strong>';
}
add_action( 'admin_init', 'wpse_edit_footer' );
 
 /********************************************************************************************
 *
 * Function:	example_remove_dashboard_widgets
 * Parameters:	none
 * Purpose:		Removes Unnecessary widgets from the WP Dashboard so as to have a
 * 				cleaner interface for the client.
 *
 ********************************************************************************************/

function example_remove_dashboard_widgets() {
    global $wp_meta_boxes;

    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
	//unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
}
add_action('wp_dashboard_setup', 'example_remove_dashboard_widgets' );

/***************************** Loging Screen Design page.***************************************/

function my_login_logo() { ?>
    <style type="text/css"> 
		body.login {background:url('https://www.textivia.com/wp-content/uploads/2015/10/Internet-Marketing.jpg');background-size:cover;background-repeat:none;}
		body.login div#login {}
		body.login div#login a:hover {color:#ffffff !important;}
		body.login div#login h1 {background-image: url('https://www.textivia.com/wp-content/uploads/2015/10/textivia-logo.png'); background-repeat: no-repeat; background-position: center center; background-size: contain;}
		body.login div#login h1 a {display:block;width:100%;background-size:auto;background-image:none;}
		body.login div#login form#loginform {background: rgba(255,255,255,0.9); border-radius: 10px;box-shadow: none;}
		body.login div#login form#loginform p {}
		body.login div#login form#loginform p label {color:#4886B7;}
		body.login div#login form#loginform input {background:none;border:none;color:#16497F;}
		body.login div#login form#loginform input#user_login {box-shadow: 0px 2px #4886B7;}
		body.login div#login form#loginform input#user_pass {box-shadow: 0px 2px #4886B7;}
		body.login div#login form#loginform p.forgetmenot {}
		body.login div#login form#loginform p.forgetmenot input#rememberme {background:rgba(255,255,255,0.9); border: 1px solid #4886B7;color:#4886B7;}
		body.login div#login form#loginform p.submit {}
		body.login div#login form#loginform p.submit input#wp-submit {background: #16497F;color:white;}
		body.login div#login p#nav {}
		body.login div#login p#nav a {color:#fff;}
		body.login div#login p#backtoblog {}
		body.login div#login p#backtoblog a {color:#fff;}
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

/********************************************************************************************
 *
 * Function:	is_child
 * Parameters:
 * Purpose:		Checks to see if page is a child page.
 *
 ********************************************************************************************/

function is_child($pageSlug, $postParent) {
	$thepage = get_page_by_path($pageSlug);

	if($postParent === url_to_postid($pageSlug)) :
		return true;
	else :
		return false;
	endif;
}

/********************************************************************************************
 *
 * Function:	custom_posttype_glance_items
 * Parameters:	none
 * Purpose:		Adds Custom Post Type Counts to the At A Glance widged on the WP Dashboard
 *
 ********************************************************************************************/

function custom_posttype_glance_items() {
	$glances = array();
	$args = array(
		'public'   => true,
		'_builtin' => false
	);
	$post_types = get_post_types($args, 'object', 'and');
	foreach ($post_types as $post_type)
	{
		$num_posts = wp_count_posts($post_type->name);
		$num   = number_format_i18n($num_posts->publish);
		$text  = _n($post_type->labels->singular_name, $post_type->labels->name, intval($num_posts->publish));
		if (current_user_can('edit_posts'))
		{
			$glance = '<a class="'.$post_type->name.'-count" href="'.admin_url('edit.php?post_type='.$post_type->name).'">'.$num.' '.$text.'</a>';
		}
		else
		{
			$glance = '<span class="'.$post_type->name.'-count">'.$num.' '.$text.'</span>';
		}
		$glances[] = $glance;
	}
	return $glances;
}
add_action('dashboard_glance_items', 'custom_posttype_glance_items');

/********************************************************************************************
 *
 * Function:	cleanPhoneNumber
 * Parameters:	$string
 * Purpose:		Takes a string, removes all non-numerical characters, returns clean phone #
 *
 ********************************************************************************************/

add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

add_filter('widget_text', 'do_shortcode');

function cleanPhoneNumber( $string ) {
   	return str_replace(' ', '', preg_replace('/[^a-zA-Z0-9\s]/', '', $string));
}

function phoneNumber( $atts ) {
    $phoneNumberOptions = get_field('phone_number', 'options');
    $return_string = '<a href="tel:+1'.cleanPhoneNumber ($phoneNumberOptions).'">'.$phoneNumberOptions.'</a>';
    return $return_string;
}
add_shortcode( 'phone', 'phoneNumber' );

function faxNumber( $atts ) {
    $faxNumberOptions = get_field('fax_number', 'options');
    $return_string = '<a href="tel:+1'.cleanPhoneNumber ($faxNumberOptions).'">'.$faxNumberOptions.'</a>';
    return $return_string;
}
add_shortcode( 'fax', 'faxNumber' );

function emailAddress( $atts ) {
    $emailAddressOptions = get_field('email_address', 'options');
    $return_string = '<a href="mailto:' . $emailAddressOptions . '">' . $emailAddressOptions . '</a>';
    return $return_string;
}
add_shortcode( 'email', 'emailAddress' );

function getAddress( $atts ) {
    $streetAddress = get_field('street_address', 'options');
    $cityAddress = get_field('city', 'options');
    $stateAddress = get_field('state', 'options');
    $zipAddress = get_field('zip_code', 'options');
    $return_string = $streetAddress . '<br>' . $cityAddress . ', ' . $stateAddress . ' ' . $zipAddress;
    return $return_string;
}
add_shortcode( 'address', 'getAddress' );

function facebookSC( $atts ) {
    $facebookOptions = get_field('facebook_link', 'options');
    $return_string = '<a href="' . $facebookOptions . '" target="_blank"><i class="fa fa-facebook"></i></a>';
    return $return_string;
}
add_shortcode( 'facebook', 'facebookSC' );

function twitterSC( $atts ) {
    $twitterOptions = get_field('twitter_link', 'options');
    $return_string = '<a href="' . $twitterOptions . '" target="_blank"><i class="fa fa-twitter"></i></a>';
    return $return_string;
}
add_shortcode( 'twitter', 'twitterSC' );

function googleplus( $atts ) {
    $linkedinOptions = get_field('googleplus_link', 'options');
    $return_string = '<a href="' . $linkedinOptions . '" target="_blank"><i class="fa fa-google-plus"></i></a>';
    return $return_string;
}
add_shortcode( 'googleplus', 'googleplus' );

function youtubeSC( $atts ) {
    $youTubeOptions = get_field('youtube_link', 'options');
    $return_string = '<a href="' . $youTubeOptions . '" target="_blank"><i class="fa fa-youtube"></i></a>';
    return $return_string;
}
add_shortcode( 'youtube', 'youtubeSC' );

function yelpSC( $atts ) {
    $yelpOptions = get_field('yelp_link', 'options');
    $return_string = '<a href="' . $yelpOptions . '" target="_blank"><i class="fa fa-yelp"></i></a>';
    return $return_string;
}
add_shortcode( 'yelp', 'yelpSC' );

function instagramSC( $atts ) {
    $instagramOptions = get_field('instagram_link', 'options');
    $return_string = '<a href="' . $instagramOptions . '" target="_blank"><i class="fa fa-instagram"></i></a>';
    return $return_string;
}
add_shortcode( 'instagram', 'instagramSC' );

function linkedinSC( $atts ) {
    $linkedinOptions = get_field('linkedin_link', 'options');
    $return_string = '<a href="' . $linkedinOptions . '" target="_blank"><i class="fa fa-linkedin"></i></a>';
    return $return_string;
}
add_shortcode( 'linkedin', 'linkedinSC' );

function flickrSC( $atts ) {
    $flickrOptions = get_field('flickr_link', 'options');
    $return_string = '<a href="' . $flickrOptions . '" target="_blank"><i class="fa fa-flickr"></i></a>';
    return $return_string;
}
add_shortcode( 'flickr', 'flickrSC' );

?>