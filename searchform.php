<form role="search" method="get" class="searchform" action="<?php echo home_url('/'); ?>">
    <div>
        <input type="text" onfocus="if (this.value == 'Search') {
                    this.value = '';
                }" onblur="if (this.value == '') {
                            this.value = '<?php _e('Search', 'blackbird'); ?>';
                        }"  value="<?php _e('Search', 'blackbird'); ?>" name="s" id="search" />
        <input type="submit" id="searchsubmit" value="" />
    </div>
</form>
<div class="clear"></div>
<br/>
