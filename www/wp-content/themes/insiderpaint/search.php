<?php
/* Template Name: Custom Search */        
get_header(); ?>             
<div class="main-content">
  <div class="blog-content">
     <div class="container">
        <div class="blog-ct">
          <div class="featured-article no-banner">
            <div class="row ">
               <div class="col-lg-12 col-12 title-main">
                  <br />
                  <h2>Kết quả tìm kiếm cho : <?php echo "$s"; ?> </h2>       
                </div>
              </div>
          </div>
         <div class="sub-article row">
            
            <div class="col-lg-9 col-left">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    
                 <article>
                    <div class="article-img">
                      <?php $post_image_url = get_the_post_thumbnail_url(get_the_ID()); ?>
                      <?php $image_url = $post_image_url ? $post_image_url :  (get_bloginfo('template_directory').'/images/img_blog_1.jpg') ?>
                      <a href="<?php echo get_permalink(get_the_ID()); ?>">
                        <img src="<?php echo $post_image_url ?>" alt="">
                      </a>
                       
                    </div>
                    <div class="article-content">
                      
                        <h3>
                          <a href="<?php echo get_permalink(get_the_ID()); ?>">
                            <?php the_title(); ?>
                          </a>      
                        </h3> 
                      
                       
                       <ul>
                          <li>
                             <span><?php echo get_the_date(); ?></span>
                          </li>
                       </ul>
                       <div class="article-des">
                        <?php echo wp_trim_words(get_field('mo_ta'), 110, '...'); ?>
                       </div>
                       <a href="<?php echo get_permalink(get_the_ID()); ?>" class="btn btn-link">
                          Xem thêm
                       </a>
                    </div>
                 </article>
                <?php endwhile; else : ?>
                  <h3>Không tìm thấy sản phẩm</h3>
                <?php endif; ?>
                  
            </div>
         </div>
          
        </div>
     </div>
  </div>
  <?php get_template_part('section_client'); ?>
</div>


          
<?php get_footer(); ?>