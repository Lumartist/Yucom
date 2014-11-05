            <div class="xlarge-65 large-70 medium-70 small-70 tiny-100 main_slider">
                <div id="sync1" class="owl-carousel">

                <?php              
                    $args = array( 'post_type' => array('slider'), 'orderby'=>'date', 'order'=>'DESC', 'posts_per_page' => 10 );
                    $wp_query = new WP_Query();
                    $wp_query->query( $args );
                    while ($wp_query->have_posts()) : $wp_query->the_post(); 
                ?>
                    
                    <div class="item">
                        <figure class="ink-image">
                            <?php the_post_thumbnail('slider-image-big'); ?>
                            <figcaption class="over-bottom">
                                <a href="<?php the_field('verlinkung'); ?>"><i class="fa fa-angle-double-right"></i> <?php the_title(); ?></a>
                            </figcaption>
                        </figure>
                    </div>
                    
                <?php endwhile;
                wp_reset_query(); ?>    
                    
                </div>                
                <div class="clearfix slider_nav customNavigation">
                    <div class="slider_lft">                        
                        <a class="slider_prev"><i class="fa fa-angle-double-left"></i></a>                        
                    </div>
                    <div id="sync2" class="owl-carousel slider_thumb">
                        
                        <?php              
                            $args = array( 'post_type' => array('slider'), 'orderby'=>'date', 'order'=>'DESC', 'posts_per_page' => 10 );
                            $wp_query = new WP_Query();
                            $wp_query->query( $args );
                            while ($wp_query->have_posts()) : $wp_query->the_post(); 
                        ?>
                        
                            <div data-tip-text="<?php the_title(); ?>" class="item tipbtm"><?php the_post_thumbnail('slider-image-nav'); ?></div>
                        
                        <?php endwhile;
                        wp_reset_query(); ?>
                        
                    </div>
                    <div class="slider_rgt customNavigation">                        
                        <a class="slider_next"><i class="fa fa-angle-double-right"></i></a>                        
                    </div>
                </div>
            </div>