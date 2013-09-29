<?php
/**
 * Footer Template
 *
 * Here we setup all logic and XHTML that is required for the footer section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */
 
 global $woo_options;

woo_footer_top();
woo_footer_before();
?>
    <div class="footer">
        <div><img src="<?php bloginfo('template_url'); ?>/images/footer.jpg" width="1063" height="81" /></div>
        <div class="social">
            <div class="links">
                <a href="https://www.facebook.com/MyGuitarPal" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/face-ico.gif" width="38" height="37" /></a>
            	<a href="https://twitter.com/MyGuitarPal" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/twit-ico.gif" width="38" height="37" /></a>
            	<a href="https://www.youtube.com/myguitarpal" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/you-tube.gif" width="38" height="37" /></a>
            </div>
            <div class="right-text"><span class="left"></span><span class="mid"> By Guitar Players for Guitar Players</span><span class="right"></span></div>
            <div class="text">Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet</div>
        </div>
    </div>
</div><!--  Wrapper Ends Here -->
<?php woo_footer_after(); ?>    
<?php wp_footer(); ?>
<?php woo_foot(); ?>
</body>
</html>