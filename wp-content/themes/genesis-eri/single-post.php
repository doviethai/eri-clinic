<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); 
$categories = get_the_category();
    $cat_name = $categories[0]->cat_name;
?>
	
<div class="subpage" id="menu">
    <div class="sub_banner body">
        <div class="container">                    
            <div class="row">
	                  <div class="col-md-9">
	                     <h3><?php echo $cat_name; ?></h3>
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
		                 	 <div class="col-md-9">
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

		                        <div class="col-md-3  right-page">
                     				<div class="nav-left">       
                     					 <h3>Categories</h3>
				                        <?php
				                          $cat_items = get_categories();
				                          $parent = array();
				                          $child = array();
				                          while (count($cat_items) > 0) {
				                              $curentItem = array_shift($cat_items);
				                              if ($curentItem->parent == 0) {
				                                  $parent[] = $curentItem;
				                              } else {
				                                  if (!isset($child[$curentItem->parent])) {
				                                      $child[$curentItem->parent] = array();
				                                  }
				                                  $child[$curentItem->parent][] = $curentItem;
				                              }
				                          }
				                          foreach($parent as $menuParrent) {
				                              echo '<h5>'.$menuParrent->cat_name.'</h5>';                                                                            
				                              if (isset($child[$menuParrent->term_id]) && count($child[$menuParrent->term_id]) > 0) {
				                                      echo "<ul class=\"nav-ct-l\">";
				                                        foreach($child[$menuParrent->term_id] as $catChild){
				                                          $link = get_category_link($catChild->term_id); 
				                                      echo '<li>';
				                                      echo  "<a href=".$link."><i class=\"fa fa-caret-right\"></i>".$catChild->cat_name."</a>";                                                                      
				                                      echo  '</li>';
				                                  }                                
				                              }
				                              echo    "</ul>";                           
				                            }
				                          ?>           
                     				</div>
                     			</div>
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