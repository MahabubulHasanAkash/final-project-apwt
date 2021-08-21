<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creative extends Model
{
    use HasFactory;

    protected $fillable = [
        'userid',
        'name',
        'url',
        'description',
        'price',
        'status',
        'created_at'
    ];
}
