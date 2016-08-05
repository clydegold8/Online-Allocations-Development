<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 */
?>
<?php get_header(); ?>
<div class="page-heading">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <div class="clear"></div>
</div>
<!--Start Page Content -->
<div class="page-content-container">
    <div class="page-content">
        <div class="container_24 grid_24">
            <div class="content-bar">  			
                <?php if (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                    <div class="clear"></div>
                    <?php wp_link_pages(array('before' => '<div class="page-link"><span>' . __('Pages:', 'blackbird') . '</span>', 'after' => '</div>')); ?>
                <?php endif; ?>

                <!--Start Comment box-->
                <?php comments_template(); ?>
                <!--End Comment box-->

            </div>
        </div>
<!--        <div class="grid_8 omega" style="display: none;">-->
<!--            <!--Start Sidebar-->
<!--            --><?php //get_sidebar(); ?>
<!--            <!--End Sidebar-->
<!--        </div> -->
    </div>
</div>
<?php get_footer(); ?>