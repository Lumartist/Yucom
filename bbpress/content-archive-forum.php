
<!--			<div class="column-group forum_recent_header">
				<div class="xlarge-33 large-33 medium-33 small-100 tiny-100">                    
                    <div id="secondary" class="sidebar-container" role="complementary">
                        <div class="widget-area">
                            <?php /* dynamic_sidebar( 'sidebar-2' ); */ ?>
                        </div>
                    </div>                                        
                </div>
                <div class="xlarge-33 large-33 medium-33 small-100 tiny-100">                    
                    <div id="secondary" class="sidebar-container" role="complementary">
                        <div class="widget-area">
                            <?php /* dynamic_sidebar( 'sidebar-3' ); */ ?>
                        </div>
                    </div>                                        
                </div>
                <div class="xlarge-33 large-33 medium-33 small-100 tiny-100">                    
                    <div id="secondary" class="sidebar-container" role="complementary">
                        <div class="widget-area">
                            <?php /* dynamic_sidebar( 'sidebar-4' ); */ ?>
                        </div>
                    </div>                                        
                </div>
			</div> -->

<div id="bbpress-forums">
	
	<?php /* if ( bbp_allow_search() ) : */ ?>

		<!-- <div class="bbp-search-form"> -->

			<?php /* bbp_get_template_part( 'form', 'search' ); */ ?>

		<!-- </div> -->

	<?php /* endif; */ ?>

	<?php /* bbp_breadcrumb(); */ ?>

	<?php bbp_forum_subscription_link(); ?>

	<?php do_action( 'bbp_template_before_forums_index' ); ?>

	<?php if ( bbp_has_forums() ) : ?>

		<?php bbp_get_template_part( 'loop',     'forums'    ); ?>

	<?php else : ?>

		<?php bbp_get_template_part( 'feedback', 'no-forums' ); ?>

	<?php endif; ?>

	<?php do_action( 'bbp_template_after_forums_index' ); ?>

</div>
