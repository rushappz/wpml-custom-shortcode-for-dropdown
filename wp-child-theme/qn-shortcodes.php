<?php
add_shortcode('calllanguagedropdown', 'language_dropdown');
function language_dropdown() {
	$dropdown_menu = '<div class="sl-nav"><ul><li><span class="lang-drop-down-head">';
	$dropdown_menu .= strtoupper(user_lang_code()).'  <i class="fa fa-angle-down" aria-hidden="true"></i></span>';
	$dropdown_menu .= '<div class="triangle"></div><ul>';
		$languages = icl_get_languages('skip_missing=0');
		if (1 < count($languages)) {
			foreach ($languages as $l) {
				if (!$l['active'])
					$langs[] = '<li><a href="' . $l['url'] . '">' . strtoupper($l['language_code']) . ' - ' . $l['native_name'] . '</a></li>';
			}
			$dropdown_menu .= join($langs);
		}
	$dropdown_menu .= '</ul></li></ul></div>';
	
	return $dropdown_menu;
}
/* user_lang_native() */
?>