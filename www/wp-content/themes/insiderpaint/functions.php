<?php

add_filter('manage_pages_columns', 'my_columns');

function my_columns($columns) {
    $columns['order'] = 'Order';
    return $columns;
}

add_action('manage_pages_custom_column',  'my_show_columns');

function my_show_columns($name) {
    global $post;
    switch ($name) {
        case 'order':
          $views = $post->menu_order;
          echo $views;
          break;
    }
}






function truncate($string, $limit, $break=".", $pad="...")
{
  // return with no change if string is shorter than $limit
  if(strlen($string) <= $limit) return $string;

  // is $break present between $limit and the end of the string?
  if(false !== ($breakpoint = strpos($string, $break, $limit))) {
    if($breakpoint < strlen($string) - 1) {
      $string = substr($string, 0, $breakpoint) . $pad;
    }
  }
  return $string;
}

add_theme_support( 'post-thumbnails' );
if (!function_exists('products_init')) {
   /**
    * Register a director post type.
    *
    * @link http://codex.wordpress.org/Function_Reference/register_post_type
    */
   function products_init()
   {
       $labels = array(
           'name' => _x('Sản phẩm', 'post type general name'),
           'singular_name' => _x('Sản phẩm', 'post type singular name'),
           'menu_name' => _x('Sản phẩm', 'admin menu'),
           'name_admin_bar' => _x('Sản phẩm', 'add new on admin bar'),
           'add_new' => _x('Thêm Sản phẩm', 'Sản phẩm'),
           'add_new_item' => __('Thêm Sản phẩm'),
           'new_item' => __('Sản phẩm mới'),
           'edit_item' => __('Sửa Sản phẩm'),
           'view_item' => __('Xem Sản phẩm'),
           'all_items' => __('Tất cả Sản phẩm'),
           'search_items' => __('Tìm kiếm Sản phẩm'),
           'parent_item_colon' => __('Parent Sản phẩm:'),
           'not_found' => __('Không tìm thấy Sản phẩm.'),
           'not_found_in_trash' => __('Không tìm thấy sản phẩm trong Trash.')
       );

       $args = array(
           'labels' => $labels,
           'public' => true,
           'publicly_queryable' => true,
           'show_ui' => true,
           'show_in_nav_menus' => true,
           'query_var' => true,
           'rewrite' => array('slug' => 'san-pham','with_front' => false),
           'capability_type' => 'post',
           'has_archive' => true,
           'hierarchical' => false,
           'menu_position' => 30,
           'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt')
       );

       register_post_type('san-pham', $args);
       flush_rewrite_rules();
   }
}
add_action( 'init', 'products_init' );

if (!function_exists('hoptac_init')) {
   /**
    * Register a director post type.
    *
    * @link http://codex.wordpress.org/Function_Reference/register_post_type
    */
   function hoptac_init()
   {
       $labels = array(
           'name' => _x('Hợp tác', 'post type general name'),
           'singular_name' => _x('Hợp tác', 'post type singular name'),
           'menu_name' => _x('Hợp tác', 'admin menu'),
           'name_admin_bar' => _x('Hợp tác', 'add new on admin bar'),
           'add_new' => _x('Thêm Hợp tác', 'Hợp tác'),
           'add_new_item' => __('Thêm Hợp tác'),
           'new_item' => __('Hợp tác mới'),
           'edit_item' => __('Sửa Hợp tác'),
           'view_item' => __('Xem Hợp tác'),
           'all_items' => __('Tất cả Hợp tác'),
           'search_items' => __('Tìm kiếm Hợp tác'),
           'parent_item_colon' => __('Parent Hợp tác:'),
           'not_found' => __('Không tìm thấy Hợp tác.'),
           'not_found_in_trash' => __('Không tìm thấy Hợp tác trong Trash.')
       );

       $args = array(
           'labels' => $labels,
           'public' => true,
           'publicly_queryable' => true,
           'show_ui' => true,
           'show_in_nav_menus' => true,
           'query_var' => true,
           'rewrite' => array('slug' => 'hop-tac','with_front' => false),
           'capability_type' => 'post',
           'has_archive' => true,
           'hierarchical' => false,
           'menu_position' => 30,
           'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt')
       );

       register_post_type('hop-tac', $args);
       flush_rewrite_rules();
   }
}
add_action( 'init', 'hoptac_init' );



if (!function_exists('tuyendung_init')) {
   /**
    * Register a director post type.
    *
    * @link http://codex.wordpress.org/Function_Reference/register_post_type
    */
   function tuyendung_init()
   {
       $labels = array(
           'name' => _x('Tuyển dụng', 'post type general name'),
           'singular_name' => _x('Tuyển dụng', 'post type singular name'),
           'menu_name' => _x('Tuyển dụng', 'admin menu'),
           'name_admin_bar' => _x('Tuyển dụng', 'add new on admin bar'),
           'add_new' => _x('Thêm Tuyển dụng', 'Tuyển dụng'),
           'add_new_item' => __('Thêm Tuyển dụng'),
           'new_item' => __('Tuyển dụng mới'),
           'edit_item' => __('Sửa Tuyển dụng'),
           'view_item' => __('Xem Tuyển dụng'),
           'all_items' => __('Tất cả Tuyển dụng'),
           'search_items' => __('Tìm kiếm Tuyển dụng'),
           'parent_item_colon' => __('Parent Tuyển dụng:'),
           'not_found' => __('Không tìm thấy Tuyển dụng.'),
           'not_found_in_trash' => __('Không tìm thấy Tuyển dụng trong Trash.')
       );

       $args = array(
           'labels' => $labels,
           'public' => true,
           'publicly_queryable' => true,
           'show_ui' => true,
           'show_in_nav_menus' => true,
           'query_var' => true,
           'rewrite' => array('slug' => 'tuyen-dung','with_front' => false),
           'capability_type' => 'post',
           'has_archive' => true,
           'hierarchical' => true,
           'menu_position' => 30,
           'supports' => array('title', 'editor', 'author')
       );

       register_post_type('tuyen-dung', $args);
       flush_rewrite_rules();
   }
}
add_action( 'init', 'tuyendung_init' );


if (!function_exists('doitac_init')) {
   /**
    * Register a director post type.
    *
    * @link http://codex.wordpress.org/Function_Reference/register_post_type
    */
   function doitac_init()
   {
       $labels = array(
           'name' => _x('Đối tác', 'post type general name'),
           'singular_name' => _x('Đối tác', 'post type singular name'),
           'menu_name' => _x('Đối tác', 'admin menu'),
           'name_admin_bar' => _x('Đối tác', 'add new on admin bar'),
           'add_new' => _x('Thêm Đối tác', 'Đối tác'),
           'add_new_item' => __('Thêm Đối tác'),
           'new_item' => __('Đối tác mới'),
           'edit_item' => __('Sửa Đối tác'),
           'view_item' => __('Xem Đối tác'),
           'all_items' => __('Tất cả Đối tác'),
           'search_items' => __('Tìm kiếm Đối tác'),
           'parent_item_colon' => __('Parent Đối tác:'),
           'not_found' => __('Không tìm thấy Đối tác.'),
           'not_found_in_trash' => __('Không tìm thấy Đối tác trong Trash.')
       );

       $args = array(
           'labels' => $labels,
           'public' => true,
           'publicly_queryable' => true,
           'show_ui' => true,
           'show_in_nav_menus' => true,
           'query_var' => true,
           'rewrite' => array('slug' => 'doi-tac','with_front' => false),
           'capability_type' => 'post',
           'has_archive' => true,
           'hierarchical' => false,
           'menu_position' => 30,
           'supports' => array('title', 'thumbnail', 'author')
       );

       register_post_type('doi-tac', $args);
       flush_rewrite_rules();
   }
}
add_action( 'init', 'doitac_init' );



if (!function_exists('tintuc_init')) {
   /**
    * Register a director post type.
    *
    * @link http://codex.wordpress.org/Function_Reference/register_post_type
    */
   function tintuc_init()
   {
       $labels = array(
           'name' => _x('Tin tức sự kiện', 'post type general name'),
           'singular_name' => _x('Tin tức sự kiện', 'post type singular name'),
           'menu_name' => _x('Tin tức sự kiện', 'admin menu'),
           'name_admin_bar' => _x('Tin tức sự kiện', 'add new on admin bar'),
           'add_new' => _x('Thêm Tin tức sự kiện', 'Tin tức sự kiện'),
           'add_new_item' => __('Thêm Tin tức sự kiện'),
           'new_item' => __('Tin tức sự kiện mới'),
           'edit_item' => __('Sửa Tin tức sự kiện'),
           'view_item' => __('Xem Tin tức sự kiện'),
           'all_items' => __('Tất cả Tin tức sự kiện'),
           'search_items' => __('Tìm kiếm Tin tức sự kiện'),
           'parent_item_colon' => __('Parent Tin tức sự kiện:'),
           'not_found' => __('Không tìm thấy Tin tức sự kiện.'),
           'not_found_in_trash' => __('Không tìm thấy Tin tức sự kiện trong Trash.')
       );

       $args = array(
           'labels' => $labels,
           'public' => true,
           'publicly_queryable' => true,
           'show_ui' => true,
           'show_in_nav_menus' => true,
           'query_var' => true,
           'rewrite' => array('slug' => 'tin-tuc','with_front' => false),
           'capability_type' => 'post',
           'has_archive' => true,
           'hierarchical' => true,
           'menu_position' => 30,
           'supports' => array('title', 'editor', 'author', 'thumbnail'),
       );

       register_post_type('tin-tuc', $args);
       flush_rewrite_rules();
   }
}
add_action( 'init', 'tintuc_init' );

// Add the custom columns to the book post type:
add_filter( 'manage_tin-tuc_posts_columns', 'set_custom_edit_tin_tuc_columns' );
function set_custom_edit_tin_tuc_columns($columns) {
    unset( $columns['author'] );
    $columns['order_number'] = __( 'Order Number', 'your_text_domain' );
    return $columns;
}

// Add the data to the custom columns for the book post type:
add_action( 'manage_tin-tuc_posts_custom_column' , 'custom_book_column', 10, 2 );
function custom_book_column( $column, $post_id ) {
    switch ( $column ) {

        case 'order_number' :
          echo get_post_meta( $post_id , 'order_number' , true ); 
          break;

    }
}

// add custom fields query to WP REST API v2
// https://1fix.io/blog/2015/07/20/query-vars-wp-api/
function my_allow_meta_query( $valid_vars ) {

    $valid_vars = array_merge( $valid_vars, array( 'meta_key', 'meta_value' ) );
    return $valid_vars;
}
add_filter( 'rest_query_vars', 'my_allow_meta_query' );

if (!function_exists('tc_bao_chi_init')) {
   /**
    * Register a director post type.
    *
    * @link http://codex.wordpress.org/Function_Reference/register_post_type
    */
   function tc_bao_chi_init()
   {
       $labels = array(
           'name' => _x('TC-Báo chí', 'post type general name'),
           'singular_name' => _x('TC-Báo chí', 'post type singular name'),
           'menu_name' => _x('TC-Báo chí', 'admin menu'),
           'name_admin_bar' => _x('TC-Báo chí', 'add new on admin bar'),
           'add_new' => _x('Thêm TC-Báo chí', 'TC-Báo chí'),
           'add_new_item' => __('Thêm TC-Báo chí'),
           'new_item' => __('TC-Báo chí mới'),
           'edit_item' => __('Sửa TC-Báo chí'),
           'view_item' => __('Xem TC-Báo chí'),
           'all_items' => __('Tất cả TC-Báo chí'),
           'search_items' => __('Tìm kiếm TC-Báo chí'),
           'parent_item_colon' => __('Parent TC-Báo chí:'),
           'not_found' => __('Không tìm thấy TC-Báo chí.'),
           'not_found_in_trash' => __('Không tìm thấy TC-Báo chí trong Trash.')
       );

       $args = array(
           'labels' => $labels,
           'public' => true,
           'publicly_queryable' => true,
           'show_ui' => true,
           'show_in_nav_menus' => true,
           'query_var' => true,
           'rewrite' => array('slug' => 'tc-bao-chi','with_front' => false),
           'capability_type' => 'post',
           'has_archive' => true,
           'hierarchical' => false,
           'menu_position' => 30,
           'supports' => array('title', 'editor', 'author')
       );

       register_post_type('tc-bao-chi', $args);
       flush_rewrite_rules();
   }
}
add_action( 'init', 'tc_bao_chi_init' );


if (!function_exists('thu_vien_tai_lieu_init')) {
   /**
    * Register a director post type.
    *
    * @link http://codex.wordpress.org/Function_Reference/register_post_type
    */
   function thu_vien_tai_lieu_init()
   {
       $labels = array(
           'name' => _x('Thư viện - tài liệu', 'post type general name'),
           'singular_name' => _x('Thư viện - tài liệu', 'post type singular name'),
           'menu_name' => _x('Thư viện - tài liệu', 'admin menu'),
           'name_admin_bar' => _x('Thư viện - tài liệu', 'add new on admin bar'),
           'add_new' => _x('Thêm Thư viện - tài liệu', 'Thư viện - tài liệu'),
           'add_new_item' => __('Thêm Thư viện - tài liệu'),
           'new_item' => __('Thư viện - tài liệu mới'),
           'edit_item' => __('Sửa Thư viện - tài liệu'),
           'view_item' => __('Xem Thư viện - tài liệu'),
           'all_items' => __('Tất cả Thư viện - tài liệu'),
           'search_items' => __('Tìm kiếm Thư viện - tài liệu'),
           'parent_item_colon' => __('Parent Thư viện - tài liệu:'),
           'not_found' => __('Không tìm thấy Thư viện - tài liệu.'),
           'not_found_in_trash' => __('Không tìm thấy Thư viện - tài liệu trong Trash.')
       );

       $args = array(
           'labels' => $labels,
           'public' => true,
           'publicly_queryable' => true,
           'show_ui' => true,
           'show_in_nav_menus' => true,
           'query_var' => true,
           'rewrite' => array('slug' => 'thu-vien-tai-lieu','with_front' => false),
           'capability_type' => 'post',
           'has_archive' => true,
           'hierarchical' => false,
           'menu_position' => 30,
           'supports' => array('title', 'author')
       );

       register_post_type('thu-vien-tai-lieu', $args);
       flush_rewrite_rules();
   }
}
add_action( 'init', 'thu_vien_tai_lieu_init' );


if( function_exists('acf_add_options_page') ) {
   acf_add_options_page();
}







