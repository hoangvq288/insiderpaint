<?php
/**
 * Theme: Insider Paint
 * 
 * Template Name: Page - Tin Tức
 *
 * @package insiderpaint
 */

get_header(); ?>

<section class="banner banner__news">
  <div class="banner__slider">
    <?php $post_image_url = get_the_post_thumbnail_url(get_the_ID()); ?>
    <?php $image_url = $post_image_url ? $post_image_url :  (get_bloginfo('template_directory').'/images/img_banner_project_2.jpg') ?>
    <img src="<?php echo $post_image_url ?>" alt="">
  </div>
</section>
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
                       <?php get_template_part('sidebar_bai_viet_tieu_bieu'); ?>
                       
                       
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