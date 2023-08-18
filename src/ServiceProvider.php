<?php

namespace NogorSolutionsLTD\Directives;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class DirectivesServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->registerDirectives();
    }

    /**
     * Register all directives.
     *
     * @return void
     */
    public function registerDirectives()
    {
        $directives = require __DIR__ . '/Directives.php';

        collect($directives)->each(function ($item, $key) {
            Blade::directive($key, $item);
        });
    }
}
