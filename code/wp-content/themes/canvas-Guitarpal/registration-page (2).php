<?php
/**
 * Page Template
Template name:Registration
 * This template is the default page template. It is used to display content when someone is viewing a
 * singular view of a page ('page' post_type) unless another page template overrules this one.
 * @link http://codex.wordpress.org/Pages
 *
 * @package WooFramework
 * @subpackage Template
 */
global $user_ID; 
if (!$user_ID) {  
if($_POST){
		//We shall SQL escape all inputs
		$username = $wpdb->escape($_REQUEST['username']);
		$password = $wpdb->escape($_REQUEST['password']);
		
		if($remember) $remember = "true";
		else $remember = "false";
		$login_data = array();
		$login_data['user_login'] = $username;
		$login_data['user_password'] = $password;
		$login_data['remember'] = $remember;
		$user_verify = wp_signon( $login_data, false ); 
		//wp_signon is a wordpress function which authenticates a user. It accepts user info parameters as an array.
		
		if ( is_wp_error($user_verify) ) 
		{
		    echo "<div class='error12'>Invalid username or password!</div>";
		   exit();
		 } else 
		 {	
			echo "<script type='text/javascript'>window.location='?page_id=19'</script>";
			exit();
		  }
} else { 
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
.contenthdng {
color: #585858;
float: left;
font-size: 32px;
margin-bottom: 29px;
text-align: left;
width: 100%;
font-family: Impact;
margin-top: -18px;
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
  
	  <div class="rightheader">
        <form name="wp_login_form" id="wp_login_form" action="" method="post">
        <div id="result"></div> <!-- To hold validation results -->
        	<div class="sigupppy">
        
        	<div class="hdngs">
            
            	<span>email</span><br>
                <span>password</span>
            
            </div>
            <div class="txting">
            
            	<input type="text" class="loginfield" name="username" id="user_login" tabindex="10">
               <input type="password" class="loginfield"  name="password" id="user_pass" size="15" tabindex="20">
            
            </div>
            <div id="result"></div> <!-- To hold validation results -->
             <div class="btng">
            
            	<input type="submit" value="Log In" class="roundedbtn" id="submitbtn" >
               <input type="button" value="Sign Up" class="roundedbtn" onClick="window.location.href='?page_id=17'">
            
            </div>
            <div class="frgety">
            
            	<a href="wp-login.php?action=lostpassword">Forget Password</a>
            
            </div>
        
        
        
        </div>
		</form>
        <script src="http://code.jquery.com/jquery-1.4.4.js"></script>
     <script type="text/javascript">  						
$("#submitbtn").click(function() {

$('#result').html('<img src="<?php bloginfo('stylesheet_directory'); ?>/images/loader.gif" class="loader" />').fadeIn();
var input_data = $('#wp_login_form').serialize();
$.ajax({
type: "POST",
url:  "<?php echo "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>",
data: input_data,
success: function(msg){
$('.loader').remove();
$('<div>').html(msg).appendTo('div#result').hide().fadeIn('slow');
}
});
return false;

});
</script>   
        
        </div>
        <?php } } ?>
       
	</div><!-- /#header -->
 </div>   
	<?php //woo_header_after(); ?>
    <div class="wrapperContentcourse">
    <div class="forshadowinner"></div>
<div id="wrapper">        
	
       
    <!-- #content Starts -->
	<?php woo_content_before(); ?>
    <div id="contentsignup" class="col-full">
    
    	<div class="contentsignup"><!--contentsignup Start-->
         <!-- #content Starts -->
	<?php woo_content_before(); ?>
    <div id="content" class="col-full">
    
    	<div class="leftcontentsignup">

            <!-- #main Starts -->
            <?php woo_main_before(); ?>
            <div id="main">                     
<?php
	woo_loop_before();
	
	if (have_posts()) { $count = 0;
		while (have_posts()) { the_post(); $count++;
			woo_get_template_part( 'content', 'page' ); // Get the page content template file, contextually.
		}
	}
	
	woo_loop_after();
?>     
            </div><!-- /#main -->
            <?php woo_main_after(); ?>
    
            <?php get_sidebar(); ?>

		</div><!-- /#main-sidebar-container -->         

		 <div class="rightcontentsignup">
          
          	<a href="#"><img alt="Image" src="<?php bloginfo('stylesheet_directory'); ?>/images/signupmac.png"></a>
            <a href="#"><img alt="Image" class="margnlfft" src="<?php bloginfo('stylesheet_directory'); ?>/images/signuptrust.png"></a>
            <a href="#"><img alt="Image" src="<?php bloginfo('stylesheet_directory'); ?>/images/signuptick.png"></a>
            
          
          </div>    
    

    </div><!-- /#content -->
	<?php woo_content_after(); ?>
    	
         
    	
    
    	
       
        
    </div>
    </div><!-- /#content -->
	<?php woo_content_after(); ?>

<?php get_footer(); ?>