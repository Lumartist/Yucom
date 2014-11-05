<?php do_action( 'bbp_template_before_pagination_loop' ); ?>
		<div class="clearfix">        
			<?php
            if ( is_user_logged_in() ) { ?>
                <div class="forum_new">
                    <a href="#new" class="ink-button new_topic_button">Neues Thema</a>
                </div>
            <?php } else {
                echo '';
            }
            ?>
        	<div class="forum_info">
            	<?php bbp_forum_pagination_count(); ?>
            </div>
            <div class="forum_pager clearfix">                
                <?php bbp_forum_pagination_links(); ?>                
            </div>
            <div class="push-right">
		        <?php bbp_forum_subscription_link();  ?>
	        </div>
        </div>
        
        
<?php do_action( 'bbp_template_after_pagination_loop' ); ?>
