<?php

/**
 * Wcm-static functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Wcm-static
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wcm_static_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Wcm-static, use a find and replace
		* to change 'wcm-static' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'wcm-static', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );


	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'wcm-static' ),
			'category-menu' => esc_html__( 'category', 'wcm-static' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'wcm_static_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'wcm_static_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wcm_static_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wcm_static_content_width', 640 );
}
add_action( 'after_setup_theme', 'wcm_static_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wcm_static_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'wcm-static' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'wcm-static' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 1', 'wcm-static' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'wcm-static' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title-footer1">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 2', 'wcm-static' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'wcm-static' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title-footer2">',
			'after_title'   => '</h2>',
		)
	);


	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 3', 'wcm-static' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'wcm-static' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title-footer3">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 4', 'wcm-static' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Add widgets here.', 'wcm-static' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title-footer4">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'wcm_static_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wcm_static_scripts() {
	wp_enqueue_style( 'wcm-static-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'wcm-static-style', 'rtl', 'replace' );

	wp_enqueue_script( 'wcm-static-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'home-js', get_template_directory_uri() . '/js/page/home/main.js', [], _S_VERSION, true );
    wp_enqueue_style('scss', get_template_directory_uri().'/scss/style.css', [], '5.0.1','all' );
    wp_enqueue_style('bootrap-icon', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css', [], '5.0.1','all' );
	wp_enqueue_style('google-Poppins', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', [], '5.0.1','all' );
	wp_enqueue_style('google-Inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap', [], '5.0.1','all' );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wcm_static_scripts' );

// remove button add to cart
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
Add_theme_support('post-thumbnails');

//add thame options
add_action( 'customize_register','thame_option_customize' );
function thame_option_customize($wp_customize){
	// ADD TEXT FOR TOP-HEADER
// add section
   $wp_customize->add_section('sec-text-header', array(
	'title'=> 'Header',
	'description'=> "this is text for top header",
   ) );
// add setting
   $wp_customize->add_setting("set-text-header", array(
	"type" =>"theme_mod",
	"default"=> "",
	"sanitize_callback"=> "sanitize_text_field"
   ) );

// add control
   $wp_customize->add_control("set-text-header", array(
	"type"=> "text",
	"label"=> "Text for top-header",
	"description"=> "enter text for top-header",
	"section" => 'sec-text-header'
   ) );


   
   // ADD IMAGE FOR SLIDER
   // add section

// add setting
$wp_customize->add_setting( 'my_slider_image', array(
    'default' => '', // Thiết lập URL ảnh mặc định nếu muốn
    'transport' => 'refresh', // Cách cập nhật tùy chỉnh (làm mới trang)
) );

// add control
$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'my_slider_image_ctrl', array(
    'label' => __( 'Ảnh cho Slider 1' ), // Nhãn được dịch
    'description' => __( 'Tải lên ảnh sẽ hiển thị trong slider của bạn.'), // Mô tả được dịch (tùy chọn)
    'section' => 'sec-text-header',
    'settings' => 'my_slider_image', // Kết nối control với cài đặt
    'mime_type' => 'image', // Hạn chế tải lên hình ảnh
) ) );

// slider-2

// add setting
$wp_customize->add_setting( 'my_slider_image2', array(
    'default' => '', // Thiết lập URL ảnh mặc định nếu muốn
    'transport' => 'refresh', // Cách cập nhật tùy chỉnh (làm mới trang)
) );

// add control
$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'my_slider_image_ctrl2', array(
    'label' => __( 'Ảnh cho Slider 2' ), // Nhãn được dịch
    'description' => __( 'Tải lên ảnh sẽ hiển thị trong slider của bạn.'), // Mô tả được dịch (tùy chọn)
    'section' => 'sec-text-header',
    'settings' => 'my_slider_image2', // Kết nối control với cài đặt
    'mime_type' => 'image', // Hạn chế tải lên hình ảnh
) ) );


// sale time
$wp_customize->add_section('sec_time_sale', array(
	'title'=> __('Sale product'),
) );

$wp_customize->add_setting('set_time_sale', array(
	'type'=> 'theme_mod',
	'default'=> '',
    'transport' => 'refresh', // Cách cập nhật tùy chỉnh (làm mới trang)
) );

$wp_customize->add_control('set_time_sale', array(
	'label'=> __('time for sale product'),
	'description'=> __( 'plase enter time for sale product'),
	'section'=>'sec_time_sale',
	'settings'=>'set_time_sale',
	'type'=> 'number',
) );

// set for banner
$wp_customize->add_section('sec_banner_home', array(
	'title'=> __('Banner'),
) );
$wp_customize->add_setting('set_banner_title', array(
	'default'=>  '',
    'transport' => 'refresh', // Cách cập nhật tùy chỉnh (làm mới trang)
	'type'=> 'theme_mod',
)) ;
$wp_customize->add_control('set_banner_title', array(
	'label'=> __('Title for banner'),
	'description'=> __( 'enter title for banner'),
	'type'=> 'text',
	'section'=> 'sec_banner_home',
	'settings'=>'set_banner_title',
) );

$wp_customize->add_setting('set_banner_content', array(
	'default'=>  '',
    'transport' => 'refresh', // Cách cập nhật tùy chỉnh (làm mới trang)
	'type'=> 'theme_mod',
)) ;
$wp_customize->add_control('set_banner_content', array(
	'label'=> __('Title for banner'),
	'description'=> __( 'enter content for banner'),
	'type'=> 'textarea',
	'section'=> 'sec_banner_home',
	'settings'=>'set_banner_content',
) );

$wp_customize->add_setting('set_banner_url', array(
	'default'=>  '',
    'transport' => 'refresh', // Cách cập nhật tùy chỉnh (làm mới trang)
	'type'=> 'theme_mod',
)) ;
$wp_customize->add_control('set_banner_url', array(
	'label'=> __('Url for button'),
	'description'=> __( 'enter url for button'),
	'type'=> 'text',
	'section'=> 'sec_banner_home',
	'settings'=>'set_banner_url',
) );

$wp_customize->add_setting( 'set_img_banner', array(
    'default' => '', // Thiết lập URL ảnh mặc định nếu muốn
    'transport' => 'refresh', // Cách cập nhật tùy chỉnh (làm mới trang)
) );

// add control
$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'set_img_banner', array(
    'label' => __( 'Ảnh cho banner' ), // Nhãn được dịch
    'description' => __( 'Tải lên ảnh sẽ hiển thị trong banner của bạn.'), // Mô tả được dịch (tùy chọn)
    'section' => 'sec_banner_home',
    'settings' => 'set_img_banner', // Kết nối control với cài đặt
    'mime_type' => 'image', // Hạn chế tải lên hình ảnh
) ) );


}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

