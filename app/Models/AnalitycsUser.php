<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalitycsUser extends Model
{
    use HasFactory;

    public $table = "users";

    protected $fillable = [
        'name',
        'email',
        'address',
        'image',
        'phone',
        'roles_id',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsTo(Role::class);
    }
}
