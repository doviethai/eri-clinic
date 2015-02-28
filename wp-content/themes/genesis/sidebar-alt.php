<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Genesis\Templates
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/genesis/
 */

//* Output secondary sidebar page
genesis_markup( array(
	'html5'   => '<aside %s>',
	'xhtml'   => '<div id="sidebar-alt" class="sidebar widget-area">',
	'context' => 'sidebar-secondary',
) );

do_action( 'genesis_before_sidebar_alt_widget_area' );
do_action( 'genesis_sidebar_alt' );
do_action( 'genesis_after_sidebar_alt_widget_area' );

genesis_markup( array(
	'html5' => '</aside>', //* end .sidebar-secondary
	'xhtml' => '</div>', //* end #sidebar-alt
) );
