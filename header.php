<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icons/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icons/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icons/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php get_template_part( 'content', 'off_canvas_mobile' ); ?>
	<div class="header_container">
        <header id="header" class="header_wrap row">
            <div class="site-header small-text-center medium-3 large-3 columns">
                <div class="header-logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    	<img src="<?php the_field('header_logo', 'options'); ?>" class="header-image" alt="<?php echo esc_attr( get_bloginfo('name', 'display') ); ?>" />
                    </a>
                </div><!-- .header-logo -->
             </div><!-- .site-header -->
             <div class="site-contact medium-9 large-9 columns">
             	<div class="row">
             		<div class="small-12 columns top-menu">
             			<?php wp_nav_menu('menu=9&menu_class=menu right'); ?>
             		</div>
             		<div class="small-12 columns">
			 			<?php get_template_part( 'content', 'nav' ); ?>
             		</div> 
             	</div>
             </div>
        </header><!-- #header -->
	</div><!-- end .header_container -->