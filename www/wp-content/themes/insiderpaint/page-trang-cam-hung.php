<?php
/**
 * Theme: Insider Paint
 * 
 * Template Name: Page - Get Inspiration
 *
 * @package insiderpaint
 */

get_header(); ?>
<section class="banner banner__sub">
  <h2 class="title title__line">
    Hình ảnh tạo cảm hứng
  </h2>
  <div class="banner__slider">
    <ul class="bxslider">
      <li>
        <img src="<?php echo get_bloginfo('template_directory') ?>/images/img_banner_get_1.jpg" alt="">
      </li>
    </ul>
  </div>
</section>
<div class="main-content">
  <div class="tab-inspiration">
    <ul>
      <li class="active">
        <a href="#">Căn hộ</a>
      </li>
      <li>
        <a href="#">Hệ thống ăn uống</a>
      </li>
      <li>
        <a href="#">Văn phòng</a>
      </li>
      <li>
        <a href="#">Khách sạn & Resort</a>
      </li>
      <li>
        <a href="#">Khác</a>
      </li>
    </ul>
  </div>
  <section class="product">
    <div class="container">
      <ul class="row">
        <li class="product__list col-lg-4 col-12" data-toggle="modal" data-target="#isp-detail">
          <div class="product__listct">
            <div class="product__img">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/img_pd_1.jpg" alt="">
            </div>
          </div>
        </li>
        <li class="product__list col-lg-4 col-12" data-toggle="modal" data-target="#isp-detail">
          <div class="product__listct">
            <div class="product__img">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/img_pd_2.jpg" alt="">
            </div>
          </div>
        </li>
        <li class="product__list col-lg-4 col-12" data-toggle="modal" data-target="#isp-detail">
          <div class="product__listct">
            <div class="product__img">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/img_pd_3.jpg" alt="">
            </div>
          </div>
        </li>
        <li class="product__list col-lg-4 col-12" data-toggle="modal" data-target="#isp-detail">
          <div class="product__listct">
            <div class="product__img">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/img_pd_4.jpg" alt="">
            </div>
          </div>
        </li>
        <li class="product__list col-lg-4 col-12" data-toggle="modal" data-target="#isp-detail">
          <div class="product__listct">
            <div class="product__img">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/img_pd_5.jpg" alt="">
            </div>
          </div>
        </li>
        <li class="product__list col-lg-4 col-12" data-toggle="modal" data-target="#isp-detail">
          <div class="product__listct">
            <div class="product__img">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/img_pd_6.jpg" alt="">
            </div>
          </div>
        </li>
        <li class="product__list col-lg-4 col-12" data-toggle="modal" data-target="#isp-detail">
          <div class="product__listct">
            <div class="product__img">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/img_pd_1.jpg" alt="">
            </div>
          </div>
        </li>
        <li class="product__list col-lg-4 col-12" data-toggle="modal" data-target="#isp-detail">
          <div class="product__listct">
            <div class="product__img">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/img_pd_2.jpg" alt="">
            </div>
          </div>
        </li>
        <li class="product__list col-lg-4 col-12" data-toggle="modal" data-target="#isp-detail">
          <div class="product__listct">
            <div class="product__img">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/img_pd_3.jpg" alt="">
            </div>
          </div>
        </li>
        <li class="product__list col-lg-4 col-12" data-toggle="modal" data-target="#isp-detail">
          <div class="product__listct">
            <div class="product__img">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/img_pd_4.jpg" alt="">
            </div>
          </div>
        </li>
        <li class="product__list col-lg-4 col-12" data-toggle="modal" data-target="#isp-detail">
          <div class="product__listct">
            <div class="product__img">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/img_pd_5.jpg" alt="">
            </div>
          </div>
        </li>
        <li class="product__list col-lg-4 col-12" data-toggle="modal" data-target="#isp-detail">
          <div class="product__listct">
            <div class="product__img">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/img_pd_6.jpg" alt="">
            </div>
          </div>
        </li>
        <li class="product__list col-lg-4 col-12" data-toggle="modal" data-target="#isp-detail">
          <div class="product__listct">
            <div class="product__img">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/img_pd_3.jpg" alt="">
            </div>
          </div>
        </li>
        <li class="product__list col-lg-4 col-12" data-toggle="modal" data-target="#isp-detail">
          <div class="product__listct">
            <div class="product__img">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/img_pd_4.jpg" alt="">
            </div>
          </div>
        </li>
        <li class="product__list col-lg-4 col-12" data-toggle="modal" data-target="#isp-detail">
          <div class="product__listct">
            <div class="product__img">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/img_pd_5.jpg" alt="">
            </div>
          </div>
        </li>
      </ul>
    </div>
    </div>
  </section>
  <?php get_template_part('section_client'); ?>
</div>

   <!-- ***********************modal -->
   <div class="modal fade bd-img-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="isp-detail">
    <div class="modal-dialog modal-lg ispdetail">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <i class="icofont icofont-ui-close"></i>
          </button>
        </div>
        <div class="modal-body">
          <div class="ispdetail__img">
            <ul class="bxslider_isp_detail">
              <li><img src="<?php echo get_bloginfo('template_directory') ?>/images/img_banner_2.jpg" alt=""></li>
              <li><img src="<?php echo get_bloginfo('template_directory') ?>/images/img_detail_1.jpg" alt=""></li>
              <li><img src="<?php echo get_bloginfo('template_directory') ?>/images/img_product_detail_1.jpg" alt=""></li>
              <li><img src="<?php echo get_bloginfo('template_directory') ?>/images/img_banner_2.jpg" alt=""></li>
            </ul>
          </div>
          <div class="ispdetail__des">
            <h4>FINITURE DECORATIVE</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris rutrum mi sit amet lectus luctus, tempor dictum tellus auctor. Fusce elementum est et ligula venenatis, consequat vehicula orci lobortis. Integer ullamcorper nisi at erat molestie lobortis.
            </p>
          </div>
        </div>
        <div class="modal-footer">
         <!--  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button> -->
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>