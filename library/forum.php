<?php
function filter_bbp_breadcrumb( $args ) {
    $my_args = array(
        'before'          => '',
        'after'           => '',
        'sep'             => '',
        'pad_sep'         => 0,
        'sep_before'      => '',
        'sep_after'       => '',
        'crumb_before'    => '<li>',
        'crumb_after'     => '</li>',
        'include_home'    => $pre_include_home,
        'home_text'       => $pre_front_text,
        'include_root'    => $pre_include_root,
        'root_text'       => $pre_root_text,
        'include_current' => $pre_include_current,
        'current_text'    => $pre_current_text,
        'current_before'  => '',
        'current_after'   => '',
    );
    $args = wp_parse_args( $my_args, $args );
    return $args;
}
add_filter('bbp_get_breadcrumb_pre', 'filter_bbp_breadcrumb' );


add_filter('bbp_before_get_breadcrumb_parse_args', 'yucom_bbpress_custom_breadcrumb' );
 
function yucom_bbpress_custom_breadcrumb() {
	// HTML
	$args['before']          = '';
	$args['after']           = '';
 
	// Separator
	$args['sep']             = '';
	$args['pad_sep']         = 0;
	$args['sep_before']      = '' ;
	$args['sep_after']       = '';
 
	// Crumbs
	$args['crumb_before']    = '<li>';
	$args['crumb_after']     = '</li>';
 
	// Home
	$args['include_home']    = true;
	$args['home_text']       = 'Yucom';
	
	$args['include_current']    = false;
 
	// Current
	$args['current_before']  = '';
	$args['current_after']   = '';
 
	return $args;
}

/**
 * Display forums hierarchically instead of the bbPress default
 * Parent categories are seperated with child subforums
 */
function yucom_list_subforums( $args = array() ) {
	$subforums = bbp_forum_get_subforums();
	if ( !empty( $subforums ) ) {
		$total = count( $subforums );
		$i = 1;
		ob_start();
		foreach ( $subforums as $subforum ) :
			$sub_id			= $subforum->ID;
			$title			= $subforum->post_title;
			$desc			= $subforum->post_content;
			$permalink		= bbp_get_forum_permalink( $sub_id );
			$topiclass		= bbp_get_forum_class( $sub_id );			
			// Get topic counts
			$topics	 		= bbp_get_forum_topic_count( $sub_id , false );			
			// Get the most recent reply
			$reply_id		= bbp_get_forum_last_reply_id( $sub_id );
			$topic_id		= bbp_is_reply( $reply_id ) ? bbp_get_reply_topic_id( $reply_id ) : $reply_id;
			$topic_title	= bbp_get_topic_title( $topic_id );
			$link 			= bbp_get_reply_url( $reply_id );
			$topic_excerpt	= bbp_get_reply_excerpt( $reply_id );			
			// Build the html class
			$class = ( $i % 2 ) ? "sub-forum odd " : "sub-forum even ";
			$class .= bbp_get_forum_status( $sub_id );
			?>
            <div id="forum-<?php echo $sub_id ?>" class="xlarge-33 large-33 medium-50 small-100 tiny-100 forum_item <?php echo $class; ?>">
                <div>
                    <div class="forum_desc">
                        <a class="forum_front_iconbg" href="<?php echo $permalink; ?>" title="<?php echo $topic_title; ?>">        
                        <div class="forum_iconize">
                            <i class="fa <?php
                                switch ($sub_id) {
                                    /* Yucom-Bote */
                                    case "9":
                                        echo "fa-bullhorn";
                                        break;
                                    /* Gildenherald */
                                    case "11":
                                        echo "fa-paper-plane";
                                        break;
                                    /* Gameblog */
                                    case "13":
                                        echo "fa-cubes";
                                        break;
                                    /* Wildstar */
                                    case "22":
                                        echo "fa-star";
                                        break;
                                    /* Stammtisch */
                                    case "251":
                                        echo "fa-users";
                                        break;
                                    /* PC Gameply */
                                    case "253":
                                        echo "fa-desktop";
                                        break;
                                    /* Mediathek */
                                    case "256":
                                        echo "fa-ticket";
                                        break;
                                    /* Bewerben */
                                    case "260":
                                        echo "fa-pencil-square";
                                        break;
                                    /* Geheimrat */
                                    case "262":
                                        echo "fa-gavel";
                                        break;
                                    /* Schwarzes Brett */
                                    case "266":
                                        echo "fa-exclamation-triangle";
                                        break;
                                    /* Projektlieter Intern */
                                    case "272":
                                        echo "fa-sitemap";
                                        break;
                                    /* Thronsaal */
                                    case "274":
                                        echo "fa-crosshairs";
                                        break;
                                    /* Reallife */
                                    case "276":
                                        echo "fa-beer";
                                        break;
                                    /* Dunkelzimmer */
                                    case "268":
                                        echo "fa-bomb";
                                        break;
                                    /* Projektplaner */
                                    case "281":
                                        echo "fa-thumb-tack";
                                        break;
                                    /* Wildstar Intern */
                                    case "283":
                                        echo "fa-star";
                                        break;
                                    /* Musikzimmer */
                                    case "285":
                                        echo "fa-headphones";
                                        break;
                                    /* Konsoleros */
                                    case "288":
                                        echo "fa-gamepad";
                                        break;	
                                    /* MMORPG */
                                    case "290":
                                        echo "fa-flask";
                                        break;
                                    /* Portal Intern */
                                    case "296":
                                        echo "fa-cogs";
                                        break;
                                    /* Rollenspiel */
                                    case "300":
                                        echo "fa-qq";
                                        break;
                                    /* Helden und Legenden */
                                    case "302":
                                        echo "fa-shield";
                                        break;																			
                                }
                            ?>"></i>                    
                        </div>                
                        <div class="forum_counter">
                            <div class="arrow_box"></div>
                        </div>
                        </a>
                        <div class="forum_title">
                            <a href="<?php echo $permalink; ?>">
                                <h2><?php echo $title; ?></h2>
                                <span><?php echo $desc; ?></span>
                            </a>
                        </div>
                        <!--<div class="forum_recent">
                            <div class="forum_recent_autor clearfix">
                                <div class="push-left">
                                    <?php /* bbp_author_link( array( 'post_id' => $reply_id, 'type' => 'avatar' , 'size' => 30 ) ); */ ?>
                                </div>
                                <div class="push-left forum_recent_info">
                                    <?php /* bbp_author_link( array( 'post_id' => $reply_id, 'type' => 'name' ) ); ?> schrieb <?php bbp_topic_last_active_time( $topic_id ); */ ?>:
                                </div>
                            </div>
                            <div class="forum_excerpt">
                                <span><?php /* echo $topic_excerpt */ ?></span>
                            </div>
                        </div>-->
                        <div class="forum_front_topic">
                        <span>Thema:</span> <a class="forum_front_tpctitle" href="<?php echo $link; ?>" title="<?php echo $topic_title; ?>">
                            <?php $topic_title = (strlen($topic_title) > 30) ? substr($topic_title,0,35).'...' : $topic_title;
                            echo $topic_title; ?></a>
                        </div>
                    </div>
                </div>
            </div>            
		<?php endforeach;		
		// Output the list
		$output = ob_get_contents();
		ob_end_clean();
		echo $output;
	}
}

/**
 * Output custom bbPress admin links
 * @version 1.0.0
 */
function yucom_reply_admin_links( $reply_id ) {
	
	// Make sure it's a logged-in user
	if ( !is_user_logged_in() ) return false;
		
	// Get post id and setup desired links
	$links = array();
	
	// Add common quote and reply links
	// $links['quote'] 		= yucom_quote_button( 'reply' , $reply_id );
	$links['reply']			= '<li><a class="reply-link button button-dark" href="#new-post" title="Quick Reply"><i class="icon-reply"></i>Antwort</a></li>';
	
	// Topic admin links
	if( bbp_is_topic( $reply_id ) ) :
		$links['edit'] 		= bbp_get_topic_edit_link  ( array( 
								'id'			=> $reply_id,
								'edit_text' 	=> 'Editieren' ) );
		$links['close']		= bbp_get_topic_close_link ( array( 
								'id'			=> $reply_id,
								'close_text'	=> 'Schließen',
								'open_text'		=> 'Öffnen',		
								) );
		$links['stick']		= bbp_get_topic_stick_link ( array(
								'id'			=> $reply_id,
								'stick_text' 	=> 'Wichtig',
								'unstick_text' 	=> 'Unwichtig',
								'super_text' 	=> 'Ankündigung', ) );
		$links['merge']		= bbp_get_topic_merge_link ( array( 'merge_text'=> 'Verbinden') );
		$links['trash']		= bbp_get_topic_trash_link ( array(
								'id'			=> $reply_id,
								'trash_text' 	=> 'Müll',
								'restore_text' 	=> 'Wiederhertsellen',
								'delete_text' 	=> 'Löschen',
								'sep'			=> '',
								) );
									
	// Reply admin links
	else :
		$links['edit'] 		= bbp_get_reply_edit_link (	array( 
								'id'			=> $reply_id,
								'edit_text'  	=> 'Editieren' ) );
		$links['move'] 		= bbp_get_reply_move_link (	array( 
								'id'			=> $reply_id,
								'split_text' 	=> 'Verschieben' ) );
		$links['split'] 	= bbp_get_topic_split_link( array( 
								'id'			=> $reply_id,
								'split_text' 	=> 'Teilen' ) );
		$links['trash'] 	= bbp_get_reply_trash_link( array( 
								'id'			=> $reply_id,
								'trash_text' 	=> 'Müll',
								'restore_text' 	=> 'Wiederhertsellen',
								'delete_text' 	=> 'Löschen',
								'sep'			=> '',
								) );
	endif;
	
	// Get the admin links!
	bbp_reply_admin_links( array(
		'id'		=> $reply_id,
		'before'	=> '',
		'after'		=> '',
		'sep'		=> '<li>',
		'links'		=> $links,
	));
}

?>