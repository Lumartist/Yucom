<?php do_action( 'bbp_template_before_pagination_loop' ); ?>
		<div class="clearfix">         
        	<div class="forum_info">
            	<?php bbp_forum_pagination_count(); ?>
            </div>
            <div class="forum_pager clearfix">                
                <?php bbp_forum_pagination_links(); ?>
            </div>
        </div>
<?php do_action( 'bbp_template_after_pagination_loop' ); ?>
