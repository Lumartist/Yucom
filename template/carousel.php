                    <?php              
                        $args = array( 'post_type' => array('carousel'), 'orderby'=>'date', 'order'=>'DESC', 'posts_per_page' => 10 );
                        $wp_query = new WP_Query();
                        $wp_query->query( $args );
                        while ($wp_query->have_posts()) : $wp_query->the_post(); 
                    ?>
                    <div class="item">
                        <figure class="ink-image">
                            <?php the_post_thumbnail('carousel-image-big'); ?>
                            <figcaption class="over-top"></figcaption>
                            <figcaption class="over-bottom">
                                <a class="tiprgt" data-tip-text="lesen!" href="<?php the_field('verVerlinkunglinkung'); ?>"><i class="fa fa-angle-double-right"></i> <?php the_title(); ?></a>
                            </figcaption>
                        </figure>
                    </div>
                    <?php endwhile;
                    wp_reset_query(); ?>