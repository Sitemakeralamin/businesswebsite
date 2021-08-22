<?php
$myoptions =get_option('business-options');


?>
           <div class="row tm-mb-7">
                <div class="col-lg-3 col-sm-6 mb-lg-0 mb-8">
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
                <div class="col-lg-3 col-sm-6 mb-lg-0 mb-8">
                  <?php dynamic_sidebar( 'sidebar-2' ); ?>
                </div>
                <div class="col-lg-3 col-sm-6 mb-lg-0 mb-8">
                 <?php dynamic_sidebar( 'sidebar-3' ); ?>
                </div>
                <div class="col-lg-3 col-sm-6 mb-lg-0 mb-8">
                    <?php dynamic_sidebar( 'sidebar-4' ); ?>
                </div>
            </div>
            <footer class="row">
                <?php
				if($myoptions['footer_section']):
				?>
                <p class="mb-0 w-100 text-center col-12" style="color:<?php echo esc_attr($myoptions['footer_color']);?>">
           
               <?php echo $myoptions['footer_section'];?>
                </p>
                <?php
				endif;
				?>
            </footer>
        </div> <!-- container-fluid -->
    </div> <!-- tm-container -->
  
  
    <?php  get_template_part('inc/custom','js');?>
   
    <?php wp_footer();?>
</body>
</html>