<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


	<div class="subpage">
         <div class="sub_banner error_dr">
            <div class="container">
               <div class="row">
                  <div class="col-md-9">
                     <h3>Page not found</h3>
                     <p>Try searching for the best match or browse the links:</p>
                  </div>
                  <div class="col-md-3">
                     <input type="text" placeholder="Search" class="ip-search">
                  </div>
               </div>
            </div>
         </div>
         <div class="sub_content" id="error_dr">
            <div class="container">
               <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                     <div class="error_404">
                        <h1>404</h1>
                        <h2>Ooopps.! The Page you were<br> looking for, couldn't be found.</h2>
                        <a href="<?php echo get_site_url();?>">Back to Homepage</a>
                     </div>
                  </div>
                  <div class="col-md-3"></div>
               </div>
            </div>
         </div>
      </div>

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
