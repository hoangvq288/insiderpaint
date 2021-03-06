<?php
/**
 * Theme: Insider Paint
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
 * @package insiderpaint
 */

get_header(); ?>

<?php get_template_part( 'banner_homepage', get_post_format() ); ?>
<div class="main-content">
  <section class="service">
        <div class="container">
          <ul class="row">
            <li class="col-lg-3 col-md-6 col-12 service-list">
              <span><i class="icofont icofont-dart"></i></span>
              <h5>Contrary to popular belief</h5>
              
            </li>
            <li class="col-lg-3 col-md-6 col-12 service-list">
              <span><i class="icofont icofont-triangle"></i></span>
              <h5>Contrary to popular belief</h5>
              
            </li>
            <li class="col-lg-3 col-md-6 col-12 service-list">
              <span><i class="icofont icofont-shield-alt"></i></span>
              <h5>Contrary to popular belief</h5>
              
            </li>
            <li class="col-lg-3 col-md-6 col-12 service-list">
              <span><i class="icofont icofont-deal"></i></span>
              <h5>Contrary to popular belief</h5>
              
            </li>
          </ul>
        </div>
      </section>
  
  
  <section class="companyinfo">
    <div class="container">
      <ul class="row">
        <?php 
          $page_danh_muc_san_pham = get_permalink(get_page_by_path('danh-muc-san-pham')->ID);
          $page_du_an_tieu_bieu = get_permalink(get_page_by_path('du-an-tieu-bieu')->ID);
          $page_mau_son_tao_cam_hung = get_permalink(get_page_by_path('mau-son-tao-cam-hung')->ID);
          $page_tin_tuc_su_kien = get_permalink(get_page_by_path('tin-tuc-su-kien')->ID);
        ?>
        <li class="companyinfo__list col-lg-4">

            <h3 class="companyinfo__title">
              <a href="<?php echo $page_danh_muc_san_pham; ?>">
                Danh Mục sản Phẩm
              </a>
              <i class="icofont icofont-paint-brush"></i>
            </h3>
            <div class="companyinfo__img">
              <a href="<?php echo $page_danh_muc_san_pham; ?>">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/images/img_com_1.jpg" alt="">  
              </a>
              
            </div>
            <p>
              <?php echo wp_trim_words(get_field('mo_ta_danh_muc_san_pham'), 50, '...'); ?>
            </p>
            <a href="<?php echo $page_danh_muc_san_pham ?>" class="btn btn-primary">
              Xem Thêm
            </a>
        </li>
        <li class="companyinfo__list col-lg-4">
            <h3 class="companyinfo__title">
              <a href="<?php echo $page_du_an_tieu_bieu; ?>">
                Dự án tiêu biểu
              </a>
              <i class="icofont icofont-building-alt"></i>
            </h3>
            <div class="companyinfo__img">
              <a href="<?php echo $page_du_an_tieu_bieu; ?>">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/images/img_com_2.jpg" alt="">
              </a>
            </div>
            <p>
              <?php echo wp_trim_words(get_field('mo_ta_du_an_tieu_bieu'), 50, '...'); ?>
            </p>
            <a href="<?php echo $page_du_an_tieu_bieu; ?>" class="btn btn-primary">
              Xem Thêm
            </a>
        </li>
        <li class="companyinfo__list col-lg-4">
            <h3 class="companyinfo__title">
              <a href="<?php echo $page_mau_son_tao_cam_hung; ?>">
                Mẫu sơn tạo cảm hứng
              </a>
              <i class="icofont icofont-heart-alt"></i>
            </h3>
            <div class="companyinfo__img">
              <a href="<?php echo $page_mau_son_tao_cam_hung; ?>">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/images/img_com_3.jpg" alt="">
              </a>
            </div>
            <p>
              <?php echo wp_trim_words(get_field('mo_ta_mau_son_tao_cam_hung'), 50, '...'); ?>
            </p>
            <a href="<?php echo $page_mau_son_tao_cam_hung; ?>" class="btn btn-primary">
              Xem Thêm
            </a>
        </li>
      </ul>
    </div>
  </section>

  <section class="news">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="title">
            <a href="<?php echo $page_tin_tuc_su_kien;?>">
              Tin Tức Và sự kiện  
            </a>
            
          </h3>
        </div>
        <?php 
          $the_query_feature_post = new WP_Query(array(
            'post_type' => 'tin-tuc',
            'post_status' => 'publish',
            'meta_query' => array(
              'relation'    => 'AND',
              array(
                  'key'   => 'feature_post',
                  'value'     => true,
                  'compare'   => '=',
              ),
            ),
            'orderby' => 'modified',
            'order' => 'DESC',
            'posts_per_page' => '1'
          ));
           while ($the_query_feature_post->have_posts()) {
                 $the_query_feature_post->the_post();
        ?>

        <div class="col-lg-6">
          <div class="news__feature">
            <div class="news__img">
              <?php $feature_post_image_url = get_the_post_thumbnail_url(get_the_ID()); ?>
              <?php $feature_image_url = $feature_post_image_url ? $feature_post_image_url :  (get_bloginfo('template_directory').'/images/img_news_1.jpg') ?>
              <a href="<?php echo get_permalink(get_the_ID()); ?>">
                <img src="<?php echo $feature_image_url ?>" alt="">  
              </a>
            </div>
            <div class="news__title">
              <a href="<?php echo get_permalink(get_the_ID()); ?>" class="news__title--link">
                <?php the_title(); ?>
              </a>
              <span class="news__date">
                <?php echo get_the_date(); ?>
              </span>
              <p class="news__des">
                <?php echo wp_trim_words(get_field('mo_ta'), 45, '...'); ?>
              </p>
            </div>
          </div>
        </div>
        <?php } wp_reset_postdata(); ?>

        <div class="col-lg-6 news__sub">
            <ul class="bxslider-news">
              <?php
                $the_query = new WP_Query(array(
                  'post_type' => 'tin-tuc',
                  'post_status' => 'publish',
                  'meta_query' => array(
                    'relation'    => 'AND',
                    array(
                      'key'   => 'feature_post',
                      'value' => true,
                      'compare'   => '!=',
                    ),
                    'query_one' => array(
                        'key' => 'order_number',
                    ),
                  ),
                  'posts_per_page' => '4',
                  'orderby' => array( 
                    'query_one' => 'ASC',
                    'modified' => 'DESC'
                  ),
                  
                ));
                 while ($the_query->have_posts()) {
                       $the_query->the_post();
              ?>
                
                <li class="news__list">
                  <div class="news__img">
                    <?php $post_image_url = get_the_post_thumbnail_url(get_the_ID()); ?>
                    <?php $image_url = $post_image_url ? $post_image_url :  (get_bloginfo('template_directory').'/images/img_news_2.jpg') ?>
                    <a href="<?php echo get_permalink(get_the_ID()); ?>">
                      <img src="<?php echo $image_url ?>" alt="" height="159px">  
                    </a>
                    
                  </div>
                  <div class="news__title">
                    <a href="<?php echo get_permalink(get_the_ID()); ?>" class="news__title--link">
                      <?php the_title(); ?>
                    </a>
                    <span class="news__date">
                      <?php echo get_the_date(); ?>
                    </span>
                    <p class="news__des">
                      <?php echo wp_trim_words(get_field('mo_ta'), 20, '...'); ?>
                    </p>
                    <a href="<?php echo get_permalink(get_the_ID()); ?>" class="btn btn-primary">
                      Xem Thêm
                    </a>
                  </div>
                </li>
              <?php } wp_reset_postdata(); ?>
              
            </ul>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part( 'section_client', get_post_format() ); ?>
</div>
<?php get_footer(); ?>