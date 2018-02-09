
    
    


<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- These meta tags come first. -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?php echo get_bloginfo( 'name' ); ?></title>
      <!-- Include the CSS -->
      <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,600,700,800" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
      <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/styles.css">
      <?php wp_head();?>
   </head>
   <body>
   <main>
    <?php get_template_part( 'menu', get_post_format() ); ?>
    
    <header class="header">
      <div class="header__left">
        <a href="javascript:;" class="header__leftct">
          <i class="fa fa-navicon"></i>
        </a>
        
        <div>   
            
            
            
          
         </div>
         <form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
           <div class="search__form">
            <div class="search__formct">
              <i class="fa fa-search"></i>
              <input type="checkbox">
              <input type="text" name="s" placeholder="Search Products"/>
              <input type="hidden" name="post_type" value="san-pham" /> <!-- // hidden 'products' value -->
            </div>
          </div>
        </form>


      </div>
      <div class="header__center">
        <h1 class="logo">
          <a href="<?php echo get_home_url(); ?>">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo.png" alt="">
          </a>
        </h1>
      </div>
      <div class="header__right">
        <a href="javascript:;" class="header__rightct">
          <i class="fa fa-share-alt-square"></i>
        </a>
      </div>
    </header>