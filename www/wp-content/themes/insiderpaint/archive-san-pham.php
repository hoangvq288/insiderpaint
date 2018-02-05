<?php
/**
 * Theme: Insider Paint
 * 
 * Template Name: Archive Danh mục sản phẩm
 *
 * @package insiderpaint
 */

get_header(); ?>

<section class="banner banner__sub">
  <h2 class="title title__line">
    Danh mục sản phẩm
  </h2>
  <div class="banner__slider">
    <ul class="bxslider">
      <?php 
        $images = get_field('slider1');
        echo $images;
        if( $images ): ?>
            <?php foreach( $images as $id=>$image ): ?>
              <?php echo $image ?>
                 <li>
                    <img src="<?php echo $image['url']?>" alt="">
                  </li>
            <?php endforeach; ?>
      <?php endif; ?>
    </ul>
  </div>
</section>

<div class="main-content">
  <section class="product">
    <div class="container">
      <ul class="row">
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
              <li class="product__list col-lg-4 col-12">
                <div class="product__listct">
                  <div class="product__img">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/img_pd_3.jpg" alt="">
                  </div>
                  <div class="product__des">
                    <h4><?php the_title();?></h4>
                    <p>
                      <?php the_field('mo_ta');?>
                    </p>
                  </div>
                </div>
              </li>
          <?php endwhile; ?>
        <?php endif; ?>
        <li class="product__list col-lg-4 col-12">
          <div class="product__listct">
            <div class="product__img">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/images/img_pd_4.jpg" alt="">
            </div>
            <div class="product__des">
              <h4>FINITURE DECORATIVE</h4>
              <p>
                Có rất nhiều biến thể của Lorem Ipsum mà bạn có thể tìm thấy, nhưng đa số được biến đổi bằng
              </p>
            </div>
          </div>
        </li>
        <li class="product__list col-lg-4 col-12">
          <div class="product__listct">
            <div class="product__img">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/images/img_pd_5.jpg" alt="">
            </div>
            <div class="product__des">
              <h4>FINITURE DECORATIVE</h4>
              <p>
                Có rất nhiều biến thể của Lorem Ipsum mà bạn có thể tìm thấy, nhưng đa số được biến đổi bằng
              </p>
            </div>
          </div>
        </li>
        <li class="product__list col-lg-4 col-12">
          <div class="product__listct">
            <div class="product__img">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/images/img_pd_6.jpg" alt="">
            </div>
            <div class="product__des">
              <h4>FINITURE DECORATIVE</h4>
              <p>
                Có rất nhiều biến thể của Lorem Ipsum mà bạn có thể tìm thấy, nhưng đa số được biến đổi bằng
              </p>
            </div>
          </div>
        </li>
        <li class="product__list col-lg-4 col-12">
          <div class="product__listct">
            <div class="product__img">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/images/img_pd_1.jpg" alt="">
            </div>
            <div class="product__des">
              <h4>FINITURE DECORATIVE</h4>
              <p>
                Có rất nhiều biến thể của Lorem Ipsum mà bạn có thể tìm thấy, nhưng đa số được biến đổi bằng
              </p>
            </div>
          </div>
        </li>
        <li class="product__list col-lg-4 col-12">
          <div class="product__listct">
            <div class="product__img">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/images/img_pd_2.jpg" alt="">
            </div>
            <div class="product__des">
              <h4>FINITURE DECORATIVE</h4>
              <p>
                Có rất nhiều biến thể của Lorem Ipsum mà bạn có thể tìm thấy, nhưng đa số được biến đổi bằng
              </p>
            </div>
          </div>
        </li>
        <li class="product__list col-lg-4 col-12">
          <div class="product__listct">
            <div class="product__img">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/images/img_pd_3.jpg" alt="">
            </div>
            <div class="product__des">
              <h4>FINITURE DECORATIVE</h4>
              <p>
                Có rất nhiều biến thể của Lorem Ipsum mà bạn có thể tìm thấy, nhưng đa số được biến đổi bằng
              </p>
            </div>
          </div>
        </li>
        <li class="product__list col-lg-4 col-12">
          <div class="product__listct">
            <div class="product__img">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/images/img_pd_4.jpg" alt="">
            </div>
            <div class="product__des">
              <h4>FINITURE DECORATIVE</h4>
              <p>
                Có rất nhiều biến thể của Lorem Ipsum mà bạn có thể tìm thấy, nhưng đa số được biến đổi bằng
              </p>
            </div>
          </div>
        </li>
        <li class="product__list col-lg-4 col-12">
          <div class="product__listct">
            <div class="product__img">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/images/img_pd_5.jpg" alt="">
            </div>
            <div class="product__des">
              <h4>FINITURE DECORATIVE</h4>
              <p>
                Có rất nhiều biến thể của Lorem Ipsum mà bạn có thể tìm thấy, nhưng đa số được biến đổi bằng
              </p>
            </div>
          </div>
        </li>
        <li class="product__list col-lg-4 col-12">
          <div class="product__listct">
            <div class="product__img">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/images/img_pd_6.jpg" alt="">
            </div>
            <div class="product__des">
              <h4>FINITURE DECORATIVE</h4>
              <p>
                Có rất nhiều biến thể của Lorem Ipsum mà bạn có thể tìm thấy, nhưng đa số được biến đổi bằng
              </p>
            </div>
          </div>
        </li>
      </ul>
      
    </div>
    </div>
  </section>
  <?php get_template_part( 'section_client', get_post_format() ); ?>
</div>


<?php get_footer(); ?>



    
   