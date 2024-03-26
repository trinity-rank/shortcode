# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/trinity-rank/shortcode.svg?style=flat-square)](https://packagist.org/packages/trinityrank/shortcode)

## Installation

### Step 1: Install package

To get started with Laravel Shortcodes, use Composer command to add the package to your composer.json project's dependencies:

```bash
composer require trinity-rank/shortcode
```

### Step 2:
```bash
    php artisan make:provider DateShortcodesServiceProvider
```
After creating ServiceProvider
```php
    <?php

    namespace App\Providers;

    use Illuminate\Support\ServiceProvider;
    use Trinityrank\Shortcodes\Facades\Shortcode;

    class DateShortcodesServiceProvider extends ServiceProvider
    {
        public function boot()
        {
            Shortcode::enable();
        }

        public function register()
        {
            Shortcode::register('month', function ($atts, $content, $tag) {
                return date('F'); // Returns full month name (e.g., January)
            });

            Shortcode::register('year', function ($atts, $content, $tag) {
                return date('Y'); // Returns full month name (e.g., 2024)
            });
        }
    }

```


You can now use shortcodes for month and year like this:

```bash
[month]
[year]
```