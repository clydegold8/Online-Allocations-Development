<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
<head>
	<script src="https://code.jquery.com/jquery-2.2.4.js"
	        integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
	        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
	        crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/bootbox.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.tablesorter.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery-latest.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
	      integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/custom.css">
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
	<link rel="profile" href="http://gmpg.org/xfn/11"/>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
	<?php wp_head(); ?>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
	      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body <?php body_class(); ?>
	style="<?php if ( blackbird_get_option( 'blackbird_bodybg' ) != '' ) { ?>background: fixed url(<?php echo blackbird_get_option('blackbird_bodybg'); ?>);<?php } else {
		?> background: fixed url(<?php echo get_template_directory_uri(); ?>/images/bg.jpg); <?php } ?>">
<div class="main-container">
	<div class="container_24">
		<div class="grid_24">
			<!--                    <div class="header">-->
			<!--                        <div class="grid_16 alpha">-->
			<!--                            <div class="logo"> <a href="--><?php //echo home_url(); ?><!--">-->
			<!--                                    -->
			<?php //if (blackbird_get_option('blackbird_logo') != '') { ?><!--                                    -->
			<!--                                        <img src="-->
			<?php //echo blackbird_get_option('blackbird_logo'); ?><!--" alt="-->
			<?php //bloginfo('name'); ?><!--" />  -->
			<!--                                    --><?php //} else { ?>
			<!--                                        <h1 class="site-title">-->
			<?php //bloginfo('name'); ?><!--</h1>-->
			<!--                                        <h2 class="site-description">-->
			<?php //bloginfo('description'); ?><!--</h2>-->
			<!--                                    --><?php //} ?>
			<!--                                </a>-->
			<!--                            </div>-->
			<!--                        </div>-->
			<!--                        <div class="grid_8 omega">-->
			<!--                            <div class="header-info">-->
			<!--                                --><?php //if (blackbird_get_option('blackbird_topright_cell') != '') { ?>
			<!--                                    <p class="cell"><img src="-->
			<?php //echo get_template_directory_uri(); ?><!--/images/call-us.png"  class="call-us" />&nbsp; -->
			<?php //echo stripslashes(blackbird_get_option('blackbird_topright_cell')); ?><!--</p>-->
			<!--                                --><?php //} else { ?>
			<!--                                    <p class="cell"><img src="-->
			<?php //echo get_template_directory_uri(); ?><!--/images/call-us.png"  class="call-us" />&nbsp;Call Us (111) 234 - 5678</p>-->
			<!--                                --><?php //} ?>
			<!--                                --><?php //if (blackbird_get_option('blackbird_topright_text') != '') { ?>
			<!--                                    <p>-->
			<?php //echo stripslashes(blackbird_get_option('blackbird_topright_text')); ?><!--</p>-->
			<!--                                --><?php //} else { ?>
			<!--                                    <p>-->
			<?php //_e('21/B, London Campus, British Road, Birmingham, UK', 'blackbird'); ?><!--</p>-->
			<!--                                --><?php //} ?>
			<!--                            </div>-->
			<!--                        </div>-->
			<!--                    </div>-->
			<div class="clear"></div>
			<!--start Menu wrapper-->
			<div class="menu_wrapper">
				<div class="grid_18 alpha">
					<div id="MainNav">
						<a href="#" class="mobile_nav closed"><?php _e( 'Pages Navigation Menu', 'blackbird' ); ?>
							<span></span></a>
						<?php blackbird_nav(); ?>
					</div>
				</div>
				<div class="grid_6 omega">
					<div class="top-search">
						<p style="color: #ffffff; padding: 13px;font-size: 20px;">Welcome,
							<b><?php $current_user = wp_get_current_user();
								echo ucfirst( $current_user->data->user_login ); ?></b> !!</p>
						<?php //get_search_form(); ?>
					</div>
				</div>
			</div>
			<!--End Menu wrapper-->
			<div class="clear"></div>