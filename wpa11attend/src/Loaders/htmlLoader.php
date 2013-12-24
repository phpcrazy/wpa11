<?php 

class HTML {
	public static function style($style) {
		$html = '<link rel="stylesheet" href="';
		$html .= Config::config('base_url');
		$html .= $style . '">';
		return $html;
	}
}

 ?>
