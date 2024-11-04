<?php

declare(strict_types=1);

namespace Tests\Fixtures;

use BaseCodeOy\Labels\Concerns\HasLabels;
use Illuminate\Foundation\Auth\User;

final class ClassThatHasLabels extends User
{
    use HasLabels;

    public $table = 'users';

    public $guarded = [];
}
