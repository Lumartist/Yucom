<?php get_template_part('header'); ?>
<!-- Main -->
<div class="ink-grid">
    <div class="column-group">    
        <div class="xlarge-100 large-100 medium-100 small-100 tiny-100 main_bg">
             <div class="column-group">    
                <!-- Blog -->
                <div class="xlarge-100 large-100 medium-100 small-100 tiny-100 blog_main">
<div class="column-group">
    
    <?php
        if ( get_query_var('paged') ) { $paged = get_query_var('paged'); } else if ( get_query_var('page') ) {$paged = get_query_var('page'); } else {$paged = 1; }
 
        $temp = $wp_query;  // re-sets query
        $wp_query = null;   // re-sets query
        $args = array( 'post_type' => array('gameblog'), 'orderby'=>'date', 'order'=>'DESC', 'posts_per_page' => 12, 'paged' => $paged, 'kategorien' => 'mmo');
        $wp_query = new WP_Query();
        $wp_query->query( $args );
        while ($wp_query->have_posts()) : $wp_query->the_post(); 
    ?>
     
                        <!-- Blog Item -->
                        <div class="xlarge-33 large-33 medium-33 small-100 tiny-100 wow flipInX animated">
                            <div class="blog_item blog_main_news">
                                <figure class="ink-image">
                                    <?php the_post_thumbnail('news-image-big'); ?>
                                    <figcaption class="over-top">
                                        <div class="blog_flag_<?php $terms = get_the_terms( $post->ID, 'kategorien' ) ;
                                                $term_list = array_pop($terms)->name ;
                                                foreach( $terms as $os )
                                                {
                                                    $term_list .= ", " . $os->name ;
                                                }
                                                $str = strtolower($term_list);
                                                echo $str              
                                            ?>">
                                            <?php
                                                $terms = get_the_terms( $post->ID, 'kategorien' ) ;
                                                $term_list = array_pop($terms)->name ;
                                                foreach( $terms as $os )
                                                {
                                                    $term_list .= ", " . $os->name ;
                                                }
                                                echo $term_list               
                                            ?>
                                        </div>
                                    </figcaption>
                                    <figcaption class="over-bottom"></figcaption>
                                </figure>
                                <div class="clearfix blog_info">
                                    <a data-tip-text="Archiv nach Datum" class="blog_date tiptop" href="#"><i class="fa fa-calendar-o"></i> <?php the_time('d/m/y') ?></a>
                                    <a data-tip-text="Kommentare lesen" class="blog_comments tiptop" href="<?php the_permalink() ?>"><?php comments_number( '0', '1', '%' ); ?> <i class="fa fa-comments"></i></a>
                                </div>
                                <a class="blog_item_link tiptop" data-tip-text="News lesen" href="<?php the_permalink() ?>">
                                    <h5><?php the_title(); ?></h5>
                                    <p><span class="item_flag_mmo"><?php echo wp_html_excerpt( get_the_excerpt() , 110, ' [...]'); ?></span></p>
                                </a>
                            </div>
                        </div>
                        <!-- /Blog Item -->
 
    <?php endwhile; ?>
    
   </div>
    
    <!-- Blog Pager -->
    <div class="column-group blog_nav"> 
        <div class="xlarge-50 large-50 medium-50 small-100 tiny-100">
            <nav class="ink-navigation blog_archive">
                <ul class="pagination pills black">
                    <li class="disabled"><a href="#">Archiv</a></li>
                    <li data-tip-text="Archiv aller Einträge" class="tiptop"><a href="/gameblog/">Alle</a></li>
                    <li data-tip-text="MMO News Archiv" class="tiptop"><a href="/kategorien/mmo/">MMO</a></li>
                    <li data-tip-text="PC News Archive" class="tiptop"><a href="/kategorien/pc/">PC</a></li>
                    <li data-tip-text="Konsolen News Archiv" class="tiptop"><a href="/kategorien/konsolen/">Konsole</a></li>
                    <li data-tip-text="Offtopic News archiv" class="tiptop"><a href="/kategorien/offtopic/">OT</a></li>
                </ul>
            </nav>
        </div>
        <div class="xlarge-50 large-50 medium-50 small-100 tiny-100 clearfix">
            <nav class="ink-nav blog_pager">
               <?php 
                   paginate(); 
                   $wp_query = null;
                   $wp_query = $temp; // Reset
               ?>
               <?php wp_reset_query(); ?>
            </nav>
        </div>
    </div>
    <!-- /Blog Pager -->
    
</div>
</div>
</div>
</div>
</div>    
    
<?php get_footer(); ?>