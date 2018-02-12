<?php
/**
 * Theme: Insider Paint
 * 
 * Template Name: Page - Chi tiết sản phẩm
 *
 * @package insiderpaint
 */
get_header(); ?>
<section class="banner banner__sub">
<div class="banner__slider">
  <ul class="bxslider_product_detail">
   
    <?php 
      $images = get_field('album');
      if( $images ): ?>
          <?php foreach( $images as $id=>$image ): ?>
             <li>
                <img src="<?php echo $image['url']?>" alt="">
              </li>
          <?php endforeach; ?>
    <?php endif; ?>

  </ul>
</div>
</section>

<div class="main-content">
  <section class="productdetail">
    <div class="productdetail__ct">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h4 class="title title__line"><?php the_title(); ?></h4>
            <span class="text-justify"><?php the_field('mo_ta'); ?></span>
          </div>
          <div class="col-lg-5 col-12 productdetail__img">
            <img src="<?php echo get_field('hinh_chi_tiet_sp'); ?>" alt="">
          </div>
          <div class="col-lg-7 col-12 productdetail__detail text">
            <p class="text-justify">
              <?php the_field('chi_tiet_sp'); ?> 
            </p>
            <a href="tel:<?php echo get_field('dien_thoai', 'option'); ?>" class="btn btn-primary">
              Liên hệ chúng tôi đẻ biết thêm chi tiết
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="productdetail__tab">
      <ul class="productdetail__tab--content">
        <li class="active">
          <a href="javascript:;">Color Range</a>
        </li>
        <li>
          <a href="javascript:;">Feature</a>
        </li>
      </ul>
      <div class="productdetail__tab--feature" style="display: none">
        <div class="container">
          <ul>
            <li>
              <span class="productdetail__icon">
                <i class="icofont icofont-rulers-alt"></i>
              </span>
              <h5><?php the_field('title_feature_1') ?></h5>
              <p style="min-height: 66px" class="text-justify">
                <?php the_field('text_feature_1') ?>
              </p>
            </li>
            <li>
              <span class="productdetail__icon">
                <i class="icofont icofont-water-drop"></i>
              </span>
              <h5><?php the_field('title_feature_2') ?></h5>
              <p style="min-height: 66px" class="text-justify">
                <?php the_field('text_feature_2') ?>
              </p>
            </li>
            <li>
              <span class="productdetail__icon">
                <i class="icofont icofont-full-sunny"></i>
              </span>
              <h5><?php the_field('title_feature_3') ?></h5>
              <p style="min-height: 66px" class="text-justify">
                <?php the_field('text_feature_3') ?>
              </p>
            </li>
          </ul>
        </div>
      </div>
      <div class="productdetail__tab--color">
        <?php if(get_field('color_range')): ?>
          <ul>
          <?php while(has_sub_field('color_range')): ?>
            <li>
              <div class="content">
                <img src="<?php the_sub_field('image') ?>" alt="">
                <div class="productdetail__colordes">
                  <?php the_sub_field('code') ?>
                </div>
              </div>
            </li>

          <?php endwhile; ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <?php get_template_part('section_client'); ?>
</div>



<?php get_footer(); ?>