<?php
 /**
 * Lets add a post type for blog news here.
 */
add_action( 'init', 'register_cpt_blog' );
function register_cpt_blog() {
    $labels = array( 
        'name' => _x( 'Gameblogs', 'blog' ),
        'singular_name' => _x( 'Gameblog', 'blog' ),
        'add_new' => _x( 'Erstellen', 'blog' ),
        'add_new_item' => _x( 'Blogpost erstellen', 'blog' ),
        'edit_item' => _x( 'Blogpost bearbeiten', 'blog' ),
        'new_item' => _x( 'Neuer Blogpost', 'blog' ),
        'view_item' => _x( 'Blogpost ansehen', 'blog' ),
        'search_items' => _x( 'Blogposts durchsuchen', 'blog' ),
        'not_found' => _x( 'Keine Blogposts gefunden', 'blog' ),
        'not_found_in_trash' => _x( 'Keine gelöschten Blogposts', 'blog' ),
        'parent_item_colon' => _x( 'Übergeordneter Blog:', 'blog' ),
        'menu_name' => _x( 'Gameblogs', 'blog' ),
    );
    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Hier werden neue Einträge zum Gameblog hinzugefügt.',
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions' ),
        'taxonomies' => array( 'kategorien' ),
        'public' => true,
        'rewrite' => array( 'slug' => 'gameblog' ),
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'capabilities' => array(
            'edit_post' => 'edit_blog',
            'edit_posts' => 'edit_blogs',
            'edit_others_posts' => 'edit_others_blogs',
            'publish_posts' => 'publish_blogs',
            'read_post' => 'read_blog',
            'read_private_posts' => 'read_private_blogs',
            'delete_post' => 'delete_blog'
        )
    );
    register_post_type( 'gameblog', $args );
}
/**
 * With some magic we add taxonomy for blog news here. :wush:
 */
add_action( 'init', 'register_taxonomy_kategorien' );
function register_taxonomy_kategorien() {
    $labels = array( 
        'name' => _x( 'Kategorien', 'kategorien' ),
        'singular_name' => _x( 'Kategorie', 'kategorien' ),
        'search_items' => _x( 'Kategorien durchsuchen', 'kategorien' ),
        'popular_items' => _x( 'Populäre Kategorien', 'kategorien' ),
        'all_items' => _x( 'Alle Kategorien', 'kategorien' ),
        'parent_item' => _x( 'Übergeordnete Kategorie', 'kategorien' ),
        'parent_item_colon' => _x( 'Übergeordnete Kategorie:', 'kategorien' ),
        'edit_item' => _x( 'Kategorie bearbeiten', 'kategorien' ),
        'update_item' => _x( 'Kategorie aktualisieren', 'kategorien' ),
        'add_new_item' => _x( 'Neue Kategorie erstellen', 'kategorien' ),
        'new_item_name' => _x( 'Neue Kategorie', 'kategorien' ),
        'separate_items_with_commas' => _x( 'Kategorien durch Kommata trennen', 'kategorien' ),
        'add_or_remove_items' => _x( 'Add or remove kategorien', 'kategorien' ),
        'choose_from_most_used' => _x( 'Choose from the most used kategorien', 'kategorien' ),
        'menu_name' => _x( 'Kategorien', 'kategorien' ),
    );
    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => false,
        'show_admin_column' => false,
        'hierarchical' => true,
        'rewrite' => true,
        'query_var' => true
    );
    register_taxonomy( 'kategorien', array('gameblog'), $args );
}
/**
 * Lets add a post type for the slider right here.
 */
add_action( 'init', 'register_cpt_slider' );
function register_cpt_slider() {
    $labels = array( 
        'name' => _x( 'Slider', 'slider' ),
        'singular_name' => _x( 'Slider', 'slider' ),
        'add_new' => _x( 'Erstellen', 'slider' ),
        'add_new_item' => _x( 'Slide erstellen', 'slider' ),
        'edit_item' => _x( 'Slide bearbeiten', 'slider' ),
        'new_item' => _x( 'Neuer Slide', 'slider' ),
        'view_item' => _x( 'Slide ansehen', 'slider' ),
        'search_items' => _x( 'Slides durchsuchen', 'slider' ),
        'not_found' => _x( 'Keine Slides gefunden', 'slider' ),
        'not_found_in_trash' => _x( 'Keine gelöschten Slides', 'slider' ),
        'parent_item_colon' => _x( 'Übergeordneter Slide:', 'slider' ),
        'menu_name' => _x( 'Slider', 'slider' ),
    );
    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Hier werden neue Einträge zum Slider hinzugefügt.',
        'supports' => array( 'title', 'author', 'thumbnail', 'revisions' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,        
        'show_in_nav_menus' => false,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capabilities' => array(
            'edit_post' => 'edit_slider',
            'edit_posts' => 'edit_sliders',
            'edit_others_posts' => 'edit_others_sliders',
            'publish_posts' => 'publish_sliders',
            'read_post' => 'read_slider',
            'read_private_posts' => 'read_private_sliders',
            'delete_post' => 'delete_slider'
        )
    );
    register_post_type( 'slider', $args );
}
/**
 * Wait, we need carousel slides, right?
 */
add_action( 'init', 'register_cpt_carousel' );
function register_cpt_carousel() {
    $labels = array( 
        'name' => _x( 'Carousel', 'carousel' ),
        'singular_name' => _x( 'Carousel', 'carousel' ),
        'add_new' => _x( 'Erstellen', 'carousel' ),
        'add_new_item' => _x( 'Slide erstellen', 'carousel' ),
        'edit_item' => _x( 'Slide bearbeiten', 'carousel' ),
        'new_item' => _x( 'Neuer Slide', 'carousel' ),
        'view_item' => _x( 'Slide ansehen', 'carousel' ),
        'search_items' => _x( 'Slides durchsuchen', 'carousel' ),
        'not_found' => _x( 'Keine Slides gefunden', 'carousel' ),
        'not_found_in_trash' => _x( 'Keine gelöschten Slides', 'carousel' ),
        'parent_item_colon' => _x( 'Übergeordneter Slide:', 'carousel' ),
        'menu_name' => _x( 'Carousel', 'carousel' ),
    );
    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Hier werden neue Einträge zum Carousel hinzugefügt.',
        'supports' => array( 'title', 'author', 'thumbnail', 'revisions' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,        
        'show_in_nav_menus' => false,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capabilities' => array(
            'edit_post' => 'edit_carousel',
            'edit_posts' => 'edit_carousels',
            'edit_others_posts' => 'edit_others_carousels',
            'publish_posts' => 'publish_carousels',
            'read_post' => 'read_carousel',
            'read_private_posts' => 'read_private_carousels',
            'delete_post' => 'delete_carousel'
        )
    );
    register_post_type( 'carousel', $args );
}
/**
 * Someone wanted to have articles. Here ya go.
 */
add_action( 'init', 'register_cpt_article' );
function register_cpt_article() {
    $labels = array( 
        'name' => _x( 'Artikel', 'article' ),
        'singular_name' => _x( 'Artikel', 'article' ),
        'add_new' => _x( 'Erstellen', 'article' ),
        'add_new_item' => _x( 'Artikel erstellen', 'article' ),
        'edit_item' => _x( 'Artikel bearbeiten', 'article' ),
        'new_item' => _x( 'Neuer Artikel', 'article' ),
        'view_item' => _x( 'Artikel ansehen', 'article' ),
        'search_items' => _x( 'Artikel durchsuchen', 'article' ),
        'not_found' => _x( 'Keine Artikel gefunden', 'article' ),
        'not_found_in_trash' => _x( 'Keine gelöschten Artikel', 'article' ),
        'parent_item_colon' => _x( 'Übergeordneter Artikel:', 'article' ),
        'menu_name' => _x( 'Artikel', 'article' ),
    );
    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Hier werden neue Artikel hinzugefügt.',
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions' ),
        'taxonomies' => array( 'Rubrik' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,        
        'show_in_nav_menus' => false,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capabilities' => array(
            'edit_post' => 'edit_article',
            'edit_posts' => 'edit_articles',
            'edit_others_posts' => 'edit_others_article',
            'publish_posts' => 'publish_articles',
            'read_post' => 'read_article',
            'read_private_posts' => 'read_private_articles',
            'delete_post' => 'delete_article'
        )
    );
    register_post_type( 'article', $args );
}
/**
 * Can't work like this! Please add rubrics!
 */
add_action( 'init', 'register_taxonomy_rubriken' );
function register_taxonomy_rubriken() {
    $labels = array( 
        'name' => _x( 'Rubriken', 'rubriken' ),
        'singular_name' => _x( 'Rubrik', 'rubriken' ),
        'search_items' => _x( 'Rubriken durchsuchen', 'rubriken' ),
        'popular_items' => _x( 'Populäre Rubriken', 'rubriken' ),
        'all_items' => _x( 'Alle Rubriken', 'rubriken' ),
        'parent_item' => _x( 'Übergeordnete Rubriken', 'rubriken' ),
        'parent_item_colon' => _x( 'Übergeordnete Rubriken:', 'rubriken' ),
        'edit_item' => _x( 'Rubriken bearbeiten', 'rubriken' ),
        'update_item' => _x( 'Rubriken aktualisieren', 'rubriken' ),
        'add_new_item' => _x( 'Neue Rubrik erstellen', 'rubriken' ),
        'new_item_name' => _x( 'Neue Rubrik', 'rubriken' ),
        'separate_items_with_commas' => _x( 'Rubiken durch Kommata trennen', 'rubriken' ),
        'add_or_remove_items' => _x( 'Add or remove Rubriken', 'rubriken' ),
        'choose_from_most_used' => _x( 'Choose from the most used Rubriken', 'rubriken' ),
        'menu_name' => _x( 'Rubriken', 'rubriken' ),
    );
    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => false,
        'show_admin_column' => false,
        'hierarchical' => true,
        'rewrite' => true,
        'query_var' => true
    );
    register_taxonomy( 'rubriken', array('article'), $args );
}
/**
 * Ever wanted to add members to the guild?
 */
add_action( 'init', 'register_cpt_gmember' );
function register_cpt_gmember() {
    $labels = array( 
        'name' => _x( 'Mitglied', 'gmember' ),
        'singular_name' => _x( 'Mitglied', 'gmember' ),
        'add_new' => _x( 'Erstellen', 'gmember' ),
        'add_new_item' => _x( 'Mitglied erstellen', 'gmember' ),
        'edit_item' => _x( 'Mitglied bearbeiten', 'gmember' ),
        'new_item' => _x( 'Neues Mitglied', 'gmember' ),
        'view_item' => _x( 'Mitglied ansehen', 'gmember' ),
        'search_items' => _x( 'Mitglieder durchsuchen', 'gmember' ),
        'not_found' => _x( 'Keine Mitglieder gefunden', 'gmember' ),
        'not_found_in_trash' => _x( 'Keine gelöschten Mitglieder', 'gmember' ),
        'parent_item_colon' => _x( 'Übergeordnetes Mitglied:', 'gmember' ),
        'menu_name' => _x( 'Gildenmitglieder', 'gmember' ),
    );
    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Hier werden neue Mitglieder zur Gildenliste hinzugefügt.',
        'supports' => array( 'title' ),
        'taxonomies' => array( 'Rang' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,        
        'show_in_nav_menus' => false,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capabilities' => array(
            'edit_post' => 'edit_gmember',
            'edit_posts' => 'edit_gmembers',
            'edit_others_posts' => 'edit_others_gmembers',
            'publish_posts' => 'publish_gmembers',
            'read_post' => 'read_gmember',
            'read_private_posts' => 'read_private_gmembers',
            'delete_post' => 'delete_gmember'
        )
    );
    register_post_type( 'gmember', $args );
}
/**
 * Members need some ranks! Well sort of...
 */
add_action( 'init', 'register_taxonomy_ranking' );
function register_taxonomy_ranking() {
    $labels = array( 
        'name' => _x( 'Ränge', 'ranking' ),
        'singular_name' => _x( 'Rang', 'ranking' ),
        'search_items' => _x( 'Ränge durchsuchen', 'ranking' ),
        'popular_items' => _x( 'Populäre Ränge', 'ranking' ),
        'all_items' => _x( 'Alle Ränge', 'ranking' ),
        'parent_item' => _x( 'Übergeordnete Ränge', 'ranking' ),
        'parent_item_colon' => _x( 'Übergeordnete Ränge:', 'ranking' ),
        'edit_item' => _x( 'Ränge bearbeiten', 'ranking' ),
        'update_item' => _x( 'Ränge aktualisieren', 'ranking' ),
        'add_new_item' => _x( 'Neuen Rang erstellen', 'ranking' ),
        'new_item_name' => _x( 'Neuen Rang', 'ranking' ),
        'separate_items_with_commas' => _x( 'Ränge durch Kommata trennen', 'ranking' ),
        'add_or_remove_items' => _x( 'Add or remove Ränge', 'ranking' ),
        'choose_from_most_used' => _x( 'Choose from the most used Ränge', 'ranking' ),
        'menu_name' => _x( 'Ränge', 'ranking' ),
    );
    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => false,
        'show_admin_column' => false,
        'hierarchical' => true,
        'rewrite' => true,
        'query_var' => true
    );
    register_taxonomy( 'ranking', array('gmember'), $args );
}
/**
 * Someone once said, lets do some pre- and reviews. Interesting!
 */
add_action( 'init', 'register_cpt_reviewer' );
function register_cpt_reviewer() {
    $labels = array( 
        'name' => _x( 'RePreviews', 'reviewer' ),
        'singular_name' => _x( 'RePreview', 'reviewer' ),
        'add_new' => _x( 'Erstellen', 'reviewer' ),
        'add_new_item' => _x( 'RePreview erstellen', 'reviewer' ),
        'edit_item' => _x( 'RePreview bearbeiten', 'reviewer' ),
        'new_item' => _x( 'Neues RePreview', 'reviewer' ),
        'view_item' => _x( 'RePreview ansehen', 'reviewer' ),
        'search_items' => _x( 'RePreviews durchsuchen', 'reviewer' ),
        'not_found' => _x( 'Keine RePreviews gefunden', 'reviewer' ),
        'not_found_in_trash' => _x( 'Keine gelöschten RePreviews', 'reviewer' ),
        'parent_item_colon' => _x( 'Übergeordnetes RePreview:', 'reviewer' ),
        'menu_name' => _x( 'RePreviews', 'reviewer' ),
    );
    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Hier werden neue RePreview Einträge hinzugefügt.',
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions' ),
        'taxonomies' => array( 'Art' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,        
        'show_in_nav_menus' => false,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capabilities' => array(
            'edit_post' => 'edit_reviewer',
            'edit_posts' => 'edit_reviewers',
            'edit_others_posts' => 'edit_others_reviewers',
            'publish_posts' => 'publish_reviewers',
            'read_post' => 'read_reviewer',
            'read_private_posts' => 'read_private_reviewers',
            'delete_post' => 'delete_reviewer'
        )
    );
    register_post_type( 'reviewer', $args );
}
/**
 * Oh my god! Reviews need some sorting, eh?
 */
add_action( 'init', 'register_taxonomy_art' );
function register_taxonomy_art() {
    $labels = array( 
        'name' => _x( 'Arten', 'art' ),
        'singular_name' => _x( 'Art', 'art' ),
        'search_items' => _x( 'Arten durchsuchen', 'art' ),
        'popular_items' => _x( 'Populäre Arten', 'art' ),
        'all_items' => _x( 'Alle Arten', 'art' ),
        'parent_item' => _x( 'Übergeordnete Arten', 'art' ),
        'parent_item_colon' => _x( 'Übergeordnete Arten:', 'art' ),
        'edit_item' => _x( 'Arten bearbeiten', 'art' ),
        'update_item' => _x( 'Arten aktualisieren', 'art' ),
        'add_new_item' => _x( 'Neue Art erstellen', 'art' ),
        'new_item_name' => _x( 'Neue Art', 'art' ),
        'separate_items_with_commas' => _x( 'Arten durch Kommata trennen', 'art' ),
        'add_or_remove_items' => _x( 'Add or remove Arten', 'art' ),
        'choose_from_most_used' => _x( 'Choose from the most used Arten', 'art' ),
        'menu_name' => _x( 'Arten', 'art' ),
    );
    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => false,
        'show_admin_column' => false,
        'hierarchical' => true,
        'rewrite' => true,
        'query_var' => true
    );
    register_taxonomy( 'art', array('reviewer'), $args );
}
/**
 * Britzl... Guild news!
 */
add_action( 'init', 'register_cpt_guildnews' );
function register_cpt_guildnews() {
    $labels = array( 
        'name' => _x( 'News', 'guildnews' ),
        'singular_name' => _x( 'News', 'guildnews' ),
        'add_new' => _x( 'Erstellen', 'guildnews' ),
        'add_new_item' => _x( 'News erstellen', 'guildnews' ),
        'edit_item' => _x( 'News bearbeiten', 'guildnews' ),
        'new_item' => _x( 'Neue News', 'guildnews' ),
        'view_item' => _x( 'News ansehen', 'guildnews' ),
        'search_items' => _x( 'News durchsuchen', 'guildnews' ),
        'not_found' => _x( 'Keine News gefunden', 'guildnews' ),
        'not_found_in_trash' => _x( 'Keine gelöschten News', 'guildnews' ),
        'parent_item_colon' => _x( 'Übergeordnete News:', 'guildnews' ),
        'menu_name' => _x( 'Gilden-News', 'guildnews' ),
    );
    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Hier werden neue Gilden-News hinzugefügt.',
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,        
        'show_in_nav_menus' => false,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capabilities' => array(
            'edit_post' => 'edit_guildnews',
            'edit_posts' => 'edit_guildnewss',
            'edit_others_posts' => 'edit_others_guildnewss',
            'publish_posts' => 'publish_guildnewss',
            'read_post' => 'read_guildnews',
            'read_private_posts' => 'read_private_guildnewss',
            'delete_post' => 'delete_guildnews'
        )
    );
    register_post_type( 'guildnews', $args );
}
/**
 * Movement in motion. Videos on youtube!
 */
add_action( 'init', 'register_cpt_videothek' );
function register_cpt_videothek() {
    $labels = array( 
        'name' => _x( 'Videos', 'videothek' ),
        'singular_name' => _x( 'Video', 'videothek' ),
        'add_new' => _x( 'Erstellen', 'videothek' ),
        'add_new_item' => _x( 'Videoeintrag erstellen', 'videothek' ),
        'edit_item' => _x( 'Videoeintrag bearbeiten', 'videothek' ),
        'new_item' => _x( 'Neuen Videoeintrag', 'videothek' ),
        'view_item' => _x( 'Videoeintrag ansehen', 'videothek' ),
        'search_items' => _x( 'Videoeinträge durchsuchen', 'videothek' ),
        'not_found' => _x( 'Keine Videoeinträge gefunden', 'videothek' ),
        'not_found_in_trash' => _x( 'Keine gelöschten Videoeinträge', 'videothek' ),
        'parent_item_colon' => _x( 'Übergeordnete Videoeinträge:', 'videothek' ),
        'menu_name' => _x( 'Videotheke', 'videothek' ),
    );
    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Hier werden neue Videos hinzugefügt.',
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions' ),
        'taxonomies' => array( 'Genre' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,        
        'show_in_nav_menus' => false,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capabilities' => array(
            'edit_post' => 'edit_videothek',
            'edit_posts' => 'edit_videotheks',
            'edit_others_posts' => 'edit_others_videotheks',
            'publish_posts' => 'publish_videotheks',
            'read_post' => 'read_videothek',
            'read_private_posts' => 'read_private_videotheks',
            'delete_post' => 'delete_videothek'
        )
    );
    register_post_type( 'videothek', $args );
}
/**
 * What if someone doesn't like something? Genres!
 */
add_action( 'init', 'register_taxonomy_genre' );
function register_taxonomy_genre() {
    $labels = array( 
        'name' => _x( 'Genres', 'genre' ),
        'singular_name' => _x( 'Genre', 'genre' ),
        'search_items' => _x( 'Genres durchsuchen', 'genre' ),
        'popular_items' => _x( 'Populäre Genres', 'genre' ),
        'all_items' => _x( 'Alle Genres', 'genre' ),
        'parent_item' => _x( 'Übergeordnete Genres', 'genre' ),
        'parent_item_colon' => _x( 'Übergeordnete Genres:', 'genre' ),
        'edit_item' => _x( 'Genres bearbeiten', 'genre' ),
        'update_item' => _x( 'Genres aktualisieren', 'genre' ),
        'add_new_item' => _x( 'Neues Genre erstellen', 'genre' ),
        'new_item_name' => _x( 'Neues Genre', 'genre' ),
        'separate_items_with_commas' => _x( 'Genres durch Kommata trennen', 'genre' ),
        'add_or_remove_items' => _x( 'Add or remove Genres', 'genre' ),
        'choose_from_most_used' => _x( 'Choose from the most used Genres', 'genre' ),
        'menu_name' => _x( 'Genres', 'genre' ),
    );
    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => false,
        'show_admin_column' => false,
        'hierarchical' => true,
        'rewrite' => true,
        'query_var' => true
    );
    register_taxonomy( 'genre', array('videothek'), $args );
}



 /**
 * Lets add a post type for games to the database here.
 */
add_action( 'init', 'register_cpt_gamelist' );
function register_cpt_gamelist() {
    $labels = array( 
        'name' => _x( 'Spiele', 'gamelist' ),
        'singular_name' => _x( 'Spiel', 'gamelist' ),
        'add_new' => _x( 'Erstellen', 'gamelist' ),
        'add_new_item' => _x( 'Spiel anlegen', 'gamelist' ),
        'edit_item' => _x( 'Spiel bearbeiten', 'gamelist' ),
        'new_item' => _x( 'Neues Spiel', 'gamelist' ),
        'view_item' => _x( 'Spiel ansehen', 'gamelist' ),
        'search_items' => _x( 'Spiele durchsuchen', 'gamelist' ),
        'not_found' => _x( 'Keine Spiele gefunden', 'gamelist' ),
        'not_found_in_trash' => _x( 'Keine gelöschten Spiele', 'gamelist' ),
        'parent_item_colon' => _x( 'Übergeordnete Spiele:', 'gamelist' ),
        'menu_name' => _x( 'Spiele', 'gamelist' ),
    );
    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Hier werden neue Einträge zur Spieldatenbank hinzugefügt.',
        'supports' => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions' ),
        'taxonomies' => array( 'Kategorie' ),
        'public' => true,
        'rewrite' => array( 'slug' => 'spiele' ),
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'capabilities' => array(
            'edit_post' => 'edit_spiel',
            'edit_posts' => 'edit_spiele',
            'edit_others_posts' => 'edit_others_spiele',
            'publish_posts' => 'publish_spiele',
            'read_post' => 'read_spiel',
            'read_private_posts' => 'read_private_spiele',
            'delete_post' => 'delete_spiel'
        )
    );
    register_post_type( 'gamelist', $args );
}
/**
 * With some magic we add taxonomy for blog news here. :wush:
 */
add_action( 'init', 'register_taxonomy_typus' );
function register_taxonomy_typus() {
    $labels = array( 
        'name' => _x( 'Typen', 'typus' ),
        'singular_name' => _x( 'Typus', 'typus' ),
        'search_items' => _x( 'Typen durchsuchen', 'typus' ),
        'popular_items' => _x( 'Populäre Typen', 'typus' ),
        'all_items' => _x( 'Alle Typen', 'typus' ),
        'parent_item' => _x( 'Übergeordneter Typus', 'typus' ),
        'parent_item_colon' => _x( 'Übergeordneter Typus:', 'typus' ),
        'edit_item' => _x( 'Typen bearbeiten', 'typus' ),
        'update_item' => _x( 'Typus aktualisieren', 'typus' ),
        'add_new_item' => _x( 'Neue Typen erstellen', 'typus' ),
        'new_item_name' => _x( 'Neuer Typus', 'typus' ),
        'separate_items_with_commas' => _x( 'Typen durch Kommata trennen', 'typus' ),
        'add_or_remove_items' => _x( 'Add or remove Typen', 'typus' ),
        'choose_from_most_used' => _x( 'Choose from the most used Typen', 'typus' ),
        'menu_name' => _x( 'Typen', 'typus' ),
    );
    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => false,
        'show_admin_column' => false,
        'hierarchical' => true,
        'rewrite' => true,
        'query_var' => true
    );
    register_taxonomy( 'typus', array('gamelist'), $args );
}
?>