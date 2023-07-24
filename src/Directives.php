<?php

namespace NogorSolutionsLTD\Directives;

use Illuminate\Support\Str;

return [

    'istrue' => function ($expression) {
        if (Str::contains($expression, ',')) {
            $expression = Parser::multipleArgs($expression);

            return implode('', [
                "<?php if (isset({$expression->get(0)}) && (bool) {$expression->get(0)} === true) : ?>",
                "<?php echo {$expression->get(1)}; ?>",
                '<?php endif; ?>',
            ]);
        }

        return "<?php if (isset({$expression}) && (bool) {$expression} === true) : ?>";
    },
];