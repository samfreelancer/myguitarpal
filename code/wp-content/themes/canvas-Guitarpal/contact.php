<?php
/**
 * Page Template
Template name:Contact
 * This template is the default page template. It is used to display content when someone is viewing a
 * singular view of a page ('page' post_type) unless another page template overrules this one.
 * @link http://codex.wordpress.org/Pages
 *
 * @package WooFramework
 * @subpackage Template
 */

get_header();
?>
       
    <!-- #content Starts -->
	<?php woo_content_before(); ?>
    <div id="content" class="col-full">
    
     <div class="leftcontent">
        
        	<img alt="Image" src="<?php bloginfo('template_directory') ?>/images/budh.png">
            <img alt="Image" src="<?php bloginfo('template_directory') ?>/images/baja.png">
        	
        </div>
    
    	
            <!-- #main Starts -->
            <?php woo_main_before(); ?>
             <div id="main-sidebar-container">    
		
            <!-- #main Starts -->
            <?php woo_main_before(); ?>
            <div id="main" class="col-left">
            	
			<div class="forshadow"></div>
            
            <div class="mdlleftcontent">
            
            	<div class="menu">
                
                	<?php
wp_nav_menu( array(
    'menu' => 'Top Menu'
) );
?>
                
                </div>
                <div class="contenthdng" style="margin-bottom:20px;">Contact</div>
                
                <?php echo do_shortcode("[contact-form-7 id='59' title='Contact form 1']"); ?> 
     
                
            
            
            </div>
            
            
            
            <div class="mdlrightcontent">
            
            	 <?php          
              if (have_posts()) { $count = 0;
		while (have_posts()) { the_post(); $count++;
			woo_get_template_part( 'content', 'page' ); // Get the page content template file, contextually.
		}
	}
    ?>
                
                 <div class="testinomialhomoepage">
                 
                 	<div class="firstlinks">
                    
                    	<a href="#"><img alt="Image" src="<?php bloginfo('template_directory') ?>/images/macafee.png"></a>
                        <a href="#"><img alt="Image" src="<?php bloginfo('template_directory') ?>/images/trust.png"></a>
                        <a href="#"><img alt="Image" src="<?php bloginfo('template_directory') ?>/images/tick.png"></a>
                    
                    </div>
                    <div class="sociallinks">
                    
                    	<a href="http://www.twitter.com" target="_blank"><img alt="Image" src="<?php bloginfo('template_directory') ?>/images/twitt.png"></a>
                        <a href="http://www.facebook.com" target="_blank"><img alt="Image" src="<?php bloginfo('template_directory') ?>/images/face.png"></a>
                        <a href="http://www.gmail.com" target="_blank"><img alt="Image" src="<?php bloginfo('template_directory') ?>/images/gmail.png"></a>
                        <a href="mailto:'danish.ali@mm.com.pk'" target="_blank"><img alt="Image" src="<?php bloginfo('template_directory') ?>/images/email.png"></a>
                    
                    </div>
                 
                 
                 </div>
                
                
                
                
                
            </div>
                    
            </div><!-- /#main -->
            <?php woo_main_after(); ?>
    
            <?php get_sidebar(); ?>
    
		</div><!-- /#main-sidebar-container -->    
        
        
        <div class="rightcontent">
        
        	<img alt="Image" src="<?php bloginfo('template_directory') ?>/images/blackgtar.png">
            <img alt="Image" src="<?php bloginfo('template_directory') ?>/images/kurribaja.png">
            
        </div>     
</div><!-- /#content -->
	<?php woo_content_after(); ?>

<?php get_footer(); ?>