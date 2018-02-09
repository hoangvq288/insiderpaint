<?php
/**
 * The template for displaying archive pages
 *
 * Template Name: Page - Thông cáo báo chí
 *
 */

get_header(); ?>
<section class="banner-one banner__news">
  <h2 class="title title__line">
    Thông cáo báo chí
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
                            'post_type' => 'tc-bao-chi',
                            'post_status' => 'publish',
                            'posts_per_page' => $ITEMS_PER_PAGE_FOR_NORMAL_POST,
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
                            <div class="article-content">
                               <h3><? the_title() ; ?></h3>
                               <ul>
                                  <li>
                                     <span><?php echo get_the_date(); ?></span>
                                  </li>
                               </ul>
                               <div class="article-des">
                                 <?php echo wp_trim_words(get_the_content(), 120, '...'); ?>
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
                                    'post_type' => 'tc-bao-chi',
                                    'post_status' => 'publish',
                                    'posts_per_page' => $SIDEBAR_ITEMS_PER_QUERY,
                                    'orderby' => array( 
                                      'query_one' => 'ASC',
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