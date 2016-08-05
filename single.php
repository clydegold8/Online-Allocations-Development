<?php
/**
 * The Template for displaying all single posts.
 * 
 */
?>
<?php get_header(); ?>
<!--Start Page Heading-->
<!--Start Page Content -->
<div class="page-content-container">
    <div class="page-content single">
        <div class="grid_16 alpha">
            <div class="content-bar">
                <!-- Start the Loop. -->
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
                        <!--post start-->
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <h1 class="post_title single"><span><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(esc_attr__('Permalink to %s', 'blackbird'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a><span></h1>
                                        <div class="post_content">
                                            <?php the_content(); ?>
                                            <div class="clear"></div>
                                            <?php wp_link_pages(array('before' => '<div class="page-link"><span>' . __('Pages:', 'blackbird') . '</span>', 'after' => '</div>')); ?>
                                            <?php if (has_tag()) { ?>
                                                <div class="tag">
                                     <?php the_tags(__('Post Tagged with',  'blackbird') ,', '); ?>
                                                </div>
                                            <?php } ?>
                                        </div>                              
                                        <ul class="post_meta clearfix">
                                            <li class="posted_by"><span><?php _e('Posted by', 'blackbird'); ?></span>&nbsp;&nbsp;<img src="<?php echo get_template_directory_uri(); ?>/images/admin.png" /><?php the_author_posts_link(); ?></li>
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
                                <nav id="nav-single"> <span class="nav-previous">
                                        <?php previous_post_link('%link', __('<span class="meta-nav">&larr;</span> Previous Post ', 'blackbird')); ?>
                                    </span> <span class="nav-next">
                                        <?php next_post_link('%link', __('Next Post <span class="meta-nav">&rarr;</span>', 'blackbird')); ?>
                                    </span> </nav>
                                <!--Start Comment box-->
                                <?php comments_template(); ?>
                                <!--End Comment box--> 
                                </div>
                                </div>
                                <div class="grid_8 omega">
                                    <!--Start sidebar-->
                                    <?php get_sidebar(); ?>
                                    <!--End sidebar-->
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                <?php get_footer(); ?> 