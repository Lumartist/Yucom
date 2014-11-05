<?php
/**
 * Yucom Theme Functions
 * Lumartist - Lars Dunker
 * Version 1.0.0
 * 06.06.2014
 
----------------------------------------------------------------
>>> TABLE OF CONTENTS:
----------------------------------------------------------------
1.0 - Sctipts n Styles
2.0 - General
3.0 - Tweaks
4.0 - Custom Post Types and Taxonomies
5.0 - The Forums
6.0 - TinyMCE Custumization
7.0 - Sidebars
--------------------------------------------------------------*/

// Throw people out if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/*--------------------------------------------------------------
1.0 - SCRIPTS N STYLES
--------------------------------------------------------------*/
/**
 * Wordpress needs scripts, for sure. Here they come...
 */
add_action( 'wp_enqueue_scripts' , 'yucom_enqueue_scripts' );
function yucom_enqueue_scripts() {
    
    // Lets reg dem styles
    wp_register_style( 'inkflex', '//cdn.ink.sapo.pt/3.1.1/css/ink-flex.min.css' , false );
    wp_register_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' , false );
    wp_register_style( 'inkreset', get_template_directory_uri() . '/css/ink-reset.css' , false ); 
    wp_register_style( 'main', get_template_directory_uri() . '/css/main.css' , false );   
        
    // Enqueue those styles
    wp_enqueue_style( 'inkflex' );
    wp_enqueue_style( 'fontawesome' );
    wp_enqueue_style( 'inkreset' );
	wp_enqueue_style( 'main' );
	
    // IE 8 and below needs some extra love
    wp_register_style( 'modernizr', '//cdn.ink.sapo.pt/3.1.1/css/ink-ie.min.css', false );    
    wp_enqueue_style('modernizr');
    global $wp_styles;
    $wp_styles->add_data('modernizr', 'conditional', 'lte IE 8');
    
    // Not styles only, but also scripts
    wp_register_script( 'modernizrjs' , '//cdn.ink.sapo.pt/3.1.1/js/modernizr.js', false , $ver ='3.0.2' , false );
    wp_register_script( 'holderjs' , '//cdn.ink.sapo.pt/3.1.1/js/holder.js', false , $ver ='3.0.2' , false );
    wp_register_script( 'inkall' , '//cdn.ink.sapo.pt/3.1.1/js/ink-all.min.js', false , $ver ='3.0.2' , false );
    wp_register_script( 'autoloadjs' , '//cdn.ink.sapo.pt/3.1.1/js/autoload.js', false , $ver ='3.0.2' , false );
    
    // Enqueue their scripts
	wp_enqueue_script( 'modernizrjs' );
	wp_enqueue_script( 'holderjs' );
	wp_enqueue_script( 'inkall' );
	wp_enqueue_script( 'autoloadjs' );
	
    // Get rid of standard jquery! Yay!
    wp_deregister_script('jquery');
    
    // We realy should add some styles to the footer - true
    wp_register_script( 'jquery' , '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', false , $ver ='1.11.1' , true );
    wp_register_script( 'jqueryui' , '//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js', false , $ver ='1.10.4' , true );
    
    // Enque them on the footer!
    wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jqueryui' );
	
    // Do dat shit only on the front, yo man
	wp_register_script( 'owlslider' , get_template_directory_uri() . '/scripts/owl.carousel.min.js', 'jquery', $ver='0.1', true );	
	wp_enqueue_script( 'owlslider' );
	
    if ( is_front_page() ) {			
		wp_register_script( 'modernizrcustom', get_template_directory_uri() . '/scripts/modernizr.custom.26633.js', 'false', $ver='0.1', true );
		wp_register_script( 'gridrotator', get_template_directory_uri() . '/scripts/jquery.gridrotator.js', 'jquery', $ver='0.1', true );
		wp_register_script( 'wow', get_template_directory_uri() . '/scripts/wow.min.js', 'jquery', $ver='0.1', true );
		wp_register_script( 'animate', get_template_directory_uri() . '/scripts/animatescroll.min.js', 'jquery', $ver='0.1', true );
		
		wp_enqueue_script( 'modernizrcustom' );
		wp_enqueue_script( 'gridrotator' );
		wp_enqueue_script( 'wow' );
		wp_enqueue_script( 'animate' );
	}			
	
}

/*--------------------------------------------------------------
2.0 - GENERAL
--------------------------------------------------------------*/
/**
* Oh, look! Image styles. Hell yeah!
*/
require_once( TEMPLATEPATH . '/library/image_styles.php' );
/*
 * Okay, lets get rid of the margin positioning of the admin bar!
*/
function my_filter_head() {remove_action('wp_head', '_admin_bar_bump_cb');}
add_action('admin_bar_init', 'my_filter_head');
/*
 * Ever thought about a custom excerpt?
*/
function custom_excerpt_length( $length )       { return 10; }     // change the excerpt length
function new_excerpt_more( $more )              { return ' ...'; }  // change the "more" text that follows the excerpt
 
function custom_excerpt() {
    add_filter( 'excerpt_length', 'custom_excerpt_length' );        // add filter for length
    add_filter('excerpt_more', 'new_excerpt_more');                 // add filter for "more" text
    remove_filter('the_excerpt','wpautop');                         // remove auto p wrapping
    return the_excerpt();                                           // return the_excerpt
}
/*
 * Please remove those image dimensions from images!
*/
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );
function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
/*
 * Please remove those image dimensions from images - inline too!
*/
function theme_remove_image_attributes( $html ) {
   $html = preg_replace('/(?:<img.*)((width|height)="\d*"\s)(?:\/>|>)/', "", $html);
   return $html;
}
/*
 * Custom Post type + Navigation = Puke! Working fix.
*/
function paginate() {
	global $wp_query, $wp_rewrite;
	$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1; 
	$pagination = array(
		'base' => @add_query_arg('page','%#%'),
		'format' => '',
		'total' => $wp_query->max_num_pages,
		'current' => $current,
		'show_all' => false,
		'type' => 'list',
		'next_text' => '&raquo;',
		'prev_text' => '&laquo;'
    );    
	if( $wp_rewrite->using_permalinks() )
		$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 'page', get_pagenum_link( 1 ) ) ) . '?page=%#%/', 'paged' ); 
	if( !empty($wp_query->query_vars['s']) )
		$pagination['add_args'] = array( 's' => get_query_var( 's' ) ); 
	echo paginate_links( $pagination );
}
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

add_action( 'bp_before_member_header_meta', 'devb_show_role_on_profile');
function devb_show_role_on_profile(){
global $wp_roles; 
$user_id = bp_displayed_user_id(); 
$user = get_userdata( $user_id ); 
$roles = $user->roles; 
 if( !$roles)
 return ; 
 if ( !isset( $wp_roles ) )
 $wp_roles = new WP_Roles(); 
 $named_roles = array(); 
foreach( $roles as $role ){ 
$named_roles [] = $wp_roles->role_names[$role];
 }
 
if( $named_roles )
 echo '<br><span class="user-role activity">'. join( ', ', $named_roles ) . '</span>';
 
}

add_action( 'mycred_transfer_completed', 'mycred_transfer_activity', 10, 2 );
function mycred_transfer_activity( $prefs, $mycred ) {
	// Transfer from
	$from = absint( $_POST['sender'] );
	
	// Transfer to
	$to = $_POST['recipient'];

	// Depending on how we identify the recipient
	// we need to get the recipients user id
	switch ( $mycred->transfers['autofill'] ) {
		case 'user_login' :

			$user = get_user_by( 'login', $to );
			if ( $user === false ) return false;
			$user_id = $user->ID;

		break;
		case 'user_email' :

			$user = get_user_by( 'email', $to );
			if ( $user === false ) return false;
			$user_id = $user->ID;

		break;
		default :

			$user_id = apply_filters( 'mycred_transfer_autofill_get', false );
			if ( $user === false ) return false;

		break;
	}
	
	// Activity for sender
	bp_activity_add( array(
		'action'    => bp_core_get_user_displayname( $from ) . ' transferred points to ' . bp_core_get_user_displayname( $user_id ),
		'user_id'   => $from,
		'type'      => 'activity_update',
		'component' => 'mycred'
	) );

	// Activity for receipient
	bp_activity_add( array(
		'action'    => 'Points transfer from ' . bp_core_get_user_displayname( $from ),
		'user_id'   => $user_id,
		'type'      => 'activity_update',
		'component' => 'mycred'
	) );
}

/*--------------------------------------------------------------
3.0 - TWEAKS
--------------------------------------------------------------*/
/**
 * The prompt text in titles isn't helpful. We might change it here!
 */
function yucom_filter_title_text($title)
{
    $scr = get_current_screen();
    if ('gmember' == $scr->post_type)
        $title = 'Mitglied Nickname eintragen';
    return ($title);
}
add_filter('yucom_custom_title', 'yucom_filter_title_text');

/*--------------------------------------------------------------
4.0 - CUSTOM POST TYPES AND TAXONOMIES
--------------------------------------------------------------*/
/**
 * Post types need too much space, so lets include em once!
 */
require_once( TEMPLATEPATH . '/library/post_types.php' );

/*--------------------------------------------------------------
5.0 - THE FORUMS
--------------------------------------------------------------*/
/**
 * Very comlicated, so we use another file.
 */
require_once( TEMPLATEPATH . '/library/forum.php' );
/*--------------------------------------------------------------
6.0 - TINYMCE CUSTOMIZATION
--------------------------------------------------------------*/
add_filter( 'mce_buttons' , 'yucom_mce_buttons' );
add_filter( 'mce_buttons_2' , 'yucom_mce_buttons_2' );
function yucom_mce_buttons( $buttons ) {
	array_splice($buttons, 2, 0, 'underline');
	if ( is_admin() ) return $buttons;
	$remove = array('wp_more','wp_adv','fullscreen','hr');
	return array_diff($buttons,$remove);
}
function yucom_mce_buttons_2( $buttons ) {	
	array_splice($buttons, 2, 0, 'backcolor');
	if ( is_admin() ) return $buttons;
	$remove = array('formatselect','wp_help','underline','pasteword','pastetext', 'indent', 'outdent');
	return array_diff($buttons,$remove);
}
/*--------------------------------------------------------------
7.0 - Sidebar
--------------------------------------------------------------*/
/**
 * Time to exclude those sidebars!
 */
require_once( TEMPLATEPATH . '/library/sidebar.php' );

// add custom post type business to the activity stream

add_filter ( 'bp_blogs_record_post_post_types', 'activity_publish_custom_post_types',1,1 );
function activity_publish_custom_post_types( $post_types ) {
	$post_types[] = 'gameblog';
	$post_types[] = 'article';
	$post_types[] = 'gmember';
	$post_types[] = 'reviewer';
	$post_types[] = 'guildnews';	
	return $post_types;
}
add_filter('bp_blogs_activity_new_post_action', 'record_cpt_activity_action', 1, 3);
function record_cpt_activity_action( $activity_action, $post, $post_permalink ) {
global $bp;
	if( $post->post_type == 'gameblog' ) {
		$activity_action = sprintf( __( '%1$s hat eine neue News im Gameblog erstellt: <a href="%3$s">%2$s</a> - ', 'buddypress' ), bp_core_get_userlink( (int) $post->post_author ), '' . $post->post_title . '', ''. $post_permalink .'' );
	}
	if( $post->post_type == 'article' ) {
		$activity_action = sprintf( __( '%1$s hat einen neuen Artikel erstellt: <a href="%3$s">%2$s</a> - ', 'buddypress' ), bp_core_get_userlink( (int) $post->post_author ), '' . $post->post_title . '', ''. $post_permalink .''  );
	}
	if( $post->post_type == 'gmember' ) {
		$activity_action = sprintf( __( '%1$s hat ein neues Mitglied in die Gilde eingetragen: <a href="%3$s">%2$s</a> - ', 'buddypress' ), bp_core_get_userlink( (int) $post->post_author ), '' . $post->post_title . '', ''. $post_permalink .''  );
	}
	if( $post->post_type == 'reviewer' ) {
		$activity_action = sprintf( __( '%1$s hat ein neues Pre- oder Review erstellt: <a href="%3$s">%2$s</a> - ', 'buddypress' ), bp_core_get_userlink( (int) $post->post_author ), '' . $post->post_title . '', ''. $post_permalink .''  );
	}			
	if( $post->post_type == 'guildnews' ) {
		$activity_action = sprintf( __( '%1$s hat eine neue Gildennews erstellt: <a href="%3$s">%2$s</a> - ', 'buddypress' ), bp_core_get_userlink( (int) $post->post_author ), '' . $post->post_title . '', ''. $post_permalink .''  );
	}		
return $activity_action;
}