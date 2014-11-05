<?php get_header(); ?>

<div class="ink-grid">
    <div class="column-group">    
        <div class="xlarge-100 large-100 medium-100 small-100 tiny-100 main_bg">
            <div class="column-group">
                <!-- Main Content -->
                <div class="xlarge-66 large-66 medium-66 small-100 tiny-100 main_content">
                    <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="post-header">
                        <div class="main_content_title clearfix"><span><?php the_title(); ?></span></div>                        
                        </div><!--end post header-->
                        <div class="entry clear">
                        <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
                        <?php the_content(); ?>
                        <?php wp_link_pages(); ?>
                        </div><!--end entry-->
                        
                        </div><!--end post-->

                        

                    <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
                        <div class="navigation index">
                        <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
                        <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
                        </div><!--end navigation-->
                    <?php else : ?>
                    <?php endif; ?>
                </div>
                <!-- /Main Content -->
                <!-- Sidebar -->
                <div class="xlarge-33 large-33 medium-33 small-100 tiny-100">                     
                    <?php include( TEMPLATEPATH . '/template/sidebar_news.php' ); ?>
                    <?php include( TEMPLATEPATH . '/template/sidebar_topnews.php' ); ?>
                </div>
                <!-- /Sidebar -->
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>