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
            <span><?php the_field('mo_ta'); ?></span>
          </div>
          <div class="col-lg-5 col-12 productdetail__img">
            <img src="<?php echo get_field('hinh_chi_tiet_sp'); ?>" alt="">
          </div>
          <div class="col-lg-7 col-12 productdetail__detail">
            <?php the_field('chi_tiet_sp'); ?> 
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
              <p style="min-height: 66px">
                <?php the_field('text_feature_1') ?>
              </p>
            </li>
            <li>
              <span class="productdetail__icon">
                <i class="icofont icofont-water-drop"></i>
              </span>
              <h5><?php the_field('title_feature_2') ?></h5>
              <p style="min-height: 66px">
                <?php the_field('text_feature_2') ?>
              </p>
            </li>
            <li>
              <span class="productdetail__icon">
                <i class="icofont icofont-full-sunny"></i>
              </span>
              <h5><?php the_field('title_feature_3') ?></h5>
              <p style="min-height: 66px">
                <?php the_field('text_feature_3') ?>
              </p>
            </li>
          </ul>
        </div>
      </div>
      <div class="productdetail__tab--color">
        <ul>
          <li>
            <div class="content">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/color_1.jpg" alt="">
              <div class="productdetail__colordes">
                #345eff
              </div>
            </div>
          </li>
          <li>
            <div class="content">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/color_2.jpg" alt="">
              <div class="productdetail__colordes">
                #345eff
              </div>
            </div>
          </li>
          <li>
            <div class="content">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/color_3.jpg" alt="">
              <div class="productdetail__colordes">
                #345eff
              </div>
            </div>
          </li>
          <li>
            <div class="content">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/color_4.jpg" alt="">
              <div class="productdetail__colordes">
                #345eff
              </div>
            </div>
          </li>
          <li>
            <div class="content">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/color_5.jpg" alt="">
              <div class="productdetail__colordes">
                #345eff
              </div>
            </div>
          </li>
          <li>
            <div class="content">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/color_6.jpg" alt="">
              <div class="productdetail__colordes">
                #345eff
              </div>
            </div>
          </li>
          <li>
            <div class="content">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/color_7.jpg" alt="">
              <div class="productdetail__colordes">
                #345eff
              </div>
            </div>
          </li>
          <li>
            <div class="content">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/color_8.jpg" alt="">
              <div class="productdetail__colordes">
                #345eff
              </div>
            </div>
          </li>
          <li>
            <div class="content">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/color_9.jpg" alt="">
              <div class="productdetail__colordes">
                #345eff
              </div>
            </div>
          </li>
          <li>
            <div class="content">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/color_10.jpg" alt="">
              <div class="productdetail__colordes">
                #345eff
              </div>
            </div>
          </li>
          <li>
            <div class="content">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/color_11.jpg" alt="">
              <div class="productdetail__colordes">
                #345eff
              </div>
            </div>
          </li>
          <li>
            <div class="content">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/color_12.jpg" alt="">
              <div class="productdetail__colordes">
                #345eff
              </div>
            </div>
          </li>
          <li>
            <div class="content">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/color_13.jpg" alt="">
              <div class="productdetail__colordes">
                #345eff
              </div>
            </div>
          </li>
          <li>
            <div class="content">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/color_14.jpg" alt="">
              <div class="productdetail__colordes">
                #345eff
              </div>
            </div>
          </li>
          <li>
            <div class="content">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/color_15.jpg" alt="">
              <div class="productdetail__colordes">
                #345eff
              </div>
            </div>
          </li>
          <li>
            <div class="content">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/color_16.jpg" alt="">
              <div class="productdetail__colordes">
                #345eff
              </div>
            </div>
          </li>
          <li>
            <div class="content">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/color_17.jpg" alt="">
              <div class="productdetail__colordes">
                #345eff
              </div>
            </div>
          </li>
          <li>
            <div class="content">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/color_18.jpg" alt="">
              <div class="productdetail__colordes">
                #345eff
              </div>
            </div>
          </li>
          <li>
            <div class="content">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/color_19.jpg" alt="">
              <div class="productdetail__colordes">
                #345eff
              </div>
            </div>
          </li>
          <li>
            <div class="content">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/color_20.jpg" alt="">
              <div class="productdetail__colordes">
                #345eff
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <?php get_template_part('section_client'); ?>
</div>



<?php get_footer(); ?>