                                              
                <?php $posts = get_field('verknupfung');
                    if( $posts ): ?>
                        <div class="sidebar_main_title clearfix"><span style="float:left;">Gameinfos</span></div>                        
                        <ul class="gameinfo">
                        <?php foreach( $posts as $post): ?>
                            <?php setup_postdata($post); ?>                           
                            
                            <li>Titel: <a class="tiptop" data-tip-text="mehr Infos zum Spiel" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php $publisher = get_field( "webseite_publisher" );
                            if( $publisher )
                            { ?>
                                <li>Publisher: <a class="tiptop" data-tip-text="Webseite besuchen" href="<?php the_field('webseite_publisher'); ?>"><?php the_field('publisher'); ?></a></li>
                            <?php }
                            else
                            { ?>
                                <li>Publisher: <?php the_field('publisher'); ?></li>
                            <?php } ?> 
                            <?php $developer = get_field( "webseite_entwickler" );
                            if( $developer )
                            { ?>
                                <li>Entwickler: <a class="tiptop" data-tip-text="Webseite besuchen" href="<?php the_field('webseite_entwickler'); ?>"><?php the_field('entwickler'); ?></a></li>
                            <?php }
                            else
                            { ?>
                                <li>Entwickler: <?php the_field('entwickler'); ?></li>
                            <?php } ?>
                            <li>Plattform: <?php the_field('plattform'); ?></li>
                            <?php $offwebde = get_field( "offizielle_webseite_(de)" );
                            if( $offwebde )
                            { ?>
                                <li>Webseite (de): <a class="tiptop" data-tip-text="Webseite besuchen" href="<?php the_field('offizielle_webseite_(de)'); ?>">besuchen</a></li>
                            <?php }
                            else
                            { ?>
                            <?php } ?>
                            <?php $offweben = get_field( "offizielle_webseite_(en)" );
                            if( $offweben )
                            { ?>
                                <li>Webseite (en): <a class="tiptop" data-tip-text="Webseite besuchen" href="<?php the_field('offizielle_webseite_(en)'); ?>">besuchen</a></li>
                            <?php }
                            else
                            { ?>
                            <?php } ?>
                            
                            <nav class="ink-navigation clearfix">
                                <ul class="pagination pills black push-right">
                                    <li data-tip-text="Infoseite zum Spiel" class="tiptop"><a href="<?php the_permalink(); ?>">Mehr zum Spiel</a></li>
                                </ul>
                            </nav>
                            
                        <?php endforeach; ?>
                        </ul>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>