<?php

declare(strict_types=1);

namespace BaseCodeOy\Labels\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Facades\Config;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

final class Label extends Model
{
    use HasSlug;

    protected $fillable = ['name', 'description', 'color'];

    public static function findByslug(string $slug): self
    {
        return self::where('slug', $slug)->firstOrFail();
    }

    public function labelable(): MorphTo
    {
        return $this->morphTo();
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom('name')->saveSlugsTo('slug');
    }

    public function getTable(): string
    {
        return Config::get('labelable.tables.labels', 'labels');
    }
}
