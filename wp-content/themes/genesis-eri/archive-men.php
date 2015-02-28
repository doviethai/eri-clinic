<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo  get_stylesheet_directory_uri() .'/css/men.css'; ?> ">
<div class="subpage" id="menu">
	<div class="sub_banner body">
		<div class="container">                    
			<div class="row">
				<div class="col-md-9">
					<?php echo getTitlebyLan('men',0); ?>
				</div>
				<div class="col-md-3">
					<input type="text" placeholder="Search" class="ip-search">
				</div>
			</div>
		</div>
	</div>

<div class="sub_content" id="men_dr">
	<div class="container">
		<div class="row">	
			<div class="col-md-9">
				<?php echo do_shortcode("[huge_it_slider id ='29']"); ?>
				<div class="group-item-men"> 							                       	            
					<?php
						$content_post = get_post(5825);
						setup_postdata( $content_post );
						the_content();
						wp_reset_postdata();
				?>
				</div>						
			</div>   

			<div class="col-md-3  right-page">
						<div class="nav-left">
							<h3>MENU for MEN</h3>
							<ul class="nav-ct-l men">
								<li><a href="<?php get_site_url(); ?>/men/"><span><i class="fa fa-angle-right"></i>HOME</span></a></li>
								<?php query_posts( array( 'post_type' => 'men', 'showposts' => 100 ) );
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<li><a href="<?php echo get_permalink() ?>"><i class="fa fa-angle-right"></i><?php the_title(); ?><?php get_the_ID(); ?></a></li>
<?php endwhile; endif; wp_reset_query(); ?>
	
	<li><a href="<?php get_site_url(); ?>/men/price"><span><i class="fa fa-angle-right"></i>料金表</span></a></li>

						</ul>
					</div>
				</div>
			</div>
		</div>  
	</div>
	</div>	       
</div>	       
<?php get_footer(); ?>