                            <?php              
                                $args = array( 'post_type' => array('article'), 'orderby'=>'date', 'order'=>'DESC', 'posts_per_page' => 4 );
                                $wp_query = new WP_Query();
                                $wp_query->query( $args );
                                while ($wp_query->have_posts()) : $wp_query->the_post(); 
                            ?>                            
                            
                            <!-- Artikel Item -->
                            <div class="clearfix article_item wow animated flipInX">
                                <div class="article_image">
                                    <figure class="ink-image">
                                        <?php the_post_thumbnail('article-image-big'); ?>
                                        <figcaption class="over-top">
                                            <div class="article_flag_<?php $terms = get_the_terms( $post->ID, 'rubriken' ) ;
                                                $term_list = array_pop($terms)->name ;
                                                foreach( $terms as $os )
                                                {
                                                    $term_list .= ", " . $os->name ;
                                                }
                                                $str = strtolower($term_list);
                                                echo $str              
                                            ?>"><?php
                                                $terms = get_the_terms( $post->ID, 'rubriken' ) ;
                                                $term_list = array_pop($terms)->name ;
                                                foreach( $terms as $os )
                                                {
                                                    $term_list .= ", " . $os->name ;
                                                }
                                                echo $term_list               
                                            ?></div>
                                        </figcaption>
                                        <figcaption class="over-bottom"></figcaption>
                                    </figure>
                                </div>
                                <div class="article_info">
                                    <a class="article_item_link tiptop" data-tip-text="Artikel lesen" href="<?php the_permalink() ?>">
                                        <h5><?php the_title(); ?></h5>
                                        <p><span class="item_flag_<?php $terms = get_the_terms( $post->ID, 'rubriken' ) ;
                                                $term_list = array_pop($terms)->name ;
                                                foreach( $terms as $os )
                                                {
                                                    $term_list .= ", " . $os->name ;
                                                }
                                                $str = strtolower($term_list);
                                                echo $str              
                                            ?>"><?php echo wp_html_excerpt( get_the_excerpt() , 85, ' [...]'); ?></span></p>                                        
                                    </a>
                                    <div class="clearfix article_details">
                                        <a data-tip-text="Archiv nach Datum" class="top_sub_date tiptop" href="#"><i class="fa fa-calendar-o"></i> <?php the_time('d/m/y') ?></a>
                                        <a data-tip-text="Kommentare lesen" class="top_sub_comments tiptop" href="<?php the_permalink() ?>"><?php comments_number( '0', '1', '%' ); ?> <i class="fa fa-comments"></i></a>
                                    </div>                                
                                </div>                                
                            </div>
                            <!-- /Artikel Item -->
                            
                            <?php endwhile;
                            wp_reset_query(); ?>