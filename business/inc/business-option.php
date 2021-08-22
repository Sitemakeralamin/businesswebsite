<?php

if(class_exists('CSF')):

$prefix = 'business-options';

CSF:: createOptions($prefix,array(

	'menu_title'=>__('Business Options','business'),
	'menu_slug'=>'business options',
	'menu_type'=>'submenu',
	'menu_parent'=>'themes.php',
	'framework_title' => __('Business Options Created <small>by md business</small>','business'),
	 'footer_text'=> "<span style='color:#fff;'>Contact Any Help </span> <a href='https://m.me/mdbusinessislam98316' target='_blank'>mdbusiness98316@gmail.com</a> || <a style='color:#fff;' href='https://www.facebook.com/mdbusinessislam98316'  target='_blank'>visit Our facebook page</a>",
));


  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => __('Banner Image','business'),
	 'icon'=>'fas fa-bars',
    'fields' => array(

      // A textarea field
      array(
        'id'    => 'home_banner',
        'type'  => 'upload',
        'title' => __('Home Banner','business'),
	 'button_title'=>__('Home Banner','business'),
		  'remove_title'=>__('Remove Banner','business'),
		  'default'=>'http://localhost/web/wp-content/uploads/2021/08/real-dynamic-banner-01.jpg',
      ),
		
		 array(
        'id'    => 'about_banner',
        'type'  => 'upload',
        'title' => __('About Banner','business'),
		 'button_title'=>__('About Banner','business'),
		  'remove_title'=>__('Remove Banner','business'),
		  'default'=>'http://localhost/web/wp-content/uploads/2021/08/real-dynamic-banner-02.jpg',	 
      ),	
		
		array(
        'id'    => 'contact_banner',
        'type'  => 'upload',
        'title' => __('Contact Banner','business'),
		 'button_title'=>__('Contact Banner','business'),
		  'remove_title'=>__('Remove Banner','business'),
		  'default'=>'http://localhost/web/wp-content/uploads/2021/08/real-dynamic-banner-04.jpg',	
      ),
		array(
        'id'    => 'blog_banner',
        'type'  => 'upload',
        'title' => __('Blog Banner','business'),
		 'button_title'=>__('Blog Banner','business'),
		  'remove_title'=>__('Remove Banner','business'),
		  'default'=>'http://localhost/web/wp-content/uploads/2021/08/real-dynamic-banner-03.jpg',
      ),
		

    )
	  
  ) );
	
	
CSF::createSection($prefix,array(
	'title'=>__('Service Introduction','business'),
	'icon'=>'fas fa-star',
	'fields'=>array(
	
		array(
		'id'=>'section_title',
		'type'=>'text',
		'title'=>__(' Section Title','business'),
		'default'=>'Introducing the real dynamic'	
		),
		
		array(
		'id'=>'introduction_group',
		'type'=>'group',
		'title'=>__('Service Level','business'),
		'button_title'=>__('Add Service Introduction','business'),
		'fields'=>array(
		
			array(
			'id'=>'first_title',
			'type'=>'text',
			'title'=>__('heading','business'),
			'default'=>__('Real Dynamic HTML Template','business'),	
			),
			
			array(
			'id'=>'first_description',
			'type'=>'textarea',
			'title'=>__('Description','business'),
			'default'=>__('This is a responsive 100% fluid-width layout that you can use for your business or commercial websites. Just go to TemplateMo and download the template now.','business'),	
			),
			
			array(
			'id'=>'first_icon',
			'type'=>'icon',
			'title'=>'Add Icon',
			'default'=>'',	
			),
		
		),	
		),
		
		array(
		'id'=>'section_title_color',
		'type'=>'color',
		'title'=>__('Section Title Color','business'),
		'default'=>'blue'	
		
		),
		array(
		'id'=>'title_color',
		'type'=>'color',
		'title'=>__(' Title Color','business'),
		'default'=>__('blue','business')
		
		),
		array(
		'id'=>'description_color',
		'type'=>'color',
		'title'=>__(' Description Color','business'),
		'default'=>__('black','business')	
		
		),
		
		
	
	)
								
								
	));


CSF::createSection($prefix,array(

	'title'=>__('Service','business'),
	'icon'=>'fas fa-star',
	'fields'=>array(
	
		array(
		'id'=>'service_group',
		'type'=>'group',
		'title'=>__('Add Service','business'),
		'fields'=>array(
		
			array(
			'id'=>'s_title',
			'type'=>'text',
			'title'=>__('Service Title','business'),
			'default'=>__('What can we do for you?','business'),
				
			),
			
			array(
			'id'=>'s_description',
			'type'=>'textarea',
			'title'=>__('Service Description','business'),
			'default'=>__('Pellentesque sodales accumsan sem, vel efficitur arcu blandit sed. In feugiat dolor id sem interdum dignissim.','business'),
				
			),
			
			array(
			'id'=>'s_icon',
			'type'=>'icon',
			'title'=>__('Service Icon','business'),
				
			),
			
			array(
			'id'=>'s_btn',
			'type'=>'text',
			'title'=>__('Button Text','business'),
			'default'=>__('Read More','business')	
			),
			array(
			'id'=>'s_btn_link',
			'type'=>__('link','business'),
			'title'=>__('Button link','business'),
			
			),
		
		),	
		
		),
		
		array(
		'id'=>'title_colors',
		'type'=>'color',
		'title'=>__(' Title Color','business'),
		'default'=>__('blue','business')
		
		),
		array(
		'id'=>'description_colors',
		'type'=>'color',
		'title'=>__(' Description Color','business'),
		'default'=>__('black','business')	
		
		),
		
	
	)

));
	

CSF::createSection($prefix,array(

	'title'=>__('About Section','business'),
	'icon'=>'fas fa-bars',
	'fields'=>array(
	
		array(
		'id'=>'about_title',
		'type'=>'text',
		'title'=>__('Section Title','business'),
		'default'=>__('About the dynamic','business')	
		
		),
		
		array(
		'id'=>'about_img',
		'type'=>'upload',
		'title'=>__('Section Image','business'),
		'default'=>'http://localhost/web/wp-content/uploads/2021/08/company-background.jpg'	
		
		),	
		
		array(
		'id'=>'about_desc',
		'type'=>'textarea',
		'title'=>__('Section Description','business'),
		'default'=>__('Morbi non tortor hendrerit, imperdiet sem suscipit, ultrices turpis. Nulla eleifend vestibulum eros id scelerisque. Aliquam fringilla in sem aliquam hendrerit. Maecenas congue euismod tortor, eget interdum purus imperdiet ac. Donec vestibulum dignissim nisl ac accumsan.','business')
		
		),
	
		
		array(
		'id'=>'about_back_title',
		'type'=>'text',
		'title'=>__('Company Background','business'),
		'default'=>__('Company Background','business'),	
		
		),
		array(
		'id'=>'about_back_description',
		'type'=>'textarea',
		'title'=>__(' Background description','business'),
		'default'=>__('Morbi non tortor hendrerit, imperdiet sem suscipit, ultrices turpis. Nulla eleifend vestibulum eros id scelerisque. Aliquam fringilla in sem aliquam hendrerit. Maecenas congue euismod tortor, eget interdum purus imperdiet ac. Donec vestibulum dignissim nisl ac accumsan.','business'),	
		
		),
		array(
		'id'=>'Business_Strategy',
		'type'=>'text',
		'title'=>__('Business Strategy','business'),
		'default'=>__('Business Strategy','business'),	
		
		),
		
		array(
		'id'=>'business_cat',
		'type'=>'group',
		'title'=>__('Strategy Description','business'),
		'fields'=>array(
		
			array(
			'id'=>'Strategy_desc',
			'type'=>'textarea',
			'title'=>__(' Strategy Description','business'),
			'default'=>__('
Nam quis dolor vitae metus imperdiet pulvinar ac at mauris. Nam lobortis tristique ex, non ullamcorper felis. Aenean odio massa, aliquam id metus sed, dignissim dignissim sem.','business'),	
			),
			
		array(
			'id'=>'Strategy_icon',
			'type'=>'icon',
			'title'=>__(' Strategy icon','business'),
		
		),
		
		),
	
	
	),
		
		array(
		
			'id'=>'title_color',
			'type'=>'color',
			'title'=>__('Heading Color','business'),
			'default'=>__('blue','business'),
		
		),
		
		array(
		
			'id'=>'des_color',
			'type'=>'color',
			'title'=>__('Description Color','business'),
			'default'=>__('black','business'),
		
		),
		
		)

));


CSF::createSection($prefix,array(

	'title'=>__('Contact','business'),
	'icon'=>'fas fa-star',
	'fields'=>array(
	
		array(
		'id'=>'section_title',
		'type'=>'text',
		'title'=>__('Section Title','business'),
		'default'=>__('Contact the Dynamic','business')	
		),
		array(
		'id'=>'section_des',
		'type'=>'textarea',
		'title'=>__('Section Description','business'),
		'default'=>__('Nam eget finibus eros, at tristique turpis. Vivamus suscipit ipsum eget ex rhoncus, vitae venenatis sem auctor. Integer aliquet tellus vitae nisi sodales, in molestie odio convallis. Donec finibus, nisi sit amet pretium vestibulum.','business')	
		),
		
		array(
		'id'=>'section_location_title',
		'type'=>'text',
		'title'=>__('Location Title','business'),
		'default'=>__('Our Location','business')	
		),	
		
		array(
		'id'=>'section_location_des',
		'type'=>'textarea',
		'title'=>__('Location description','business'),
		'default'=>__('120-240 Donec euismod, lectus ut pharetra tempor, magna risus venenatis sem, et consequat massa 10980','business')	
		),
		
		
		array(
		  'id'    => 'map',
		  'type'  => 'map',
		  'title' => __('Location Map','business'),
		),

		array(
		  'id'    => 'contact_title',
		  'type'  => 'color',
		  'title' => __('Title Color','business'),
		),
		array(
		  'id'    => 'contact_desc',
		  'type'  => 'color',
		  'title' => __('Description Color','business'),
		),
		array(
		  'id'    => 'Location_title',
		  'type'  => 'color',
		  'title' => __('Location Title','business'),
		),
		array(
		  'id'    => 'location_desc',
		  'type'  => 'color',
		  'title' => __('Location Description','business'),
		),

	)




));

CSF::createSection($prefix,array(

	'title'=>__('404 Page','business'),
	'icon'=>'fas fa-star',
	'fields'=>array(
	
		array(
		'id'=>'title_404',
		'type'=>'text',
		'title'=>__('404 Page Title','business'),
		'default'=>__('404 page','business'),	
		),
		
		array(
		'id'=>'img_404',
		'type'=>'upload',
		'title'=>__('404 Page Image','business'),
		'default'=>'http://localhost/web/wp-content/uploads/2021/08/404-error-design.jpg',	
		),
		
		array(
		'id'=>'desc_404',
		'type'=>'textarea',
		'title'=>__('404 Description','business'),
		'default'=>__('A 404 page is a landing page that tells your site viewers the requested page is unavailable or in some cases, does not exist. A 404 error tells users the page cannot be accessed – and it can be a major problem. When users can not access a page, they can not find the information they need','business'),	
		),
		
		array(
		'id'=>'title_color_404',
		'type'=>'color',
		'title'=>__('Title Color','business'),
	
		),
		array(
		'id'=>'desc_color_404',
		'type'=>'color',
		'title'=>__('Description Color','business'),
	
		),
	
	)


));

CSF::createSection($prefix,array(
'title'=>__('footer','business'),
'icon'=>'fas fa-star',
'fields'=>array(

	array(
		'id'=>'footer_section',
		'type'=>'code_editor',
		'title'=>__('footer Text','business'),
		'default'=>__('Company © 2020 Company Name - Real Dynamic by md business','business')
	),
	
	array(
	'id'=>'footer_color',
	'type'=>'color',
	'title'=>__('Footer Color','business')	
	),


)	
	
));

endif;