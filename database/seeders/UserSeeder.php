<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Nguyen Van A',
                'email' => 'a@gmail.com',
                'password' => bcrypt('123456'),
                'phone' => '0901234567',
                'birthday' => '2000-01-01',
                'gender' => 'male',
                'address' => 'Ho Chi Minh',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tran Thi B',
                'email' => 'b@gmail.com',
                'password' => bcrypt('123456'),
                'phone' => '0901234568',
                'birthday' => '2001-02-15',
                'gender' => 'female',
                'address' => 'Ha Noi',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Le Van C',
                'email' => 'c@gmail.com',
                'password' => bcrypt('123456'),
                'phone' => '0901234569',
                'birthday' => '1999-10-20',
                'gender' => 'male',
                'address' => 'Da Nang',
                'is_active' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}