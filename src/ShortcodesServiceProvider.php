<?php

namespace Trinityrank\Shortcode;

use Trinityrank\Shortcode\Shortcodes\MonthShortcode;
use Trinityrank\Shortcode\Shortcodes\YearShortcode;
use Illuminate\Support\ServiceProvider;
use Webwizo\Shortcodes\Facades\Shortcode;

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
        Shortcode::enable();
        
        // Month
        Shortcode::register('month', MonthShortcode::class);
        Shortcode::register('Month', MonthShortcode::class);
        // Year
        Shortcode::register('year', YearShortcode::class);
        Shortcode::register('Year', YearShortcode::class);
        
    }

}
