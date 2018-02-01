<?php
/**
 * Theme: Flat Bootstrap
 * 
 * Template Name: Page - Trang chủ
 *
 * Full-width page with no sidebar or container.
 *
 * This is the template for full width pages with no sidebar and no container. This 
 * page truly stretches the full width of the browser window. You should set a 
 * <div class="container"> before your content to keep it in line with the rest of 
 * the site content.
 *
 * @package flat-bootstrap
 */

get_header(); ?>

<?php get_template_part( 'content', 'header' ); ?>

  <div id="primary" class="content-area-wide">
    <main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', 'page-fullwidth' ); ?>
        
        <?php
        // If comments are open or we have at least one comment, load up the comment template
        if ( comments_open() || '0' != get_comments_number() ) :
        ?>
        <div class="comments-wrap">
        <div class="container">
        <?php comments_template(); ?>
        </div><!-- .container -->
        </div><!-- .comments-wrap" -->
        <?php endif; ?>

      <?php endwhile; // end of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->
  <div class="container">
    <div class="row">
      <p>Đối tác của chúng tôi:</p>
      <?php 
        $the_query = new WP_Query(array( 'post_type' => 'doi-tac',
                 'posts_per_page' => 5 ,
                 'orderby' => 'date',
                 'order' => 'DESC'));
             while ($the_query->have_posts()) {
                 $the_query->the_post();

                 ?>

                  <span><?php echo get_the_post_thumbnail() ?></span>

       <?php  
                 }
        ?>    
    </div>
    

  </div>
  <?php //get_sidebar(); ?>

<?php get_footer(); ?>
