<?php

declare(strict_types=1);

namespace PreemStudio\Labels\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Facades\Config;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Label extends Model
{
    use HasSlug;

    protected $fillable = ['name', 'description', 'color'];

    public function labelable(): MorphTo
    {
        return $this->morphTo();
    }

    public static function findByslug(string $slug): self
    {
        return static::where('slug', $slug)->firstOrFail();
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom('name')->saveSlugsTo('slug');
    }

    public function getTable(): string
    {
        return Config::get('laravel-labels.tables.labels');
    }
}
