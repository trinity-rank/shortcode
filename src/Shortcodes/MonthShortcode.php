<?php

namespace Trinityrank\Shortcode\Shortcodes;

class MonthShortcode {

	public function register($shortcode, $content, $compiler, $name, $viewData)
	{
		return sprintf(date('F'), $shortcode->class, $content);
	}

	public static function convert($shortcode, $string)
	{
		return str_replace('['.$shortcode.']', date('F'), $string);
	}

}