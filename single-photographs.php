 


<?php get_header(); ?>

			<div class="customImg">
	
				<?php while (have_posts()) : the_post(); ?>
						<h3><a href="<?php the_permalink();?>"><?php the_title() ?></a></h3>
						<p class="text-muted">Posted by <?php the_author();?> on <?php the_time('F jS, Y'); ?></p>
						<p><?php the_content(''); ?></p>
						
				<?php endwhile; wp_reset_query(); ?>
			</div>

<?php get_footer(); ?>




 