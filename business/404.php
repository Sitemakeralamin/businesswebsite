

<?php get_header();?>

<style>
.image-404 img {
    height: auto;
    width: 58%;
}

.page-404 {
    text-align: center;
    background-color: #fff;
    margin-bottom: 47px;
    padding: 29px;
}
h1.title_404 {
    text-align: center;
    margin: 17px 0px;
    font-family: 'slick';
    color: #ec0b0b;
    font-weight: bold;
    letter-spacing: 13px;
}

.breadcrumbs {
    text-align: center;
    font-size: 35px;
    color: #fff;
    margin-bottom: 31px;
}

</style>
       
 <?php
$myoptions = get_option('business-options');


?>

       <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                   <?php
					if($myoptions['title_404']):
					?>
                    <h1 class="title_404" style="color:<?php echo esc_attr($myoptions['title_color_404']);?>"><?php echo esc_html($myoptions['title_404']);?></h1>
                    <?php
					endif;
						?>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                 
                            <a href="<?php echo esc_url(home_url());?>"><?php esc_html_e('Home','business');?></a><i class="fa fa-angle-double-right"></i><span><?php esc_html_e('404','business');?></span>
                       
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->


<div class="container">
	
	<div class="row">
		<div class="col-xl-12">
			<div class="page-404">
				<div class="image-404">
				<?php
					if($myoptions['img_404']):
					?>
					<img src="<?php echo esc_url($myoptions['img_404']);?>" alt="404 page">
					<?php
					endif;
					?>
					
				</div>
				<div class="link-404">
				<?php
					if($myoptions['desc_404']):
					?>
				<p class="content-404" style="color:<?php echo esc_attr($myoptions['desc_color_404']);?>"><?php echo esc_html($myoptions['desc_404']);?></p>
				
				<?php
					endif;
					?>
					<a href="<?php echo esc_url(home_url());?>"><?php esc_html_e('Go to home page','business');?></a>
				</div>
				
			</div>
			
		</div> 
		
	</div>
</div>
		
	

		


<!-- SideBar Design ---->



<?php get_footer();?>