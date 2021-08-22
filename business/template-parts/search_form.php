<div class="serach">
            	<form role="<?php esc_attr_e('search','business')?>" method="get" id="searchform" class="searchform" action="http://localhost/web/">
				<div>
					<label class="screen-reader-text" for="s"><?php esc_html_e('Search Here:','business');?></label>
					<input type="text" value="" name="s" id="s" placeholder="<?php echo the_search_query();?>">
					<input type="submit" id="searchsubmit" value="Search">
				</div>
			</form>          	  
	  </div>
	