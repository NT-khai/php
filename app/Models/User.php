<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles;
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'birthday',
        'gender',
        'address',
        'is_active',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}