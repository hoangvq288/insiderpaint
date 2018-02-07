<?php
/**
 * Theme: Insider Paint
 * 
 * Template Name: Page - Giới thiệu
 *
 * @package insiderpaint
 */

get_header(); ?>
<section class="banner banner__news">
  <h2 class="title title__line">
    Giới thiệu
  </h2>
  <div class="banner__slider">
    <img src="<?php the_field('hinh_dai_dien') ?>" alt="">
  </div>
</section>
    <div class="main-content">
      <section class="aboutus">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <h3 class="title title__line">
                GIỚI THIỆU VỀ INSIDER
              </h3>
              <div class="aboutus__text">
                <?php the_field('qua_trinh_hinh_thanh') ?>
                <blockquote class="blockquote blockquote__about">
                  <?php the_field('trich_dan') ?>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="value">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h3 class="title title__line">
                GIÁ TRỊ CỐT LÕI
              </h3>
            </div>
            <div class="col-lg-4 col-12">
              <div class="value__icon">
                <i class="icofont icofont-dart"></i>
              </div>
              <h4 class="value__title">Mục tiêu</h4>
              <p class="value__text">
                <?php the_field('muc_tieu') ?>
              </p>
            </div>
            <div class="col-lg-4 col-12">
              <div class="value__icon">
                <i class="icofont icofont-look"></i>
              </div>
              <h4 class="value__title">Tầm nhìn</h4>
              <p class="value__text">
                <?php the_field('tam_nhin') ?>
              </p>
            </div>
            <div class="col-lg-4 col-12">
              <div class="value__icon">
                <i class="icofont icofont-brand-designbump"></i>
              </div>
              <h4 class="value__title">Sứ mệnh</h4>
              <p class="value__text">
                <?php the_field('su_menh') ?>
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="insider">
        <div class="container">
          <h3 class="title title__line">
            TINH THẦN INSIDER
          </h3>
          <ul class="row">
            <li class="insider__list col-lg-6 col-12">
              <div class="insider__listct">
                <div class="insider__img">
                  <img src="<?php echo get_bloginfo('template_directory'); ?>/images/img_tinhthan_1.jpg" alt="">
                </div>
                <div class="insider__des">
                  <h4>SÁNG TẠO </br>& VƯỢT QUA THỬ THÁCH</h4>
                  <p>
                    Công việc đòi hỏi mỗi thành viên phải luôn sáng tạo và tìm cách vượt qua những thử thách trong công việc nhằm mang lại sự hài lòng cho khách hàng.
                  </p>
                </div>
              </div>
            </li>
            <li class="insider__list col-lg-6 col-12">
              <div class="insider__listct">
                <div class="insider__img">
                  <img src="<?php echo get_bloginfo('template_directory'); ?>/images/img_tinhthan_2.jpg" alt="">
                </div>
                <div class="insider__des">
                  <h4>ĐOÀN KẾT & HỖ TRỢ</h4>
                  <p>
                    Các thành viên Insider cùng nhau nỗ lực, hỗ trợ và đoàn kết để hướng đến mục đích chung của cả tập thể.
                  </p>
                </div>
              </div>
            </li>
            <li class="insider__list col-lg-6 col-12">
              <div class="insider__listct">
                <div class="insider__img">
                  <img src="<?php echo get_bloginfo('template_directory'); ?>/images/img_tinhthan_3.jpg" alt="">
                </div>
                <div class="insider__des">
                  <h4>TỬ TẾ & HIỆU QUẢ</h4>
                  <p>
                    Luôn tử tế và hiệu quả trong công việc để trở nên đáng tin cậy với khách hàng và với các thành viên trong tổ chức của mình.
                  </p>
                </div>
              </div>
            </li>
            <li class="insider__list col-lg-6 col-12">
              <div class="insider__listct">
                <div class="insider__img">
                  <img src="<?php echo get_bloginfo('template_directory'); ?>/images/img_tinhthan_4.jpg" alt="">
                </div>
                <div class="insider__des">
                  <h4>THÂN THIỆN & VUI VẺ</h4>
                  <p>
                    Tinh thần thân thiện và vui vẻ sẽ giúp các thành viên Insider đi xa hơn cùng với nhau và với khách hàng.
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="clientinsider">
        <div class="row">
          <div class="col-lg-6 col-12 clientinsider__img">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/bg_giaiphap.jpg" alt="">
          </div>
          <div class="col-lg-6 col-12">
            <div class="row">
              <div class="col-lg-10 col-12 clientinsider__main">
                <h3 class="title title__line title__line--left">
                  CHÚNG TÔI CUNG CẤP <br>
                  CÁC GIẢI PHÁP CHO KHÁCH HÀNG
                </h3>
                <ul class="row">
                  <li class="col-lg-12 col-12 clientinsider__list">
                    <i class="icofont icofont-briefcase-alt-1"></i>
                    <span>Giải pháp trọn gói bao gồm sản phẩm & dịch vụ thi công chuyên nghiệp.</span>
                  </li>
                  <li class="col-lg-12 col-12 clientinsider__list">
                    <i class="icofont icofont-girl-alt"></i>
                    <span>Chuyên viên tư vấn chu đáo cho các nhu cầu của khách hàng.</span>
                  </li>
                  <li class="col-lg-12 col-12 clientinsider__list">
                    <i class="icofont icofont-shield-alt"></i>
                    <span>Bảo hành cho sản phẩm & dịch vụ.</span>
                  </li>
                  <li class="col-lg-12 col-12 clientinsider__list">
                    <i class="icofont icofont-paint-brush"></i>
                    <span>Thiết kế nhiều mẫu tường nghệ thuật đa dạng phù hợp cho mọi loại không gian nội thất.</span>
                  </li>
                  <li class="col-lg-12 col-12 clientinsider__list">
                    <i class="icofont icofont-building-alt"></i>
                    <span>Phối hợp quản lí thi công hiệu quả về chi phí và tiến độ.</span>
                  </li>
                  <li class="col-lg-12 col-12 clientinsider__list">
                    <i class="icofont icofont-trowel"></i>
                    <span>Tùy chỉnh và cung cấp giải pháp phù hợp cho nhu cầu của khách hàng.</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php get_template_part( 'section_client', get_post_format() ); ?>
    </div>


<?php get_footer(); ?>