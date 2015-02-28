<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header(); ?>
		<div class="subpage">
	         <div class="sub_banner body">
	            <div class="container">
	               <div class="row">
	                  <div class="col-md-9">
	                     <h3><?php echo apply_filters('genesis_post_title_text', get_the_title()); ?></h3>
	                     <p>&nbsp;</p>
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
	         <div class="sub_content service-detail-1">
	            <div class="container">
         	 		<div class="row">
         	 			<div class="col-md-5">
         	 				<?php echo types_render_field("service-description", array("output" => "html")); ?>
								<br/>
							<?php echo types_render_field("list-service", array("output" => "html")); ?>
						</div>
         	 			<div class="col-md-7">

                        <?php if(class_exists('Dynamic_Featured_Image') ) {
                             $indexSlider = 0;
                             global $dynamic_featured_image;
                             $featured_images = $dynamic_featured_image->get_featured_images(get_the_ID());    
                             if($featured_images){                                                
                        ?>
                        <div id="slider">                            
                            <div id="carousel-bounding-box">
                                <div id="myCarousel" class="carousel slide carousel-fade sv-detail">                                    
                                    <div class="carousel-inner">                                                                        
                                        <?php
                                                  foreach ($featured_images as $key => $value) {
                                                    $ImagesInfo = wp_get_attachment($value['attachment_id']); 
                                                    if($key == 0){
                                                        $active = 'active';
                                                    }else{
                                                        $active = '';
                                                    }
                                                    ?>
                                                   <div class="<?php echo $active; ?> item" data-slide-number="<?php echo $indexSlider++; ?>">                                                                                                                            
                                                        <img src="<?php echo $value['full']; ?>" class="img-responsive">                                                            
                                                        <div class="caption-detail"><?php echo $ImagesInfo['alt']; ?></div>   
                                                   </div>                                                                                           
                                        <?php } ?>                                                                             
                                    </div>                                        
                                </div>
                            </div>                
                        </div>
                        <?php } } ?>
                            
                         <?php if(class_exists('Dynamic_Featured_Image') ) {
                              global $dynamic_featured_image;
                              $featured_images = $dynamic_featured_image->get_featured_images(get_the_ID()); 
                              if($featured_images){ ?>    
                                <div class="" id="slider-thumbs">                                                
                                    <ul class="list-inline">
                                      <?php
                                          $indexThumbs = 0;                                        
                                          foreach ($featured_images as $key => $value) {?>
                                                <li> 
                                                    <a id="carousel-selector-<?php echo $indexThumbs++; ?>">
                                                        <img src="<?php echo $value['thumb']; ?>"  class="img-responsive">
                                                    </a>
                                                </li>                                                                                        
                                        <?php  }  ?>                                               
                                    </ul>                        
                                </div>
                        <?php } } ?>

                        
					</div>
     	 		</div>
                    <div class="row">
                        <div class="col-md-12 fixcol12">
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
	         <div class="examination">
	            <div class="container">
	               <div class="row">
	                  <div class="col-md-8">
	                     <h3>クリニック初心者の方に、当院での診察の流れをご説明します。</h3>
	                  </div>
	                  <div class="col-md-4">
	                     <a href="">はじめてのクリニック</a>
	                  </div>
	               </div>
	            </div>
	         </div>
	      </div>
      </div>
 </div>	  
<script type="text/javascript">
/*$(document).ready(function(){
        $('#myCarousel').carousel({
            interval: 154000
         });

        $('[id^=carousel-selector-]').click( function(){
            alert('OK');
          var id_selector = $(this).attr("id");
          var id = id_selector.substr(id_selector.length -1);
          id = parseInt(id);
          $('#myCarousel').carousel(id);
          $('[id^=carousel-selector-]').removeClass('selected');
          $(this).addClass('selected');
        });

        // when the carousel slides, auto update
        $('#myCarousel').on('slid', function (e) {
          var id = $('.item.active').data('slide-number');
          id = parseInt(id);
          $('[id^=carousel-selector-]').removeClass('selected');
          $('[id=carousel-selector-'+id+']').addClass('selected');
        });
});*/

</script>
<style type="text/css">
    .entry-header, .entry-meta{
        display: none;
    }
</style>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>