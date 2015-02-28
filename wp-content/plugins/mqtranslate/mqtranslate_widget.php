<?php // encoding: utf-8

/*  Copyright 2008  Qian Qin  (email : mail@qianqin.de)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/* mqTranslate Widget */

// Language Select Code for non-Widget users
function qtrans_generateLanguageSelectCode($style='', $id='') {	
	if (function_exists('is_plugin_active') && is_plugin_active('qtranslate-slug/qtranslate-slug.php'))
		qts_language_menu($style, array( 'id' => $id, 'short' => '' ) );
	else
	{
		global $q_config;
		if($style=='') $style='text';
		if(is_bool($style)&&$style) $style='image';
		if(is_404()) $url = get_option('home'); else $url = '';
		if($id=='') $id = 'mqtranslate';
		$id .= '-chooser';
		$themeUrl = content_url() . '/' . get_theme_roots() . '/' . get_stylesheet();
		switch($style) {
			case 'image':
			case 'text':
			case 'dropdown':
				echo '<div class="lg"><div class="dropdown">';
				foreach(qtrans_getSortedLanguages() as $language) {
					if($language == $q_config['language']){
						echo '<button data-toggle="dropdown" type="button" id="dLabel">'.$q_config['language_name'][$language].'<span class="caret"></span></button>';
					}
				}
				echo '<ul aria-labelledby="dLabel" role="menu" class="dropdown-menu">';
                foreach(qtrans_getSortedLanguages() as $language) {                	
                	echo '<li>';
                	echo '<a class="disabled" href="'.qtrans_convertURL($url, $language).'"';
                	echo ' hreflang="'.$language.'" title="'.$q_config['language_name'][$language].'">';
                	echo '<img alt="" src="'.$themeUrl.'/img/'.$language.'.gif">';
                	echo $q_config['language_name'][$language];
                	echo '</a></li>';                	
                }
				echo '</ul>';
				
				break;
			case 'both':
				echo '<ul class="qtrans_language_chooser" id="'.$id.'">';
				foreach(qtrans_getSortedLanguages() as $language) {
					echo '<li';
						if($language == $q_config['language'])
						echo ' class="active"';
					echo '><a href="'.qtrans_convertURL($url, $language).'"';
					echo ' class="qtrans_flag_'.$language.' qtrans_flag_and_text" title="'.$q_config['language_name'][$language].'"';
					echo '><span>'.$q_config['language_name'][$language].'</span></a></li>';
				}
				echo "</ul><div class=\"qtrans_widget_end\"></div>";
				break;
		}
	}
}

function qtrans_widget_init() {
	if (function_exists('is_plugin_active') && is_plugin_active('qtranslate-slug/qtranslate-slug.php'))
		require_once('mqtranslate_widget_qtranslate-slug.php');
	else
		require_once('mqtranslate_widget.inc.php');
	register_widget('mqTranslateWidget');
}
?>