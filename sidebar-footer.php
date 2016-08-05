<div class="grid_12 alpha">
    <div class="widget_inner">
        <?php if (is_active_sidebar('first-footer-widget-area')) : ?>
            <?php dynamic_sidebar('first-footer-widget-area'); ?>
        <?php else : ?>  
            <h3><?php _e('ABOUT YOUR BUSINESS', 'blackbird'); ?></h3>
            <p><?php _e('Premium WordPress Themes with Single Click Installation, Just a Click and your website is ready for use. Your Site is faster to built, easy to use & Search Engine Optimized.', 'blackbird'); ?></p>
            <br/>
            <p><?php _e('If your looking for help with our themes this is the place to be. We have a ton of great videos that show you how to setup our themes. And every theme comes with PDF & Video Documentation to help with almost any issue.', 'blackbird'); ?></p>               
        <?php endif; ?> 
    </div>
</div>
<div class="grid_6">
    <div class="widget_inner last">
        <?php if (is_active_sidebar('second-footer-widget-area')) : ?>
            <?php dynamic_sidebar('second-footer-widget-area'); ?>
        <?php else : ?> 
            <h3><?php _e('SOCIAL LINK', 'blackbird'); ?></h3>
            <ul class="Social-links">
                <li><a href="<?php
                    if (blackbird_get_option('blackbird_facebook') != '') {
                        echo blackbird_get_option('blackbird_facebook');
                    } else {
                        
                    }
                    ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" /><?php _e('&nbsp;&nbsp;Join Us On Facebook', 'blackbird'); ?></a></li>
                <li><a href="<?php
                    if (blackbird_get_option('blackbird_twitter') != '') {
                        echo blackbird_get_option('blackbird_twitter');
                    } else {
                        
                    }
                    ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" /><?php _e('&nbsp;&nbsp;Join Us On Twitter', 'blackbird'); ?></a></li>
                <li><a href="<?php
                    if (blackbird_get_option('blackbird_linked') != '') {
                        echo blackbird_get_option('blackbird_linked');
                    } else {
                        
                    }
                    ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/linkdin.png" /><?php _e('&nbsp;&nbsp;Join Us On In.com', 'blackbird'); ?></a></li>
                <li><a href="<?php
                    if (blackbird_get_option('blackbird_rss') != '') {
                        echo blackbird_get_option('blackbird_rss');
                    } else {
                        
                    }
                    ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/subscribe.png" /><?php _e('&nbsp;&nbsp;Subscribe to Our Blog', 'blackbird'); ?></a></li>
            </ul>
        <?php endif; ?>
    </div>
</div>
<div class="grid_6 omega">
    <div class="widget_inner">
        <?php if (is_active_sidebar('third-footer-widget-area')) : ?>
            <?php dynamic_sidebar('third-footer-widget-area'); ?>
<?php else : ?> 
            <h3><?php _e('FOOTER SETUP', 'blackbird'); ?></h3>
            <p><?php _e('Footer is widgetized. To setup the footer, drag the required Widgets in Appearance -> Widgets Tab in the First, Second or Third Footer Widget Areas.', 'blackbird'); ?></P>
<?php endif; ?>
    </div>
</div>