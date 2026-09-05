<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // აქ წერე
    protected $fillable = [
        'title',
        'content',
        'image'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}

