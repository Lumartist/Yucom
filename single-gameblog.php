<?php get_header(); ?>

<div class="ink-grid">
    <div class="column-group">    
        <div class="xlarge-100 large-100 medium-100 small-100 tiny-100 main_bg">
            <div class="column-group">
                <!-- Main Content -->
                <div class="xlarge-66 large-66 medium-66 small-100 tiny-100 main_content">

                
                    <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        
                        <div class="main_content_title clearfix"><span><?php the_title(); ?></span></div>
                        
                        <figure class="ink-image featured_image">
                            <figcaption class="over-top dark"></figcaption>
                                <?php the_post_thumbnail('content-image-big'); ?>
                            <figcaption class="over-bottom dark"></figcaption>
                        </figure>
                        
                        
                        <?php the_content(); ?>
                        <div class="clearfix">
                            <nav style="float:right;" class="ink-navigation wp_pages">
                                <?php
                                    wp_link_pages(array(
                                        'before' => '<ul class="pagination black">',
                                        'after' => '</ul>',
                                        'next_or_number' => 'number',
                                        'nextpagelink' => __('Next'),
                                        'link_before' => '',
                                        'link_after' => '',
                                        'previouspagelink' => __('Previous'),
                                        'pagelink' => 'Seite %',
                                        'separator' => '<li>',
                                        'echo' => 1 )
                                    );
                                ?>
                            </nav>
                        </div>
                        	
                    <?php endwhile;?>
                    <?php else : ?>
                        <p>Aktuell gibt es hier keinen Eintrag!</p>
                    <?php endif; ?>                
                
                
                </div>
                <!-- /Main Content -->
                <!-- Sidebar -->
                <div class="xlarge-33 large-33 medium-33 small-100 tiny-100">                     
                    <?php include( TEMPLATEPATH . '/template/sidebar_gameinfos.php' ); ?>
                    <div class="sidebar_main_title clearfix"><span style="float:left;">Newsinfos</span></div>
                    <ul class="gameinfo">
                        <li>Autor: <?php echo bp_core_get_userlink( $post->post_author ); ?></li>
                        <li>Datum: <?php the_time('d/m/y') ?></li>
                    </ul>                    
                    <?php include( TEMPLATEPATH . '/template/sidebar_news.php' ); ?>
                    <?php include( TEMPLATEPATH . '/template/sidebar_topnews.php' ); ?>                
                </div>
                <!-- /Sidebar -->
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>