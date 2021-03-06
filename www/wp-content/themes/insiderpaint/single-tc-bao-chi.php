<?php
/**
 * Theme: Insider Paint
 * 
 * Template Name: Page - Thông cáo báo chí
 *
 * @package insiderpaint
 */

get_header(); ?>
<?php
    // query for the about page
    $your_query = new WP_Query( 'pagename=thong-cao-bao-chi' );
    // "loop" through query (even though it's just one page) 
    while ( $your_query->have_posts() ) : $your_query->the_post();
    ?>
    <section class="banner banner__news">
      <h2 class="title title__line">
        Thông cáo báo chí
      </h2>
      <div class="banner-one">
        <img src="<?php the_field('banner'); ?>" alt="">
      </div>
    </section>
    <?php
    endwhile;
    // reset post data (important!)
    wp_reset_postdata();
?>
<div class="main-content">
<div class="blog-content">
   <div class="container">
      <div class="blog-ct">
         <div class="featured-article featured-article__sub">
            <div class="row ">
               <div class="col-lg-12 col-12 title-main">
                  <h2 class="title">
                     <?php the_title(); ?>
                  </h2>
                  <p>
                    <?php echo get_the_date(); ?>
                  </p>
               </div>
            </div>
         </div>
        <div class="blog-content">
         <div class="blog-ct">
           <div class="sub-article row">
              <div class="col-lg-9 article-detail">
                 <div class="article-ct">
                   <?php the_content(); ?>
                 </div>
                 
                 <button class="btn btn-primary" onclick='javascript:history.back()'>Trở Về</button>
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
    </div>
</div>
<?php get_template_part('section_client'); ?>
</div>
<?php get_footer(); ?>
