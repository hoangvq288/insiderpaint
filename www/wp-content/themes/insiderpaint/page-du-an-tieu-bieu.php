<?php
/**
 * Theme: Insider Paint
 * 
 * Template Name: Page - Dự án tiêu biểu
 *
 * @package insiderpaint
 */

get_header(); ?>
<section class="banner banner__news">
  <h2 class="title title__line">
    Dự án tiêu biểu
  </h2>
  <div class="banner-one">
    <img src="<?php the_field('banner'); ?>" alt="">
  </div>
</section>
<div class="main-content">
  <section class="product">
    <div class="container">
      <div class="project">
        <ul class="bxslider-project">
          <?php
            $the_query = new WP_Query(array(
              'post_type' => 'du-an',
              'post-status' => 'publish',
              'orderby' => 'date',
              'order' => 'DESC'
            ));
             while ($the_query->have_posts()) {
                   $the_query->the_post();

              if($the_query->current_post == 0) { ?>
                <li class="product__list col-lg-4 col-12 active">
        <?php } else { ?>
                <li class="product__list col-lg-4 col-12">
            <?php } ?>
            
              <div class="product__listct see-more" id="#<?php echo $the_query->current_post; ?>">
                <div class="product__img">
                  <?php $post_image_url = get_the_post_thumbnail_url(get_the_ID()); ?>
                  <?php $image_url = $post_image_url ? $post_image_url :  (get_bloginfo('template_directory').'/images/img_pd_3.jpg') ?>
                  <img src="<?php echo $image_url; ?>" alt="" height="172px">  
                  
                  
                </div>
                <div class="product__des">
                  <h4>
                      <?php the_title(); ?>  
                  </h4>
                  <p style="min-height:88px" class="text-justify">
                    <?php echo wp_trim_words(get_field('mo_ta'), 30, '...'); ?>
                  </p>
                  <a href="javascript:;" class="btn btn-primary">
                    Xem Thêm
                  </a>
                </div>
              </div>
            </li>
          <?php } wp_reset_postdata();?>
          
         
          
          
        </ul>
        <?php
            $the_query = new WP_Query(array(
              'post_type' => 'du-an',
              'post-status' => 'publish',
              'orderby' => 'date',
              'order' => 'DESC'
            ));
             while ($the_query->have_posts()) {
                   $the_query->the_post();
              if($the_query->current_post == 0) { ?>
                <div class="project__detail detail_current no_<?php echo $the_query->current_post;?>">

        <?php } else { ?>
                <div class="project__detail no_<?php echo $the_query->current_post;?>" style="display: none">
            <? } ?>
            
              <h4 class="title title__line"><?php the_title(); ?></h4>
              <span><?php the_field('mo_ta') ?></span>

              <div class="project__slide">
                <ul class="bxslider no_<?php echo $the_query->current_post;?>">
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
              <div class="project__des">
                <?php the_content()?>
              </div>
            </div>
          <?php } wp_reset_postdata();?>
        
      </div>
    </div>
  </section>
  <?php get_template_part('section_client') ?>
</div>
<?php get_footer(); ?>