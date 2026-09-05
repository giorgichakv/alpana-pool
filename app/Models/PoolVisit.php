<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoolVisit extends Model
{
    use HasFactory;

    protected $table = 'pool_visits';
    protected $fillable = ['user_name', 'service_type'];
}
