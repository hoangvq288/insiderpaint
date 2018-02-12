<?php
/**
 * Theme: Insider Paint
 * 
 * Template Name: Page - Danh mục sản phẩm
 *
 * @package insiderpaint
 */

get_header(); ?>

<section class="banner banner__sub">
  <h2 class="title title__line">
    Danh mục sản phẩm
  </h2>
  <div class="banner-one">
    <img src="<?php the_field('banner'); ?>" alt="">
  </div>
</section>

<div class="main-content">
  <section class="product">
    <div class="container">
      <ul class="row">
        <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $the_query = new WP_Query(array(
            'post_type' => 'san-pham',
            'posts_per_page' => $ITEMS_PER_PAGE_FOR_PRODUCTS,
            'paged' => $paged,
            'orderby' => 'date',
            'order' => 'ASC'
          ));
           while ($the_query->have_posts()) {
                 $the_query->the_post();
        ?>
          <li class="product__list col-lg-4 col-12">
            <div class="product__listct">
              <?php $post_image_url = get_the_post_thumbnail_url(get_the_ID()); ?>
              <?php $image_url = $post_image_url ? $post_image_url :  (get_bloginfo('template_directory').'/images/img_pd_4.jpg') ?>
              <div class="product__img">
                <a href="<?php echo get_permalink(get_the_ID()); ?>">
                  <img src="<?php echo $image_url ?>" alt="" height="244px">  
                </a>
                
              </div>
              <div class="product__des">
                <h4>
                  <a href="<?php echo get_permalink(get_the_ID()); ?>">
                    <?php the_title(); ?>
                  </a>
                </h4>
                <p class="text-justify">
                  <?php echo wp_trim_words(get_field('mo_ta'), 45, '...'); ?>
                </p>
              </div>
            </div>
          </li>
        <?php } wp_reset_postdata();?>
        <?php
            kriesi_pagination($the_query->max_num_pages);
            wp_reset_query();
         ?>

      </ul>
      
      
    </div>
    </div>
  </section>
  <?php get_template_part( 'section_client', get_post_format() ); ?>
</div>


<?php get_footer(); ?>



    
   