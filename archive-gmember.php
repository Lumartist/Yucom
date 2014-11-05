<?php get_template_part('header'); ?>

<!-- Main -->
<div class="ink-grid">
    <div class="column-group">    
        <div class="xlarge-100 large-100 medium-100 small-100 tiny-100 main_bg">
             <div class="column-group">    
                <!-- Blog -->
                <div class="xlarge-100 large-100 medium-100 small-100 tiny-100 blog_main">

    				<div class="post-header">
                        <div class="main_content_title clearfix"><span>Gildenleitung</span></div>                        
                    </div><!--end post header-->
                    
                    <div class="column-group">
                    <?php              
						$args = array( 
							'post_type' => array('gmember'), 
							'orderby'=>'date', 
							'order'=>'ASC', 
							'posts_per_page' => 200,
							'tax_query' => array(
									array(
										'taxonomy' => 'ranking',
										'field' => 'slug',
										'terms' => array('gildenleitung')
									)
								)
							);
						$wp_query = new WP_Query();
						$wp_query->query( $args );
						while ($wp_query->have_posts()) : $wp_query->the_post(); 
					?>
                    
                    
                    <div class="xlarge-33 large-33 medium-50 small-100 tiny-100">
	                    <a class="member_vcard" href="<?php the_field('profil'); ?>">
							<?php the_title(); ?><br>
                            <?php the_field('vorname'); ?><br>
                            <?php the_field('geschlecht'); ?><br>
                            <?php the_field('alter'); ?><br>
                            <?php $date = DateTime::createFromFormat('Ymd', get_field('beitritt'));
                            echo $date->format('d.m.Y'); ?>                      
                        </a>
                    </div>
                    
                    <?php endwhile;
                    wp_reset_query(); ?>
                    </div>
                    
                    <div class="post-header">
                        <div class="main_content_title clearfix"><span>Projektleiter</span></div>                        
                    </div><!--end post header-->
                    
                    <?php              
						$args = array( 
							'post_type' => array('gmember'), 
							'orderby'=>'date', 
							'order'=>'ASC', 
							'posts_per_page' => 200,
							'tax_query' => array(
									array(
										'taxonomy' => 'ranking',
										'field' => 'slug',
										'terms' => array('projektleiter')
									)
								)
							);
						$wp_query = new WP_Query();
						$wp_query->query( $args );
						while ($wp_query->have_posts()) : $wp_query->the_post(); 
					?>
                    
                    <?php the_title(); ?><br>
                    <?php the_field('vorname'); ?><br>
                    <?php the_field('geschlecht'); ?><br>
                    <?php the_field('alter'); ?><br>
                    <?php $date = DateTime::createFromFormat('Ymd', get_field('beitritt'));
					echo $date->format('d.m.Y'); ?><br>
                    <?php the_field('profil'); ?><br><br><br>
                    
                    <?php endwhile;
                    wp_reset_query(); ?>
                    
                    <div class="post-header">
                        <div class="main_content_title clearfix"><span>Volontäre</span></div>                        
                    </div><!--end post header-->
                    
                    <?php              
						$args = array( 
							'post_type' => array('gmember'), 
							'orderby'=>'date', 
							'order'=>'ASC', 
							'posts_per_page' => 200,
							'tax_query' => array(
									array(
										'taxonomy' => 'ranking',
										'field' => 'slug',
										'terms' => array('volontaer')
									)
								)
							);
						$wp_query = new WP_Query();
						$wp_query->query( $args );
						while ($wp_query->have_posts()) : $wp_query->the_post(); 
					?>
                    
                    <?php the_title(); ?><br>
                    <?php the_field('vorname'); ?><br>
                    <?php the_field('geschlecht'); ?><br>
                    <?php the_field('alter'); ?><br>
                    <?php $date = DateTime::createFromFormat('Ymd', get_field('beitritt'));
					echo $date->format('d.m.Y'); ?><br>
                    <?php the_field('profil'); ?><br><br><br>
                    
                    <?php endwhile;
                    wp_reset_query(); ?>
                    
       				<div class="post-header">
                        <div class="main_content_title clearfix"><span>Mitglieder</span></div>                        
                    </div><!--end post header-->
                    
                    <?php              
						$args = array( 
							'post_type' => array('gmember'), 
							'orderby'=>'date', 
							'order'=>'ASC', 
							'posts_per_page' => 200,
							'tax_query' => array(
									array(
										'taxonomy' => 'ranking',
										'field' => 'slug',
										'terms' => array('mitglied')
									)
								)
							);
						$wp_query = new WP_Query();
						$wp_query->query( $args );
						while ($wp_query->have_posts()) : $wp_query->the_post(); 
					?>
                    
                    <?php the_title(); ?><br>
                    <?php the_field('vorname'); ?><br>
                    <?php the_field('geschlecht'); ?><br>
                    <?php the_field('alter'); ?><br>
                    <?php $date = DateTime::createFromFormat('Ymd', get_field('beitritt'));
					echo $date->format('d.m.Y'); ?><br>
                    <?php the_field('profil'); ?><br><br><br>
                    
                    <?php endwhile;
                    wp_reset_query(); ?>
    
				</div>
			</div>
		</div>
	</div>
</div>    
    
<?php get_footer(); ?>