<?php

namespace NogorSolutionsLTD\Directives;

return [

    //'' => function () {
    // Code Here...
    // },

    'appname' => function () {
        return "<?= env('APP_NAME') ?>";
    },

    'asset' => function ($url) {
        return "<?= asset($url); ?>";
    },

    'config' => function ($expression) {
        return "<?= config('$expression') ?>";
    },

    'now' => function () {
        return "<?php echo \Carbon\Carbon::now()->format('d F Y'); ?>";
    },

    'copyright' => function () {
        $year = \Carbon\Carbon::now()->format('Y');
        $app = config('app.name');
        $trail = "All Rights Reserved.";
        return "Copyright © $year $app $trail";
    },

    'routeis' => function ($expression) {
        return "<?php if (fnmatch({$expression}, Route::currentRouteName())) : ?>";
    },

    'endrouteis' => function ($expression) {
        return '<?php endif; ?>';
    },

    'routeisnot' => function ($expression) {
        return "<?php if (! fnmatch({$expression}, Route::currentRouteName())) : ?>";
    },

    'endrouteisnot' => function ($expression) {
        return '<?php endif; ?>';
    },
];
