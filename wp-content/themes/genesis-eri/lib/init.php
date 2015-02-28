<?php
/**
 * Created by PhpStorm.
 * User: HiepLT
 * Date: 12/26/14
 * Time: 14:08
 */

add_action('eri_init', 'eri_constants');
function eri_constants()
{

    //* Define Theme Info Constants
    define('DS', DIRECTORY_SEPARATOR);
    // get directory them name
    define('ERI_NAME', basename(dirname(dirname(__FILE__))));
    // get directory them path
    define('ERI_LIB_DIR', dirname(__FILE__) . DS);
    // set images directory
    define('ERI_IMG_DIR_NAME', 'img');

    //* Define URL Location Constants
    define('ERI_CSS_URL', get_theme_root_uri() . '/' . ERI_NAME . '/css');
    define('ERI_JS_URL', get_theme_root_uri() . '/' . ERI_NAME . '/js');
    define('ERI_IMG_URL', get_theme_root_uri() . '/' . ERI_NAME . '/' . ERI_IMG_DIR_NAME);
}

add_action('eri_init', 'eri_load_frameworks');
function eri_load_frameworks()
{

    //* Short circuit, if necessary
    if (defined('ERI_LOAD_FRAMEWORK') && ERI_LOAD_FRAMEWORK === false)
        return;
    //* Load Framework
    require_once(ERI_LIB_DIR . 'framework.php');

    //* Load Widgets
    require_once(ERI_LIB_DIR . 'widgets/widgets.php');

    //include override theme genesis - file:genesis\lib\structure\header.php
    require_once ERI_LIB_DIR . 'structure' . DS . 'header.php';
    //include override theme genesis - file:genesis\lib\structure\footer.php
    require_once ERI_LIB_DIR . 'structure' . DS . 'footer.php';

    require_once ERI_LIB_DIR . 'structure' . DS . 'content.php';
}

//* Run the genesis_init hook
do_action('eri_init');


add_action('after_setup_theme', 'eri_theme_setup');
function eri_theme_setup()
{
    // This theme uses wp_nav_menu() in one location.
    register_nav_menu('eri_main', __('Eri Main Menu', ERI_NAME));
}


// register widget for theme
add_action('widgets_init', 'eri_widgets_init');
function eri_widgets_init()
{
    // ------------------------------------------------------------------------
    //* Header
    register_sidebar(array(
        'name' => __('Eri - Header: Main', ERI_NAME),
        'id' => 'eri-main-menu',
        'description' => __('Eri Main Menu', ERI_NAME),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Eri - Header: Language', ERI_NAME),
        'id' => 'eri-header-language',
        'description' => __('Eri Header Language', ERI_NAME),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Eri - Header: Phone', ERI_NAME),
        'id' => 'eri-header-phone',
        'description' => __('Eri Header Phone', ERI_NAME),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    // ------------------------------------------------------------------------
    //* Body
    register_sidebar(array(
        'name' => __('Eri - Body: Sliders', ERI_NAME),
        'id' => 'eri-home-slider',
        'description' => __('Eri Home Sliders', ERI_NAME),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    // ------------------------------------------------------------------------
    //* Footer
    register_sidebar(array(
        'name' => __('Eri - Footer: About', ERI_NAME),
        'id' => 'eri-about',
        'description' => __('Eri About', ERI_NAME),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Eri - Footer: Copy Right', ERI_NAME),
        'id' => 'eri-copy-right',
        'description' => __('Eri - Footer: Copy Right', ERI_NAME),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Eri - Footer: News', ERI_NAME),
        'id' => 'eri-home-clinic-news',
        'description' => __('Eri Home Clinic News', ERI_NAME),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));



    register_sidebar(array(
        'name' => __('Eri - Footer: Newsletter', ERI_NAME),
        'id' => 'eri-footer-newsletter',
        'description' => __('Eri Footer Newsletter', ERI_NAME),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Eri - Footer: Menu 1', ERI_NAME),
        'id' => 'eri-footer-menu-one',
        'description' => __('Eri Footer Menu One', ERI_NAME),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Eri - Footer: Menu 2', ERI_NAME),
        'id' => 'eri-footer-menu-two',
        'description' => __('Eri Footer Menu Two', ERI_NAME),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Eri - Footer: Menu 3', ERI_NAME),
        'id' => 'eri-footer-menu-three',
        'description' => __('Eri Footer Menu Three', ERI_NAME),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Eri - Footer: Menu 4', ERI_NAME),
        'id' => 'eri-footer-menu-four',
        'description' => __('Eri Footer Menu Four', ERI_NAME),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));




    register_sidebar(array(
        'name' => __('Eri - Advertise top', ERI_NAME),
        'id' => 'advertise-top',
        'description' => __('Eri - Advertise top', ERI_NAME),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Eri - Advertise bottom', ERI_NAME),
        'id' => 'advertise-bottom',
        'description' => __('Eri - Advertise bottom', ERI_NAME),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Eri - Advertise left', ERI_NAME),
        'id' => 'advertise-left',
        'description' => __('Eri - Advertise left', ERI_NAME),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Eri - Advertise right', ERI_NAME),
        'id' => 'advertise-right',
        'description' => __('Eri - Advertise right', ERI_NAME),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Eri - Contact Map', ERI_NAME),
        'id' => 'eri-contact-map',
        'description' => __('Eri Contact Map', ERI_NAME),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));





}

//add file javascript for theme
add_action('wp_enqueue_scripts', 'eri_theme_scripts');
function eri_theme_scripts()
{
    //add on head
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', ERI_JS_URL . '/jquery.js', array(), '1.11.1', false);
    wp_enqueue_script('child-script-jquery-mobile', ERI_JS_URL . '/jquery-mobile.js', array(), '1.3.2', false);
    wp_enqueue_script('child-script-jquery-mousewheel', ERI_JS_URL . '/jquery.mousewheel.js', array(), '3.1.9', false);
    wp_enqueue_script('child-script-jquery-jscrollpane', ERI_JS_URL . '/jquery.jscrollpane.js', array(), '1.0.0', false);
    wp_enqueue_script('child-script-bootstrap', ERI_JS_URL . '/bootstrap.min.js', array(), '3.3.1', false);
    wp_enqueue_script('child-script-bootstrap-lightbox', ERI_JS_URL . '/ekko-lightbox.min.js', array(), '0.7.0', false);
    wp_enqueue_script('child-script-jquery-bxslider', ERI_JS_URL . '/jquery.bxslider.min.js', array(), '4.1.2', false);
    //add on footer
    wp_enqueue_script('child-script-main', ERI_JS_URL . '/main.js', array(), '1.0.0', true);
    wp_enqueue_script('child-script-custom', ERI_JS_URL . '/custom.js', array(), '1.0.0', true);
}

//add file stylesheet for theme
add_action('wp_enqueue_scripts', 'eri_theme_styles');
function eri_theme_styles()
{
    $lanCode = get_locale();
    $langStyle = $lanCode.'.css';
    wp_enqueue_style('child-style-jquery-jscrollpane', ERI_CSS_URL . '/jquery.jscrollpane.css', array(), '1.0.0', 'all');
    wp_enqueue_style('child-style-bootstrap', ERI_CSS_URL . '/bootstrap.min.css', array(), '3.3.1', 'all');
    wp_enqueue_style('child-style-bootstrap-lightbox', ERI_CSS_URL . '/ekko-lightbox.min.css', array(), '0.7.0', 'all');
    wp_enqueue_style('child-style-font-awesome', ERI_CSS_URL . '/font-awesome.css', array(), '4.2.0', 'all');
    wp_enqueue_style('child-style-jquery_bxslider', ERI_CSS_URL . '/jquery.bxslider.css', array(), '4.1.2', 'all');
    wp_enqueue_style('child-style-default', ERI_CSS_URL . '/default.css', array(), '1.0.0', 'all');
    wp_enqueue_style('style-flow-lang', ERI_CSS_URL .'/'. $langStyle, array(), '1.0.0', 'all');
    wp_enqueue_style('custom-style', ERI_CSS_URL .'/'. 'custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('font-style','http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600', array(), '1.0.0', 'all');

}