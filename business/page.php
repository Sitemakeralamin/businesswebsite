<?php
get_header();
?>

    <div class="tm-container bg-white">
        <div class="tm-header-stripe w-100"></div>
        <div class="container-fluid">
           
    <div class="container">
    	<div class="row">
    		<div class="col-xl-12">
    	
    	<?php get_template_part('/inc/breadcumb');?>
    		
    		</div>
    	</div>
    </div>
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
                          		
                          		  <p> <?php the_content();?> </p>
                        
                        </div>
                   </div> 
                   
                   
               
					<?php
					
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

					endwhile;
			
					wp_reset_postdata();
					?>
                  
                       
                </div>  
                
   <div class="col-md-4 ml-auto tm-contact-right">
   	<?php dynamic_sidebar('mainsidebar');?>
   </div>

   </div>
            


           
 <?php get_footer();?>