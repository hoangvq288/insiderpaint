<?php
/**
 * Theme: Flat Bootstrap
 * 
 * Template Name: Page - Tuyển dụng
 *
 * Full width page template without sidebar or page header.
 *
 * This is the template for full width pages with no sidebar, no container, and
 * no page header. This page truly stretches the full width of the browser window. 
 * You should set a <div class="container"> before your content to keep it in line 
 * with the rest of the site content.
 *
 * @package flat-bootstrap
 */

get_header(); ?>

<div class="container">
  <h3>Thông tin tuyển dụng</h3>
  <?php 
    $the_query = new WP_Query(array( 'post_type' => 'tuyen-dung',
             'posts_per_page' => 5 ,
             'orderby' => 'date',
             'order' => 'DESC'));
         while ($the_query->have_posts()) {
             $the_query->the_post();
             ?>
             <div>Thong tin hop tac: </div>

              
              <a href="<?php echo esc_url(get_permalink()) ?>"><?php the_title(); ?></a>

   <?php  
             }
    ?>        
  
  
</div>

<?php get_footer(); ?>


  