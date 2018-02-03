<?php
/**
 * Theme: Insider Paint
 * 
 * Template Name: Page - Giới thiệu
 *
 * @package insiderpaint
 */

get_header(); ?>
<div class="main-content">
  <div class="container">
    <div class="row">
      <h1>Trang giới thiệu</h1>    
    </div>
    <div class="row">
      <img src="<?php the_field('hinh_dai_dien'); ?>" alt="" />
      <div><?php the_field('qua_trinh_hinh_thanh') ?></div>
      <div><?php the_field('su_menh') ?></div>
      <div><?php the_field('muc_tieu') ?></div>
    </div>
  
  </div>
  
</div>


<?php get_footer(); ?>