<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo  get_stylesheet_directory_uri() .'/css/beauty.css'; ?> ">
 <div class="subpage" id="menu">
         <div class="sub_banner body">
            <div class="container">
               <div class="row">
                  <div class="col-md-9">
	                    <?php echo getTitlebyLan('beauty',0); ?>	 
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
	         </div>			
          <div class="sub_content" id="room_dr">
            <div class="container">
              <div class="row">
                <div class="profile_dr">                  	
	                	<?php if (is_active_sidebar("advertise-top")){ ?>
                                        <?php dynamic_sidebar("advertise-top"); ?>
                         <?php } ?>         		              
							<!-- Post -->		              
		                 	<?php query_posts( array( 'post_type' => 'beauty', 'showposts' => 100 , 'post_parent' => 0) );
								 if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>								  
								   <div class="list-item-lt">
					                  <div class="col-md-6 item-r">
					                    <div class="img-ct-room">					                      					                      	
					                      	<?php if(has_post_thumbnail()){ ?>
                                        			<a href="<?php the_permalink() ?>"><?php echo the_post_thumbnail(array(247,180));  ?></a>                                   
                                    		<?php }else{ ?>
                                      				<a href="<?php the_permalink() ?>"><img class="attachment-247x180 wp-post-image" width="247" height="180" src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/img/no-images.png" /></a>                                                                              
                                     		<?php } ?>                                         					                     
					                      <span><?php echo get_the_date(); ?></span>
					                    </div>
					                    <div class="ct-room">
					                      <h5><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
					                      <?php echo get_the_excerpt(); ?>
					                    </div>
					                  </div>
					              </div>
					        <?php endwhile; endif; wp_reset_query(); ?>

					        <!-- End get post -->							
							<!-- Start add buttom -->
								<div class="guidance col-md-12">
									<?php if (is_active_sidebar("advertise-bottom")){ ?>
                                        <?php dynamic_sidebar("advertise-bottom"); ?>
                         			<?php } ?>  				            
				                </div>
				                <!-- End ads buttom -->

						</div>						 
		              </div>              
		        </div>
		    </div>  
 
<?php get_footer(); ?>