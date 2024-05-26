<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta name="keywords" content="photography, photos, photo, camera, Paolo, Bergomi, pictures, fotografia">
</head>
   
    <title><?php bloginfo('name'); ?></title>

    <!-- Bootstrap -->
     
    <link href =  "<?php bloginfo ('stylesheet_url'); ?>" rel = "stylesheet">
    <?php wp_head(); ?>
     <link href="http://www.paolobergomi.it//wp-content/themes/phobs/css/lightbox.css" rel="stylesheet" />
     <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
     
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
 

 
     <nav class="navbar navbar-default navbar-fixed menuAbove" role="navigation">

  <!—Logo e pulsante per barra ridimensionata -->
        <div class="navbar-header img-responsive">
           <a class="navbar-brand" href="http://www.paolobergomi.it/"> 
                <img src = "http://www.paolobergomi.it/wp-content/themes/phobs/brand.jpg" alt="logo"  />
                 </a>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Espandi barra di navigazione</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
             
        </div>
  <!—Elementi della barra -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          
          <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'menu_class'        => 'nav navbar-nav navbar-right',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
            ?>

          
        </div><!-- /.navbar-collapse -->
      </nav>
    <!--<a href="#"><div id="equipment" class="flash"></div></a>-->
      
       
        <div class="container">