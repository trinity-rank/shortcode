<?php

namespace Trinityrank\Shortcode\Shortcodes;

class YearShortcode {

  public function register($shortcode, $content, $compiler, $name, $viewData)
  {
    return sprintf(date('Y'), $shortcode->class, $content);
  }
  
}