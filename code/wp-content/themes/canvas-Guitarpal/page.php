<?php
/**
 * Page Template
 *
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
    <div class="contentwraper">
        <div class="wrapperContent">
            <div class="mid-section">
                <div class="col-1 highlight choose">
                    <div class="arrow"><img src="<?php bloginfo('template_url'); ?>/images/arrow-1.png" width="254" height="91" /></div>
                    <div class="img-box">
                        <img src="<?php bloginfo('template_url'); ?>/images/img-1.png" width="217" height="155" />
                    </div>
                    <h4>All Levels in the Most Popular Styles</h4> 
                    <div class="oval"><img src="<?php bloginfo('template_url'); ?>/images/choose.png" width="159" height="42" /></div>  
                </div>
                <div class="col-1 learn">
                    <div class="arrow"><img src="<?php bloginfo('template_url'); ?>/images/learn-arrow.png" width="501" height="91" /></div>
                    <div class="img-box">
                        <img src="<?php bloginfo('template_url'); ?>/images/img-2.png" width="211" height="112" />
                    </div>
                    <h4>Hundreds of HD Videos  at Launch</h4> 
                    <div class="oval"><img src="<?php bloginfo('template_url'); ?>/images/learn.png" width="159" height="42" /></div>  
                </div>
                <div class="col-1 play">
                    <div class="arrow"><img src="<?php bloginfo('template_url'); ?>/images/play-arrow.png" width="737" height="91" /></div>
                    <div class="img-box">
                        <img src="<?php bloginfo('template_url'); ?>/images/img-3.png" width="220" height="176" />
                    </div>
                    <h4>Studio Produced, Lesson Specific Jam Tracks</h4>   
                    <div class="oval"><img src="<?php bloginfo('template_url'); ?>/images/play.png" width="159" height="42" /></div>
                </div>
                <div class="col-1 print">
                    <div class="arrow"><img src="<?php bloginfo('template_url'); ?>/images/print-arrow.png" /></div>
                    <div class="img-box">
                        <img src="<?php bloginfo('template_url'); ?>/images/img-4.png" width="137" height="173" />
                    </div>
                    <h4>Hundreds of Songs, Arrangements and Diagrams</h4>   
                    <div class="oval"><img src="<?php bloginfo('template_url'); ?>/images/print.png" width="159" height="42" /></div>
                </div>
            </div>
        </div>
    </div>
  
	<?php woo_content_after(); ?>
    <?php get_footer(); ?>