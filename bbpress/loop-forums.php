<?php

/**
 * Forums Loop
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<?php do_action( 'bbp_template_before_forums_loop' ); ?>
        

    <div class="forum_main">
       <div class="column-group forum_list">      


		<?php while ( bbp_forums() ) : bbp_the_forum(); ?>
        
			<?php bbp_get_template_part( 'loop', 'single-forum' ); ?>

		<?php endwhile; ?>

        </div>	
    </div>
        
    
<?php do_action( 'bbp_template_after_forums_loop' ); ?>
