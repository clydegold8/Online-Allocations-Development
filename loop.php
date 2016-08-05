<!-- Start the Loop. -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
        <!--post start-->
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1 class="post_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(esc_attr__('Permalink to %s', 'blackbird'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h1>
            <div class="post_content">
                <?php if (has_post_thumbnail()) { ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('post_thumbnail', array('class' => 'postimg')); ?>
                    </a>
                <?php } else { ?>

                    <?php blackbird_get_image(595, 300); ?> 
                    <?php
                }
                ?>
                <?php the_excerpt(); ?>
                <div class="clear"></div>
                <?php wp_link_pages(array('before' => '<div class="page-link"><span>' . __('Pages:', 'blackbird') . '</span>', 'after' => '</div>')); ?>
                <?php if (has_tag()) { ?>
                    <div class="tag">
                        <?php the_tags(__('Post Tagged with',  'blackbird') ,', '); ?>
                    </div>
                <?php } ?>
                <a class="read_more" href="<?php the_permalink() ?>"><?php _e('Read More', 'blackbird'); ?></a> </div>

            <ul class="post_meta clearfix">
                <li class="posted_by"><img src="<?php echo get_template_directory_uri(); ?>/images/admin.png" />&nbsp;&nbsp;<span><?php _e('Posted by', 'blackbird'); ?></span>&nbsp;&nbsp;<?php the_author_posts_link(); ?></li>
                <li class="post_category"><span><?php _e('Posted in', 'blackbird'); ?></span>&nbsp;&nbsp;<?php the_category(', '); ?></li>
                <li class="post_date"><img src="<?php echo get_template_directory_uri(); ?>/images/date.png" />&nbsp;&nbsp; <?php echo get_the_time('M, d, Y') ?></li>
                <li class="post_comment"><img src="<?php echo get_template_directory_uri(); ?>/images/comment.png" />&nbsp;&nbsp;<span><?php comments_popup_link('No Comments.', '1 Comment.', '% Comments.'); ?></span></li>
            </ul>
        </div>
        <!--End Post-->
    <?php
    endwhile;
else:
    ?>
    <div class="post">
        <p>
    <?php _e('Sorry, no posts matched your criteria.', 'blackbird'); ?>
        </p>
    </div>
<?php endif; ?>
<!--End Loop-->