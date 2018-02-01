<?php
/**
 * Theme: Flat Bootstrap
 * 
 * Template Name: Page - Liên hệ
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
  <div class="row">
    <p><?php the_field('address', 'option'); ?></p>

  </div>
  <div class="row">
    <p><?php the_field('dien_thoai', 'option'); ?></p>
    
  </div>
  <?php echo do_shortcode( '[contact-form-7 id="53" title="Liên hệ"]' ); ?>
  
</div>

<?php get_footer(); ?>
