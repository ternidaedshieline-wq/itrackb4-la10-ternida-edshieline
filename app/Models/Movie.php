<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title',
        'director',
        'genre',
        'year',
        'featured',
        'description'
    ];

    protected function casts(): array
    {
        return [
            'featured' => 'boolean',
            'year' => 'integer',
        ];
    }
}
