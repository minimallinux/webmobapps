<?php

namespace App;

use Roots\Sage\Container;
use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;

/**
 * Theme assets
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('sage/main.css', asset_path('styles/main.css'), false, null);
    wp_enqueue_script('sage/main.js', asset_path('scripts/main.js'), ['jquery'], null, true);
}, 100);

/**
 * Theme setup
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from Soil when plugin is activated
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil-clean-up');
    add_theme_support('soil-jquery-cdn');
    add_theme_support('soil-nav-walker');
    add_theme_support('soil-nice-search');
    add_theme_support('soil-relative-urls');
    add_theme_support('woocommerce');

    /**
     * Enable plugins to manage the document title
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Register navigation menus
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
     register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage'),
        'mobile_navigation' => __('Mobile Navigation', 'sage'),
        'footer_navigation' => __('Footer Navigation', 'sage')
    ]);

    /**
     * Enable post thumbnails
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable HTML5 markup support
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

    /**
     * Enable selective refresh for widgets in customizer
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');
   /**
     * Use main stylesheet for visual editor
     * @see resources/assets/styles/layouts/_tinymce.scss
     */
    add_editor_style(asset_path('styles/main.css'));
}, 20);
/**
 * Register sidebars
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="footer-title">',
        'after_title'   => '</h4 class="footer-title">'
    ];
    register_sidebar([
        'name'          => __('Primary', 'sage'),
        'id'            => 'sidebar-primary',
        'description' => __( 'Main Sidebar', 'sage' )
    ] + $config);
    //Image Widget Areas for banners/images etc in footer under logo
    register_sidebar([
        'name'          => __('Image1 Footer', 'sage'),
        'id'            => 'image1-sidebar-footer',
        'description' => __( 'The Image1 footer widget area', 'sage' )
    ] + $config);
    register_sidebar([
        'name'          => __('Image2 Footer', 'sage'),
        'id'            => 'image2-sidebar-footer',
        'description' => __( 'The Image2 footer widget area', 'sage' )
    ] + $config);
    register_sidebar([
        'name'          => __('Image3 Footer', 'sage'),
        'id'            => 'image3-sidebar-footer',
        'description' => __( 'The Image3 footer widget area', 'sage' )
    ] + $config);
    register_sidebar([
        'name'          => __('Image4 Footer', 'sage'),
        'id'            => 'image4-sidebar-footer',
        'description' => __( 'The Image4 footer widget area', 'sage' )
    ] + $config);    //Other footer widget areas
    //First footer widget area, located in the footer. Empty by default.
    register_sidebar([
        'name' => __( 'First Footer Widget Area', 'sage' ),
        'id' => 'first-footer-widget-area',
        'description' => __( 'The first footer widget area', 'sage' )
    ] + $config);
     //Second footer widget area, located in the footer. Empty by default.
    register_sidebar([
        'name' => __( 'Second Footer Widget Area', 'sage' ),
        'id' => 'second-footer-widget-area',
        'description' => __( 'The second footer widget area', 'sage' )
    ] + $config);
     //Third footer widget area, located in the footer. Empty by default.
    register_sidebar([
        'name' => __( 'Third Footer Widget Area', 'sage' ),
        'id' => 'third-footer-widget-area',
        'description' => __( 'The third footer widget area', 'sage' )
    ] + $config);
      //Fourth footer widget area, located in the footer. Empty by default.
    register_sidebar([
        'name' => __( 'Fourth Footer Widget Area', 'sage' ),
        'id' => 'fourth-footer-widget-area',
        'description' => __( 'The Fourth footer widget area', 'sage' )
    ] + $config);
    //Social widget area,located in the footer bottom right. Empty by default.
    register_sidebar([
        'name' => __( 'Social Footer Widget Area', 'sage' ),
        'id' => 'social-footer-widget-area',
        'description' => __( 'The Social footer widget area', 'sage' )
    ] + $config);
});

/**
 * Updates the `$post` variable on each iteration of the loop.
 * Note: updated value is only available for subsequently loaded views, such as partials
 */
add_action('the_post', function ($post) {
    sage('blade')->share('post', $post);
});

/**
 * Setup Sage options
 */
add_action('after_setup_theme', function () {
    /**
     * Add JsonManifest to Sage container
     */
    sage()->singleton('sage.assets', function () {
        return new JsonManifest(config('assets.manifest'), config('assets.uri'));
    });

    /**
     * Add Blade to Sage container
     */
    sage()->singleton('sage.blade', function (Container $app) {
        $cachePath = config('view.compiled');
        if (!file_exists($cachePath)) {
            wp_mkdir_p($cachePath);
        }
        (new BladeProvider($app))->register();
        return new Blade($app['view']);
    });

    /**
     * Create @asset() Blade directive
     */
    sage('blade')->compiler()->directive('asset', function ($asset) {
        return "<?= " . __NAMESPACE__ . "\\asset_path({$asset}); ?>";
    });
// 1. customize ACF path
add_filter('acf/settings/path', __NAMESPACE__. '\my_acf_settings_path');
function my_acf_settings_path( $path ) {
 // update path
 $path = get_stylesheet_directory() . '/acf/';
 // return
 return $path; 
}
// 2. customize ACF dir
add_filter('acf/settings/dir', __NAMESPACE__ . '\my_acf_settings_dir');
function my_acf_settings_dir( $dir ) {
 // update path
 $dir = get_stylesheet_directory_uri() . '/acf/';
 // return
 return $dir; 
}
// 3. Hide ACF field group menu item
//add_filter('acf/settings/show_admin', '__return_false');
// 4. Include ACF
include_once( get_stylesheet_directory() . '/acf/acf.php' );
});

// Enable shortcodes in widgets
add_filter( 'widget_html', 'shortcode_unautop' );
add_filter('widget_html', 'do_shortcode');


