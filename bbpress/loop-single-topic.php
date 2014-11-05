<!-- loop single topic -->
	<div class="xlarge-33 large-33 medium-50 small-100 tiny-100">
	    <div id="topic-<?php bbp_topic_id(); ?>" <?php bbp_topic_class(); ?> data-autoload="false">
            <div class="tpc_frame">
                <div class="tpc_head">
                	<div class="clearfix">
                    	<div class="tpc_status">
							<?php
                               $topic_id = bbp_get_topic_id();
                               if ( get_post_type( $topic_id ) == bbp_get_topic_post_type() && bbp_is_topic_sticky( $topic_id ) && !bbp_is_topic_super_sticky( $topic_id ) )
                                  echo '<i title="Wichtig" class="fa fa-thumb-tack"></i> Wichtig';
                            ?>
                            <?php
                               $topic_id = bbp_get_topic_id();
                               if ( get_post_type( $topic_id ) == bbp_get_topic_post_type() && bbp_is_topic_closed( $topic_id ) )
                                  echo '<i title="Gesperrt" class="fa fa-lock"></i> Gesperrt';
                            ?>
                            <?php
                               $topic_id = bbp_get_topic_id();
                               if ( get_post_type( $topic_id ) == bbp_get_topic_post_type() && bbp_is_topic_super_sticky( $topic_id ) )
                                  echo '<i title="Ankündigung" class="fa fa-bolt"></i> Ankündigung';
                            ?>
                        </div>
						<div class="tpc_count"><i class="fa fa-pencil"></i> <?php bbp_topic_post_count(); ?></div>
                    </div>
                    <div class="forum_counter">
                        <div class="arrow_box"></div>
                    </div>
                </div>
                <div class="tpc_title">
					<a class="tpc_maintitle" href="<?php bbp_topic_permalink(); ?>" title="Read this topic"><?php bbp_topic_title(); ?></a>
                    Erstellt von <?php bbp_topic_author_link( array( 'type' => 'name' ) ); ?>
                </div>
                <div class="tpc_recent clearfix">
					<div class="tpc_avatar"><?php bbp_author_link( array( 'post_id' => bbp_get_topic_last_active_id(), 'type' => 'avatar' , 'size' => 30 ) ); ?></div>
					<div class="tpc_newest">Letzte Antwort: <?php bbp_author_link( array( 'post_id' => bbp_get_topic_last_active_id(), 'type' => 'name' ) ); ?> <?php bbp_topic_last_active_time(); ?></div>
                </div>
            </div>
	    </div>
    </div>
<!-- /loop single topic -->