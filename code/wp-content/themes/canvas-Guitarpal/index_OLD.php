<?php
/**
 * Index Template
 *
 * The index template is a placeholder for all cases that don't have a template file. 
 * Ideally, all fases would be handled by a more appropriate template according to the
 * current page context (for example, `tag.php` for a `post_tag` archive or `single.php`
 * for a single blog post).
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
        
        	<img alt="Image" src="<?php bloginfo('stylesheet_directory') ?>/images/budh.png">
            <img alt="Image" src="<?php bloginfo('stylesheet_directory') ?>/images/baja.png">
        	
        </div>
    
    	<div id="main-sidebar-container">    
		
            <!-- #main Starts -->
            <?php woo_main_before(); ?>
            <div id="main" class="col-left">
            	
			<div class="forshadow"></div>
            
            <div class="mdlleftcontent">
            
            	<div class="menu">
                
                	<ul>
                
                        	<?php
wp_nav_menu( array(
    'menu' => 'Top Menu'
) );
?>
                    
                	</ul>
                
                </div>
                
                <div class="contenthdng">
                
                	The Best Guitar Training available on the internet!
                
                </div>
                <div class="contendetail">
                
                	We'll teach you all the mad skills you need to burn uo all the We'll teach you all the mad skills you need to burn uo all the We'll teach you all the mad skills you.
                </div>
                <div class="signupfreelesson">
                
                	<a href="?page_id=19"><img alt="Image" src="<?php bloginfo('stylesheet_directory') ?>/images/freeee.png"></a>
                    <a href="?page_id=17"><img alt="Image" src="<?php bloginfo('stylesheet_directory') ?>/images/signupp.png"></a>
                
                </div>
                <div class="fourbox">
                
                	<div class="smallfourboxes">
                    
                    	<div class="smallhdng">
                        
                        	Hundreds of Videos
                        
                        </div>
                        
                        <p>
                          Lorem Ipsum is simply dummy text of the printing .
                          </p>
                        
                    </div>
                    
                    <div class="smallfourboxes ">
                    
                    	<div class="smallhdng baja">
                        
                        	Hundreds of Videos
                        
                        </div>
                        
                        <p>
                          Lorem Ipsum is simply dummy text of the printing .
                          </p>
                        
                    </div>
                    <div class="smallfourboxes">
                    
                    	<div class="smallhdng">
                        
                        	Hundreds of Videos
                        
                        </div>
                        
                        <p>
                          Lorem Ipsum is simply dummy text of the printing .
                          </p>
                        
                    </div>
                    <div class="smallfourboxes">
                    
                    	<div class="smallhdng baja">
                        
                        	Hundreds of Videos
                        
                        </div>
                        
                        <p>
                          Lorem Ipsum is simply dummy text of the printing .
                          </p>
                        
                    </div>
                
                
                </div>
            
            
            </div>
            
            
            
            <div class="mdlrightcontent">
            
            	<div class="mdlrightvideo">
                
            		<!--<img src="images/video.png" alt="Image"/>-->
                  <!--  <iframe width="378" height="273" src="http://www.youtube.com/embed/dvk2e9F9-Qs" frameborder="0" allowfullscreen></iframe>-->
                    <iframe width="378" height="273" frameborder="0" allowfullscreen="" mozallowfullscreen="" webkitallowfullscreen="" src="http://player.vimeo.com/video/59579729"></iframe> 
            	
                </div>
                <div class="testinomialhomoepage">
                
                	<div class="commaenv"></div>
                    
                      <div class="detailwalitesti">This is the <span>best</span> guitar training ever!</div>
                      <div class="detailwalitesti">John Doe, California</div>
                    
                    <div class="commadec"></div>
                    
                    
                    
                    
                    
                </div>
                
                
                <div class="testinomialhomoepage">
                
                	<div class="commaenv"></div>
                    
                      <div class="detailwalitesti"><span>Amazing!</span>This is the guitar training!</div>
                      <div class="detailwalitesti">Syed Danish Ali, California</div>
                    
                    <div class="commadec"></div>
                    
                    
                    
                    
                    
                </div>
                
                
                 <div class="testinomialhomoepage">
                 
                 	<div class="firstlinks">
                    
                    	<a href="#"><img alt="Image" src="<?php bloginfo('stylesheet_directory') ?>/images/macafee.png"></a>
                        <a href="#"><img alt="Image" src="<?php bloginfo('stylesheet_directory') ?>/images/trust.png"></a>
                        <a href="#"><img alt="Image" src="<?php bloginfo('stylesheet_directory') ?>/images/tick.png"></a>
                    
                    </div>
                    <div class="sociallinks">
                    
                    	<a href="http://www.twitter.com" target="_blank"><img alt="Image" src="<?php bloginfo('stylesheet_directory') ?>/images/twitt.png"></a>
                        <a href="http://www.facebook.com" target="_blank"><img alt="Image" src="<?php bloginfo('stylesheet_directory') ?>/images/face.png"></a>
                        <a href="http://www.gmail.com" target="_blank"><img alt="Image" src="<?php bloginfo('stylesheet_directory') ?>/images/gmail.png"></a>
                        <a href="mailto:'danish.ali@mm.com.pk'" target="_blank"><img alt="Image" src="<?php bloginfo('stylesheet_directory') ?>/images/email.png"></a>
                    
                    </div>
                 
                 
                 </div>
                
                
                
                
                
            </div>
                    
            </div><!-- /#main -->
            <?php woo_main_after(); ?>
    
            <?php get_sidebar(); ?>
    
		</div><!-- /#main-sidebar-container -->    
        
        
        <div class="rightcontent">
        
        	<img alt="Image" src="<?php bloginfo('stylesheet_directory') ?>/images/blackgtar.png">
            <img alt="Image" src="<?php bloginfo('stylesheet_directory') ?>/images/kurribaja.png">
            
        </div>     

		<?php get_sidebar( 'alt' ); ?>       

    </div><!-- /#content -->
	<?php woo_content_after(); ?>
		
<?php get_footer(); ?>