
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

//* Template Name: Faq Template
get_header();?>
   <div class="subpage">   
      <div class="sub_banner faq_dr">
            <div class="container">
               <div class="row">
                  <div class="col-md-9">
                   <h3><?php echo apply_filters('genesis_post_title_text', get_the_title()); ?></h3>
                     <p>Frequently Asked Questions and their answers can be found in each category.</p>
                  </div>
                  <div class="col-md-3">
                     <input type="text" placeholder="Search" class="ip-search">
                  </div>
               </div>
            </div>
         </div>              
         <div class="sub_content" id="faq_dr">
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
        <script type="text/javascript">
            $(document).ready(function ($) {
                // delegate calls to data-toggle="lightbox"
                $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
                    event.preventDefault();
                    return $(this).ekkoLightbox({
                        onShown: function() {
                            if (window.console) {
                                return console.log('Checking our the events huh?');
                            }
                        },
                  onNavigate: function(direction, itemIndex) {
                            if (window.console) {
                                return console.log('Navigating '+direction+'. Current item: '+itemIndex);
                            }
                  }
                    });
                });

              

            });
        </script>

<?php get_footer(); ?>