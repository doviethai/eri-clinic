<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Genesis\Templates
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/genesis/
 */

//* Template Name: Default Template
get_header();
?>
<link rel="stylesheet" href="<?php echo  get_stylesheet_directory_uri() .'/css/beauty.css'; ?> ">
<div class="subpage" id="menu">
    <div class="sub_banner body">
        <div class="container">                    
            <div class="row">
                  <div class="col-md-9">
                     <h3><?php echo apply_filters('genesis_post_title_text', get_the_title()); ?></h3>
                     <p>&nbsp;</p>
                  </div>
                  <div class="col-md-3">
                     <form role="search" method="get" action="<?php echo esc_url(home_url('/')) ?>">
                            <input type="search" class="ip-search" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder') ?>" value="<?php echo get_search_query() ?>" name="s" title="<php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                            <input type="hidden" name="paged" value="1" />
                        </form>
                  </div>
               </div>
        </div>
    </div>      
     <div class="sub_content" id="men_dr">
        <div class="container">
                 <div class="row">
                  <?php 
                    //echo do_shortcode("[huge_it_slider id ='25']");                   
                    $locale_code = get_locale();                  
                    if($locale_code == 'ja'){
                      echo do_shortcode("[huge_it_slider id ='31']"); 
                    }
                    if($locale_code == 'vi'){
                      echo do_shortcode("[huge_it_slider id ='32']"); 
                    }
                    if($locale_code == 'en_US'){
                      echo do_shortcode("[huge_it_slider id ='25']"); 
                    }
                  ?> 
                       <?php
                          do_action('genesis_before_content_sidebar_wrap');
                          do_action('genesis_before_content');
                          do_action('genesis_before_loop');
                          do_action('genesis_loop');
                          do_action('genesis_after_loop');
                          do_action('genesis_after_content');
                          do_action('genesis_after_content_sidebar_wrap');
                        ?>                    
              </div>              
        </div>
    </div>    
</div>
 <script type="text/javascript" id="sourcecode">  
         $(function()
         {
           $('.view_history[data-type="multi"] .item').each(function(){
            var next1 = $(this).next();
            if (!next1.length) {
              next1 = $(this).siblings(':first');
            }
            next1.children(':first-child').clone().appendTo($(this));
            for (var i=0;i<3;i++) {
              next1=next1.next();
              if (!next1.length) {
                next1 = $(this).siblings(':first');
              }
              next1.children(':first-child').clone().appendTo($(this));
            }
          });
         });
      </script>
  <style type="text/css">
.entry-header, .entry-meta{
  display: none;
}
</style> 
<?php
    get_footer();
?>