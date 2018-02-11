</main>
   <footer class="footer">
    <div class="container">
      <div class="footer__content">
        <a href="<?php echo get_home_url(); ?>">
          <img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo_footer.png" alt="">
        </a>
        <p class="footer__des">Có rất nhiều biến thể của Lorem Ipsum<br>mà bạn có thể tìm thấy, nhưng đa số được biến đổi bằng cách thêm các yếu tố hài hước, các từ ngẫu nhiên có khi không có vẻ gì là có ý nghĩa.</p>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Nhập địa chỉ email để nhận thông tin của chúng tôi">
          <a href="#" class="btn btn-primary" >
            Gửi
          </a>
        </div>
        <?php $phone = get_field('dien_thoai', 'option'); ?>
        <a href="tel:<?php echo $phone; ?>" class="btn btn-secondary btn-callus">
          <i class="fa fa-mobile-phone"></i>
          <span>CALL US: <?php echo $phone; ?></span>
        </a>
        <p class="footer__social">
          <a href="<?php the_field('facebook_url', 'option'); ?>" target="blank">
            <i class="fa fa-facebook"></i>
          </a>
          <a href="<?php the_field('youtube_url', 'option'); ?>" target="blank">
            <i class="fa fa-youtube"></i>
          </a>
          <a href="<?php the_field('instagram_url', 'option'); ?>" target="blank">
            <i class="fa fa-instagram"></i>
          </a>
        </p>
      </div>
    </div>
    <div class="footer__bottom">
      <ul>
        <li>
          <a href="<?php echo get_home_url(); ?>">Trang Chù </a>
        </li>
        <li>
          <a href="<?php echo get_permalink(get_page_by_path('gioi-thieu')->ID); ?>">Giới thiệu</a>
        </li>
        <li>
          <a href="<?php echo get_permalink(get_page_by_path('du-an-tieu-bieu')->ID); ?>">Dự Án Tiêu Biểu</a>
        </li>
        <li>
          <a href="<?php echo get_permalink(get_page_by_path('tin-tuc-su-kien')->ID); ?>">Tin Tức Sự Kiện</a>
        </li>
        <li>
          <a href="<?php echo get_permalink(get_page_by_path('thong-cao-bao-chi')->ID); ?>">Thông Cáo Báo Chí</a>
        </li>
        <li>
          <a href="<?php echo get_permalink(get_page_by_path('lien-he')->ID); ?>">Liên Hệ</a>
        </li>
      </ul>
      <p>
        Copyright 2018 by Insider. All rights reserved.
      </p>
    </div>
   </footer>

   <!-- ***********************modal -->
   <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg token">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Welcome back UserName!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
              <img src="images/icon-close.svg" alt="">
            </span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal-token-ct">
            <div class="token-main">
              <div class="token-ct">
                <div class="img-inside">
                  <span>
                    +6
                  </span>
                  <img src="images/icon-gtaco.svg" alt="">
                </div>
                <p>
                  You've recieved(1) Daily Tokens
                  <span>Sign in daily to recieve more Tokens</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Thank You</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Include jQuery (required) and the JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.bxslider.min.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/_2.bootstrap.js"></script>
  <!-- <script src="js/jquery.bxslider.min.js"></script> -->
  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/main.js"></script>
  
  <?php wp_footer(); ?>
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a72077ed7591465c70742b3/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
   </body>
</html>