<?php
/**
 * Theme: Flat Bootstrap
 * 
 * Template Name: Page - Giới thiệu
 *
 * Page with no sidebar, but still contained within the page margins
 *
 * This is the template that displays full width pages with no sidebar.
 *
 * @package flat-bootstrap
 */

get_header(); ?>
 <?php //get_template_part( 'content', 'header' ); ?>


<?php get_sidebar( 'home' ); ?>

<div class="container">
<div id="main-grid" class="row">
  <img src="<?php the_field('hinh_dai_dien'); ?>" alt="" />
  <div><?php the_field('qua_trinh_hinh_thanh') ?></div>
  <div><?php the_field('su_menh') ?></div>
  <div><?php the_field('van_hoa') ?></div>
  <div><?php the_field('tinh_than') ?></div>
</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
