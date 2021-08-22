<?php
/*
Template Name: Contact
*/
get_header();
$myoptions = get_option('business-options');
?>
   
  
    <div class="tm-container">
        <div class="parallax-window" data-parallax="scroll" data-image-src=
        "<?php 		
		echo esc_url($myoptions['contact_banner']);
		?>">
        
          </div>
    </div>

    <div class="tm-container bg-white">
        <div class="tm-header-stripe w-100"></div>
        <div class="container-fluid">
            <!--Intro-->
         
			<section class="row tm-mb-1">
                <div class="col-12 text-center mx-auto tm-about-box">
                    <?php
			if($myoptions['section_title']):
			
			?>
                    <h2 class="tm-text-primary tm-my-1 tm-mb-5 tm-intro-text" style="color:<?php echo esc_attr($myoptions['contact_title']);?>"><?php echo esc_html($myoptions['section_title']);?></h2>
                    <?php
					endif;
					if($myoptions['section_des']):
					?>
                    
                    <p style="color:<?php echo esc_attr($myoptions['contact_desc']);?>"><?php echo esc_html($myoptions['section_des']);?></p>
                </div>
            </section>
			<?php
			endif;
			?>
            

            <div class="row tm-mb-10 tm-contact-row mx-auto">
                <div class="col-lg-6 tm-contact-left">
                    <div class="tm-double-border-1 tm-border-gray">
                     
						   <div class="tm-double-border-2 tm-border-gray tm-box-pad">
                        <?php
						if($myoptions['section_location_title']):
						
						?>
                            <h3 class="tm-text-primary tm-mb-5" style="color:<?php echo esc_attr($myoptions['Location_title']);?>"><?php echo esc_html($myoptions['section_location_title']);?></h3>
                            
                            <?php
						   endif;
						
						   if($myoptions['section_location_des']):
						   ?>
                            <address class="tm-mb-9" style="color:<?php echo esc_attr($myoptions['location_desc']);?>"><?php echo esc_html($myoptions['section_location_des']);?></address>
                            
                            <?php
							endif;
							?>
                            <div class="mapouter">
                               <?php
								$google_maps = $myoptions['map'];
								if($google_maps):
								?>
                                <div class="gmap_canvas">
                                
                                <iframe src = "https://maps.google.com/maps?q=<?php echo esc_url($google_maps['latitude']);?>,<?php echo esc_url($google_maps['longitude']);?>&hl=es;z=14&amp;output=embed"></iframe>
                         
                                </div>
                               <?php
								endif;
								?>
                            </div>
                        </div>
						
                     
                    </div>
                </div>
                <div class="col-lg-6 ml-auto tm-contact-right">
                    <div class="tm-contact-form-wrap">
                    <?php echo do_shortcode('[contact-form-7 id="85" title="business"]');?>
                        
                    </div>
                </div>
            </div>

            
         <?php get_footer();?>