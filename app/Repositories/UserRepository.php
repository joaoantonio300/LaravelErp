<?php

namespace App\Repositories;

use App\Models\User;
use App\DTOs\UserDTO;

class UserRepository
{
    public function create(UserDTO $dto): User
    {
        return User::create([
            'name' => $dto->name,
            'email' => $dto->email,
            'password' => $dto->password,
        ]);
    }

    public function findById(int $id): ?User
    {
        return User::find($id);
    }

    public function all(): \Illuminate\Database\Eloquent\Collection
    {
        return User::all();
    }

    public function update(User $user, array $data): bool
    {
        return $user->update($data);
    }

    public function delete(User $user): bool
    {
        return $user->delete();
    }
}
