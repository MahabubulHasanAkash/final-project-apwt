<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creation extends Model
{
    protected $table = "creation";
    protected $primaryKey = "id";
    public $timestamps = false;
}
