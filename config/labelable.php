<?php

declare(strict_types=1);

use BombenProdukt\Labels\Models\Label;

return [
    'models' => [
        'label' => Label::class,
    ],

    'tables' => [
        'labels' => 'labels',
    ],
];
