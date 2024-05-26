	<?php
	/*
	Template Name: dublin calling
	*/
	?>

	<?php get_header(); ?>

	 
		
			<div class="row">

					<div class="col-md-6 incT whiteBg">

						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

									    <div class="page-header">
									        <h1><?php the_title(); ?></h1>
									    </div>

									    <?php the_content(); ?>

								     
									  

									    <?php endwhile; else: ?>


									    <div class="page-header">
									        

									        h1>Oh no!</h1>
									    </div>

									    <p>There seems to be a bigger problem!</p>

									    <?php endif; ?>
						 

					</div> 

					<div class="col-md-6 incT ">
						 
						<img class="img-responsive imgTop" src="http://www.paolobergomi.it/wp-content/themes/phobs/dublin_calling.jpg " alt="Dublin Calling photo cover ">
 

					</div>
		    </div>



	 	    <div class="spacing"></div>

	</div>
	  
	<?php get_footer(); ?>
