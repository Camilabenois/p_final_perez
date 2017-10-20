<?php 
	function dl_theme_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'post_thumbnails', array(
			'size' => 'post_thumbnails'
		));
		add_theme_support( 'treatment_icons', array(
			'size' => 'treatment_icons'
		));
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'automatic-feed-links' );
		
		add_theme_support( 'custom-logo', array(
			'size' => 'custom_logo'
		));
		add_theme_support( 'slideshow', array(
			'size' => 'slideshow'
		));
		add_theme_support( 'recent_posts_thumbnails', array(
			'size' => 'recent_posts_thumbnails'
		));
		add_theme_support( 'recent_posts_thumbnails_sidebar', array(
			'size' => 'recent_posts_thumbnails_sidebar'
		));
		add_theme_support( 'post_thumbnails_bloglist', array(
			'size' => 'post_thumbnails_bloglist'
		));
		register_nav_menus( array(
			'header-menu'  => __( 'Header Menu' ),
			'footer-menu'  => __( 'Footer Menu' ),
		));
		/*add_theme_support( 'infinite-scroll', array(
		    'type'           => 'scroll',
		    'footer_widgets' => false,
		    'container'      => 'content',
		    'wrapper'        => 'blog_list',
		));*/
	}
	add_action( 'after_setup_theme', 'dl_theme_setup' );
	
?>