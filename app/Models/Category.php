<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // რომელი ველები შეიძლება ჩაწერო (fillable)
    protected $fillable = [
        'name',
    ];

    // ბლოგებთან many-to-many კავშირი
    public function blogs()
    {
        return $this->belongsToMany(Blog::class);
    }
}
