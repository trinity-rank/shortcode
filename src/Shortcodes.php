<?php

namespace Trinityrank\Shortcode;
use Webwizo\Shortcodes\Facades\Shortcode;

class Shortcodes extends Shortcode
{

    public static function all()
    {
        return [
            'month' => \Trinityrank\Shortcode\Shortcodes\MonthShortcode::class,
            'Month' => \Trinityrank\Shortcode\Shortcodes\MonthShortcode::class,

            'year' => \Trinityrank\Shortcode\Shortcodes\YearShortcode::class,
            'Year' => \Trinityrank\Shortcode\Shortcodes\YearShortcode::class,
        ];
    }

    public static function convert($string)
    {
        foreach(self::all() as $shortcode => $class) {
            $string = $class::convert($shortcode, $string);
        }
        
        return $string;
    }

}