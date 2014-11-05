<?php
/*
* The static front page file.
*/
?>
<?php get_template_part('header', 'front'); ?>

<!-- Main -->
<div class="ink-grid">
    <div class="column-group">    
        <div class="xlarge-100 large-100 medium-100 small-100 tiny-100 main_bg">
             <div class="column-group">    
                <!-- Blog -->
                <div class="xlarge-66 large-66 medium-66 small-100 tiny-100 blog_main">
                    <div class="blog_main_title clearfix"><span style="float:left;">Gameblog</span><a class="main_title_link" href="/gameblog/">Archiv</a></div>
                    <?php include( TEMPLATEPATH . '/template/blog.php' ); ?>
                    <!-- Tops -->
                    <div class="column-group">
                        <!-- Top MMO -->
                        <div class="xlarge-50 large-50 medium-50 small-100 tiny-100 blog_top">
                            <div class="blog_main_title clearfix"><span style="float:left;">Top MMO</span></div>
                            <?php include( TEMPLATEPATH . '/template/topmmo.php' ); ?>
                        </div>
                        <!-- /Top MMO -->
                        <!-- Top PC -->
                        <div class="xlarge-50 large-50 medium-50 small-100 tiny-100 blog_top">
                            <div class="blog_main_title clearfix"><span style="float:left;">Top PC</span></div>
                            <?php include( TEMPLATEPATH . '/template/toppc.php' ); ?>
                        </div>
                        <!-- /Top PC -->
                        <!-- Top Konsole -->
                        <div class="xlarge-50 large-50 medium-50 small-100 tiny-100 blog_top">
                            <div class="blog_main_title clearfix"><span style="float:left;">Top Konsolen</span></div>
                            <?php include( TEMPLATEPATH . '/template/topkonsole.php' ); ?>
                        </div>
                        <!-- /Top Konsole -->
                        <!-- Top Sonstiges -->
                        <div class="xlarge-50 large-50 medium-50 small-100 tiny-100 blog_top">
                            <div class="blog_main_title clearfix"><span style="float:left;">Top Offtopic</span></div>
                            <?php include( TEMPLATEPATH . '/template/topot.php' ); ?>
                        </div>
                        <!-- /Top Konsole -->
                    </div>
                    <!-- /Tops -->
                </div>
                <!-- /Blog -->
                <!-- Sidebar -->
                <div class="xlarge-33 large-33 medium-33 small-100 tiny-100">
                    <div class="column-group">    
                        <!-- Special -->
                        <div class="xlarge-100 large-100 medium-100 small-100 tiny-100 sidebar_main">
                            <div class="sidebar_main_title clearfix"><span style="float:left;">Special</span></div>
                            <a data-tip-text="Details zum Gewinnspiel" class="special tip wow animated flipInX" href="">
                                <figure class="ink-image">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/special1.png">
                                </figure>
                            </a>
                            <a data-tip-text="Details zum Gewinnspiel" class="special tip wow animated  flipInX" href="">
                                <figure class="ink-image">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/special2.png">
                                </figure>
                            </a>
                        </div>
                        <!-- /Special -->
                        <!-- Artikel -->
                        <div class="xlarge-100 large-100 medium-100 small-100 tiny-100 sidebar_main">
                            <div class="sidebar_main_title clearfix"><span style="float:left;">Artikel</span><a class="main_title_link" href="">Archiv</a></div>
                            <?php include( TEMPLATEPATH . '/template/article.php' ); ?>                            
                        </div>
                        <!-- /Artikel -->
                        <!-- Tests -->
                        <div class="xlarge-100 large-100 medium-100 small-100 tiny-100 sidebar_main">
                            <div class="sidebar_main_title clearfix"><span style="float:left;">Pre- & Reviews</span><a class="main_title_link" href="">Archiv</a></div>                            
                            <?php include( TEMPLATEPATH . '/template/prereviews.php' ); ?>
                        </div>
                        <!-- /Tests -->
                        <!-- Galerie -->
                        <div class="xlarge-100 large-100 medium-100 small-100 tiny-100 sidebar_main">
                            <div class="sidebar_main_title clearfix"><span style="float:left;">Bilder</span><a class="main_title_link" href="">Galerien</a></div>                            
                            <div id="pics" class="ri-grid ri-grid-size-2 wow animated flipInX">
                                <img class="ri-loading-image" src="<?php bloginfo('template_directory'); ?>/img/loading.gif"/>
                                <ul>
                                    <li><a href="http://www.google.de"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/1.png"/></a></li>
                                    <li><a href="http://www.google.de"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/2.png"/></a></li>
                                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/3.png"/></a></li>
                                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/4.png"/></a></li>
                                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/5.png"/></a></li>
                                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/6.png"/></a></li>
                                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/7.png"/></a></li>
                                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/8.png"/></a></li>
                                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/9.png"/></a></li>
                                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/10.png"/></a></li>
                                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/11.png"/></a></li>
                                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/12.png"/></a></li>
                                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/13.png"/></a></li>
                                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/14.png"/></a></li>
                                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/15.png"/></a></li>
                                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/16.png"/></a></li>
                                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/17.png"/></a></li>
                                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/18.png"/></a></li>
                                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/19.png"/></a></li>
                                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/20.png"/></a></li>
                                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/21.png"/></a></li>
                                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/22.png"/></a></li>
                                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/23.png"/></a></li>
                                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/24.png"/></a></li>
                                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/25.png"/></a></li>
                                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/26.png"/></a></li>
                                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/27.png"/></a></li>
                                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/thumbs/28.png"/></a></li>
                                </ul>
                            </div>                            
                        </div>
                        <!-- /Galerie -->
                        <!-- Videos -->
                        <div class="xlarge-100 large-100 medium-100 small-100 tiny-100 sidebar_main">
                            <div class="sidebar_main_title clearfix"><span style="float:left;">Videos</span><a class="main_title_link" href="">Liste</a></div>
                            <!-- Video Item -->
                            <div class="video_item clearfix wow animated flipInX">
                                <div class="video_img">
                                    <a class="video_ot" href="#">
                                        <figure class="ink-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/img/video1.png">
                                        </figure>
                                    </a>
                                </div>
                                <div class="video_info">
                                    <a data-tip-text="News lesen" class="video_title tiptop" href="">Titanfall - Trailer #1</a>
                                    <a data-tip-text="Archiv nach Datum" class="video_date tiptop" href=""><i class="fa fa-calendar-o"></i> 23/12/14</a>
                                    <a data-tip-text="Kommentare lesen" class="video_comments tiptop" href="">89 <i class="fa fa-comments"></i></a>
                                </div>
                            </div>
                            <!-- /Video Item -->
                            <!-- Video Item -->
                            <div class="video_item clearfix wow animated flipInX">
                                <div class="video_img">
                                    <a class="video_ot" href="#">
                                        <figure class="ink-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/img/video2.png">
                                        </figure>
                                    </a>
                                </div>
                                <div class="video_info">
                                    <a data-tip-text="News lesen" class="video_title tiptop" href="">Drive Club - Teaser</a>
                                    <a data-tip-text="Archiv nach Datum" class="video_date tiptop" href=""><i class="fa fa-calendar-o"></i> 23/12/14</a>
                                    <a data-tip-text="Kommentare lesen" class="video_comments tiptop" href="">89 <i class="fa fa-comments"></i></a>
                                </div>
                            </div>
                            <!-- /Video Item -->
                            <!-- Video Item -->
                            <div class="video_item clearfix wow animated flipInX">
                                <div class="video_img">
                                    <a class="video_ot" href="#">
                                        <figure class="ink-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/img/video3.png">
                                        </figure>
                                    </a>
                                </div>
                                <div class="video_info" id="community">
                                    <a data-tip-text="News lesen" class="video_title tiptop" href="">Dragon Age 3: Klassentrailer</a>
                                    <a data-tip-text="Archiv nach Datum" class="video_date tiptop" href=""><i class="fa fa-calendar-o"></i> 23/12/14</a>
                                    <a data-tip-text="Kommentare lesen" class="video_comments tiptop" href="">89 <i class="fa fa-comments"></i></a>
                                </div>
                            </div>
                            <!-- /Video Item -->
                        </div>
                        <!-- /Videos -->
                    </div>
                </div>
                <!-- /Sidebar -->
            </div>
            <br>
        </div>
    </div>
</div>
<!-- /main -->
<!-- community -->
<div class="ink-grid">
    <div class="column-group">    
        <div class="xlarge-100 large-100 medium-100 small-100 tiny-100 community">
            
            <div class="column-group">
                <!-- com left -->    
                <div class="xlarge-33 large-33 medium-33 small-100 tiny-100 com_column">
                    <!-- new users -->
                    <div class="com_main_title clearfix"><span style="float:left;">Neue User</span><a class="com_main_title_link" href="">Liste</a></div>                            
                    <div id="newuser" class="ri-grid ri-grid-size-2 wow animated flipInX">
                        <img class="ri-loading-image" src="<?php bloginfo('template_directory'); ?>/img/loading.gif"/>
                        <ul>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava1.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava2.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava3.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava4.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava5.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava6.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava7.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava8.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava9.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava1.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava2.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava3.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava4.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava5.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava6.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava7.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava8.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava9.png"/></a></li>
                        </ul>
                    </div>
                    <!-- /new users -->
                    <!-- random users -->
                    <div class="com_main_title clearfix"><span style="float:left;">Online</span><a class="com_main_title_link" href="#">mehr</a></div>                            
                    <div id="randomuser" class="ri-grid ri-grid-size-2 wow animated flipInX">
                        <img class="ri-loading-image" src="<?php bloginfo('template_directory'); ?>/img/loading.gif"/>
                        <ul>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava1.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava2.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava3.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava4.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava5.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava6.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava7.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava8.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava9.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava1.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava2.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava3.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava4.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava5.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava6.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava7.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava8.png"/></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/avatar/ava9.png"/></a></li>
                        </ul>
                    </div>
                    <!-- /random users -->
                    <!-- stats -->
                    <div style="display:none;">
                        <div class="com_main_title clearfix"><span style="float:left;">Statistik</span></div>
                        <div class="com_list"><span>2043 registrierte User</span></div>  
                        <div class="com_list"><span>5481 Kommentare Seite</span></div>
                        <div class="com_list"><span>7942 Beiträge im Forum</span></div>                    
                    </div>
                    <!-- /stats -->
                    <a href="#anchor" id="guild"></a>                      
                </div>
                <!-- /com left -->
                <!-- com mid -->    
                <div class="xlarge-33 large-33 medium-33 small-100 tiny-100 com_column">
                    <!-- forum topics -->
                    <div class="wow animated flipInX">
                        <div class="com_main_title clearfix"><span style="float:left;">Posts</span><a class="com_main_title_link" href="#">Forum</a></div>
                        <div class="com_list"><span><a href="#">Ich bin neu hier, und wollte mal Hallo sagen</a></span></div>
                        <div class="com_list"><span><a href="#">Spielt noch jemand Fang den Hut?</a></span></div>
                        <div class="com_list"><span><a href="#">Das total verrückte Forenspiel!</a></span></div>
                        <div class="com_list"><span><a href="#">Bewerbung Thomas</a></span></div>
                        <div class="com_list"><span><a href="#">Suche Gruppe für den ersten Boss</a></span></div>
                    </div>
                    <!-- /forum topics -->
                    <!-- comment list -->
                    <div class="wow animated flipInX">
                        <div class="com_main_title clearfix"><span style="float:left;">Kommentare</span></div>
                        <div class="com_list"><span><a href="#">Ihr habt doch alle einen an der Waffel [...]</a></span></div>
                        <div class="com_list"><span><a href="#">Das Video ist ja mal echt geil!</a></span></div>
                        <div class="com_list"><span><a href="#">Wo kann man sich das Spiel denn [...]</a></span></div>
                        <div class="com_list"><span><a href="#">Ich habe mich schon länger gefragt wo [...]</a></span></div>
                        <div class="com_list"><span><a href="#">Finde ich auch!!!111einself</a></span></div>
                    </div>
                    <!-- /comment list --> 
                </div>
                <!-- /com mid -->
                <!-- com right -->    
                <div class="xlarge-33 large-33 medium-33 small-100 tiny-100 wow animated flipInX">
                    <!-- activity -->
                    <div class="com_main_title clearfix"><span style="float:left;">Aktivität</span><a class="com_main_title_link" href="#">Wall</a></div>
                    <div class="com_list"><span><a href="#">Ich habe heute den neuen Film im Kino gesehen, und fand ihn wirklich geil. Auch wenn er etwas lang war.</a></span></div>
                    <div class="com_list"><span><a href="#">Habe dir grad ne Freundschaftsanfrage geschickt. Kannst ja mal gucken!</a></span></div>
                    <div class="com_list"><span><a href="#">Worum geht es denn hier?</a></span></div>
                    <div class="com_list"><span><a href="#">Du bist total die komische Type. Kannst du nicht mal richtig schreiben?</a></span></div>
                    <div class="com_list"><span><a href="#">Wo kann man denn hier sein Profilbild ändern?</a></span></div>
                    <div class="com_list"><span><a href="#">Haha, der war gut!</a></span></div>
                    <div class="com_list"><span><a href="#">Gestern waren wir zusammen in der neuen Instanz. Haben aber nur den ersten Boss gelegt, danach war Schluss.</a></span></div>
                    <div class="com_list"><span><a href="#">Habe gerade neue Bilder in meine Galerie geladen.</a></span></div>
                    <!-- /activity -->
                </div>
                <!-- /com right -->
            </div>                        
        </div>
    </div>
</div>
<!-- community -->
<!-- guild -->
<div class="ink-grid">
    <div class="column-group">    
        <div class="xlarge-100 large-100 medium-100 small-100 tiny-100 guild_bg">            
            <div class="column-group">
                <!-- guild news -->
                <div class="xlarge-33 large-33 medium-33 small-100 tiny-100">                
                    <div class="blog_main_title clearfix"><span style="float:left;">Gilden News</span><a class="main_title_link" href="">Archiv</a></div>
                    <!-- Guild Main Item -->
                    <div class="blog_item blog_top_news wow animated flipInX">
                        <figure class="ink-image">
                            <img src="<?php bloginfo('template_directory'); ?>/img/news11.png">
                            <figcaption class="over-top">
                                <div class="guild_flag_ot">Offtopic</div>
                            </figcaption>
                            <figcaption class="over-bottom"></figcaption>
                        </figure>
                        <div class="clearfix blog_info">
                            <a data-tip-text="Archiv nach Datum" class="blog_date tiptop" href="#"><i class="fa fa-calendar-o"></i> 23/12/14</a>
                            <a data-tip-text="Kommentare lesen" class="blog_comments tiptop" href="#">23 <i class="fa fa-comments"></i></a>
                        </div>
                        <a class="blog_item_link tiptop" data-tip-text="News lesen" href="#">
                            <h5>Everquest: Next wird neues Projekt</h5>
                            <p><span class="guilditem_flag_ot">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore [...]</span></p>
                        </a>
                    </div>
                    <!-- /Guild Main Item -->
                    <!-- Guild Sub Item -->
                    <div class="top_sub_item clearfix wow animated flipInX">
                        <div class="top_sub_img">
                            <a class="top_sub_ot" href="#">
                                <figure class="ink-image">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/sub9.png">
                                </figure>
                            </a>
                        </div>
                        <div class="top_sub_info">
                            <a data-tip-text="News lesen" class="top_sub_title tiptop" href="">Mitglieder RoundUp #23</a>
                            <a data-tip-text="Archiv nach Datum" class="top_sub_date tiptop" href=""><i class="fa fa-calendar-o"></i> 23/12/14</a>
                            <a data-tip-text="Kommentare lesen" class="top_sub_comments tiptop" href="">89 <i class="fa fa-comments"></i></a>
                        </div>
                    </div>
                    <!-- /Guild Sub Item -->
                    <!-- Guild Sub Item -->
                    <div class="top_sub_item clearfix wow animated flipInX">
                        <div class="top_sub_img">
                            <a class="top_sub_ot" href="#">
                                <figure class="ink-image">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/sub10.png">
                                </figure>
                            </a>
                        </div>
                        <div class="top_sub_info">
                            <a data-tip-text="News lesen" class="top_sub_title tiptop" href="">Yucom Gilde erreicht 500 Mitglieder</a>
                            <a data-tip-text="Archiv nach Datum" class="top_sub_date tiptop" href=""><i class="fa fa-calendar-o"></i> 23/12/14</a>
                            <a data-tip-text="Kommentare lesen" class="top_sub_comments tiptop" href="">89 <i class="fa fa-comments"></i></a>
                        </div>
                    </div>
                    <!-- /Guild Sub Item -->
                    <!-- Guild Sub Item -->
                    <div class="top_sub_item clearfix wow animated flipInX">
                        <div class="top_sub_img">
                            <a class="top_sub_ot" href="#">
                                <figure class="ink-image">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/sub10.png">
                                </figure>
                            </a>
                        </div>
                        <div class="top_sub_info">
                            <a data-tip-text="News lesen" class="top_sub_title tiptop" href="">Mitglieder Roundup #22</a>
                            <a data-tip-text="Archiv nach Datum" class="top_sub_date tiptop" href=""><i class="fa fa-calendar-o"></i> 23/12/14</a>
                            <a data-tip-text="Kommentare lesen" class="top_sub_comments tiptop" href="">89 <i class="fa fa-comments"></i></a>
                        </div>
                    </div>
                    <!-- /Guild Sub Item -->
                    <!-- Guild Sub Item -->
                    <div class="top_sub_item clearfix wow animated flipInX">
                        <div class="top_sub_img">
                            <a class="top_sub_ot" href="#">
                                <figure class="ink-image">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/sub9.png">
                                </figure>
                            </a>
                        </div>
                        <div class="top_sub_info">
                            <a data-tip-text="News lesen" class="top_sub_title tiptop" href="">Neue Projekte in Planung</a>
                            <a data-tip-text="Archiv nach Datum" class="top_sub_date tiptop" href=""><i class="fa fa-calendar-o"></i> 23/12/14</a>
                            <a data-tip-text="Kommentare lesen" class="top_sub_comments tiptop" href="">89 <i class="fa fa-comments"></i></a>
                        </div>
                    </div>
                    <!-- /Guild Sub Item -->                    
                </div>
                <!-- /guild news -->
                <!-- /guild new member -->
                <div class="xlarge-33 large-33 medium-33 small-100 tiny-100 roster">
                    <div class="roster_main_title clearfix"><span style="float:left;">Neue Mitglieder</span></div>                 
                    <!-- guild new member item -->
                    <div class="column-group roster_list">
                        <div class="xlarge-35 large-35 medium-50 small-50 tiny-50">Lumartist</div>                        
                        <div class="xlarge-15 large-15 hide-medium hide-small hide-tiny">37</div>
                        <div class="xlarge-25 large-25 hide-medium hide-small hide-tiny">männlich</div>
                        <div class="xlarge-25 large-25 medium-50 small-50 tiny-50 clearfix"><a style="float:right;" href="">Profil</a></div>
                    </div>
                    <!-- /guild new member item -->
                    <!-- guild new member item -->
                    <div class="column-group roster_list">
                        <div class="xlarge-35 large-35 medium-50 small-50 tiny-50">Aron</div>                        
                        <div class="xlarge-15 large-15 hide-medium hide-small hide-tiny">33</div>
                        <div class="xlarge-25 large-25 hide-medium hide-small hide-tiny">männlich</div>
                        <div class="xlarge-25 large-25 medium-50 small-50 tiny-50 clearfix"><a style="float:right;" href="">Profil</a></div>
                    </div>
                    <!-- /guild new member item -->
                    <!-- guild new member item -->
                    <div class="column-group roster_list">
                        <div class="xlarge-35 large-35 medium-50 small-50 tiny-50">Thrawns</div>                        
                        <div class="xlarge-15 large-15 hide-medium hide-small hide-tiny">29</div>
                        <div class="xlarge-25 large-25 hide-medium hide-small hide-tiny">männlich</div>
                        <div class="xlarge-25 large-25 medium-50 small-50 tiny-50 clearfix"><a style="float:right;" href="">Profil</a></div>
                    </div>
                    <!-- /guild new member item -->
                    <!-- guild new member item -->
                    <div class="column-group roster_list">
                        <div class="xlarge-35 large-35 medium-50 small-50 tiny-50">Lisa</div>                        
                        <div class="xlarge-15 large-15 hide-medium hide-small hide-tiny">25</div>
                        <div class="xlarge-25 large-25 hide-medium hide-small hide-tiny">weiblich</div>
                        <div class="xlarge-25 large-25 medium-50 small-50 tiny-50 clearfix"><a style="float:right;" href="">Profil</a></div>
                    </div>
                    <!-- /guild new member item -->
                    <!-- guild new member item -->
                    <div class="column-group roster_list">
                        <div class="xlarge-35 large-35 medium-50 small-50 tiny-50">Lisa</div>                        
                        <div class="xlarge-15 large-15 hide-medium hide-small hide-tiny">25</div>
                        <div class="xlarge-25 large-25 hide-medium hide-small hide-tiny">weiblich</div>
                        <div class="xlarge-25 large-25 medium-50 small-50 tiny-50 clearfix"><a style="float:right;" href="">Profil</a></div>
                    </div>
                    <!-- /guild new member item -->
                    <div class="random_main_title clearfix"><span style="float:left;">Zufällige Mitglieder</span></div>
                    <!-- guild random member item -->
                    <div class="column-group roster_list">
                        <div class="xlarge-35 large-35 medium-50 small-50 tiny-50">Lumartist</div>                        
                        <div class="xlarge-15 large-15 hide-medium hide-small hide-tiny">37</div>
                        <div class="xlarge-25 large-25 hide-medium hide-small hide-tiny">männlich</div>
                        <div class="xlarge-25 large-25 medium-50 small-50 tiny-50 clearfix"><a style="float:right;" href="">Profil</a></div>
                    </div>
                    <!-- /guild random member item -->
                    <!-- guild random member item -->
                    <div class="column-group roster_list">
                        <div class="xlarge-35 large-35 medium-50 small-50 tiny-50">Aron</div>                        
                        <div class="xlarge-15 large-15 hide-medium hide-small hide-tiny">33</div>
                        <div class="xlarge-25 large-25 hide-medium hide-small hide-tiny">männlich</div>
                        <div class="xlarge-25 large-25 medium-50 small-50 tiny-50 clearfix"><a style="float:right;" href="">Profil</a></div>
                    </div>
                    <!-- /guild random member item -->
                    <!-- guild random member item -->
                    <div class="column-group roster_list">
                        <div class="xlarge-35 large-35 medium-50 small-50 tiny-50">Thrawns</div>                        
                        <div class="xlarge-15 large-15 hide-medium hide-small hide-tiny">29</div>
                        <div class="xlarge-25 large-25 hide-medium hide-small hide-tiny">männlich</div>
                        <div class="xlarge-25 large-25 medium-50 small-50 tiny-50 clearfix"><a style="float:right;" href="">Profil</a></div>
                    </div>
                    <!-- /guild random member item -->
                    <!-- guild random member item -->
                    <div class="column-group roster_list">
                        <div class="xlarge-35 large-35 medium-50 small-50 tiny-50">Lisa</div>                        
                        <div class="xlarge-15 large-15 hide-medium hide-small hide-tiny">25</div>
                        <div class="xlarge-25 large-25 hide-medium hide-small hide-tiny">weiblich</div>
                        <div class="xlarge-25 large-25 medium-50 small-50 tiny-50 clearfix"><a style="float:right;" href="">Profil</a></div>
                    </div>
                    <!-- /guild random member item -->
                    <!-- guild random member item -->
                    <div class="column-group roster_list">
                        <div class="xlarge-35 large-35 medium-50 small-50 tiny-50">Lisa</div>                        
                        <div class="xlarge-15 large-15 hide-medium hide-small hide-tiny">25</div>
                        <div class="xlarge-25 large-25 hide-medium hide-small hide-tiny">weiblich</div>
                        <div class="xlarge-25 large-25 medium-50 small-50 tiny-50 clearfix"><a style="float:right;" href="">Profil</a></div>
                    </div>
                    <!-- /guild random member item -->
                    
                    <div class="clearfix">
                        <a class="roster_sub_link sub_link_lft" href="">Roster</a>
                        <a class="roster_sub_link sub_link_rgt" href="">bewerben</a>
                    </div>
                    
                </div>
                <!-- /guild new member -->
                <!-- project list -->
                <div class="xlarge-33 large-33 medium-33 small-100 tiny-100">                    
                    <div class="roster_main_title clearfix"><span style="float:left">Projekte</span><a class="main_title_link" href="">Übersicht</a></div>                    
                    <a data-tip-text="Projekt besuchen" class="project_list_item tiplft" href="#">Wildstar Online</a>
                    <a data-tip-text="Projekt besuchen" class="project_list_item tiplft" href="#">Minecraft</a>
                    <a data-tip-text="Projekt besuchen" class="project_list_item tiplft" href="#">Star Citizen</a>
                    <a data-tip-text="Projekt besuchen" class="project_list_item tiplft" href="#">Camelot Unchained</a>
                    <a data-tip-text="Projekt besuchen" class="project_list_item tiplft" href="#">Everquest: Next</a>                    
                </div>
                <!-- /project list -->
            </div>
        </div>
    </div>
</div>
<!-- guild -->
<!-- Affiliate -->      
<div class="ink-grid">
    <div class="column-group">    
        <div class="xlarge-100 large-100 medium-100 small-100 tiny-100 affiliate">                        
            <div class="column-group">   
                <!-- Amazon -->
                <div class="xlarge-66 large-66 medium-100 small-100 tiny-100 amazon_column">
                    <div class="com_main_title clearfix"><span style="float:left;">Unterstütze uns - Kaufe bei Amazon</span><a class="com_main_title_link" href="#">Info</a></div>
                </div>
                <!-- /Amazon -->
                <!-- Paypal -->
                <div class="xlarge-33 large-33 medium-100 small-100 tiny-100">
                    <div class="com_main_title clearfix"><span style="float:left;">Unterstütze uns - Paypal</span><a class="com_main_title_link" href="#">Info</a></div>
                </div>
                <!-- Paypal -->                
            </div>              
        </div>
    </div>
</div> 
<!-- Affiliate -->   
      
<?php get_template_part('footer', 'front'); ?>