<section class="client">
    <div class="client__title">
        <h3>
          <a href="<?php echo get_permalink(get_page_by_path('doi-tac-chien-luoc')->ID); ?>">
            Khách hàng Dự Án
          </a>
        </h3>  
    </div>
    <div class="container">
      <ul class="bxslider_client">
        <?php 
        $the_query = new WP_Query(array( 'post_type' => 'doi-tac',
                 'posts_per_page' => 10 ,
                 'post_status' => 'publish',
                 'orderby' => 'date',
                 'order' => 'DESC'));
             while ($the_query->have_posts()) {
                 $the_query->the_post();
                 ?>
                  <li>
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="" height="150px">
                  </li>
       <?php  
                 }
        ?>  

      </ul>
    </div>
  </section>