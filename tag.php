<?php
/**
 * The template used to display Tag Archive pages
 *
 * 
 */
?>
<?php get_header(); ?>
<div class="container_24">
    <div class="grid_24">
        <div class="page-heading">
            <h1>
                <?php printf(__('Tag Archives: %s', 'blackbird'), '' . single_cat_title('', false) . ''); ?>
            </h1>
        </div>
    </div>
    <div class="clear"></div>
</div>
<!--Start Page Content -->
<div class="page-content-container">
    <div class="container_24">
        <div class="grid_24">
            <div class="page-content">
                <div class="grid_16 alpha">
                    <div class="content-bar">
                        <?php get_template_part('loop', 'index'); ?>
                        <div class="clear"></div>
                        <nav id="nav-single"> <span class="nav-previous">
                                <?php next_posts_link(__('&larr; Older posts', 'blackbird')); ?>
                            </span> <span class="nav-next">
                                <?php previous_posts_link(__('Newer posts &rarr;', 'blackbird')); ?>
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
</div>
</div>
<?php get_footer(); ?>