<?php

do_action( 'bp_before_group_header' );

?>

<!-- group_header.php start -->


<div class="column-group">    
	<div class="xlarge-15 large-15 medium-25 small-100 tiny-100 group_avatar">
    	<a href="<?php bp_group_permalink(); ?>" title="<?php bp_group_name(); ?>">
			<?php bp_group_avatar(); ?>
		</a>
    </div>
	<div class="xlarge-85 large-85 medium-75 small-100 tiny-100">
    	<a class="group_title" href="<?php bp_group_name(); ?>"><?php bp_group_name(); ?></a> mit <span class="member_count"><?php bp_group_member_count(); ?></span>
        
		<?php do_action( 'bp_before_group_header_meta' ); ?>
    
        <div>    
            <div class="group_desc"><?php bp_group_description(); ?></div>
            <div>    
                <?php do_action( 'bp_group_header_actions' ); ?>    
            </div>    
            <?php do_action( 'bp_group_header_meta' ); ?>    
        </div>
        
        <div>
    
            <?php /* _e( 'Group Admins', 'buddypress' ); */ ?>
    
            <?php /* bp_group_list_admins(); 
    
            do_action( 'bp_after_group_menu_admins' ); */ ?>
    
	        <?php if ( bp_group_has_moderators() ) :
                do_action( 'bp_before_group_menu_mods' ); ?>
    
                <?php /* _e( 'Projektleiter' , 'buddypress' ); */ ?>
    
                <?php bp_group_list_mods();
    
                do_action( 'bp_after_group_menu_mods' );
    
            endif; ?>			
        </div>      
        
    </div>    
</div>    


<!-- group_header.php end -->

<?php
do_action( 'bp_after_group_header' );
do_action( 'template_notices' );
?>