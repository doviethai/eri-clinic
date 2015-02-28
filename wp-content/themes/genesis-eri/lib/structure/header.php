


<?php
$lanCode = get_locale(); 
if($lanCode == 'ja'){?>
	
<?php }

// override function "genesis_do_header" - file:genesis\lib\structure\header.php
add_action( 'genesis_header', 'eri_do_header');

function eri_do_header() {?>
	<!-- HEADER-->	
	<header>		
		<nav  class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-md-1">
						<h1><a href="<?php echo get_option('home');?>"><img src="<?php echo ERI_IMG_URL;?>/logo.png" alt=""></a></h1>
					</div>
					<div class="col-md-7 mn-top">
						<?php // if(get_layout_page_template() && get_layout_page_template() == "page_home.php" && is_active_sidebar("eri-main-menu")):?>
						<?php  if(is_active_sidebar("eri-main-menu")):?>
							<?php dynamic_sidebar("eri-main-menu"); ?>
						<?php endif; ?>
					</div>
					<div class="col-md-4 phone-nb">														
						<?php  if(is_active_sidebar("eri-header-language")):?>
							<?php  dynamic_sidebar("eri-header-language");?>
						<?php  endif; ?>

						<?php if(is_active_sidebar("eri-header-phone")):?>
							<?php dynamic_sidebar("eri-header-phone");?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</nav>
		<!-- END NAV-->
		<?php
			if (get_layout_page_template() && get_layout_page_template() == "page_home.php" && is_active_sidebar("eri-home-slider")) {
				dynamic_sidebar("eri-home-slider");
			}
		?>
	</header>
	<!-- END HEADER-->
<?php
}