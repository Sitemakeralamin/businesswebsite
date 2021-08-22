<?php
get_header();

$myoptions = get_option('business-options');
?>
 
   
    <div class="tm-container">
        <div class="parallax-window" data-parallax="scroll" data-image-src="
        <?php 		
		echo esc_url($myoptions['blog_banner']);
		?>">
        >
        </div>
        
      <div class="serach">
            	<?php get_search_form();?>
            </div>
            
    </div>
    <div class="tm-container bg-white">
        <div class="tm-header-stripe w-100"></div>
        <div class="container-fluid">
            <!--Intro-->
            <section class="row tm-mb-1">
               <?php
				if(have_posts()):
				?>
                <div class="col-12 text-center mx-auto tm-about-box">
                    <h2 class="tm-text-primary tm-my-1 tm-mb-5 tm-intro-text"><?php esc_html_e('Search for:','business');?><?php echo the_search_query();?></h2>
                    
                </div>
            </section>

            <div class="row tm-mb-6 tm-contact-row mx-auto">
                <div class="col-md-8 tm-contact-left">
                  
                   <?php
					
					while(have_posts()):
					
					the_post();
					
					?>
					     <div class="tm-double-border-1 tm-border-gray">
                        <div class="tm-double-border-2 tm-border-gray tm-box-pad">
                            <h3 class="tm-text-primary tm-mb-0.5"><?php echo get_the_title();?></h3>
                          <a href="<?php the_permalink();?>"><?php the_post_thumbnail(array('600','400'));?></a>
                          
                          		<div class="post_meta">
                          			Posted By:<?php the_author_link();?> |
                          			Posted On: <?php the_time('M d, Y');?> |
                          			Posted In:<?php the_category(', ');?> |
                          			<?php comments_popup_link('no comment','1 comment','% comments','comment_class','comments off');?>
                          		</div>    
                          		
                          		  <p>
                          		  <?php the_excerpt();?>
                          		  <a href="<?php the_permalink();?>"><?php esc_html_e('Read more&raquo;','business');?></a>
                          		  </p>
                        
                        </div>
                   </div> 
					<?php
					endwhile;
				
					?>
                  
                       
                </div>  
                
   <div class="col-md-4 ml-auto tm-contact-right">
   	<?php dynamic_sidebar('mainsidebar');?>
   </div>

		
				
</div>
 <?php
else :
?>
<h2 class="search_result"><?php esc_html_e('Sorry!! The Search Result Not Found.Please Search Again.','business');?> </h2>
<?php
endif;
wp_reset_postdata();			
	?>      
<div class="container">
	<div class="row">
		<div class="col-xl-12">
			<div class="pagination_style">
			<?php echo paginate_links();?>
			</div>
		</div>
	</div>
	
</div>
			
    
 <?php get_footer();?>