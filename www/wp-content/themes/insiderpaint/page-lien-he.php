<?php
/**
 * The template for displaying archive pages
 *
 * Template Name: Page - Liên hệ
 *
 */

get_header(); ?>
<section class="banner banner__news">
  <h2 class="title title__line">
    Liên Hệ
  </h2>
  <div class="banner-one">
    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/img_banner_contact.jpg" alt="">
  </div>
</section>
<div class="main-content">
  <section class="contact-content">
     <div class="top-primary">
        <div class="container">
           <div class="contact-info row">
              <div class="col-lg-6 map-info">
                 <div class="map-info-ct">
                    <h3>Thông Tin Liên Hệ</h3>
                    <p>
                       Có rất nhiều biến thể của Lorem Ipsum mà bạn có thể tìm thấy, nhưng đa số được biến đổi bằng cách thêm các yếu tố hài hước, các từ ngẫu nhiên có khi không có vẻ gì là có ý nghĩa.
                       <br><br>
                       Điện thoại: <a href="tel:"><?php echo get_field('dien_thoai', 'option') ?></a>
                        <br><br>

                       <?php echo get_field('address', 'option') ?>
                      
                      <br><br>
                       Follow Us <br>
                       <a href="<?php the_field('facebook_url', 'option'); ?>" target="blank">
                          <i class="fa fa-facebook-square "></i>
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
              <div class="col-lg-6 map-ct">
                 <div class="form-ct">
                    <h3>Form Liên Hệ</h3>
                    <?php echo do_shortcode( '[contact-form-7 id="262" title="Liên hệ"]' ); ?>
                 </div>
              </div>
              <div class="col-lg-12 map-ct">
                <div id="map" style="width:100%;height:500px"></div>
              </div>
              <div class="col-lg-12 welcome-text">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/images/bg_dot_paint_thanks.png" alt="" width="150">
                <blockquote>
                  Xin cám ơn Quý khách đã theo dõi Insider Paint
                </blockquote>
              </div>
           </div>
        </div>
     </div>
  </section>
  <?php get_template_part('section_client'); ?>
</div>


<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSjb2n-kY6zjs8Ijhuq6-PIuqMz_zvQe4"
  type="text/javascript"></script>
<script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 16,

                    // The latitude and longitude to center the map (always required)
                    <?php 
                      $lat = get_field('latitude', 'option');
                      $long = get_field('longitude', 'option');
                    ?>
                    center: new google.maps.LatLng(<?php echo $lat; ?>, <?php echo   $long; ?>), // New York

                    // How you would like to style the map.
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
                };

                // Get the HTML DOM element that will contain your map
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(<?php echo $lat; ?>, <?php echo $long; ?>),
                    map: map,
                    title: 'Snazzy!'
                });
            }
        </script>
<?php get_footer(); ?>

