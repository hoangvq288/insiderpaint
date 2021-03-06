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
                    'orderby' => 'modified',
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
                             <a href="<?php echo get_permalink(get_the_ID()); ?>">
                              <?php the_title(); ?>  
                             </a>
                          </h2>
                          <p>
                             <?php echo get_the_date(); ?>
                          </p>
                       </div>
                       <div class="col-lg-12 col-12 featured-detail">
                          <?php $post_image_url = get_the_post_thumbnail_url(get_the_ID()); ?>
                          <?php $image_url = $post_image_url ? $post_image_url :  (get_bloginfo('template_directory').'/images/img_banner_project_2.jpg') ?>
                          <a href="<?php echo get_permalink(get_the_ID()); ?>">
                            <div class="feature-img" style="background: url('<?php echo $image_url ?>') no-repeat;">
                          </div>  
                          </a>
                          
                          <div class="featured-content text-justify">
                            <?php echo wp_trim_words(get_field('mo_ta'), 120, '...'); ?>
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
                          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
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
                            'posts_per_page' => $ITEMS_PER_PAGE_FOR_NEWS,
                            'paged' => $paged,
                            'orderby' => array( 
                              'query_one' => 'ASC',
                              'modified' => 'DESC'
                            ),
                            
                          ));
                           while ($the_query->have_posts()) {
                                 $the_query->the_post();
                        ?>
                         <article>
                            <div class="article-img">
                              <?php $post_image_url = get_the_post_thumbnail_url(get_the_ID()); ?>
                              <?php $image_url = $post_image_url ? $post_image_url :  (get_bloginfo('template_directory').'/images/img_blog_1.jpg') ?>
                              <a href="<?php echo get_permalink(get_the_ID()); ?>">
                                <img src="<?php echo $image_url ?>" alt=""> 
                              </a>
                               
                            </div>
                            <div class="article-content">
                               <h3>
                                <a href="<?php echo get_permalink(get_the_ID()); ?>">
                                  <?php the_title(); ?>  
                                </a>
                                
                              </h3>
                               <ul>
                                  <li>
                                     <span><?php echo get_the_date(); ?></span>
                                  </li>
                               </ul>
                               <div class="article-des">
                                <?php echo wp_trim_words(get_field('mo_ta'), 120, '...'); ?>
                               </div>
                               <a href="<?php echo get_permalink(get_the_ID()); ?>" class="btn btn-link">
                                  Xem thêm
                               </a>
                            </div>
                         </article>
                        <?php } wp_reset_postdata(); ?>
                        <?php
                          kriesi_pagination($the_query->max_num_pages);
                          wp_reset_query();
                        ?>

                    </div>
                    <div class="col-lg-3 col-right">
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