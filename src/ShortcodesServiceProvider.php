<?php

namespace Trinityrank\Shortcode;

use Illuminate\Support\ServiceProvider;
use Trinityrank\Shortcode\Shortcodes;

class ShortcodesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Shortcodes::enable();

        foreach(Shortcodes::all() as $shortcode => $class) {
            Shortcodes::register($shortcode, $class);
        }
        
    }

}
