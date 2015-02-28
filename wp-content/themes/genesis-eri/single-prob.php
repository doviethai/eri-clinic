<?php get_header(); ?>
 <div class="subpage" id="menu"> 	
         <div class="sub_banner body">
            <div class="container">
               <div class="row">
                  <div class="col-md-9">
	                     <h3><?php wp_title("",true); ?></h3>
	                     <p>&nbsp;</p>
	                  </div>
	                  <div class="col-md-3">
	                     <input type="text" placeholder="Search" class="ip-search">
	                  </div>
	                  </div>
	               </div>
	            </div>
	         </div>			
         <div class="sub_content" id="menu_prod_dr">
            <div class="container">
              <div class="row">              		
              		<div class="worries">
                    <div class="promos">
                       <div id="sidebar-carousel-wrr" data-ride="carousel" class="inner-wrries carousel1 ">
                          <div class="carousel-inner">
                          	<?php query_posts( array( 'post_type' => 'prob', 'post_parent' => 0, 'order' => 'ASC') );                           		                          	                          		
                          		  $id = (int)get_the_ID();
                          	 	  $idindex =  $id;
                          	 	  $active ='';
                          	 	  if ( have_posts() ) : while ( have_posts() ) : the_post();                          	 	  	                          	 	  
                          	 	  	 if($idindex == get_the_ID()){
		                          			$indexPost =2;
		                          			$active ='active';
		                          		}else{
		                          			$indexPost =1;
		                          			$active ='';
		                          		}
                          	 	  ?>
	                          	 <div class="item <?php echo $active;?> prod<?php echo $indexPost; ?>">
	                             <div class="col-md-3 col-sm-6 col-xs-12">
	                                <div class="img-boder-w"><a href="#"><div class="img-bd-img">
	                                	<?php if(has_post_thumbnail()){ ?>
                                        			<a href="<?php the_permalink() ?>"><?php echo the_post_thumbnail();  ?></a>                                   
                                    		<?php }else{ ?>
                                      				<a href="<?php the_permalink() ?>"><img class="img-responsive" width="247" height="180" src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/img/no-images.png" /></a>                                                                              
                                     		<?php } ?>      	                                	
	                                </div></a></div>
	                                <div class="caption-text-wr">
	                                   <h4 class="h4_cl1"><a href="#"><?php echo the_title(); ?></a></h4>
	                                   <p> <?php echo get_the_content(); ?></p>
	                                </div>
	                             </div>
	                          </div>                         
	                          <?php endwhile; endif; wp_reset_query(); ?>

                       </div>
                       <a class="left carousel-control" href="#sidebar-carousel-wrr" data-slide="prev"><img src="<?php echo get_site_url(); ?>/wp-content/themes/genesis-eri/img/prw_hover.png" alt=""></a>
                       <a class="right carousel-control" href="#sidebar-carousel-wrr" data-slide="next"><img src="<?php echo get_site_url(); ?>/wp-content/themes/genesis-eri/img/ntw_hover.png" alt=""></a>
                       </div>
                    </div>
					 <div class="col-md-12 mn-prod-list">
			                 	<?php			                 	 
			                 	 $index = 1;
			                 	 $args = array(									
									'order' => 'ASC',									
									'post_parent' => $id,									
									'post_type' => 'prob',
								);
			                 	 query_posts($args);
									 if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>								  
									  		<div class="col-item-mn-prod">
									  			<div class="column-left-prod">
						                          <span><?php printf("%02d\n", $index ++);  ?></span>
						                        </div>

									  		 <div class="column-midle-prod">
					                        	  <?php echo get_the_excerpt(); ?>
					                          	  <p><?php echo the_title(); ?></p>
					                        </div>
					                        <div class="column-right-prod">
                          						<a class="drop_caret"><i class="fa fa-caret-down"></i></a>
                        					</div>

                        					<div class="cnt_dropdown">
					                          <?php echo get_the_content(); ?>
					                        </div>
					                        </div>						                      						                    
						        <?php endwhile; endif; wp_reset_query(); ?>
					     	</div>										
		              </div>              
		        </div>
		    </div>  
 
<?php get_footer(); ?>