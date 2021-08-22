<?php

//require_once(get_template_directory().'/inc/class-tgm-plugin-activation.php'); Not use This Function.
get_template_part('inc/class-tgm-plugin-activation.php');

function business_plugins_install(){
	
	$plugins = array(
	
		array(
		
			'name'=>__('Advanced Custom Fields','business'),
			'slug'=>'advanced-custom-fields',
			'required'=>true,
		
		),
		array(
		
			'name'=>__('Contact Form 7','business'),
			'slug'=>'contact-form-7',
			'required'=>true,
		
		),
		array(
		
			'name'=>__('Business Builder','business'),
			'slug'=>'codestar-framework',
			'source'=>'https://github.com/Codestar/codestar-framework/archive/refs/heads/master.zip',
			'force_activation'   => true,
		
		),	
		
		array(
		
			'name'=>__('Business Custom Post','business'),
			'slug'=>'business-cpt',
			'source'=>'https://github.com/Sitemakeralamin/business-cpt/archive/refs/heads/main.zip',
			'required'=>true,
		
		),
	
	);
	
	$config =array(
	
		'id'=>'business_activation_plugins',
		'menu' => 'business_plugin_active',
		'parent_slug'  => 'themes.php',
		'has_notices'  => true,    
		
	
	);
	
	
	tgmpa($plugins,$config);
	
}
add_action('tgmpa_register','business_plugins_install');