<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();

        Product::create([
            'user_id' => $user->id,
            'name' => 'iPhone 15 Pro',
            'price' => 29990000,
            'stock' => 10,
            'description' => 'Điện thoại iPhone 15 Pro',
        ]);

        Product::create([
            'user_id' => $user->id,
            'name' => 'MacBook Air M3',
            'price' => 32990000,
            'stock' => 5,
            'description' => 'Laptop MacBook Air M3',
        ]);

        Product::create([
            'user_id' => $user->id,
            'name' => 'AirPods Pro 2',
            'price' => 5990000,
            'stock' => 20,
            'description' => 'Tai nghe AirPods Pro 2',
        ]);
    }
}