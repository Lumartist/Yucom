
<?php // Single parent forum with no children
if ( !bbp_get_forum_subforum_count() ) :
$forum_id = bbp_get_forum_id(); ?>
<!-- #forum-<?php bbp_forum_id(); ?> -->

        

		<div id="forum-<?php bbp_forum_id(); ?>" class="xlarge-33 large-33 medium-50 small-100 tiny-100 forum_item <?php bbp_forum_class(); ?>">
	        <div>
            <div class="forum_desc">
            	<a class="forum_front_iconbg" href="<?php bbp_forum_permalink(); ?>" title="<?php bbp_forum_title(); ?>">        
                <div class="forum_iconize">
                    <i class="fa <?php
                        switch ($forum_id) {
							/* Yucom-Bote */
                            case "9":
                                echo "fa-bullhorn";
                                break;
							/* Gildenherald */
                            case "11":
                                echo "fa-paper-plane";
                                break;
							/* Gameblog */
                            case "13":
                                echo "fa-cubes";
                                break;
							/* Wildstar */
							case "22":
                                echo "fa-star";
                                break;
							/* Stammtisch */
							case "251":
                                echo "fa-users";
                                break;
							/* PC Gameply */
							case "253":
                                echo "fa-desktop";
                                break;
							/* Mediathek */
							case "256":
                                echo "fa-ticket";
                                break;
							/* Bewerben */
                            case "260":
                                echo "fa-pencil-square";
                                break;
							/* Geheimrat */
							case "262":
                                echo "fa-gavel";
                                break;
							/* Schwarzes Brett */
							case "266":
                                echo "fa-exclamation-triangle";
                                break;
							/* Projektlieter Intern */
							case "272":
                                echo "fa-sitemap";
                                break;
							/* Thronsaal */
							case "274":
                                echo "fa-crosshairs";
                                break;
							/* Reallife */
							case "276":
                                echo "fa-beer";
                                break;
							/* Dunkelzimmer */
							case "268":
                                echo "fa-bomb";
                                break;
							/* Projektplaner */
							case "281":
                                echo "fa-thumb-tack";
                                break;
							/* Wildstar Intern */
							case "283":
                                echo "fa-star";
                                break;
							/* Musikzimmer */
							case "285":
                                echo "fa-headphones";
                                break;
							/* Konsoleros */
							case "288":
                                echo "fa-gamepad";
                                break;	
							/* MMORPG */
							case "290":
                                echo "fa-flask";
                                break;
							/* Portal Intern */
							case "296":
                                echo "fa-cogs";
                                break;
							/* Rollenspiel */
							case "300":
                                echo "fa-qq";
                                break;
							/* Helden und Legenden */
							case "302":
                                echo "fa-shield";
                                break;																			
                        }
                    ?>"></i>
                    
                </div>                
                <div class="forum_counter">
                	<div class="arrow_box"></div>
                </div>
                </a>
                <div class="forum_title">
                	<a href="<?php bbp_forum_permalink(); ?>">
	                	<h2><?php bbp_forum_title(); ?></h2>
                        <span><?php bbp_forum_content(); ?></span>
                    </a>
                </div>
                <div class="forum_recent">
                    <div class="forum_recent_autor clearfix">
                        <div class="push-left">
                            <?php bbp_author_link( array( 'post_id' => bbp_get_forum_last_active_id( $forum_id ), 'type' => 'avatar' , 'size' => 30 ) ); ?>
                        </div>
                        <div class="push-left forum_recent_info">
                            <?php bbp_author_link( array( 'post_id' => bbp_get_forum_last_active_id( $forum_id ), 'type' => 'name' ) ); ?> schrieb <?php bbp_forum_last_active_time( $forum_id ); ?>:
                        </div>
                    </div>
                    <div class="forum_excerpt">
                    	<span>???</span>
                    </div>
                </div>
                <div class="forum_front_topic">
                <span>Thema:</span> <a class="forum_front_tpctitle" href="<?php echo $link_url; ?>" title="<?php bbp_forum_last_topic_title( $forum_id ); ?>">
	                <?php bbp_forum_last_topic_title( $forum_id ); ?></a>
                </div>
            </div>
            </div>
        </div>


<?php // A categorical parent with child forums
else : ?>

<div class="forum_content_title clearfix"><span><?php bbp_forum_title(); ?></span></div>
<div class="column-group forum_list">

    <?php yucom_list_subforums(); ?>

</div>
        
<?php endif; ?>

