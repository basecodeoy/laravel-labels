<?php

declare(strict_types=1);

namespace Tests\Unit\Concerns;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;
use Tests\Fixtures\ClassThatHasLabels;

uses(RefreshDatabase::class);

it('should morph to a labelable', function (): void {
    $user = ClassThatHasLabels::create([
        'name'     => $this->faker->name,
        'email'    => $this->faker->safeEmail,
        'password' => $this->faker->password,
    ]);

    $user->labels()->create([
        'name'        => $this->faker->firstName,
        'description' => $this->faker->paragraph,
        'color'       => $this->faker->hexColor,
    ]);

    expect($user->labels())->toBeInstanceOf(MorphMany::class);
    expect($user->labels)->toBeInstanceOf(Collection::class);
});
