<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
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

    /**
     * Một user có nhiều sản phẩm
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
