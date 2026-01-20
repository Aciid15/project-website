<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';
    
    protected $fillable = [
        'title',
        'slug',
        'content',
        'excerpt',
        'image',
        'category_id',
        'status',
        'published_at',
        'views'
    ];
    
    protected $casts = [
        'published_at' => 'datetime',
        'views' => 'integer'
    ];

    // Relasi ke kategori (jika ada)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Scope untuk berita published
    public function scopePublished($query)
    {
        return $query->where('status', 'published')
                    ->whereNotNull('published_at')
                    ->where('published_at', '<=', now());
    }

    // Scope untuk berita terbaru
    public function scopeLatest($query)
    {
        return $query->orderBy('published_at', 'desc');
    }
}