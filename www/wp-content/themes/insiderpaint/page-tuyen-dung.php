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
    Tuyển dụng & Nghề nghiệp
  </h2>
  <div class="banner__slider">
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
                          $the_query = new WP_Query(array(
                            'post_type' => 'tuyen-dung',
                            'post_status' => 'publish',
                            'posts_per_page' => '10',
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
                                 <?php echo wp_trim_words(get_the_content(), 50, '...'); ?>
                               </div>
                               <a href="<?php echo get_permalink(get_the_ID()); ?>" class="btn btn-link">
                                  Xem thêm
                               </a>
                            </div>
                         </article>
                       <?php } wp_reset_postdata(); ?>
                       <div class="paging">
                          <ul>
                            <li class="prev__btn">
                                <a href="">
                                   <i class="fa fa-angle-left"></i>
                                   Prev
                                </a>
                             </li>
                             <li class="active">
                                <a href="">1</a>
                             </li>
                             <li>
                                <a href="">2</a>
                             </li>
                             <li>
                                <a href="">3</a>
                             </li>
                             <li>
                                <a href="">4</a>
                             </li>
                             <li>
                                <a href="">...</a>
                             </li>
                             <li>
                                <a href="">10</a>
                             </li>
                             <li class="next__btn">
                                <a href="">
                                   Next
                                   <i class="fa fa-angle-right"></i>
                                </a>
                             </li>
                          </ul>
                      </div>
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
                       <div class="section-sidebar popular">
                          <div class="sidebar-title">
                             <p>Bài Viết Mới nhất</p>
                          </div>
                          <div class="sidebar-content">
                             <ul>
                                <?php
                                  $the_query = new WP_Query(array(
                                    'post_type' => 'tuyen-dung',
                                    'post_status' => 'publish',
                                    'posts_per_page' => '10',
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