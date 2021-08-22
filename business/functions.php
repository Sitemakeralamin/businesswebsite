<?php

require_once(get_template_directory().'/inc/enqueue.php');
require_once(get_template_directory().'/lib/nav_walker.php');
require_once(get_template_directory().'/inc/business-option.php');
require_once(get_template_directory().'/inc/business-activation.php');
require_once(get_template_directory().'/inc/business-demo-content.php');




//
// Register Business Website Menu 
//

if ( ! function_exists( 'business_register_nav_menu' ) ) {
 
    function business_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'business' ),
            'footer_menu'  => __( 'Footer Menu', 'business' ),
        ) );
		
		add_theme_support( 'post-thumbnails');
		add_theme_support( 'post-thumbnails', array( 'team' ) );
		
		add_theme_support( "title-tag" ); 
		add_theme_support( 'automatic-feed-links' );
				/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
				'navigation-widgets',
			)
		);
		
			/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		
		 add_theme_support( "responsive-embeds" );
		
		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );
		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height.
		add_theme_support( 'custom-line-height' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

    }
    add_action( 'after_setup_theme', 'business_register_nav_menu');
}



// 
//  Register Sidebars
//
function business_sidebar() {
	
	    register_sidebar( array(
        'name'          => __( 'main sidebar', 'business' ),
        'id'            => 'mainsidebar',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'business' ),
        'before_widget' => '<ul class="list-group">',
        'after_widget'  => '</ul>',
        'before_title'  => '<h3 class="tm-text-primary custom ">',
        'after_title'   => '</h3>',
    ) ); 
	 
    register_sidebar( array(
        'name'          => __( 'footer1', 'business' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'business' ),
        'before_widget' => '<nav class="tm-nav-secondary">',
        'after_widget'  => '</nav>',
        'before_title'  => ' <h3 class="tm-text-primary tm-mb-4">',
        'after_title'   => '</h3>',
    ) ); 
	
	register_sidebar( array(
        'name'          => __( 'footer2', 'business' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'business' ),
        'before_widget' => '<nav class="tm-nav-secondary">',
        'after_widget'  => '</nav>',
        'before_title'  => ' <h3 class="tm-text-primary tm-mb-4">',
        'after_title'   => '</h3>',
    ) );	
	
	register_sidebar( array(
        'name'          => __( 'footer3', 'business' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'business' ),
        'before_widget' => '<nav class="tm-nav-secondary">',
        'after_widget'  => '</nav>',
        'before_title'  => ' <h3 class="tm-text-primary tm-mb-4">',
        'after_title'   => '</h3>',
    ) );
	
    	register_sidebar( array(
        'name'          => __( 'footer4', 'business' ),
        'id'            => 'sidebar-4',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'business' ),
        'before_widget' => '<nav class="tm-nav-secondary">',
        'after_widget'  => '</nav>',
        'before_title'  => ' <h3 class="tm-text-primary tm-mb-4">',
        'after_title'   => '</h3>',
    ) );
    
}
add_action( 'widgets_init', 'business_sidebar' );

