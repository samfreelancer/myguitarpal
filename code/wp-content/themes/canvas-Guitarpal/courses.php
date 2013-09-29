<?php
/**
 * Page Template
Template Name:Courses
 * This template is the default page template. It is used to display content when someone is viewing a
 * singular view of a page ('page' post_type) unless another page template overrules this one.
 * @link http://codex.wordpress.org/Pages
 *
 * @package WooFramework
 * @subpackage Template
 */
 global $user_ID; 
if ($user_ID) { 
 $heading_tag = 'span';
 if ( is_home() OR is_front_page() ) { $heading_tag = 'h1'; }
 
 // Get our website's name, description and URL. We use them several times below so lets get them once.
 $site_title = get_bloginfo( 'name' );
 $site_url = home_url( '/' );
 $site_description = get_bloginfo( 'description' );
 
 global $woo_options;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>" />
<title><?php woo_title(); ?></title>
<?php woo_meta(); ?>
<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>" />
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css" />
<style type="text/css">

body,p
{
	font:normal!important;
}

</style>
<?php wp_head(); ?>
<?php woo_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php woo_top(); ?>
<div class="headercovertop"></div>
<?php woo_header_before(); ?>
 <div class="headercover">   
	<div id="header" class="header">
 		
		<?php woo_header_inside(); ?>
       
		<div id="logo">
		<?php
			// Website heading/logo and description text.
			if ( isset( $woo_options['woo_logo'] ) && ( '' != $woo_options['woo_logo'] ) ) {
				$logo_url = $woo_options['woo_logo'];
				if ( is_ssl() ) $logo_url = str_replace( 'http://', 'https://', $logo_url );

				echo '<a href="' . esc_url( $site_url ) . '" title="' . esc_attr( $site_description ) . '"><img src="' . esc_url( $logo_url ) . '" alt="' . esc_attr( $site_title ) . '" /></a>' . "\n";
			} // End IF Statement
			
			echo '<' . $heading_tag . ' class="site-title"><a href="' . esc_url( $site_url ) . '">' . $site_title . '</a></' . $heading_tag . '>' . "\n";
			if ( $site_description ) { echo '<span class="site-description">' . $site_description . '</span>' . "\n"; }
		?>
		</div><!-- /#logo -->

	</div><!-- /#header -->
 </div>   
	
    <div class="wrapperContentcourse">
    <div class="forshadowinner"></div>
   
    
<div id="wrapper">        
	

    <!-- #content Starts -->
	<?php woo_content_before(); ?>
    <div id="contentsignup" class="col-full">
    
    	

           
            
            <div class="maincorse">
        
        <div class="menu margnlfftndtop">
                
                	
                		<?php
wp_nav_menu( array(
    'menu' => 'Top Menu'
) );
?>
                
                </div>
                
                 <div class="coursehdng">Core Program(program 1)</div>
        
        	<div class="leftcorse">
            
            	<div class="leftcoursebox toppppi">
    		
                <div class="leftcourseboxhdng1">Course 1</div>
               
                <p>
                
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                </div>
                <div class="leftcoursebox">
                
                <div class="leftcourseboxhdng1">Course 2</div>
               
                <p>
                
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                </div>
                
                  <div class="leftcoursebox">
                
                <div class="leftcourseboxhdng1">Course 3</div>
               
                <p>
                
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                </div>
                
                
               
             </div>   
             
             <div class="rightcorse">
             
             
               <div class="leftcoursebox toppppi rightyyy">
                
               
               
                <p>
                
               <b>Lesson 1</b> - brief description<br>
               <b>Lesson 2</b> - brief description<br>
               <b>Lesson 3</b> - brief description<br>
               <b>Lesson 4</b> - brief description<br>
               <b>Lesson 5</b> - brief description<br>
               <b>Lesson 6</b> - brief description<br>
               <b>Lesson 7</b> - brief description<br>
                <b>Lesson 8</b> - brief description<br>
              
        
                </p>
                </div>
                
                
                  <div class="leftcoursebox rightyyy">
                
                
               
                <p>
                
                <b>Lesson 1</b> - brief description<br>
               <b>Lesson 2</b> - brief description<br>
               <b>Lesson 3</b> - brief description<br>
               <b>Lesson 4</b> - brief description<br>
               <b>Lesson 5</b> - brief description<br>
               <b>Lesson 6</b> - brief description<br>
               <b>Lesson 7</b> - brief description<br>
                <b>Lesson 8</b> - brief description<br>
              
                </p>
                </div>
                 
               <div class="leftcoursebox rightyyy">
                <p>
                
                <b>Lesson 1</b> - brief description<br>
               <b>Lesson 2</b> - brief description<br>
               <b>Lesson 3</b> - brief description<br>
               <b>Lesson 4</b> - brief description<br>
               <b>Lesson 5</b> - brief description<br>
               <b>Lesson 6</b> - brief description<br>
               <b>Lesson 7</b> - brief description<br>
                <b>Lesson 8</b> - brief description<br>
              
                </p>
                </div>
             
             
             </div>
          </div>
           
           
    
          

		
    </div><!-- /#content -->
	<?php woo_content_after(); ?>

<?php get_footer(); } else {
	echo "<script type='text/javascript'>window.location='?page_id=17'</script>";
} ?>