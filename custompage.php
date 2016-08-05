<?php
/**
 * Created by PhpStorm.
 * User: VIZI-BILL PH
 * Date: Aug-3-2016
 * Time: 12:45 PM
 */
/* Template Name: CustomPage */
get_header();
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" style="margin-top: 10px;"></div>
        <div class="col-md-12">
            <?php if (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
                <div class="clear"></div>
                <?php wp_link_pages(array('before' => '<div class="page-link"><span>' . __('Pages:', 'blackbird') . '</span>', 'after' => '</div>')); ?>
            <?php endif; ?>
        </div>
    </div>
</div
