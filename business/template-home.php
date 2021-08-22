<?php 
/*
Template Name: Home
*/
$myoptions = get_option('business-options');
get_header();?>
   

    <div class="tm-container">
        <div class="parallax-window" data-parallax="scroll" data-image-src="
        <?php 		
		echo esc_url($myoptions['home_banner']);
		?>">
        </div>
    </div>
    <div class="tm-container bg-white">
        <div class="tm-header-stripe w-100"></div>
        <div class="container-fluid">
            <!--Intro-->
            <section class="row tm-mb-1">
                <h2 class="col-12 text-center tm-text-primary tm-my-1 tm-intro-text" style="color:<?php echo esc_attr($myoptions['section_title_color']);?>;"><?php echo esc_html($myoptions['section_title']);?></h2>
                <?php
				$introductins =$myoptions['introduction_group'];
				
				if($introductins):
					foreach($introductins as $introductin):
				?>
			      
				      <div class="col-lg-4 text-center">
                    <div class="tm-box-1">
                        <i class="<?php echo esc_attr($introductin['first_icon']);?> fa-4x tm-icon-1"></i>
                        <h3 class="tm-h3 tm-text-primary" style="color:<?php echo esc_attr($myoptions['title_color']);?>;"><?php echo esc_html($introductin['first_title']);?></h3>
                        <p style="color:<?php echo esc_attr($myoptions['description_color']);?>;"><?php echo esc_html($introductin['first_description']);?></p>
                    </div>
                </div>
				
				<?php
				endforeach;
				endif;
				
				?>
                
          
            </section>

            <!-- Services -->
            <div class="row tm-mb-1">
           
           <?php
				$services =$myoptions['service_group'];
				
				if($services):
				
				foreach($services as $service):
				
				?>
				   <div class="col-lg-4">
                    <i class="<?php echo esc_attr($service['s_icon']);?> fa-5x tm-icon-2 d-block text-center"></i>
                    <div class="tm-bg-gray tm-box-2">
                        <h3 class="tm-text-primary tm-h3" style="color:<?php echo esc_attr($myoptions['title_colors']);?>"><?php echo esc_html($service['s_title']);?></h3>
                        <p class="tm-mb-5" style="color:<?php echo esc_attr($myoptions['description_colors']);?>"><?php echo esc_html($service['s_description']);?></p>
                        <div class="text-center"><a href="<?php the_permalink();?>" class="btn btn-secondary rounded-0"><?php echo esc_html($service['s_btn']);?></a></div>
                    </div>
                </div>
                
				
				<?php
				endforeach;
				endif;
				
				?>
             
            </div>

            <!-- Testimonials -->
            <div class="tm-mb-2">
                <h2 class="text-center tm-text-primary tm-h2-big tm-mb-6"><?php  esc_html_e('Our Happy Customers','business');?></h2>
                <!-- Carousel -->
                <div class="col-lg-6 mx-auto tm-mb-4">
                    <div class="tm-carousel">
                       
                       <?php
						$args =array(
						'post_type' =>'testomonial',
						'posts_per_page'=>-1	
						
						);
						$query= new WP_query($args);
						
						while($query->have_posts()):
						
							$query->the_post();
						?>
						 <div class="text-center">
                            <h3 class="tm-mb-4 tm-text-dark-gray"><?php the_title();?></h3>
                            <p class="tm-mb-4"><?php the_content();?></p>
                            <div class="rating">
                                <span class="star fas fa-star checked"></span>
                                <span class="star fas fa-star checked"></span>
                                <span class="star fas fa-star checked"></span>
                                <span class="star fas fa-star checked"></span>
                                <span class="star fas fa-star"></span>
                            </div>
                        </div>
						<?php
						endwhile;
						?>
               
                    </div>
                </div>
            </div>
      <?php get_footer();?>