<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	
<div class="subpage" id="menu">
    <div class="sub_banner body">
        <div class="container">                    
            <div class="row">
	                  <div class="col-md-9">
	                     <h3><?php echo apply_filters('genesis_post_title_text', get_the_title()); ?></h3>
	                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
	                  </div>
	                  <div class="col-md-3">
	                     <input type="text" placeholder="Search" class="ip-search">
	                  </div>
	                  </div>
	               </div>
	            </div>
	         </div>


          <div class="sub_content" id="men_dr">
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
<style type="text/css">
.entry-header, .entry-meta{
	display: none;
}
</style>        

<?php get_sidebar(); ?>
<?php get_footer(); ?>