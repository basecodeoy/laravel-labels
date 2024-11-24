<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use BaseCodeOy\Labels\Models\Label;

return [
    'models' => [
        'label' => Label::class,
    ],

    'tables' => [
        'labels' => 'labels',
    ],
];
