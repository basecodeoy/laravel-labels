<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests\Unit\Concerns;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;
use Tests\Fixtures\ClassThatHasLabels;

uses(RefreshDatabase::class);

it('should morph to a labelable', function (): void {
    $user = ClassThatHasLabels::create([
        'name' => $this->faker->name,
        'email' => $this->faker->safeEmail,
        'password' => $this->faker->password,
    ]);

    $user->labels()->create([
        'name' => $this->faker->firstName,
        'description' => $this->faker->paragraph,
        'color' => $this->faker->hexColor,
    ]);

    expect($user->labels())->toBeInstanceOf(MorphMany::class);
    expect($user->labels)->toBeInstanceOf(Collection::class);
});
