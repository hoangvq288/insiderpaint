<?php
/**
 * Theme: Insider Paint
 * 
 * Template Name: Page - Khác
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
      <?php 
        $images = get_field('slider', $post->post_parent);
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
  <div class="tab-inspiration">
    <ul>
      <li>
        <a href="<?php echo get_permalink(get_page_by_path('mau-son-tao-cam-hung/can-ho')->ID); ?>" class="nav__link">
        Căn hộ</a>
      </li>
      <li>
        <a href="<?php echo get_permalink(get_page_by_path('mau-son-tao-cam-hung/he-thong-an-uong')->ID); ?>" class="nav__link">
        Hệ thống ăn uống
      </a>
      </li>
      <li>
        <a href="<?php echo get_permalink(get_page_by_path('mau-son-tao-cam-hung/van-phong')->ID); ?>" class="nav__link">
        Văn phòng
        </a>
      </li>
      <li>
        <a href="<?php echo get_permalink(get_page_by_path('mau-son-tao-cam-hung/khach-san-resort')->ID); ?>" class="nav__link">
        Khách sạn & Resort
        </a>
      </li>
      <li class="active">
        <a href="<?php echo get_permalink(get_page_by_path('mau-son-tao-cam-hung/khac')->ID); ?>" class="nav__link">
        Khác
        </a>
      </li>
    </ul>
  </div>
  <section class="product">
    <div class="container">
      <ul class="row">
        <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $the_query = new WP_Query(array(
            'post_type' => 'mau-son-cam-hung',
            'post_status' => 'publish',
            'posts_per_page' => '12',
            'paged' => $paged,
            'meta_query' => array(
              'relation'    => 'AND',
              array(
                'key'   => 'loai',
                'value' => 'khac',
                'compare'   => '=',
              ),
            ),
            'orderby' => array( 
              'date' => 'ASC'
            ),
            
          ));
           while ($the_query->have_posts()) {
                 $the_query->the_post();
        ?>
          <li class="product__list col-lg-4 col-12" data-toggle="modal" data-target="#isp-detail-<?php echo get_the_ID(); ?>">
            <div class="product__listct">
              <div class="product__img">
                <?php $post_image_url = get_the_post_thumbnail_url(get_the_ID()); ?>
                 <?php $image_url = $post_image_url ? $post_image_url :  (get_bloginfo('template_directory').'/images/img_pd_1.jpg') ?>
                <img src="<?php echo $image_url ?>" alt="">
              </div>
            </div>
          </li>
          
           <div class="modal fade bd-img-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="isp-detail-<?php echo get_the_ID(); ?>">
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
                      <?php 
                        $images = get_field('slider');
                        if( $images ): ?>
                            <?php foreach( $images as $id=>$image ): ?>
                               <li>
                                  <img src="<?php echo $image['url']?>" alt="">
                                </li>
                            <?php endforeach; ?>
                      <?php endif; ?>
                    </ul>
                  </div>
                  <div class="ispdetail__des">
                    <h4><?php the_title(); ?></h4>
                    <?php echo wp_trim_words(the_field('mo_ta'), 120, '...'); ?>
                  </div>
                </div>
                <div class="modal-footer">
                 <!--  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button> -->
                </div>
              </div>
            </div>
          </div>
        <?php } wp_reset_postdata(); ?>
        <?php
          kriesi_pagination($the_query->max_num_pages);
          wp_reset_query();
          ?>
      </ul>
    </div>
    </div>
  </section>
  <?php get_template_part('section_client'); ?>
</div>

   

<?php get_footer(); ?>