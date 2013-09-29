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
<div class="searchbar"><!--SearchBar Start-->
    
    <div class="searchboxcoverie">
    
    	<div class="searchbox">
        
         <form method="get" id="searchformyes" action="<?php bloginfo('home'); ?>/">
        
        	<input type="text" class="abc" size="23" onblur="if(this.value=='') this.value='Search here'" onclick="if(this.value=='Search here')this.value=''" value="Search here" name="s">
            <input type="submit" class="sub" value="search" name="sub">
            
        </form>    
        
        </div>
        
    </div>    
    
    </div>
    <div class="clear"></div>
    <div class="footerCover">
        <div id="footer" class="col-full">
        
            <div class="footer"><!--footer Start-->
        
        	<div class="footerbox">
            
            	<div class="footerboxheading">
                
                	<?php
$cat=3;
$yourcat = get_category($cat);
if ($yourcat) {
echo $yourcat->name ;
}
?>
                
                </div>
                <?php
$args=array(
  'cat' => 3,
  'category__not_in'=> array(157),
  'post_type' => 'page',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'caller_get_posts'=> 1
);
$my_query = null;
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
  while ($my_query->have_posts()) : $my_query->the_post(); ?>
   <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
    <?php
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
              
            
            </div>
            
            
            
            <div class="footerbox">
            
            	<div class="footerboxheading">
                
                	                	<?php
$cat=4;
$yourcat = get_category($cat);
if ($yourcat) {
echo $yourcat->name ;
}
?>
                
                </div>
                               <?php
$args=array(
  'cat' => 4,
  'category__not_in'=> array(157),
  'post_type' => 'page',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'caller_get_posts'=> 1
);
$my_query = null;
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
  while ($my_query->have_posts()) : $my_query->the_post(); ?>
   <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
    <?php
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
            
            </div>
            
            
            <div class="footerbox">
            
            	<div class="footerboxheading">
                
                	<?php
$cat=5;
$yourcat = get_category($cat);
if ($yourcat) {
echo $yourcat->name ;
}
?>
                
                </div>
                                               <?php
$args=array(
  'cat' => 5,
  'category__not_in'=> array(157),
  'post_type' => 'page',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'caller_get_posts'=> 1
);
$my_query = null;
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
  while ($my_query->have_posts()) : $my_query->the_post(); ?>
   <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
    <?php
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
            
            </div>
            
            
            
            <div class="footerbox">
            
            	<div class="footerboxheading">
                
                	<?php
$cat=6;
$yourcat = get_category($cat);
if ($yourcat) {
echo $yourcat->name ;
}
?>
                
                </div>
                <?php
$args=array(
  'cat' => 6,
  'category__not_in'=> array(157),
  'post_type' => 'page',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'caller_get_posts'=> 1
);
$my_query = null;
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
  while ($my_query->have_posts()) : $my_query->the_post(); ?>
   <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
    <?php
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
            
            </div>
            
            
            
            <div class="footerbox">
            
            	<div class="footerboxheading">
                
                		<?php
$cat=7;
$yourcat = get_category($cat);
if ($yourcat) {
echo $yourcat->name ;
}
?>
                
                </div>
                <?php
$args=array(
  'cat' => 7,
  'category__not_in'=> array(157),
  'post_type' => 'page',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'caller_get_posts'=> 1
);
$my_query = null;
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
  while ($my_query->have_posts()) : $my_query->the_post(); ?>
   <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
    <?php
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
            
            </div>
            
            
             <div class="footerbox">
            
            	<div class="footerboxheading">
                
                		<?php
$cat=8;
$yourcat = get_category($cat);
if ($yourcat) {
echo $yourcat->name ;
}
?>
                
                </div>
                <?php
$args=array(
  'cat' => 8,
  'category__not_in'=> array(157),
  'post_type' => 'page',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'caller_get_posts'=> 1
);
$my_query = null;
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
  while ($my_query->have_posts()) : $my_query->the_post(); ?>
   <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
    <?php
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
            
            </div>
            
        
        </div>    
            
            <div id="copyright" class="col-left">
                <?php woo_footer_left(); ?>
            </div>
            
           <!-- <div id="credit" class="col-right">
                <?php woo_footer_right(); ?>
            </div>-->
            
        </div><!-- /#footer  -->
    </div>
	
	<?php woo_footer_after(); ?>    
	
	</div><!-- /#wrapper -->
    
    </div><!-- /#wrapperCOVER -->
	
	<div class="fix"></div><!--/.fix-->
	
	<?php wp_footer(); ?>
	<?php woo_foot(); ?>
	</body>
</html>