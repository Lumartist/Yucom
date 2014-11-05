<div class="column-group">
	<?php while ( bbp_topics() ) : bbp_the_topic(); ?>
		<?php bbp_get_template_part( 'loop', 'single-topic' ); ?>
	<?php endwhile; ?>
</div>    