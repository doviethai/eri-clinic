<?php

/**
 * Created by PhpStorm.
 * User: HiepLT
 * Date: 12/17/14
 * Time: 16:39
 */

require_once(dirname(__FILE__) . '/lib/init.php');
add_theme_support( 'html5' );
// add meta
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
add_action('genesis_meta', 'eri_head_meta');
function eri_head_meta()
{
    echo '<meta http-equiv="X-UA-Compatible" content="chrome=1">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
}

// Unhook default Thematic functions
add_action('init', 'unhook_thematic_functions');
function unhook_thematic_functions()
{
    // Don't forget the position number if the original function has one
    remove_action('genesis_header', 'genesis_do_header');
    remove_action('genesis_footer', 'genesis_do_footer');
    remove_action('genesis_post_title', 'genesis_do_post_title');
    remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
}

// check layout page is home
add_filter( 'template_include', 'var_template_include', 1000 );
function var_template_include( $t ){
    $GLOBALS['layout_page_template'] = basename($t);
    return $t;
}

function get_layout_page_template(){
    if( isset( $GLOBALS['layout_page_template']) && $GLOBALS['layout_page_template'] != "" )
        return $GLOBALS['layout_page_template'];
    return false;
}

function getTitlebyLan($type,$showdes = null){      
    $locale_code = get_locale();       
    $options = get_option('wpcf-custom-types'); 
    $string_panel ='';
    if($locale_code == 'ja'){
        $string_panel = '<h3>' .$options[$type]['labels']['name'].'</h3>';             
        add_filter('wpseo_title', 'assignPageTitle' );
    }
    if($locale_code == 'vi'){
        $string_panel = '<h3>' .$options[$type]['labels']['name-vi'].'</h3>';          
    }
    if($locale_code == 'en_US'){
        $string_panel = '<h3>' .$options[$type]['labels']['name-en'].'</h3>';    
    }
    if($showdes){
        $string_panel .='<p>' .$options[$type]['description'].'</p>';
    }  else{
        $string_panel .='<p>&nbsp;</p>';
    }
    
    return $string_panel;    
}

function wp_get_attachment( $attachment_id ) {
    $attachment = get_post( $attachment_id );
    return array(
        'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
        'caption' => $attachment->post_excerpt,
        'description' => $attachment->post_content,
        'href' => get_permalink( $attachment->ID ),
        'src' => $attachment->guid,
        'title' => $attachment->post_title
    );
}


function image_shortcode($atts, $content = null) {
    $pathImg = get_site_url().'/wp-content/themes/genesis-eri/img/sub/service-detail/'.$atts['name'];
    echo $pathImg; 
}

add_shortcode('image','image_shortcode');

function link_shortcode($atts, $content = null) {
    $pathLink = get_site_url().'/wp-content/themes/genesis-eri/img/sub/service-detail/'.$atts['name'];
    echo $pathLink;
}

add_shortcode('link','link_shortcode');


