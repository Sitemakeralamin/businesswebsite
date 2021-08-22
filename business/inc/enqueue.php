<?php

function business_config(){
	
	//Business Style sheet call
	
	wp_enqueue_style('fonts',get_template_directory_uri().'/https://fonts.googleapis.com/css?family=Lato:400',array(),'1.2','all');
	
	wp_enqueue_style('comments',get_template_directory_uri().'/css/comments.css',array(),'1.2','all');
	
wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array(),'1.2','all');
wp_enqueue_style('fontwasome',get_template_directory_uri().'/fontawesome/css/all.min.css',array(),'1.2','all');
wp_enqueue_style('slick',get_template_directory_uri().'/slick/slick.css',array(),'1.2','all');
wp_enqueue_style('slick-theme',get_template_directory_uri().'/slick/slick-theme.css',array(),'1.2','all');
wp_enqueue_style('buisness_template_css',get_template_directory_uri().'/css/templatemo-real-dynamic.css',array(),'1.2','all');
	
wp_enqueue_style('main_style',get_stylesheet_uri(),array(),'1.2','all');

	
	//Business Javascript  call
	
	wp_enqueue_script('jquery_min',get_template_directory_uri().'/js/jquery-3.4.1.min.js',array('jquery'),'1.2',true);

	
	wp_enqueue_script('bootstrap_min',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),'1.2',true);
	wp_enqueue_script('parallax',get_template_directory_uri().'/js/parallax.min.js',array('jquery'),'1.2',true);
	wp_enqueue_script('slick_min',get_template_directory_uri().'/slick/slick.min.js',array('jquery'),'1.2',true);
	wp_enqueue_script('tooplate',get_template_directory_uri().'/js/tooplate-script.js',array('jquery'),'1.2',true);
	
	
	//
	//  Set Feature Image
	//
	
	
	
	
}
add_action('wp_enqueue_scripts','business_config');