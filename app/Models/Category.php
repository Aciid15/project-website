<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'news_categories';
    
    protected $fillable = [
        'name',
        'slug',
        'description'
    ];

    // Relasi ke News
    public function news()
    {
        return $this->hasMany(News::class);
    }
}