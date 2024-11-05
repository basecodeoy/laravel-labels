<?php

declare(strict_types=1);

namespace BaseCodeOy\Labels\Concerns;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Config;

trait HasLabels
{
    public function labels(): MorphMany
    {
        return $this->morphMany(Config::get('labelable.models.label'), 'labelable');
    }
}
