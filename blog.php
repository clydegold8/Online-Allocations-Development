<?php
/*
  Template Name: Blog Page
 */
?>
<?php get_header(); ?>
<div class="page-heading">
    <h1 class="page-title"><?php the_title(); ?></h1>
</div>
<div class="clear"></div>
<!--Start Page Content -->
<div class="page-content-container">
    <div class="page-content">
        <div class="grid_16 alpha">
            <div class="content-bar">                     
                <?php
                $limit = get_option('posts_per_page');
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                query_posts('showposts=' . $limit . '&paged=' . $paged);
                $wp_query->is_archive = true;
                $wp_query->is_home = false;
                ?>
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
                                <?php if (has_tag()) { ?>
                                    <div class="tag">
                                         <?php the_tags(__('Post Tagged with',  'blackbird') ,', '); ?>
                                    </div>
                                <?php } ?>
                                <a class="read_more" href="<?php the_permalink() ?>"><?php _e('Read More', 'blackbird'); ?></a> </div>

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
                <nav id="nav-single" style="margin-top:20px;"> <span class="nav-previous">
        <?php next_posts_link( __( '&larr; Older posts', 'blackbird' ) ); ?>
        </span> <span class="nav-next">
        <?php previous_posts_link( __( 'Newer posts &rarr;', 'blackbird' ) ); ?>
        </span> </nav>
            </div>
        </div>
        <div class="grid_8 omega">
            <!--Start Sidebar-->
<?php get_sidebar(); ?>
            <!--End Sidebar-->
        </div> 
    </div>
</div>
</div>
</div>
</div>
<?php get_footer(); ?>