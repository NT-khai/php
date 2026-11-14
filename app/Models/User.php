<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory;

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