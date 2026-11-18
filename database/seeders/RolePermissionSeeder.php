<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(["name"=> "product.view"]);
        Permission::create(["name"=> "product.create"]);
        Permission::create(["name"=> "product.update"]);
        Permission::create(["name"=> "product.delete"]);

        Role::create(["name"=> "admin"]);
        Role::create(["name"=> "supperAdmin"]);
        Role::create(["name"=> "user"]);

        // Gán permision cho từng quyền
        $admin = Role::findByName("admin");
        $admin->givePermissionTo([
            "product.view",
            "product.view",
            "product.update"
        ]);

        $supperAdmin = Role::findByName("supperAdmin");
        $supperAdmin->givePermissionTo([
            "product.view",
            "product.create",
            "product.update",
            "product.delete"
        ]);

        $user = Role::findByName("user");
        $user->givePermissionTo([
            "product.view",
        ]);

        // Gán quyền cho user
        $user = User::find(1);
        $user->assignRole("supperAdmin");
    }
}
