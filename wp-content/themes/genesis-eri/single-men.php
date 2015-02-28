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
					<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ) ?>">
                        <input type="search" class="ip-search" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                        <input type="hidden" name="paged" value="1" />
                    </form>
				</div>
			</div>
		</div>
	</div>
<div class="sub_content" id="men_dr">
	<div class="container">
		<div class="row">	
			<div class="col-md-9">				
				<div class="group-item-men"> 						
					<div class="post-image">
					<?php $post_id = get_the_ID(); ?>
						<?php echo get_the_post_thumbnail($post_id); ?>
					</div>	                       	            
					<?php echo get_post_field('post_content', $post_id); ?>    
				</div>						
			</div>   

			<div class="col-md-3  right-page">
						<div class="nav-left">
							<h3>MENU for MEN</h3>
							<ul class="nav-ct-l men">
								<li><a href="<?php echo get_site_url(); ?>/men"><span><i class="fa fa-angle-right"></i>HOME</span></a></li>
								<?php query_posts( array( 'post_type' => 'men', 'showposts' => 100 ) );
								if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>"><i class="fa fa-angle-right"></i><?php the_title(); ?></a></li>									  									
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
<style type="text/css">
.entry-header, .entry-meta{
  display: none;
}
</style> 
<?php get_footer(); ?>