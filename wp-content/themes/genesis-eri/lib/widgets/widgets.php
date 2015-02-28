<?php

//* Include widget class files
require_once('language-switcher.php' );
require_once('phone-number.php' );
require_once('recent-posts.php' );
require_once('menu-footer.php' );
require_once('menu-main.php' );
require_once('eri-clinic.php' );
require_once('eri-clinic-eng.php' );
require_once('eri-clinic-home-slider.php' );
require_once('eri-clinic-about.php' );
require_once('eri-clinic-map.php' );
require_once('eri-clinic-copy-right.php' );
require_once('eri-ads.php' );

// init widget for theme
add_action( 'widgets_init', 'eri_load_widgets' );
function eri_load_widgets() {
	register_widget( 'Eri_Language_Widget' );
	register_widget( 'Eri_Phone_Widget' );
	register_widget( 'Eri_Widget_Recent_Posts' );
	register_widget( 'Eri_Menu_Footer_Widget' );
	register_widget( 'Eri_Menu_Main_Widget' );
	register_widget( 'Eri_Clinic' );
	register_widget( 'Eri_Clinic_Footer_Columns' );
	register_widget( 'Eri_Clinic_Home_Slider' );
	register_widget( 'Eri_Clinic_About' );
	register_widget( 'Eri_Clinic_Map' );
	register_widget( 'Eri_Clinic_Copy_Right' );
	register_widget( 'Eri_Clinic_Ads' );
	
}