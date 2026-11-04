<?php

namespace App\Service;

use App\Models\User;

class UserService
{
    public function create(array $data): User
    {
        return User::create($data);
    }

    public function findAll()
    {
        return User::all();
    }

    public function findById(int $id): User
    {
        return User::findOrFail($id);
    }

    public function update(int $id, array $data): User
    {
        $user = User::findOrFail($id);

        $user->update($data);

        return $user;
    }

    public function delete(int $id): bool
    {
        return User::findOrFail($id)->delete();
    }
}
