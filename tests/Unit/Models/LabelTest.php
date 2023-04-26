<?php

declare(strict_types=1);

namespace Tests\Unit\Models;

use BombenProdukt\Labels\Models\Label;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Fixtures\ClassThatHasLabels;

uses(RefreshDatabase::class);

it('can be found by its slug', function (): void {
    Model::unguard();

    $user = ClassThatHasLabels::create([
        'name' => $this->faker->name,
        'email' => $this->faker->safeEmail,
        'password' => $this->faker->password,
    ]);

    $label = Label::create([
        'labelable_id' => $user->id,
        'labelable_type' => ClassThatHasLabels::class,
        'name' => $this->faker->firstName,
        'description' => $this->faker->paragraph,
        'color' => $this->faker->hexColor,
    ]);

    expect($label->id)->toBe(Label::findBySlug($label->slug)->id);
});
