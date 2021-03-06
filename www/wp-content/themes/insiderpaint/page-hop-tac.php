<?php
/**
 * The template for displaying archive pages
 *
 * Template Name: Page - Tuyển Dụng & Nghề nghiệp
 *
 */

get_header(); ?>
<section class="banner banner__news">
  <h2 class="title title__line">
    Hợp tác
  </h2>
  <div class="banner-one">
    <img src="<?php the_field('banner'); ?>" alt="">
  </div>
</section>
<div class="main-content">
  <div class="blog-content">
           <div class="container">
              <div class="blog-ct">
                <div class="featured-article"></div>
                 <div class="sub-article row">
                    <div class="col-lg-9 col-left">
                      <?php
                          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                          $the_query = new WP_Query(array(
                            'post_type' => 'hop-tac',
                            'post_status' => 'publish',
                            'posts_per_page' => $ITEMS_PER_PAGE_FOR_NORMAL_POST,
                            'paged' => $paged,
                            'orderby' => array( 
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
                              <a href="<?php echo get_permalink(get_the_ID()); ?>">
                                <img src="<?php echo $image_url ?>" alt=""> 
                              </a>
                            </div>
                            <div class="article-content">
                               <h3>
                                  <a href="<?php echo get_permalink(get_the_ID()); ?>">
                                    <? the_title() ; ?>  
                                  </a>
                                  
                                    
                                </h3>
                               <ul>
                                  <li>
                                     <span><?php echo get_the_date(); ?></span>
                                  </li>
                               </ul>
                               <div class="article-des">
                                 <?php echo wp_trim_words(get_the_content(), 110, '...'); ?>
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
                       <div class="section-sidebar popular">
                          <div class="sidebar-title">
                             <p>Bài Viết Mới nhất</p>
                          </div>
                          <div class="sidebar-content">
                             <ul>
                                <?php
                                  $the_query = new WP_Query(array(
                                    'post_type' => 'hop-tac',
                                    'post_status' => 'publish',
                                    'posts_per_page' => SIDEBAR_ITEMS_PER_QUERY,
                                    'orderby' => array( 
                                      'date' => 'DESC'
                                    ),
                                    
                                  ));
                                   while ($the_query->have_posts()) {
                                         $the_query->the_post();
                                ?>
                                  <li>
                                     <a href="<?php echo get_permalink(get_the_ID()); ?>"><?php the_title(); ?></a>
                                     <span><?php echo get_the_date() ?></span>
                                  </li>
                                <?php } wp_reset_postdata() ?>
                              </ul>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
  </div>
<?php get_template_part('section_client'); ?>
</div>
<?php get_footer(); ?>