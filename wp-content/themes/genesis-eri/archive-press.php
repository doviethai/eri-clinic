<?php get_header(); ?>

<div class="subpage" id="menu">
    <div class="sub_banner body">
        <div class="container">                    
            <div class="row">
	                  <div class="col-md-9">
	                       <h3><?php wp_title("",true); ?></h3>
	                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
	                  </div>
	                  <div class="col-md-3">
	                     <input type="text" placeholder="Search" class="ip-search">
	                  </div>
	                  </div>
	               </div>
	            </div>
	         </div>


          <div class="sub_content" id="men_dr" style="margin-top:0px;">
		        <div class="container">
		                 <div class="row">		
			                  <div class="col-md-9">	                       	              
				                 	<?php query_posts( array( 'post_type' => 'press', 'showposts' => 5 ) );
										  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
										  <div class="item-media">
										  <h3><?php the_title(); ?></h3>
										  <p><?php the_content(); ?></p>
										  </div>
									<?php endwhile; endif; wp_reset_query(); ?>
									<?php   echo paging_nav(); ?>        

								</div>
						<div class="col-md-3">	    
							 		<?php if (is_active_sidebar("advertise-right")){ ?>
	                                        <?php dynamic_sidebar("advertise-right"); ?>
	                         		<?php } ?>
							 </div>
							 
		             	 </div>              
		        </div>
		    </div>  
 </div>
 <?php
function paging_nav() {
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $GLOBALS['wp_query'] = $my_query = new WP_Query( array( 'post_type' => 'press', 'posts_per_page' => 5, 'paged' => $paged ) );
      if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
        return;
     }    
    $paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;    
    $pagenum_link = html_entity_decode( get_pagenum_link() );    
    $query_args   = array();
    $url_parts    = explode( '?', $pagenum_link );

    if ( isset( $url_parts[1] ) ) {
        wp_parse_str( $url_parts[1], $query_args );
    }
    $pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
    $pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

    $format  = $GLOBALS['wp_rewrite']->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
    $format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';
    // Set up paginated links.
    $links = paginate_links( array(
        'base'     => $pagenum_link,        
        'total'    => $GLOBALS['wp_query']->max_num_pages,        
        'prev_text' => __( 'Pre', 'genesis-eri' ),
        'next_text' => __( 'Next', 'genesis-eri' ),
        'type'      => 'list',
    ) );
    if ( $links ) :
    ?>
   <div class="paging">
            <div class="pull-left">Showing: <?php echo $paged; ?> of <?php echo $GLOBALS['wp_query']->max_num_pages; ?> press</div>
            <div class="pull-right">     
                <?php echo $links; ?>                
            </div>
         </div>    
    <?php
    endif;  
    }
?>	       
<?php get_footer(); ?>