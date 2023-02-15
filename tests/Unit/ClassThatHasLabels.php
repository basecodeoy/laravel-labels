<?php

declare(strict_types=1);

namespace Tests\Unit;

use Illuminate\Foundation\Auth\User;
use PreemStudio\Labels\Concerns\HasLabels;

class ClassThatHasLabels extends User
{
    use HasLabels;

    public $table = 'users';

    public $guarded = [];
}
