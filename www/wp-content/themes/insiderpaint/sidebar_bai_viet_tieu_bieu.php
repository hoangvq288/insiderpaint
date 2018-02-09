<div class="section-sidebar popular">
    <div class="sidebar-title">
       <p>Bài Viết Tiêu Biểu</p>
    </div>
    <div class="sidebar-content">
       <ul>
          <?php
            $the_query = new WP_Query(array(
                  'post_type' => 'tin-tuc',
                  'post_status' => 'publish',
                  'meta_query' => array(
                    'relation'    => 'AND',
                    array(
                        'key'   => 'feature_post',
                        'value'     => true,
                        'compare'   => '=',
                    ),
                  ),
                  'orderby' => 'modified',
                  'order' => 'DESC',
                  'posts_per_page' => $SIDEBAR_ITEMS_PER_QUERY
                ));
             while ($the_query->have_posts()) {
                   $the_query->the_post();
          ?>
            <li>
              <a href="<?php echo get_permalink(get_the_ID()); ?>">
                <?php echo the_title(); ?>
              </a>
             <span><?php echo get_the_date(); ?></span>
            </li>
          <?php } wp_reset_postdata()?>
        </ul>
    </div>
 </div>