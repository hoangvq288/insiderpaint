<?php
/**
 * The template for displaying archive pages
 *
 * Template Name: Page - Tin Tức và Sự Kiện
 *
 */

get_header(); ?>

<section class="banner banner__news">
  <h2 class="title title__line">
    Tin Tức Sự Kiện
  </h2>
  <div class="banner-one">
    <img src="<?php the_field('banner'); ?>" alt="">
  </div>
</section>
<div class="main-content">
  <div class="blog-content">
           <div class="container">
              <div class="blog-ct">
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
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'posts_per_page' => '1'
                  ));
                   while ($the_query_feature_post->have_posts()) {
                         $the_query_feature_post->the_post();
                ?>
                 <div class="featured-article">
                    <div class="row ">
                       <div class="col-lg-12 col-12 title-main">
                          <h2 class="title title-center">
                             <?php the_title(); ?>
                          </h2>
                          <p>
                             <?php the_date(); ?>
                          </p>
                       </div>
                       <div class="col-lg-12 col-12 featured-detail">
                          <?php $post_image_url = get_the_post_thumbnail_url(get_the_ID()); ?>
                          <?php $image_url = $post_image_url ? $post_image_url :  (get_bloginfo('template_directory').'/images/img_banner_project_2.jpg') ?>
                          <div class="feature-img" style="background: url('<?php echo $image_url ?>') no-repeat;">
                          </div>
                          <div class="featured-content">
                             <?php the_field('mo_ta'); ?>
                          </div>
                          <div class="btn-ct">
                             <a href="<?php echo get_permalink(get_the_ID()); ?>" class="btn btn-link">
                                Xem thêm
                             </a>
                          </div>
                       </div>
                    </div>
                 </div>
                 <?php } wp_reset_postdata(); ?>
                 <div class="sub-article row">
                    <div class="col-lg-9 col-left">
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
                            'posts_per_page' => '10',
                            'orderby' => array( 
                              'query_one' => 'ASC',
                              'date' => 'DESC'
                            ),
                            
                          ));
                           while ($the_query->have_posts()) {
                                 $the_query->the_post();
                        ?>
                         <article>
                            <div class="article-img">
                              <?php $post_image_url = get_the_post_thumbnail_url(get_the_ID()); ?>
                              <?php $image_url = $post_image_url ? $post_image_url :  (get_bloginfo('template_directory').'/images/img_blog_1.jpg') ?>
                               <img src="<?php echo $post_image_url ?>" alt="">
                            </div>
                            <div class="article-content">
                               <h3><?php the_title(); ?></h3>
                               <ul>
                                  <li>
                                     <span><?php get_the_date(); ?></span>
                                  </li>
                               </ul>
                               <div class="article-des">
                                 <?php the_field('mo_ta'); ?>
                               </div>
                               <a href="<?php echo get_permalink(get_the_ID()); ?>" class="btn btn-link">
                                  Xem thêm
                               </a>
                            </div>
                         </article>
                        <?php } wp_reset_postdata(); ?>
                    </div>
                    <div class="col-lg-3 col-right">
                       <div class="section-sidebar search">
                          <div class="sidebar-title">
                             <input type="text" class="form-control" placeholder="SEARCH">
                             <a href="#">
                                <i class="fa fa-search"></i>
                             </a>
                          </div>
                       </div>
                       <?php get_template_part('sidebar_social'); ?>
                       <?php get_template_part('sidebar_bai_viet_tieu_bieu'); ?>
                    </div>
                 </div>
              </div>
           </div>
        </div>
  <?php get_template_part('section_client'); ?>
</div>


<?php get_footer(); ?>