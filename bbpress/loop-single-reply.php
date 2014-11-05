
<div class="column-group reply_item">    
	<div class="xlarge-100 large-100 medium-100 small-100 tiny-100">
    	<div class="column-group">    
			<div class="xlarge-30 large-30 medium-40 small-100 tiny-100 reply_author clearfix reply_<?php
						$user_id = bbp_get_reply_author_id();
						$user = new WP_User( $user_id );
						if ( !empty( $user->roles ) && is_array( $user->roles ) ) {
							foreach ( $user->roles as $role )
							if ( $role == bbp_moderator ) {
							echo 'mod';
							} elseif ( $role == administrator ) {
							echo 'admin';		
							} else {
							echo '';
							}
						}
						unset($user_id);
						unset($user);
					?>">
				<div class="reply_avatar"><?php bbp_reply_author_link( array( 'type' => 'avatar' , 'size' => 36 ) ); ?></div>
                <div class="reply_user">
					<?php bbp_reply_author_link( array( 'type' => 'name' ) ); ?>
                    <span><?php
						$user_id = bbp_get_reply_author_id();
						$user = new WP_User( $user_id );
						if ( !empty( $user->roles ) && is_array( $user->roles ) ) {
							foreach ( $user->roles as $role )
							if ( $role == bbp_moderator ) {
							echo 'Moderator';
							} elseif ( $role == administrator ) {
							echo 'Administrator';		
							} else {
							echo '';
							}
						}
						unset($user_id);
						unset($user);
					?></span>                    
                </div>
                <div class="reply_stats">
                	<div><?php 
						echo bbp_get_user_reply_count_raw(bbp_get_reply_author_id()). ' <i title="Posts" class="fa fa-pencil"></i>';
					?></div>
                    <div><?php
						echo bbp_get_user_topic_count_raw(bbp_get_reply_author_id()). ' <i title="Themen" class="fa fa-bookmark"></i>';
					?></div>
                </div>
            </div>
			<div class="xlarge-70 large-70 medium-60 small-100 tiny-100 reply_date clearfix">
            	<div class="pull-right"><?php bbp_reply_post_date(); ?></div>
            </div>  
            <div class="xlarge-100 large-100 medium-100 small-100 tiny-100 reply_content">
            	<?php do_action( 'bbp_theme_before_reply_content' ); ?>
					<?php bbp_reply_content(); ?>
				<?php do_action( 'bbp_theme_after_reply_content' ); ?>
            </div>
            <div class="xlarge-30 large-30 medium-40 small-100 tiny-100 clearfix reply_rank">
            	<div class="reply_ranktitle"><?php 
					$user_id = bbp_get_reply_author_id();
					echo '<span>Yucomrang: </span><em>' . mycred_get_users_rank( $user_id ) . '</em>';
					unset($user_id); 
				?></div>
                <div class="reply_stats">
                    <div><?php
						$user_id = bbp_get_reply_author_id();
						echo mycred_get_users_cred( $user_id ) . ' <i title="Punkte" class="fa fa-thumb-tack"></i>';
						unset($user_id);
					?></div>
                </div>
            </div>
            <div class="xlarge-70 large-70 medium-60 small-100 tiny-100 reply_links">
				<?php do_action( 'bbp_theme_before_reply_admin_links' ); ?>
                	<nav class="ink-navigation pull-right">
						<ul class="pagination pills black">
	                		<?php yucom_reply_admin_links( bbp_get_reply_id() ); ?>
      	            	</ul>
					</nav>
				<?php do_action( 'bbp_theme_after_reply_admin_links' ); ?>            
            </div>
    	</div>
    </div>
</div>