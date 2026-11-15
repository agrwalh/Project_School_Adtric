<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class NewsEvent extends Model
{
    use HasFactory;

    protected $table = 'news_events';

    protected $fillable = [
        'title',
        'slug',
        'category',
        'event_date',
        'image',
        'short_description',
        'content',
        'is_published',
    ];

    protected $casts = [
        'event_date' => 'date',
        'is_published' => 'boolean',
    ];

    /**
     * Scope to fetch only published items.
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    /**
     * Scope to filter by category if provided.
     */
    public function scopeFilterCategory($query, ?string $category)
    {
        if ($category && in_array($category, ['News', 'Event', 'Achievement'])) {
            return $query->where('category', $category);
        }

        return $query;
    }

    /**
     * Generate a unique slug for a given title and optional existing ID.
     */
    public static function generateUniqueSlug(string $title, ?int $id = null): string
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $counter = 1;

        while (static::where('slug', $slug)->where('id', '!=', $id)->exists()) {
            $slug = "{$originalSlug}-{$counter}";
            $counter++;
        }

        return $slug;
    }

    /**
     * Get accessible image URL with fallback.
     */
    public function getImageUrlAttribute(): string
    {
        if ($this->image && file_exists(public_path('storage/' . $this->image))) {
            return asset('storage/' . $this->image);
        }

        if ($this->image && str_starts_with($this->image, 'http')) {
            return $this->image;
        }

        if ($this->image && file_exists(public_path($this->image))) {
            return asset($this->image);
        }

        // Clean SVG placeholder based on category
        return 'https://images.unsplash.com/photo-1577896851231-70ef18881754?auto=format&fit=crop&w=1200&q=80';
    }
}
