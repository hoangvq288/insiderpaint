<?php
/**
 * Theme: Pratt
 * 
 * Functions file to make changes to the parent theme's functions. 
 *
 * @package pratt
 */
 
/**
 * SET THEME OPTIONS HERE
 *
 * Theme options can be overriden here. These are all set the same defaults as in the 
 * parent theme except for the navbar_classes. You can change whatever you want.
 * 
 * Parameters:
 * background_color - Hex code for default background color without the #. eg) ffffff
 *
 * content_width - Only for determining "full width" image. Actual width in Bootstrap.css.
 * 		1170 for screens over 1200px resolution, otherwise 970.
 *
 * embed_video_width - Sets the width of videos that use the <embed> tag. This defaults
 * 		to the smallest width of content with a sidebar before the sidebar collapses.
 *		The height is automatically set at a 16:9 ratio unless overridden.
 *
 * embed_video_height - Leave empty to automatically set at a 16:9 ratio to the width
 * post_formats - WordPress extra post formats. i.e. 'aside', 'image', 'video', 'quote',
 * 		'link'
 *
 * touch_support - Whether to load touch support for carousels (sliders)
 * fontawesome - Whether to load font-awesome font set or not
 *
 * bootstrap_gradients - Whether to load Bootstrap "theme" CSS for gradients
 *
 * navbar_classes - One or more of navbar-default, navbar-inverse, navbar-fixed-top, etc.
 *
 * custom_header_location - If 'header', displays the custom header above the navbar. If
 * 		'content-header', displays it below the navbar in place of the colored content-
 *		header section. If 'both' (or anything else), it will display the header text but
 *		also display the custom header below the navbar.
 *
 * image_keyboard_nav - Whether to load javascript for using the keyboard to navigate
 		image attachment pages
 *
 * sample_widgets - Whether to display sample widgets in the footer and page-bottom widet
 		areas.
 *
 * sample_footer_menu - Whether to display sample footer menu with Top and Home links
 * 
 * testimonials - Whether to activate testimonials custom post type if Jetpack plugin is 
 * 		active
 *
 * NOTE: THIS VARIABLE HAS BEEN RENAMED FROM $THEME_OPTIONS. PLEASE UPDATE YOUR CHILD THEMES.
 */
$xsbf_theme_options = array(
	//'background_color' 		=> 'f2f2f2',
	//'content_width' 			=> 1170,
	//'embed_video_width' 		=> 1170,
	//'embed_video_height' 		=> null, // i.e. calculate it automatically
	//'post_formats' 			=> '',
	//'touch_support' 			=> true,
	//'fontawesome' 			=> true,
	//'bootstrap_gradients' 	=> false,
	'navbar_classes'			=> 'navbar-default navbar-fixed-top',
	'custom_header_location' 	=> 'content-header',
	//'image_keyboard_nav' 		=> true,
	//'sample_widgets' 			=> true,
	//'sample_footer_menu'		=> true
	//'testimonials'				=> true // requires Jetpack 
);

/* 
 * Load the parent theme's stylesheet here for performance reasons instead of using 
 * @include in this theme's stylesheet. Load this after the parent theme's styles.
 */
//add_action( 'wp_enqueue_scripts', 'xsbf_pratt_enqueue_styles', 20 );
add_action( 'wp_enqueue_scripts', 'xsbf_pratt_enqueue_styles' );
function xsbf_pratt_enqueue_styles() {
	wp_enqueue_style( 'flat-bootstrap', 
		get_template_directory_uri() . '/style.css',
		array ( 'bootstrap', 'theme-base', 'theme-flat')
	);

	wp_enqueue_style( 'pratt', 
		get_stylesheet_directory_uri() . '/style.css', 
		array('flat-bootstrap') 
	);
}

/**
 * Override custom logo and header from the parent theme. Note priority 12 to run after
 * the parent theme's setup.
 */
/*add_action( 'after_setup_theme', 'xsbf_pratt_after_setup_theme' ); 
function xsbf_pratt_after_setup_theme() {*/
add_action( 'after_setup_theme', 'xsbf_custom_header_setup', 12 ); 
function xsbf_custom_header_setup() {

	/* Remove custom logo support (for now) */
	remove_theme_support( 'custom-logo'); 

	/* Override custom headers */

	add_theme_support( 'custom-header', apply_filters( 'xsbf_custom_header_args', array(
		'header-text' 			=> true, // allow user to set the header text color
		'default-text-color' 	=> '16a085', // should match css link color
		'default-image' 		=> get_stylesheet_directory_uri() . '/images/headers/city.jpg',
		'width' 				=> 1600,
		'height' 				=> 700, //large: home 700, other 400; mobile home 480, other 340 mobile; images are 900
		'flex-width'             => true,
		'flex-height'            => true,
		'wp-head-callback'       => 'xsbf_header_style'
	) ) );

	//The %2$s references the child theme directory (ie the stylesheet directory), use 
	// %s to reference the parent directory.
	register_default_headers( array(
		'abstract' => array(
			'url'           => '%2$s/images/headers/abstract.jpg',
			'thumbnail_url' => '%2$s/images/headers/abstract-thumbnail.jpg',
			'description'   => __( 'Abstract', 'flat-bootstrap' )
		),
		'book' => array(
			'url'           => '%2$s/images/headers/book.jpg',
			'thumbnail_url' => '%2$s/images/headers/book-thumbnail.jpg',
			'description'   => __( 'Book', 'flat-bootstrap' )
		),
		'briefcase' => array(
			'url'           => '%2$s/images/headers/briefcase.jpg',
			'thumbnail_url' => '%2$s/images/headers/briefcase-thumbnail.jpg',
			'description'   => __( 'Briefcase', 'flat-bootstrap' )
		),
		'camera' => array(
			'url'           => '%2$s/images/headers/camera.jpg',
			'thumbnail_url' => '%2$s/images/headers/camera-thumbnail.jpg',
			'description'   => __( 'Camera', 'flat-bootstrap' )
		),
		'city' => array(
			'url'           => '%2$s/images/headers/city.jpg',
			'thumbnail_url' => '%2$s/images/headers/city-thumbnail.jpg',
			'description'   => __( 'City', 'flat-bootstrap' )
		),
		'desk' => array(
			'url'           => '%2$s/images/headers/desk.jpg',
			'thumbnail_url' => '%2$s/images/headers/desk-thumbnail.jpg',
			'description'   => __( 'Desk', 'flat-bootstrap' )
		),
		'guitar' => array(
			'url'           => '%2$s/images/headers/guitar.jpg',
			'thumbnail_url' => '%2$s/images/headers/guitar-thumbnail.jpg',
			'description'   => __( 'Guitar', 'flat-bootstrap' )
		),
		'notepad' => array(
			'url'           => '%2$s/images/headers/notepad.jpg',
			'thumbnail_url' => '%2$s/images/headers/notepad-thumbnail.jpg',
			'description'   => __( 'Notepad', 'flat-bootstrap' )
		),
		'skyline' => array(
			'url'           => '%2$s/images/headers/skyline.jpg',
			'thumbnail_url' => '%2$s/images/headers/skyline-thumbnail.jpg',
			'description'   => __( 'Skyline', 'flat-bootstrap' )
		),
	) );

}

/**
 * Styles the header image and text displayed on the blog
 *
 * This function handles BOTH previewing in the customizer as well as the actual display
 * of the header in the front-end. This function ONLY needs to handle hiding or displaying
 * the site title and custom header text color. All other styles are from the front-end 
 * CSS.
 *
 * Since Pratt doesn't have a header above the top navbar, we need to reverse the behavoir
 * of displaying the site title or not. i.e. Put it back to the "normal" way it was
 * intended to work.
 *
 * @see xsbf_custom_header_setup().
 */
function xsbf_header_style() {

	// get_header_textcolor() returns 'blank' if hiding site title and tagline or returns
	// any hex color value. HEADER_TEXTCOLOR is always the default color.
	$header_text_color = get_header_textcolor();

	// If no custom options for text are set, let's bail
	if ( HEADER_TEXTCOLOR == $header_text_color AND ! display_header_text() ) {
	//if ( HEADER_TEXTCOLOR == $header_text_color ) {
		return;
	}

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css" id="custom-header-css">
	<?php
		// Has the text been hidden?
		if ( 'blank' == $header_text_color ) :
	?>
		.navbar-brand {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that
		elseif ( HEADER_TEXTCOLOR != $header_text_color ) :
	?>
		.navbar-default .navbar-brand,
		.navbar-inverse .navbar-brand {
			color: #<?php echo $header_text_color; ?>;
		}
		.navbar-default .navbar-brand:hover,
		.navbar-default .navbar-brand:active,
		.navbar-default .navbar-brand:focus,
		.navbar-inverse .navbar-brand:hover,
		.navbar-inverse .navbar-brand:active,
		.navbar-inverse .navbar-brand:focus {
			color: #<?php echo $header_text_color; ?>;
			opacity: 0.75;
		}
		/* This isn't ready to go into "production" yet. Still testing. */
		/*
		a,
		i {
			color: #<?php echo $header_text_color; ?>;
		}
		a:hover,
		a:active,
		a:focus {
			color: #<?php echo $header_text_color; ?>;
			opacity: 0.75;
		}
		*/
		/* End testing. */
	<?php endif; ?>

	<?php if ( display_header_text() ) : ?>
		.navbar-brand {
			position: relative;
			clip: auto;
		}
	<?php endif; ?>
	</style>
	<?php
} //endfunction xsbf_header_style



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
           'hierarchical' => false,
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
           'hierarchical' => false,
           'menu_position' => 30,
           'supports' => array('title', 'editor', 'author')
       );

       register_post_type('tin-tuc', $args);
       flush_rewrite_rules();
   }
}
add_action( 'init', 'tintuc_init' );


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

?>





