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
 * @package insiderpaint
 */

get_header(); ?>

<?php get_template_part( 'banner_homepage', get_post_format() ); ?>
<div class="main-content">

  <section class="service">
    <div class="container">
      <ul class="row">
        <li class="service__list col-lg-3 col-md-6 col-12">
          <div class="service__img">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/img_sevice_1.jpg" alt="">
          </div>
          <div class="service__title">
            Colorimetria
          </div>
        </li>
        <li class="service__list col-lg-3 col-md-6 col-12">
          <div class="service__img">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/img_sevice_2.jpg" alt="">
          </div>
          <div class="service__title">
            Marketing e<br>Merchandising
          </div>
        </li>
        <li class="service__list col-lg-3 col-md-6 col-12">
          <div class="service__img">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/img_sevice_3.jpg" alt="">
          </div>
          <div class="service__title">
            Marketing e<br>Merchandising
          </div>
        </li>
        <li class="service__list col-lg-3 col-md-6 col-12">
          <div class="service__img">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/img_sevice_4.jpg" alt="">
          </div>
          <div class="service__title">
            Webmarketing
          </div>
        </li>
      </ul>
    </div>
  </section>
  
  <section class="news">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="title">
            Tin Tức Và sự kiện
          </h3>
        </div>
        <?php 
          $the_query_feature_post = new WP_Query(array(
            'post_type' => 'tin-tuc',
            'meta_query' => array(
              'relation'    => 'AND',
              array(
                  'key'   => 'feature_post',
                  'value'     => true,
                  'compare'   => '=',
              ),
            ),
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => '1'
          ));
           while ($the_query_feature_post->have_posts()) {
                 $the_query_feature_post->the_post();
        ?>

        <div class="col-lg-6">
          <div class="news__feature">
            <div class="news__img">
              <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
            </div>
            <div class="news__title">
              <a href="#" class="news__title--link">
                <?php the_title(); ?>
              </a>
              <span class="news__date">
                <?php the_date(); ?>
              </span>
              <p class="news__des">
                <?php echo wp_trim_words(get_the_content(), 50, '...'); ?>
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
                  'meta_query' => array(
                    'relation'    => 'AND',
                    array(
                      'key'   => 'feature_post',
                      'value' => true,
                      'compare'   => '!=',
                    ),
                  ),
                  'posts_per_page' => '4',
                  'orderby' => 'date',
                  'order' => 'DESC'
                ));
                 while ($the_query->have_posts()) {
                       $the_query->the_post();
              ?>
                
                <li class="news__list">
                  <div class="news__img">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                  </div>
                  <div class="news__title">
                    <a href="#" class="news__title--link">
                      <?php the_title(); ?>
                    </a>
                    <span class="news__date">
                      <?php the_date(); ?>
                    </span>
                    <p class="news__des">
                      <?php echo wp_trim_words(get_the_content(), 10, '...'); ?>
                    </p>
                    <a href="#" class="btn btn-primary">
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
  <section class="companyinfo">
    <div class="container">
      <ul class="row">

        <li class="companyinfo__list col-lg-4">
            <h3 class="companyinfo__title">
              Danh Mục sản Phẩm
              <i class="fa fa-building"></i>
            </h3>
            <div class="companyinfo__img">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/images/img_com_1.jpg" alt="">
            </div>
            <p>
              <?php echo wp_trim_words(get_field('mo_ta_danh_muc_san_pham'), 40, '...'); ?>
            </p>
            <a href="#" class="btn btn-primary">
              Xem Thêm
            </a>
        </li>
        <li class="companyinfo__list col-lg-4">
            <h3 class="companyinfo__title">
              Dự án tiêu biểu
              <i class="fa fa-building"></i>
            </h3>
            <div class="companyinfo__img">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/images/img_com_2.jpg" alt="">
            </div>
            <p>
              <?php echo wp_trim_words(get_field('mo_ta_du_an_tieu_bieu'), 40, '...'); ?>
            </p>
            <a href="#" class="btn btn-primary">
              Xem Thêm
            </a>
        </li>
        <li class="companyinfo__list col-lg-4">
            <h3 class="companyinfo__title">
              Mẫu sơn tạo cảm hứng
              <i class="fa fa-building"></i>
            </h3>
            <div class="companyinfo__img">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/images/img_com_3.jpg" alt="">
            </div>
            <p>
              <?php echo wp_trim_words(get_field('mo_ta_mau_son_tao_cam_hung'), 40, '...'); ?>
            </p>
            <a href="#" class="btn btn-primary">
              Xem Thêm
            </a>
        </li>
      </ul>
    </div>
  </section>

  <section class="client">
    <div class="client__title">
      <h3>Khách hàng Dự Án</h3>
    </div>
    <div class="container">
      <ul class="bxslider_client">
        <?php 
        $the_query = new WP_Query(array( 'post_type' => 'doi-tac',
                 'posts_per_page' => 10 ,
                 'orderby' => 'date',
                 'order' => 'DESC'));
             while ($the_query->have_posts()) {
                 $the_query->the_post();
                 ?>
                  <li>
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                  </li>
       <?php  
                 }
        ?>  

      </ul>
    </div>
  </section>
</div>
<?php get_footer(); ?>