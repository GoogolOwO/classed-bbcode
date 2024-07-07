<?php

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
        ->css(__DIR__ . '/less/forum.less'),

    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[CLASS={TEXT1}]{TEXT2}[/CLASS]',
                '<div class="{TEXT1}">{TEXT2}</div>'
            );
        })
];