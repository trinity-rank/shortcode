<?php

namespace Trinityrank\Shortcode\Shortcodes;

class MonthShortcode {

  public function register($shortcode, $content, $compiler, $name, $viewData)
  {
    return sprintf(date('F'), $shortcode->class, $content);
  }
  
}