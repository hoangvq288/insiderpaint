<nav class="nav">
  <ul>
    <li>
      <a href="<?php echo get_home_url(); ?>" class="nav__link">
        Trang Chủ
      </a>
    </li>
    <li>
      <a href="<?php echo get_permalink(get_page_by_path('gioi-thieu')->ID); ?>" class="nav__link">
        Giới thiệu
      </a>
    </li>
    <li>
      <input type="checkbox">
      <a href="<?php echo get_permalink(get_page_by_path('danh-muc-san-pham')->ID); ?>" class="nav__link">
        Danh Mục Sản Phẩm
      </a>
      
      <span class="status"></span>
      <ul>
        <?php
          $the_query = new WP_Query(array(
            'post_type' => 'san-pham',
            'post_status' => 'publish',
            'posts_per_page' => '15',
            'orderby' => 'date',
            'order' => 'ASC',
          ));
           while ($the_query->have_posts()) {
                 $the_query->the_post();
        ?>
          <li>
            <a href="<?php echo get_permalink(get_the_ID()); ?>">
              <?php the_title() ;?>
            </a>
          </li>
        <?php } wp_reset_postdata();?>
      </ul>
    </li>
    <li>
      <input type="checkbox">
      <a href="javascript:;" class="nav__link">
        Truyền Thông
      </a>
      
      <span class="status"></span>
      <ul>
        <li>
          <a href="<?php echo get_permalink(get_page_by_path('thu-vien')->ID) ?>" class="nav__link">
             Thư viện tài liệu
          </a>
        </li>
        <li>
          <a href="<?php echo get_permalink(get_page_by_path('tin-tuc-su-kien')->ID) ?>" class="nav__link">
             Tin tức sự kiện
          </a>
        </li>
        <li>
          <a href="<?php echo get_permalink(get_page_by_path('thong-cao-bao-chi')->ID); ?>" class="nav__link">
             Thông cáo báo chí
          </a>
        </li>
      </ul>
    </li>
    <li>
      <input type="checkbox">
      <a href="javascript:;" class="nav__link">
        Dự án tiêu biểu
      </a>
      
      <span class="status"></span>
      <ul>
        <li>
          <a href="<?php echo get_permalink(get_page_by_path('du-an-tieu-bieu')->ID); ?>" class="nav__link">
             Dự án tiêu biểu
          </a>
        </li>
        <li>
          <a href="<?php echo get_permalink(get_page_by_path('mau-son-tao-cam-hung')->ID); ?>" class="nav__link">
             Mẫu sơn nghệ thuật tạo cảm hứng
          </a>
        </li>
        <li>
          <a href="<?php echo get_permalink(get_page_by_path('doi-tac-chien-luoc')->ID); ?>" class="nav__link">
             Đối tác
          </a>
        </li>
      </ul>
    </li>
    <li>
      <input type="checkbox">
      <a href="javascript:;" class="nav__link">
        Liên hệ & Hợp tác
      </a>
      
      <span class="status"></span>
      <ul>
        <li>
          <a href="<?php echo get_permalink(get_page_by_path('tuyen-dung-nghe-nghiep')->ID); ?>" class="nav__link">
             Tuyển dụng nghề nghiệp
          </a>
        </li>
        <li>
          <a href="<?php echo get_permalink(get_page_by_path('co-hoi-hop-tac')->ID); ?>" class="nav__link">
             Cơ hội hợp tác
          </a>
        </li>
        <li>
          <a href="<?php echo get_permalink(get_page_by_path('lien-he')->ID); ?>" class="nav__link">
             Liên hệ
          </a>
        </li>
      </ul>
  </ul>
</nav>

<nav class="nav nav__right">
  <ul>
    <li>
      <a href="<?php the_field('facebook_url', 'option') ?>" class="nav__link">
        <i class="fa fa-facebook"></i>
        Follow Us with Facebook
      </a>
    </li>
    <li>
      <a href="<?php the_field('youtube_url', 'option') ?>" class="nav__link">
        <i class="fa fa-youtube"></i>
        Follow Us with Youtube
      </a>
    </li>
    <li>
      <a href="<?php the_field('instagram_url', 'option') ?>" class="nav__link"> 
        <i class="fa fa-instagram"></i>
        Follow Us with Instagram
      </a>
    </li>
  </ul>
</nav>