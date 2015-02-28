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
		                 	<?php query_posts( array( 'post_type' => 'news', 'showposts' => 100 ) );
								  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								  <div class="item-media">
								  <h3><?php the_title(); ?></h3>
								  <p><?php the_content(); ?></p>
								  </div>
							<?php endwhile; endif; wp_reset_query(); ?>
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
<?php get_footer(); ?>