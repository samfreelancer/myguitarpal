<?php
/**
 * Search Template
 *
 * The search template is used to display search results from the native WordPress search.
 *
 * If no search results are found, the user is assisted in refining their search query in
 * an attempt to produce an appropriate search results set for the user's search query.
 *
 * @package WooFramework
 * @subpackage Template
 */

 get_header();
 global $woo_options;
?>      
    <!-- #content Starts -->
	<?php woo_content_before(); ?>
    <div id="content" class="col-full">
      <div class="leftcontent">
        
        	<img alt="Image" src="<?php bloginfo('template_directory') ?>/images/budh.png">
            <img alt="Image" src="<?php bloginfo('template_directory') ?>/images/baja.png">
        	
        </div>
    
    	 <div class="mdlcontent">
            	
			<div class="forshadow"></div>
            
            <div class="menu">
                
                	<?php
wp_nav_menu( array(
    'menu' => 'Top Menu'
) );
?>
                
                </div>
            
           
            
            <div style="float: left;
    margin-left: 13px;
    margin-top: 20px;">	
            	
			<?php get_template_part( 'loop', 'search' ); ?>
            
            
            </div>
            
            
                    
            </div><!-- /#main -->
          
	
        
        
         <div class="rightcontent">
        
        	<img alt="Image" src="<?php bloginfo('template_directory') ?>/images/blackgtar.png">
            <img alt="Image" src="<?php bloginfo('template_directory') ?>/images/kurribaja.png">
            
        </div>        

		<?php get_sidebar( 'alt' ); ?>       

    </div><!-- /#content -->
	<?php woo_content_after(); ?>
		
<?php get_footer(); ?>