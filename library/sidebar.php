<?php
function yucom_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Widget Area', 'yucom' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Appears in main areas.', 'yucom' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Forum Widget Area 1', 'yucom' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears on Forum Front', 'yucom' ),
		'before_widget' => '<div class="forum_sidebar">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="forum_sidebar_title"><span>',
		'after_title'   => '</span></div>',
	) );
	register_sidebar( array(
		'name'          => __( 'Forum Widget Area 2', 'yucom' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears on Forum Pages', 'yucom' ),
		'before_widget' => '<div class="forum_sidebar">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="forum_sidebar_title"><span>',
		'after_title'   => '</span></div>',
	) );
	register_sidebar( array(
		'name'          => __( 'Forum Widget Area 3', 'yucom' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Appears on Forum Pages', 'yucom' ),
		'before_widget' => '<div class="forum_sidebar_right">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="forum_sidebar_title"><span>',
		'after_title'   => '</span></div>',
	) );	
}
add_action( 'widgets_init', 'yucom_widgets_init' );
?>