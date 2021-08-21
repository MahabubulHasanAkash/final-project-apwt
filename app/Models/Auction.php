<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    protected $table = "auction";
    protected $primaryKey = "id";
    public $timestamps = false;
}
