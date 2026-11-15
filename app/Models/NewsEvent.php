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

        if ($this->image && file_exists(public_path('images/' . $this->image))) {
            return asset('images/' . $this->image);
        }

        if ($this->image && str_starts_with($this->image, 'http')) {
            return $this->image;
        }

        if ($this->image && file_exists(public_path($this->image))) {
            return asset($this->image);
        }

        // Distinct category fallbacks so no two cards look identical if missing
        return match ($this->category) {
            'Achievement' => 'https://images.unsplash.com/photo-1546410531-bb4caa6b424d?auto=format&fit=crop&w=800&q=80',
            'Event' => 'https://images.unsplash.com/photo-1511632765486-a01980e01a18?auto=format&fit=crop&w=800&q=80',
            default => 'https://images.unsplash.com/photo-1577896851231-70ef18881754?auto=format&fit=crop&w=800&q=80',
        };
    }
}
