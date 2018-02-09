<?php
/**
 * The template for displaying archive pages
 *
 * Template Name: Page - Đối tác
 *
 */

get_header(); ?>
<section class="banner banner__news">
  <h2 class="title title__line">
    Đối tác
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
            'post_type' => 'doi-tac',
            'post_status' => 'publish',
            'posts_per_page' => $ITEMS_PER_PAGE_FOR_PARTNERS,
            'paged' => $paged,
            'orderby' => array( 
              'query_one' => 'ASC',
              'date' => 'DESC'
            ),
            
          ));
           while ($the_query->have_posts()) {
                 $the_query->the_post();
        ?>
          <li class="product__list col-lg-3 col-12">
            <div class="product__listct">
              <div class="product__img">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
              </div>
            <div class="product__des">
              <h4><?php the_title(); ?></h4>
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
  
</div>
<?php get_footer(); ?>