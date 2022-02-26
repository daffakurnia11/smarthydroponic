<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model
{

    use HasFactory, Sluggable;

    protected $fillable = ['title', 'slug', 'image', 'description', 'paper', 'reader', 'published_at'];

    protected $dates = [
        'published_at',
        'created_at',
        'updated_at',
        // your other new column
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
