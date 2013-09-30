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
    <!--  <link type="text/css" rel="stylesheet" href="<?php //bloginfo('template_directory') ?>/css/style.css" /> -->
    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/includes/js/jquery-1.6.2.js"></script>
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
    $(document).ready(function() {
        var targets = $('.col-1');
        var len = targets.length;
        i = 0;
        setInterval(function() {
            // remove from current
            $('.col-1.highlight').removeClass('highlight');
            i = (i + 1) % len;
            targets.eq(i).addClass('highlight');
        }, 3000);
    });
   </script>
    <?php wp_head(); ?>
    <?php //woo_head(); ?>
  </head>
<body>
    <?php woo_top(); ?>
    <div class="wrapper">
        <div class="top-section">
            <div class="headercover">   
                <div id="header" class="header">         
                    <div id="logo">
                        <a href="http://launch.myguitarpal.com/" title="Just another WordPress site"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="My Guitar Pal"></a>
                    </div>        
                </div>       
            </div>
            <div class="navi">
                <div class="inner_navi"> 
                    <div class="main-links"><span></span><a href="#" >Home</a><span></span><a href="#" class="active">Blog</a><span></span></div>
                    <div class="register"><span></span><a href="#">Log In</a><span></span><a href="#">Sign Up</a><span></span></div>
                </div>
            </div>
            <div class="mainbanner"><img src="<?php bloginfo('template_url'); ?>/images/bg-banner.jpg" width="1060" height="589" /></div>    
            <div class="inner-wrapper">
                <div class="mid-wraper">
                    <div class="banner-text">
                        <h2>Launching 2014</h2>
                        <p>In the meantime why don't you sign up
                        for 10 free video lessons, with new free 
                        lessons added all the time?</p>
                        <h4>Free Lessons!</h4>
                        <div class="large-text">Follow us on Facebook and Twitter
                        and You Could Win a New Guitar
                        From 
                            <div class="signup"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/singnup.png" width="109" height="35" /></a></div>
                            <div class="sign"><img src="<?php bloginfo('template_url'); ?>/images/sign.png" width="155" height="45" /></div>
                            <div class="socialIcon"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/f-icon.png" width="33" height="32" /></a><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/t-icon.png" width="33" height="32" /></a></div>
                        </div>
                        <div class="r-text">Contest Ends "Date"</div>
                    </div>
                    <div class="video"><img src="<?php bloginfo('template_url'); ?>/images/video.png" width="453" height="331" /></div>
                </div>
            </div>
        </div>
        <?php //woo_header_after(); ?>
          


