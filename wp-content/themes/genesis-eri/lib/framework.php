<?php
//override function genesis()
function eri() {

	get_header();

	do_action( 'genesis_before_content_sidebar_wrap' );
	do_action( 'genesis_before_content' );
	do_action( 'genesis_before_loop' );
	do_action( 'genesis_loop' );
	do_action( 'genesis_after_loop' );
	do_action( 'genesis_after_content' );
	do_action( 'genesis_after_content_sidebar_wrap' );

	get_footer();
}
