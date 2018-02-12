<?php
/**
 * The template for displaying archive pages
 *
 * Template Name: Page - Thư viện
 *
 */

get_header(); ?>
<section class="banner banner__news">
  <h2 class="title title__line">
    Thư viện & tài liệu
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
            'post_type' => 'thu-vien-tai-lieu',
            'post_status' => 'publish',
            'posts_per_page' => $ITEMS_PER_PAGE_FOR_LIBRARY,
            'paged' => $paged,
            'orderby' => array( 
              'date' => 'DESC'
            ),
            
          ));
           while ($the_query->have_posts()) {
                 $the_query->the_post();
        ?>
          <li class="product__list col-lg-4 col-12">
            <div class="product__listct">
              <div class="product__img">
                  <img src="<?php echo get_field('hinh_dai_dien') ?>" alt="" height="172px">
                </div>
                <div class="product__des">
                  <h4><?php the_title(); ?></h4>
                  <p style="min-height:88px" class="text-justify">
                    <?php echo wp_trim_words(get_field('mo_ta'), 45, '...'); ?>
                  </p>
                  <a href="<?php the_field('file') ?>" class="btn btn-primary">
                    Download
                  </a>
                </div>
            </div>
          </li>
        <?php } wp_reset_postdata(); ?>
        <?php
          kriesi_pagination($the_query->max_num_pages);
          wp_reset_query();
       ?>

        </li>
      </ul>
    </div>
    </div>
  </section>
  <?php get_template_part('section_client'); ?>
</div>
<?php get_footer(); ?>