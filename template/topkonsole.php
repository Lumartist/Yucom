                            <?php              
                                $args = array( 
                                    'post_type' => array('gameblog'), 
                                    'orderby'=>'comment_count', 
                                    'order'=>'DESC', 
                                    'posts_per_page' => 1,
                                    'tax_query' => array(
                                            array(
                                                'taxonomy' => 'kategorien',
                                                'field' => 'slug',
                                                'terms' => array('konsolen')
                                            )
                                        )
                                    );
                                $wp_query = new WP_Query();
                                $wp_query->query( $args );
                                while ($wp_query->have_posts()) : $wp_query->the_post(); 
                            ?>
                            

                            <!-- Top Main Item -->
                            <div class="blog_item blog_top_news wow animated flipInX">
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
                                    <p><span class="item_flag_<?php $terms = get_the_terms( $post->ID, 'kategorien' ) ;
                                                $term_list = array_pop($terms)->name ;
                                                foreach( $terms as $os )
                                                {
                                                    $term_list .= ", " . $os->name ;
                                                }
                                                $str = strtolower($term_list);
                                                echo $str              
                                            ?>"><?php echo wp_html_excerpt( get_the_excerpt() , 110, ' [...]'); ?></span></p>
                                </a>
                            </div>
                            <!-- /Top Main Item -->
                            
                            <?php endwhile;
                            wp_reset_query(); ?>
                            
                            <?php              
                                $args = array( 
                                    'post_type' => array('gameblog'), 
                                    'orderby'=>'comment_count', 
                                    'order'=>'DESC', 
                                    'posts_per_page' => 2,
                                    'offset' => 1,
                                    'tax_query' => array(
                                            array(
                                                'taxonomy' => 'kategorien',
                                                'field' => 'slug',
                                                'terms' => array('konsolen')
                                            )
                                        )
                                    );
                                $wp_query = new WP_Query();
                                $wp_query->query( $args );
                                while ($wp_query->have_posts()) : $wp_query->the_post(); 
                            ?>                           
                            
                            <!-- Top Sub Item -->
                            <div class="top_sub_item clearfix wow animated flipInX">
                                <div class="top_sub_img">
                                    <a class="top_sub_<?php $terms = get_the_terms( $post->ID, 'kategorien' ) ;
                                                $term_list = array_pop($terms)->name ;
                                                foreach( $terms as $os )
                                                {
                                                    $term_list .= ", " . $os->name ;
                                                }
                                                $str = strtolower($term_list);
                                                echo $str              
                                            ?>" href="<?php the_permalink() ?>">
                                        <figure class="ink-image">
                                            <?php the_post_thumbnail('subnews-image-big'); ?>
                                        </figure>
                                    </a>
                                </div>
                                <div class="top_sub_info">
                                    <a data-tip-text="News lesen" class="top_sub_title tiptop" href="<?php the_permalink() ?>">Minecraft: Anzeichen zur Mod-API</a>
                                    <a data-tip-text="Archiv nach Datum" class="top_sub_date tiptop" href="#"><i class="fa fa-calendar-o"></i> <?php the_time('d/m/y') ?></a>
                                    <a data-tip-text="Kommentare lesen" class="top_sub_comments tiptop" href="<?php the_permalink() ?>"><?php comments_number( '0', '1', '%' ); ?> <i class="fa fa-comments"></i></a>
                                </div>
                            </div>
                            <!-- /Top Sub Item -->
                            
                            <?php endwhile;
                            wp_reset_query(); ?>