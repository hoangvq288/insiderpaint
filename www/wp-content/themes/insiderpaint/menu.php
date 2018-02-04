<nav class="nav">
  <ul>
    <li>
      <a href="<?php echo get_home_url(); ?>" class="nav__link">
        Trang Chủ
      </a>
    </li>
    <li>
      <a href="<?php echo get_permalink(get_page_by_path('gioi-thieu')->ID) ?>" class="nav__link">
        Giới thiệu
      </a>
    </li>
    <li>
      <a href="<?php echo get_permalink(get_page_by_path('danh-muc-san-pham')->ID) ?>" class="nav__link">
        Danh Mục Sản Phẩm
      </a>
      <input type="checkbox">
      <span class="status"></span>
      <ul>
        <li>
          <a href="#">
            Sản Phẩm 1
          </a>
        </li>
        <li>
          <a href="#">
            Sản Phẩm 2
          </a>
        </li>
        <li>
          <a href="#">
            Sản Phẩm 3
          </a>
        </li>
        <li>
          <a href="#">
            Sản Phẩm 4
          </a>
        </li>
        <li>
          <a href="#">
            Sản Phẩm 4
          </a>
        </li>
        <li>
          <a href="#">
            Sản Phẩm 6
          </a>
        </li>
      </ul>
    </li>
    <li>
      <a href="javascript:;" class="nav__link">
        Truyền Thông
      </a>
      <input type="checkbox">
      <span class="status"></span>
      <ul>
        <li>
          <a href="javascript:;">
             Thư viện tài liệu
          </a>
        </li>
        <li>
          <a href="<?php echo get_permalink(get_page_by_path('tin-tuc')->ID) ?>" class="nav__link">
             Tin tức sự kiện
          </a>
        </li>
        <li>
          <a href="javascript:;">
             Thông cáo báo chí
          </a>
        </li>
      </ul>
    </li>
    <li>
      <a href="javascript:;" class="nav__link">
        Dự án tiêu biểu
      </a>
      <input type="checkbox">
      <span class="status"></span>
      <ul>
        <li>
          <a href="javascript:;">
             Công trình tiêu biểu
          </a>
        </li>
        <li>
          <a href="javascript:;">
             Mẫu sơn nghệ thuật tạo cảm hứng
          </a>
        </li>
        <li>
          <a href="javascript:;">
             Đối tác
          </a>
        </li>
      </ul>
    </li>
    <li>
      <a href="javascript:;" class="nav__link">
        Liên hệ & Hợp tác
      </a>
      <input type="checkbox">
      <span class="status"></span>
      <ul>
        <li>
          <a href="javascript:;">
             Tuyển dụng nghề nghiệp
          </a>
        </li>
        <li>
          <a href="javascript:;">
             Cơ hội hợp tác
          </a>
        </li>
        <li>
          <a href="javascript:;">
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