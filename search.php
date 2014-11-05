<?php get_header(); ?>

<div class="ink-grid">
    <div class="column-group">    
        <div class="xlarge-100 large-100 medium-100 small-100 tiny-100 main_bg">
            <div class="column-group">
                <!-- Main Content -->
                <div class="xlarge-66 large-66 medium-66 small-100 tiny-100 main_content">
                    
                	<?php if (have_posts()) : ?>
                         <p class="info">Deine Suchergebnisse f&uuml;r <strong><?php echo $s ?></strong></p>
                 
                         <?php while (have_posts()) : the_post(); ?>
                            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                            <div class="entry">123
                               <?php the_content(); ?>
                            </div>
                         <?php endwhile; ?>
                 
                         <p align="center"><?php next_posts_link('&laquo; &Auml;ltere Eintr&auml;ge') ?> | <?php previous_posts_link('Neuere Eintr&auml;ge &raquo;') ?></p>
                 
                      <?php else : ?>
                         <h2>Leider nichts gefunden</h2>
                 
                      <?php endif; ?>                      
                    
                </div>
                <!-- /Main Content -->
                <!-- Sidebar -->
                <div class="xlarge-33 large-33 medium-33 small-100 tiny-100">                     
                    <?php include( TEMPLATEPATH . '/template/sidebar_news.php' ); ?>
                    <?php include( TEMPLATEPATH . '/template/sidebar_topnews.php' ); ?>
                </div>
                <!-- /Sidebar -->
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>