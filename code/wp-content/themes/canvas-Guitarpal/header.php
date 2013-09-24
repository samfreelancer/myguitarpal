<?php
/**
 * Header Template
 *
 * Here we setup all logic and XHTML that is required for the header section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */
 
  // Setup the tag to be used for the header area (`h1` on the front page and `span` on all others).      
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
    }
  }
  $heading_tag = 'span';
  if ( is_home() OR is_front_page() ) { $heading_tag = 'h1'; }
 
  // Get our website's name, description and URL. We use them several times below so lets get them once.
  $site_title = get_bloginfo( 'name' );
  $site_url = home_url( '/' );
  $site_description = get_bloginfo( 'description' );
 
  global $woo_options;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>" />
    <title><?php woo_title(); ?></title>
    <?php woo_meta(); ?>
    <link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>" />
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css" />
    
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
     
      <?php
      if (!$user_ID) {  
      ?>  <!-- IF 1 -->  
	    <div class="rightheader">
          <form name="wp_login_form" id="wp_login_form" action="" method="post">
        
        
          <div class="sigupppy">
        
        	<div class="hdngs">
            
            	<span>email</span><br>
                <span>password</span>
            
            </div> <!-- END div hdngs -->
            <div class="txting">
            
            	<input type="text" class="loginfield" name="username" id="user_login" tabindex="10">
               <input type="password" class="loginfield"  name="password" id="user_pass" size="15" tabindex="20">
            
            </div> <!-- END div txting -->
            <div id="result"></div> <!-- To hold validation results -->
            <div class="btng">
            
            	<input type="submit" value="Log In" class="roundedbtn" id="submitbtn" >
               	<input type="button" value="Sign Up" class="roundedbtn" onClick="window.location.href='?page_id=17'">
            
            </div> <!-- END div btng -->
            <div class="frgety">
            
            	<a href="wp-login.php?action=lostpassword">Forget Password</a>
            
            </div> <!-- END div frgety -->
        
        
        
        </div> <!-- END div siguppy -->
        	<!--<table>
              <tbody><tr>
                <td><span>email</span></td>
                <td><input type="text" class="loginfield" name="username" id="user_login" tabindex="10"></td>
                <td rowspan="2"><input type="submit" value="Log In" class="roundedbtn" id="submitbtn" >
                <br>
                
                </td>
                <td rowspan="2"><input type="button" value="Sign Up" class="roundedbtn" onClick="window.location.href='?page_id=17'"></td>
              </tr>
              <tr>
                <td><span>password</span></td>
                <td><input type="password" class="loginfield"  name="password" id="user_pass" size="15" tabindex="20"></td>
               
              </tr>
            </tbody></table>-->
		</form> <!-- END form wp_login_form -->
        
       </div> <!-- END div rightheader -->
     <?php }?> <!-- END IF 1 -->    

   <script src="http://code.jquery.com/jquery-1.4.4.js"></script>
   <script type="text/javascript">  						
	 $("#submitbtn").click(function() {

       $('#result').html('<img src="  <?php bloginfo('template_url'); ?>/images/loader.gif" class="loader" />').fadeIn();
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
      
<!-- / Robin Add -->
        <h3 class="nav-toggle icon"><a href="#navigation"><?php _e( 'Navigation', 'woothemes' ); ?></a></h3>
	      
		<?php if ( isset( $woo_options['woo_ad_top'] ) && ( 'true' == $woo_options['woo_ad_top'] ) ) { ?>
        <div id="topad">
        
		<?php if ( ( isset( $woo_options['woo_ad_top_adsense'] ) ) && ( '' != $woo_options['woo_ad_top_adsense'] ) ) { 
            echo stripslashes( get_option('woo_ad_top_adsense') );             
        } else {
        	$top_ad_image = $woo_options['woo_ad_top_image'];
        	if ( is_ssl() ) $top_ad_image = str_replace( 'http://', 'https://', $top_ad_image );
        ?>
            <a href="<?php echo esc_url( get_option( 'woo_ad_top_url' ) ); ?>"><img src="<?php echo esc_url( $top_ad_image ); ?>" alt="" /></a>
        <?php } ?>		   	
            
        </div><!-- /#topad -->
        <?php } ?> 
 
<!-- END Robin Add -->
        


 
      
</div><!-- /#header -->
    
</div> 

<div class="wrapperContent">
<div id="wrapper">      

<?php woo_header_after(); ?>

