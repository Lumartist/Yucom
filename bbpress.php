<?php get_template_part('header', 'forum'); ?>

<div class="ink-grid">
    <div class="column-group">    
        <div class="xlarge-100 large-100 medium-100 small-100 tiny-100 forum_bg">
            <div class="column-group">
                <!-- Main Content -->
                <div class="xlarge-75 large-75 medium-75 small-100 tiny-100 forum_content">
                    <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        
                        <?php the_content(); ?>
                        
                    <?php endwhile; ?>
                    <?php else : ?>
                    <?php endif; ?>
                </div>
                <!-- /Main Content -->
                <!-- Sidebar -->
                <div class="xlarge-25 large-25 medium-25 small-100 tiny-100">                     
                    
                    <div id="secondary" class="sidebar-container" role="complementary">
                        <div class="widget-area">
                            <?php  dynamic_sidebar( 'sidebar-2' );  ?>
                        </div>
                    </div>
                                        
                </div>
                <!-- /Sidebar -->
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>