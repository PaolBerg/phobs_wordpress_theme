
<?php
/*
Template Name: Gallery Page
*/
?>
<?php
get_header(); ?>
 
                

    
         <?php

// check if the repeater field has rows of data

if (have_rows('category_gallery')):

  // loop through the rows of data

  while (have_rows('category_gallery')):
    the_row();

    // display a sub field value

    $image = get_sub_field('cat_image');
    $title = get_sub_field('cat_title');
?>     
                        
                       <a href="<?php
    echo $image['url']; ?>" title="<?php
    echo $title ?>"  data-lightbox="group1"  >
                        <img id="thumb1" class="responsive1" title="<?php
    echo $title ?>" src="<?php
    echo $image['url']; ?>" data-lightbox="<?php
    echo $image['url']; ?>"></a>
                                          
                              
                       
                    


                     

        <?php
  endwhile;
else:

  // no rows found

endif;
?>


           
      
                   <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"> </script>

                        <script>

                              $(document).ready(function() {

                                $(".responsive1").bind("click", function() {
                             
                               
                                    $(".lb-nav", this ).append("<div class='imgTitle'>'title'</div>");


                                  });  

                              });     
                                   
                                    
                                 
            

                      </script>  



 
 <div class="spacing"></div>
 
<?php
get_footer(); ?>
