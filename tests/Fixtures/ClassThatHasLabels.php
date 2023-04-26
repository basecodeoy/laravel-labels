<?php

declare(strict_types=1);

namespace Tests\Fixtures;

use Illuminate\Foundation\Auth\User;
use BombenProdukt\Labels\Concerns\HasLabels;

final class ClassThatHasLabels extends User
{
    use HasLabels;

    public $table = 'users';

    public $guarded = [];
}
