<?php get_header(); ?>
    
   
      <div class="blog-header">
      <!-- <h1 class="blog-title"> <?php bloginfo('name'); ?></h1> -->
       <!-- <p class="lead blog-description"> <?php bloginfo('description'); ?> </p>-->
      </div>

      <div class="row">

        <div class="  col-md-9 blog-main space1">

        <?php while (have_posts()) : the_post(); ?> 

                 <div class="blog-post">
                      <div class="customImg">
                                    <h2 class="blog-post-title"> <?php the_title(); ?>  </h2>
                                    <p class="blog-post-meta"> <?php the_time('F jS, Y'); ?> by <a href="#"><?php the_author (); ?> </a> Tags:    <?php
                        global $post;
                        foreach(get_the_tags($post->ID) as $tag)
                            {

                                echo ' <a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a> ';
                            }

                      ?>
                                      <?php 
                      $category = get_the_category(); 
                      if($category[0]){
                      echo "Category: ";

                      echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
                       echo "<br />";
                      }
                    ?></p>


                     

                    
                     


                                   <?php the_content(); ?> 
                                   <?php endwhile; wp_reset_query(); ?>
                                  <?php comments_template(); ?>
                      </div>

                  
                 </div><!-- /.blog-post -->
                               
                   

                     
                     

                       
                           <!-- <nav>
                              <ul class="pager">
                                <li><?php previous_posts_link('Prev'); ?></li>
                                <li><?php next_posts_link('Next'); ?></li>
                              </ul>
                            </nav>-->

                            <?php bootblog_pagination(); ?>


                      
                      
         
         
             
         

        </div><!-- /.blog-main -->

        <?php get_sidebar(); ?>

      </div><!-- /.row -->

    </div><!-- /.container -->

    
<?php get_footer(); ?>