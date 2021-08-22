<?php
/*
Template Name: About
*/
get_header();
$myoptions = get_option('business-options');
?>
   
  
    <div class="tm-container">
        <div class="parallax-window" data-parallax="scroll" data-image-src="
        <?php 		
		echo esc_url($myoptions['home_banner']);
		?>"></div>
    </div>

    <div class="tm-container bg-white">
        <div class="tm-header-stripe w-100"></div>
        <div class="container-fluid">
            <!--Intro-->
            <section class="row tm-mb-1">
                <div class="col-12 text-center mx-auto tm-about-box">
                    <h2 class="tm-text-primary tm-my-1 tm-mb-5 tm-intro-text" style="color:<?php echo esc_attr($myoptions['title_color']);?>"><?php echo esc_html($myoptions['about_title']);?></h2>
                    <p style="color:<?php echo esc_attr($myoptions['des_color']);?>"><?php echo esc_html($myoptions['about_desc']);?></p>
                </div>
            </section>

            <div class="row tm-mb-1">
                <section class="col-lg-6 mb-lg-0 mb-5 tm-company-background-col">
                    <div class="tm-company-background">
                        <h3 class="tm-text-primary tm-mb-9" style="color:<?php echo esc_attr($myoptions['title_color']);?>"><?php echo esc_html($myoptions['about_back_title']);?></h3>
                        <img src="<?php echo esc_url($myoptions['about_img']);?>" class="img-fluid tm-mb-3">
                        <p class="tm-mb-3" style="color:<?php echo esc_attr($myoptions['des_color']);?>"><?php echo esc_html($myoptions['about_back_description']);?></p>
                    </div>
                </section>
                <section class="col-lg-6">
                    <h3 class="tm-text-primary tm-mb-5" style="color:<?php echo esc_attr($myoptions['title_color']);?>"><?php echo esc_html($myoptions['Business_Strategy']);?></h3>
                    
                    <?php
					
					$strategys = $myoptions['business_cat'];
					
					if($strategys):
						
						foreach($strategys as $strategy):
					?>
					
					 <div class="tm-strategy-box tm-mb-7">
                        <i class="<?php echo esc_attr($strategy['Strategy_icon']);?> fa-4x tm-strategy-icon"></i>
                        <p class="tm-strategy-text" style="color:<?php echo esc_attr($myoptions['des_color']);?>"><?php echo esc_html($strategy['Strategy_desc']);?></p>
                    </div>
					
					<?php
					
					endforeach;
					endif;
					
					?>
                    
                   
                   
                </section>
            </div>
            
            
            <section class="row tm-mb-8">
                <h3 class="col-12 tm-text-primary text-center tm-mb-5"><?php esc_html_e('Our Team Members','business');?></h3>
                <div class="col-12">
                    <div class="tm-members">
                     
                     
                      <?php
						
						$args = array(
						'post_type'=>'team',
						'posts_per_page'=>-1,
						'order'=>'ASC'
						
						);
						
						$query = new WP_query($args);
						
						while($query ->have_posts()):
						
						$query -> the_post();
						$facebook = get_field('facebook');
						$twitter = get_field('twitter');
						$instagram = get_field('instagram');
						$youtube = get_field('youtube');
						
						?>
						    <div class="tm-member">
                            <figure class="text-center effect-bubba mb-4">
                              <?php the_post_thumbnail();?>
                                <figcaption>
                                    <div class="tm-member-social">
                                       <?php
										if($facebook):
										?>
										<a href="<?php echo esc_url($facebook);?>" class="tm-member-social-link"><i class="fab fa-facebook tm-member-social-icon"></i></a>
										<?php
										endif;
										?>
                                          <?php
										if($twitter):
										?>
										<a href="<?php echo esc_url($twitter);?>" class="tm-member-social-link"><i class="fab fa-twitter tm-member-social-icon"></i></a>
										<?php
										endif;
										?>
                                          <?php
										if($instagram):
										?>
										 <a href="<?php echo esc_url($instagram);?>" class="tm-member-social-link"><i class="fab fa-youtube tm-member-social-icon"></i></a>
										<?php
										endif;
										?>
                                          <?php
										if($youtube):
										?>
										   <a href="<?php echo esc_url($youtube);?>" class="tm-member-social-link"><i class="fab fa-instagram tm-member-social-icon"></i></a>
										<?php
										endif;
										?>
                                
                               
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="text-center">
                                <span class="d-block mb-1 tm-name"><?php the_title();?></span>
                                <span class="d-block tm-text-primary"><?php the_content();?></span>
                            </div>
                          </div>
						
						
						<?php
						
						endwhile;
						
						?>
            
                    </div>
                </div>
            </section>
<?php get_footer();?>