<?php
/**
 * Plugin Name: IBenic Bootstrap Modal
 * Plugin URI:  http://www.ibenic.com/show-a-wordpress-post-in-a-modal/
 * Description: Show an article in a modal on the same page. 
 * Version:  1.0
 * Author: Igor benić
 * Author URI: http://www.ibenic.com
 * License: GPL2
 *
 *
 * 
 *   Copyright 2014  Igor Benić  (email : i.benic@hotmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
 
 

function ibenic_add_bootstrap_modal(){
  ?>
  <!-- Modal -->
  <div class="modal fade bd-img-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="isp-detail">
    <div class="modal-dialog modal-lg ispdetail">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <i class="icofont icofont-ui-close"></i>
          </button>
        </div>
        <div class="modal-body">
          <div class="ispdetail__img">
            <ul class="bxslider_isp_detail">
              <li><img src="<?php echo get_bloginfo('template_directory') ?>/images/img_banner_2.jpg" alt=""></li>
              <li><img src="<?php echo get_bloginfo('template_directory') ?>/images/img_detail_1.jpg" alt=""></li>
              <li><img src="<?php echo get_bloginfo('template_directory') ?>/images/img_product_detail_1.jpg" alt=""></li>
              <li><img src="<?php echo get_bloginfo('template_directory') ?>/images/img_banner_2.jpg" alt=""></li>
            </ul>
          </div>
          <div class="ispdetail__des">
            <h4>FINITURE DECORATIVE</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris rutrum mi sit amet lectus luctus, tempor dictum tellus auctor. Fusce elementum est et ligula venenatis, consequat vehicula orci lobortis. Integer ullamcorper nisi at erat molestie lobortis.
            </p>
          </div>
        </div>
        <div class="modal-footer">
         <!--  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button> -->
        </div>
      </div>
    </div>
  </div>
<?php
}
add_action('wp_footer','ibenic_add_bootstrap_modal');



function ibenic_show_post_in_modal( $atts ) {
    $attributes = shortcode_atts( array(
        'id' => 0,
        'text' => "Open post in modal",
        'class' => "btn btn-primary",
        'style' => ''
    ), $atts );
    $ajax_nonce = wp_create_nonce( "ibenic-bootstrap" );
    ?>
    <script>

    function ibenic_show_post_js(id){
     jQuery.ajax({
        url: "<?php echo admin_url( 'admin-ajax.php' ); ?>",
        data: { id:  id, action: 'ibenic_show_post', security: '<?php echo $ajax_nonce; ?>'},
            
        success: function(response){
          if(response['error'] == '1'){
            jQuery('#modalTitle').html("Error");
            jQuery('#modalBody').html("No post found! Sorry :(");
          } else {
            jQuery('#modalTitle').html(response['post_title']);
            jQuery('#modalBody').html(response['post_content']);
              
          }
          jQuery('#ibenicModal').modal('show');
              
            }
          });
    }
    </script>
      <a style="<?php echo $attributes["style"]; ?>" class="<?php echo $attributes["class"]; ?>" onClick='ibenic_show_post_js(<?php echo $attributes["id"]; ?>)'><?php echo $attributes["text"]; ?></a>
    <?php
}
add_shortcode( 'ibenic_post', 'ibenic_show_post_in_modal' );



add_action('wp_ajax_nopriv_ibenic_show_post', 'ibenic_show_post');
add_action('wp_ajax_ibenic_show_post', 'ibenic_show_post');
function ibenic_show_post(){
  check_ajax_referer( 'ibenic-bootstrap', 'security' );
  $id = $_GET['id'];
  $post = get_post($id);
  if($post){
    wp_send_json(array('post_title' => $post->post_title, 'post_content' => $post->post_content));
  } else {
    wp_send_json(array('error' => '1'));
  }
  wp_die();
}



add_filter('widget_text', 'do_shortcode');