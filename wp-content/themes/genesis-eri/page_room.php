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

//* Template Name: Room Template
get_header();
?>

 <div class="subpage" id="menu">
    <div class="sub_banner body">
        <div class="container">                    
            <div class="row">
                  <div class="col-md-9">
                     <h3><?php echo apply_filters('genesis_post_title_text', get_the_title()); ?></h3>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                  </div>
                  <div class="col-md-3">
                     <input type="text" class="ip-search" placeholder="Search" style="font-family: ts-unused;">
                  </div>
               </div>
        </div>
    </div>
    
      
    <div class="sub_content" id="room_dr">
        <div class="container">
                 <div class="row">
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



<?php
    get_footer();
?>